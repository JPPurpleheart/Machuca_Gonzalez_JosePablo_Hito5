<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Despensa\DestroyDespensa;
use App\Http\Requests\Admin\Despensa\IndexDespensa;
use App\Http\Requests\Admin\Despensa\StoreDespensa;
use App\Http\Requests\Admin\Despensa\UpdateDespensa;
use App\Models\Despensa;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DespensasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexDespensa $request
     * @return Response|array
     */
    public function index(IndexDespensa $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Despensa::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['categoria', 'id', 'nombre', 'stock'],

            // set columns to searchIn
            ['categoria', 'id', 'nombre']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.despensa.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.despensa.create');

        return view('admin.despensa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDespensa $request
     * @return Response|array
     */
    public function store(StoreDespensa $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Despensa
        $despensa = Despensa::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/despensas'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/despensas');
    }

    /**
     * Display the specified resource.
     *
     * @param Despensa $despensa
     * @throws AuthorizationException
     * @return void
     */
    public function show(Despensa $despensa)
    {
        $this->authorize('admin.despensa.show', $despensa);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Despensa $despensa
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Despensa $despensa)
    {
        $this->authorize('admin.despensa.edit', $despensa);


        return view('admin.despensa.edit', [
            'despensa' => $despensa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDespensa $request
     * @param Despensa $despensa
     * @return Response|array
     */
    public function update(UpdateDespensa $request, Despensa $despensa)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Despensa
        $despensa->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/despensas'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/despensas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyDespensa $request
     * @param Despensa $despensa
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyDespensa $request, Despensa $despensa)
    {
        $despensa->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyDespensa $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyDespensa $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Despensa::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
