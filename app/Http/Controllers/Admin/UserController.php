<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersUpdateRequest;
use App\Models\User;
use App\QueryBuilders\QueryBuilderUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QueryBuilderUsers $queryBuilderUsers): View
    {
        return
            view('admin.users.index', [
                    'users' => $queryBuilderUsers->getAll()
                ]
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user): View
    {
        return
            view('admin.users.edit',
                [
                    'user' => $user
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, User $user): RedirectResponse
    {
        $validated = $request->validated();
        $validated['is_admin'] = isset($validated['is_admin']);
        $user = $user->fill($validated);
        if ($user->save()) {
            return
                redirect()->route('admin.users')
                    ->with('success', trans('message.admin.users.update.success'));
        } else {
            return
                back()
                    ->with('error', trans('message.admin.users.update.fail'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): \Illuminate\Http\JsonResponse
    {
        try {
            $user->delete();
            return response()->json(['rows'=>1]);
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return response()->json(['error'=>$exception->getMessage()],400);
        }
    }
}
