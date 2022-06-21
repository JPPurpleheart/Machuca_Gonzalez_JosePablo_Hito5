<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categoria\DestroyCategoria;
use App\Http\Requests\Admin\Categoria\IndexCategoria;
use App\Http\Requests\Admin\Categoria\StoreCategoria;
use App\Http\Requests\Admin\Categoria\UpdateCategoria;
use App\Models\Categoria;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexCategoria $request
     * @return Response|array
     */
    public function index(IndexCategoria $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Categoria::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'categoria'],

            // set columns to searchIn
            ['id', 'categoria']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.categoria.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.categoria.create');

        return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategoria $request
     * @return Response|array
     */
    public function store(StoreCategoria $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Categoria
        $categorium = Categoria::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/categorias'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/categorias');
    }

    /**
     * Display the specified resource.
     *
     * @param Categoria $categorium
     * @throws AuthorizationException
     * @return void
     */
    public function show(Categoria $categorium)
    {
        $this->authorize('admin.categoria.show', $categorium);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Categoria $categorium
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Categoria $categorium)
    {
        $this->authorize('admin.categoria.edit', $categorium);


        return view('admin.categoria.edit', [
            'categorium' => $categorium,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCategoria $request
     * @param Categoria $categorium
     * @return Response|array
     */
    public function update(UpdateCategoria $request, Categoria $categorium)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Categoria
        $categorium->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/categorias'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyCategoria $request
     * @param Categoria $categorium
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyCategoria $request, Categoria $categorium)
    {
        $categorium->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyCategoria $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyCategoria $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Categoria::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
