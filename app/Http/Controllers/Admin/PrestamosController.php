<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Prestamo\DestroyPrestamo;
use App\Http\Requests\Admin\Prestamo\IndexPrestamo;
use App\Http\Requests\Admin\Prestamo\StorePrestamo;
use App\Http\Requests\Admin\Prestamo\UpdatePrestamo;
use App\Models\Prestamo;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PrestamosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexPrestamo $request
     * @return Response|array
     */
    public function index(IndexPrestamo $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Prestamo::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'id_libro', 'usuario_prestamo', 'fechaInicio', 'fechaFin'],

            // set columns to searchIn
            ['id', 'id_libro']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.prestamo.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.prestamo.create');

        return view('admin.prestamo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePrestamo $request
     * @return Response|array
     */
    public function store(StorePrestamo $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Prestamo
        $prestamo = Prestamo::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/prestamos'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/prestamos');
    }

    /**
     * Display the specified resource.
     *
     * @param Prestamo $prestamo
     * @throws AuthorizationException
     * @return void
     */
    public function show(Prestamo $prestamo)
    {
        $this->authorize('admin.prestamo.show', $prestamo);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Prestamo $prestamo
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Prestamo $prestamo)
    {
        $this->authorize('admin.prestamo.edit', $prestamo);


        return view('admin.prestamo.edit', [
            'prestamo' => $prestamo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePrestamo $request
     * @param Prestamo $prestamo
     * @return Response|array
     */
    public function update(UpdatePrestamo $request, Prestamo $prestamo)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Prestamo
        $prestamo->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/prestamos'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/prestamos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyPrestamo $request
     * @param Prestamo $prestamo
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyPrestamo $request, Prestamo $prestamo)
    {
        $prestamo->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyPrestamo $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyPrestamo $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Prestamo::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
