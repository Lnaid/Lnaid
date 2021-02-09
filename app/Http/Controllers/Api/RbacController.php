<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Silber\Bouncer\BouncerFacade as Bouncer;

class RbacController extends Controller
{
    /**
     * @OA\Get(
     *      path="/admin/rbac/roles",
     *      operationId="getRoles",
     *      tags={"Admin"},
     *      summary="Get all rbac roles",
     *      description="Returns all available roles",
     *      security={{"bearerAuth": {"*"}}},
     *     @OA\Response(
     *         response=200,
     *         description="Returns all available roles",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="roles retrieved successfully"),
     *              @OA\Property(property="data", @OA\Items(ref="#/components/schemas/Role"))
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have permission to perform this operation")
     *          )
     *      )
     *     )
     */

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getRoles()
    {
        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        $roles = Bouncer::role()->all();

        return response()->json(['status' => 'success', 'message' => 'roles retrieved successfully', 'data' => $roles ], 200);
    }


    /**
     * @OA\Get(
     *      path="/admin/rbac/roles/{roleName?}",
     *      operationId="getSingleRole",
     *      tags={"Admin"},
     *      summary="Get a single rbac role",
     *      description="Returns a single role",
     *      security={{"bearerAuth": {"*"}}},
     *     @OA\Response(
     *         response=200,
     *         description="Returns a single role",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="role retrieved successfully"),
     *              @OA\Property(property="data", @OA\Items(ref="#/components/schemas/Role"))
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have permission to perform this operation")
     *          )
     *      )
     *     )
     */

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse|Response
     */
    public function getSingleRole(Request $request)
    {
        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        $role = Bouncer::role()->where('name', $request->roleName)->first();
        if(is_null($role)){
                return response()->json(['status' => 'error', 'message' => 'role not found'], 404);
            };

        $abilities = $role->getAbilities();
        $role->abilities  = $abilities;
        return response()->json([
            'status' => 'success',
             'message' => 'Role retrieved successfully',
             'data' => $role,
        ], 200);
        //return $roles;
    }



    /**
     * @OA\Get(
     *      path="/admin/rbac/abilities",
     *      operationId="getAbilities",
     *      tags={"Admin"},
     *      summary="get all abilities",
     *      description="Returns all abilities",
     *      security={{"bearerAuth": {"*"}}},
     *     @OA\Response(
     *         response=200,
     *         description="Returns all abilities",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="abilities retrieved successfully"),
     *              @OA\Property(property="data", @OA\Items(ref="#/components/schemas/Ability"))
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have permission to perform this operation")
     *          )
     *      )
     *     )
     */

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function getAbilities()
    {
        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        $abilities = Bouncer::ability()->all();
        return response()->json(['status' => 'success', 'message' => 'all abilities retrieved successfully', 'data' => $abilities ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function storeRole(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'role_name' => 'required|string',
        //     'role_title' => 'required|string',
        //     'role_description' => 'required|string',
        // ]);

        // $validator->validate();

        // $role = Bouncer::role()->updateOrCreate([
        //     'name' => $request->role_name, //match only the name attribute while creating
        // ]);

        // $role->update([
        //     'title' => $request->role_title,
        //     'description' => $request->role_description,
        // ]);

        // return response()->json(['status' => 'created', 'message' => 'Role created successfully' ], 201);

        // Roles are better created with a seeder
    }

    /**
     * store a new ability.
     *
     * @return Response
     */
    public function storeAbility(Request $request)
    {
        // Abilities will be created through a seeder class
    }


    /**
     * @OA\Get(
     *      path="/admin/rbac/attach",
     *      operationId="attachAbilityToRole",
     *      tags={"Admin"},
     *      summary="Attach Ability to Role",
     *      description="Attach Ability to Role",
     *      security={{"bearerAuth": {"*"}}},
    *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="abilityName", example="updateSchool"),
     *              @OA\Property(property="roleName", example="moderator")
     *          )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Attach ability to role",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="Role attached succeAbility attached to Role successfully"),
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have the permission to perform this operation")
     *          )
     *      )
     *     )
     */

    /**
     * attach role and ability to user.
     *
     * @param Request $request
     * @return Response
     */
    public function attachAbilityToRole(Request $request)
    {

        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        $validator = Validator::make($request->only('roleName', 'abilityName'), [
                        'roleName' => 'required|string',
                        'abilityName' => 'required|string'
                    ]);
        $validator->validate();
        try {
            $role = Bouncer::role()->where('name', $request->roleName)->first();
            if(is_null($role)){
                return response()->json(['status' => 'error', 'message' => 'role not found'], 404);
            };

            $ability = Bouncer::ability()->where('name', $request->abilityName)->first();
            if(is_null($ability)){
                return response()->json(['status' => 'error', 'message' => 'ability not found'], 404);
            };

            Bouncer::allow($role)->to($ability);
            return response()->json(['status' => 'success', 'message' => 'Ability attached to Role successfully' ], 200);

        } catch (Exception $e) {
            $errorMsg = $e->getMessage();
            return response()->json(['status' => 'error', 'message' => $errorMsg]);
        }
    }


    /**
     * @OA\Get(
     *      path="/admin/rbac/assign",
     *      operationId="assignUserRole",
     *      tags={"Admin"},
     *      summary="Assign role to a user",
     *      description="Assign role to a user",
     *      security={{"bearerAuth": {"*"}}},
    *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="userId", example="11"),
     *              @OA\Property(property="roleName", example="author")
     *          )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Assign role to a user",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="Role assigned successfully"),
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have the permission to perform this operation")
     *          )
     *      )
     *     )
     */

    /**
     * assign role to user.
     *
     * @param Request $request
     * @return Response
     */
    public function assignUserRole(Request $request)
    {
        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        try {

            $role = Bouncer::role()->where('name', $request->roleName)->first();
            if(is_null($role)){
                return response()->json(['status' => 'error', 'message' => 'role not found'], 404);
            };

            $user = User::find($request->userId);
            if(is_null($user)){
                return response()->json(['status' => 'error', 'message' => 'user not found'], 404);
            };

            Bouncer::assign($role)->to($user);
            $userRoles = $user->getRoles();

            return response()->json(['status' => 'success', 'message' => 'Role assigned successfully'], 200);
        } catch (Exception $e) {
            $errorMsg = $e->getMessage();
            return response()->json(['status' => 'error', 'message' => $errorMsg]);
        }
    }



    /**
     * @OA\Get(
     *      path="/admin/rbac/retract",
     *      operationId="retractUserRole",
     *      tags={"Admin"},
     *      summary=" Retract role from user",
     *      description=" Retract role from user",
     *      security={{"bearerAuth": {"*"}}},
    *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="userId", example="9"),
     *              @OA\Property(property="roleName", example="moderator")
     *          )
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description=" Retract role from user",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="Role retracted successfully"),
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have the permission to perform this operation")
     *          )
     *      )
     *     )
     */

    /**
     * retract role from user.
     *
     * @param Request $request
     * @return Response
     */
    public function retractUserRole(Request $request)
    {
        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        try {
            $role = Bouncer::role()->where('name', $request->roleName)->first();
            if(is_null($role)){
                return response()->json(['status' => 'error', 'message' => 'Role not found'], 404);
            };

            $user = User::find($request->userId);
            if(is_null($user)){
                return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
            };

            Bouncer::retract($role)->from($user);
            return response()->json(['status' => 'success', 'message' => 'Role retracted successfully' ], 200);

        } catch (Exception $e) {
            $errorMsg = $e->getMessage();
            return response()->json(['status' => 'error', 'message' => $errorMsg]);
        }
    }




    /**
     * @OA\Get(
     *      path="/admin/rbac/user/{userId?}/roles}",
     *      operationId="getUserRoles",
     *      tags={"Admin"},
     *      summary="Get user roles",
     *      description="Returns all roles assigned to a user",
     *      security={{"bearerAuth": {"*"}}},
     *     @OA\Response(
     *         response=200,
     *         description="Returns all roles assigned to a user",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="user roles retrieved successfully"),
     *              @OA\Property(property="data", @OA\Items(example="admin"))
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have permission to perform this operation")
     *          )
     *      )
     *     )
     */


    /**
     * Get all user roles.
     *
     * @param  params  $userId
     * @return Response
     */
    public function getUserRoles(Request $request)
    {
        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        try {
            $user = User::find($request->userId);
            if(is_null($user)){
                return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
            };

            $roles = $user->getRoles();
            return response()->json(['status' => 'success', 'message' => 'user roles retrieved successfully', 'data' => $roles ], 200);
        } catch (Exception $e) {
            $errorMsg = $e->getMessage();
            return response()->json(['status' => 'error', 'message' => $errorMsg]);
        }
    }



    /**
     * @OA\Get(
     *      path="/admin/rbac/user/{userId?}/abilities}",
     *      operationId="getUserAbilities",
     *      tags={"Admin"},
     *      summary="Get user abilities",
     *      description="Returns all user abilities",
     *      security={{"bearerAuth": {"*"}}},
     *     @OA\Response(
     *         response=200,
     *         description="Returns all abilities a user has",
     *         @OA\JsonContent(
     *              @OA\Property(property="status", example="success"),
     *              @OA\Property(property="message", example="user abities retrieved successfully"),
     *              @OA\Property(property="data", @OA\Items(ref="#/components/schemas/Ability"))
     *          )
     *     ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden",
     *          @OA\JsonContent(
     *              @OA\Property(property="status", example="error"),
     *              @OA\Property(property="message", example="Forbidden: you dont have permission to perform this operation")
     *          )
     *      )
     *     )
     */

     /**
     * Get all user abilities.
     *
     * @param  params  $userId
     * @return Response
     */
    public function getUserAbilities(Request $request)
    {
        if(!Bouncer::is(request()->user())->a('superadmin', 'admin')){
            return response()->json(['status' => 'error', 'message' => 'Forbidden: you do not have the permission to perform this operation' ], 403);
        }

        try {
            $user = User::find($request->userId);
            if(is_null($user)){
                return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
            };

            $abilities = $user->getAbilities();
             return response()->json(['status' => 'success', 'message' => 'user abilities retrieved successfully', 'data' => $abilities ], 200);
        } catch (Exception $e) {
            $errorMsg = $e->getMessage();
            return response()->json(['status' => 'error', 'message' => $errorMsg]);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
