<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ropero\DestroyRopero;
use App\Http\Requests\Admin\Ropero\IndexRopero;
use App\Http\Requests\Admin\Ropero\StoreRopero;
use App\Http\Requests\Admin\Ropero\UpdateRopero;
use App\Models\Ropero;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RoperosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRopero $request
     * @return Response|array
     */
    public function index(IndexRopero $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Ropero::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'color', 'estado', 'talla', 'categoria', 'id_usuario'],

            // set columns to searchIn
            ['id', 'nombre', 'color', 'estado']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.ropero.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.ropero.create');

        return view('admin.ropero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRopero $request
     * @return Response|array
     */
    public function store(StoreRopero $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Ropero
        $ropero = Ropero::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/roperos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/roperos');
    }

    /**
     * Display the specified resource.
     *
     * @param Ropero $ropero
     * @throws AuthorizationException
     * @return void
     */
    public function show(Ropero $ropero)
    {
        $this->authorize('admin.ropero.show', $ropero);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ropero $ropero
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Ropero $ropero)
    {
        $this->authorize('admin.ropero.edit', $ropero);


        return view('admin.ropero.edit', [
            'ropero' => $ropero,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRopero $request
     * @param Ropero $ropero
     * @return Response|array
     */
    public function update(UpdateRopero $request, Ropero $ropero)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Ropero
        $ropero->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/roperos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/roperos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRopero $request
     * @param Ropero $ropero
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyRopero $request, Ropero $ropero)
    {
        $ropero->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyRopero $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyRopero $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Ropero::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
