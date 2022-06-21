<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Folleto\DestroyFolleto;
use App\Http\Requests\Admin\Folleto\IndexFolleto;
use App\Http\Requests\Admin\Folleto\StoreFolleto;
use App\Http\Requests\Admin\Folleto\UpdateFolleto;
use App\Models\Folleto;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class FolletosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexFolleto $request
     * @return Response|array
     */
    public function index(IndexFolleto $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Folleto::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'id_usuario', 'fecha', 'cantidad_entregada', 'tipo_folleto'],

            // set columns to searchIn
            ['id', 'tipo_folleto']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.folleto.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.folleto.create');

        return view('admin.folleto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFolleto $request
     * @return Response|array
     */
    public function store(StoreFolleto $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Folleto
        $folleto = Folleto::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/folletos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/folletos');
    }

    /**
     * Display the specified resource.
     *
     * @param Folleto $folleto
     * @throws AuthorizationException
     * @return void
     */
    public function show(Folleto $folleto)
    {
        $this->authorize('admin.folleto.show', $folleto);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Folleto $folleto
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Folleto $folleto)
    {
        $this->authorize('admin.folleto.edit', $folleto);


        return view('admin.folleto.edit', [
            'folleto' => $folleto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFolleto $request
     * @param Folleto $folleto
     * @return Response|array
     */
    public function update(UpdateFolleto $request, Folleto $folleto)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Folleto
        $folleto->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/folletos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/folletos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyFolleto $request
     * @param Folleto $folleto
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyFolleto $request, Folleto $folleto)
    {
        $folleto->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyFolleto $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyFolleto $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Folleto::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
