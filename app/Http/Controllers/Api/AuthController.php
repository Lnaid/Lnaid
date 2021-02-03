<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    

    //
      /**
   *
   * @OA\Post(
   *      path="/login",
   *      operationId="login",
   *      tags={"Auth"},
   *      summary="User login",
   *      description="Allows users to login",
   *      @OA\RequestBody(
   *          required=true,
   *          @OA\JsonContent(ref="#/components/schemas/LoginRequest")
   *      ),
   *      @OA\Response(
   *          response=200,
   *          description="Successful operation",
   *          @OA\JsonContent(ref="#/components/schemas/LoginResource")
   *       ),
   *      @OA\Response(
   *          response=400,
   *          description="Bad Request",
   *          @OA\JsonContent()
   *      ),
   *      @OA\Response(
   *          response=403,
   *          description="Forbidden"
   *      )
   * )
   */

	public function login(Request $request)
		{
		  try {
		    Validator::make($request->all(), [
		      'email' => 'email|required',
		      'password' => 'required'
		    ])->validate();
		    
		    $credentials = request(['email', 'password']);

		    if (!Auth::attempt($credentials)) {
		      return response()->json([
		        'status_code' => 500,
		        'message' => 'Unauthorized'
		      ]);
		    }
		    $user = User::where('email', $request->email)->first();
		    if ( ! Hash::check($request->password, $user->password, [])) {
		       throw new \Exception('Error in Login');
		    }

		    $tokenResult = $user->createToken('authToken')->plainTextToken;
		    return response()->json([
		      'status_code' => 200,
		      'access_token' => $tokenResult,
		      'token_type' => 'Bearer',
		    ]);
		  } catch (Exception $error) {
		    return response()->json([
		      'status_code' => 500,
		      'message' => 'Error in Login',
		      'error' => $error,
		    ]);
		  }
		}
}
