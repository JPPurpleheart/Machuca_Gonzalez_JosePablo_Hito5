<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Editorial\DestroyEditorial;
use App\Http\Requests\Admin\Editorial\IndexEditorial;
use App\Http\Requests\Admin\Editorial\StoreEditorial;
use App\Http\Requests\Admin\Editorial\UpdateEditorial;
use App\Models\Editorial;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class EditorialsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexEditorial $request
     * @return Response|array
     */
    public function index(IndexEditorial $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Editorial::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'nombre', 'nacionalidad'],

            // set columns to searchIn
            ['id', 'nombre', 'nacionalidad']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.editorial.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.editorial.create');

        return view('admin.editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEditorial $request
     * @return Response|array
     */
    public function store(StoreEditorial $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Editorial
        $editorial = Editorial::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/editorials'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/editorials');
    }

    /**
     * Display the specified resource.
     *
     * @param Editorial $editorial
     * @throws AuthorizationException
     * @return void
     */
    public function show(Editorial $editorial)
    {
        $this->authorize('admin.editorial.show', $editorial);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Editorial $editorial
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Editorial $editorial)
    {
        $this->authorize('admin.editorial.edit', $editorial);


        return view('admin.editorial.edit', [
            'editorial' => $editorial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEditorial $request
     * @param Editorial $editorial
     * @return Response|array
     */
    public function update(UpdateEditorial $request, Editorial $editorial)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Editorial
        $editorial->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/editorials'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/editorials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyEditorial $request
     * @param Editorial $editorial
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyEditorial $request, Editorial $editorial)
    {
        $editorial->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyEditorial $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyEditorial $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Editorial::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
