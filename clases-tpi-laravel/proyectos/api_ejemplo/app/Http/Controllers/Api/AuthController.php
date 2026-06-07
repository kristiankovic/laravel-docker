<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Nette\Schema\ValidationException;


class AuthController extends Controller
{
    //
    public function register(Request $request){

        // transaccion
        // si falla algo se hace un rollback

        try {

            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
            ]);

            DB::beginTransaction(); // se puede deshacer la accion

            // crear usuario

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]);

            // creacion del token
            $token = $user->createToken('api-token')->plainTextToken;

            // si todo esta bien se puede insertar a la base de datos

            DB::commit();

            // retornar la respuesta de la api
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Usuario registrado correctamente',
                    'token' => $token,
                    'user' => $user,
                ],
                201); // codigo de validacion

        } catch (ValidationException $e) {
            
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Error de validación',
                    //'errors' => $e->errors(),
                ],
                422); // error de validacion



        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Error al registrar usuario',
                'error' => config('app.debug') ? $e->getMessage() : null,
            ], 500); // error de sintaxis 
        }
    }

    /**
     * Inicio de sesión.
     * POST /api/login
     */

    public function login(Request $request)
    {

        try {

            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'message' => 'Credenciales inválidas',
                ], 401);
            }

            $token = $user->createToken('api-token')->plainTextToken;

            return response()->json([
                'token' => 'Bearer ' . $token,
                'user' => $user,
            ]);


        } 
        
        catch (ValidationException $e) {

            return response()->json(
                [
                    'success' => false,
                    'message' => 'Error de validación',
                    //'errors' => $e->errors(),
                ],
                422
            ); // error de validacion
        }

        
    }

    public function getAllUser()
    {
        $users = User::select('id', 'name', 'email', 'created_at')->get();
        return response()->json([
            'success' => true,
            'users' => $users,
        ]);
    }
}
