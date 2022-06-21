<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegisteredUser\DestroyRegisteredUser;
use App\Http\Requests\Admin\RegisteredUser\IndexRegisteredUser;
use App\Http\Requests\Admin\RegisteredUser\StoreRegisteredUser;
use App\Http\Requests\Admin\RegisteredUser\UpdateRegisteredUser;
use App\Models\RegisteredUser;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RegisteredUsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexRegisteredUser $request
     * @return Response|array
     */
    public function index(IndexRegisteredUser $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(RegisteredUser::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['email', 'id', 'name', 'num_miembros', 'phone', 'surname'],

            // set columns to searchIn
            ['email', 'id', 'name', 'phone', 'surname']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.registered-user.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.registered-user.create');

        return view('admin.registered-user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRegisteredUser $request
     * @return Response|array
     */
    public function store(StoreRegisteredUser $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the RegisteredUser
        $registeredUser = RegisteredUser::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/registered-users'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/registered-users');
    }

    /**
     * Display the specified resource.
     *
     * @param RegisteredUser $registeredUser
     * @throws AuthorizationException
     * @return void
     */
    public function show(RegisteredUser $registeredUser)
    {
        $this->authorize('admin.registered-user.show', $registeredUser);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RegisteredUser $registeredUser
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(RegisteredUser $registeredUser)
    {
        $this->authorize('admin.registered-user.edit', $registeredUser);


        return view('admin.registered-user.edit', [
            'registeredUser' => $registeredUser,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRegisteredUser $request
     * @param RegisteredUser $registeredUser
     * @return Response|array
     */
    public function update(UpdateRegisteredUser $request, RegisteredUser $registeredUser)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values RegisteredUser
        $registeredUser->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/registered-users'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/registered-users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyRegisteredUser $request
     * @param RegisteredUser $registeredUser
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyRegisteredUser $request, RegisteredUser $registeredUser)
    {
        $registeredUser->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyRegisteredUser $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyRegisteredUser $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    RegisteredUser::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
