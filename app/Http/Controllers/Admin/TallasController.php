<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Talla\DestroyTalla;
use App\Http\Requests\Admin\Talla\IndexTalla;
use App\Http\Requests\Admin\Talla\StoreTalla;
use App\Http\Requests\Admin\Talla\UpdateTalla;
use App\Models\Talla;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TallasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTalla $request
     * @return Response|array
     */
    public function index(IndexTalla $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Talla::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'talla'],

            // set columns to searchIn
            ['id', 'talla']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.talla.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.talla.create');

        return view('admin.talla.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTalla $request
     * @return Response|array
     */
    public function store(StoreTalla $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Talla
        $talla = Talla::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/tallas'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/tallas');
    }

    /**
     * Display the specified resource.
     *
     * @param Talla $talla
     * @throws AuthorizationException
     * @return void
     */
    public function show(Talla $talla)
    {
        $this->authorize('admin.talla.show', $talla);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Talla $talla
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Talla $talla)
    {
        $this->authorize('admin.talla.edit', $talla);


        return view('admin.talla.edit', [
            'talla' => $talla,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTalla $request
     * @param Talla $talla
     * @return Response|array
     */
    public function update(UpdateTalla $request, Talla $talla)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Talla
        $talla->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/tallas'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/tallas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTalla $request
     * @param Talla $talla
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyTalla $request, Talla $talla)
    {
        $talla->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyTalla $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyTalla $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Talla::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
