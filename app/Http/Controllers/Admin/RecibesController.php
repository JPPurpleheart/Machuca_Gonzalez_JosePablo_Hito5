<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Recibe\DestroyRecibe;
use App\Http\Requests\Admin\Recibe\IndexRecibe;
use App\Http\Requests\Admin\Recibe\StoreRecibe;
use App\Http\Requests\Admin\Recibe\UpdateRecibe;
use App\Models\Recibe;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RecibesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRecibe $request
     * @return Response|array
     */
    public function index(IndexRecibe $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Recibe::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id_usuario', 'id_producto', 'fecha', 'stock'],

            // set columns to searchIn
            ['']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.recibe.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.recibe.create');

        return view('admin.recibe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRecibe $request
     * @return Response|array
     */
    public function store(StoreRecibe $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Recibe
        $recibe = Recibe::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/recibes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/recibes');
    }

    /**
     * Display the specified resource.
     *
     * @param Recibe $recibe
     * @throws AuthorizationException
     * @return void
     */
    public function show(Recibe $recibe)
    {
        $this->authorize('admin.recibe.show', $recibe);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Recibe $recibe
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Recibe $recibe)
    {
        $this->authorize('admin.recibe.edit', $recibe);


        return view('admin.recibe.edit', [
            'recibe' => $recibe,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRecibe $request
     * @param Recibe $recibe
     * @return Response|array
     */
    public function update(UpdateRecibe $request, Recibe $recibe)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Recibe
        $recibe->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/recibes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/recibes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRecibe $request
     * @param Recibe $recibe
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyRecibe $request, Recibe $recibe)
    {
        $recibe->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyRecibe $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyRecibe $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Recibe::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
