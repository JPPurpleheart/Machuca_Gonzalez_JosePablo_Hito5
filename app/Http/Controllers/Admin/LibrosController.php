<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Libro\DestroyLibro;
use App\Http\Requests\Admin\Libro\IndexLibro;
use App\Http\Requests\Admin\Libro\StoreLibro;
use App\Http\Requests\Admin\Libro\UpdateLibro;
use App\Models\Libro;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class LibrosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexLibro $request
     * @return Response|array
     */
    public function index(IndexLibro $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Libro::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['isbn', 'titulo', 'autor', 'genero', 'recomendacion_generacional', 'id_editorial'],

            // set columns to searchIn
            ['isbn', 'titulo', 'autor', 'genero', 'recomendacion_generacional']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.libro.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.libro.create');

        return view('admin.libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLibro $request
     * @return Response|array
     */
    public function store(StoreLibro $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Libro
        $libro = Libro::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/libros'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/libros');
    }

    /**
     * Display the specified resource.
     *
     * @param Libro $libro
     * @throws AuthorizationException
     * @return void
     */
    public function show(Libro $libro)
    {
        $this->authorize('admin.libro.show', $libro);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Libro $libro
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Libro $libro)
    {
        $this->authorize('admin.libro.edit', $libro);


        return view('admin.libro.edit', [
            'libro' => $libro,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateLibro $request
     * @param Libro $libro
     * @return Response|array
     */
    public function update(UpdateLibro $request, Libro $libro)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Libro
        $libro->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/libros'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/libros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyLibro $request
     * @param Libro $libro
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyLibro $request, Libro $libro)
    {
        $libro->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyLibro $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyLibro $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Libro::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
