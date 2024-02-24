<?php

namespace App\Http\Controllers;

use Log;
use App\Models\User;
use App\Trait\HttpResponses;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    // use HttpResponses;
    use HasApiTokens;

    public function register(Request $request){

        try {
            $request->validate([
                'name' => ['required','string', 'max:225'],
                'email' => ['required','string','max:225', 'unique:users'],
                'password' => ['required', 'confirmed', 'min:5']
            ]);
            // $request->validate($request->all());

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return response()->json([
                'status' => 'true',
                'user' => $user,
                'token' => $user->createToken(' API Tokenof ' . $user->name)->plainTextToken
            ]);

        }catch(ValidationException $e){
            // Handles validation errors
            return response()->json(['status' => 'false', 'message' => $e->errors()]);
        }catch(\Exception $e){
            // Handle other exception
            return response()->json(['status' => 'error', 'message' => 'Somthing went worng']);
        }


    }

    public function auth_user(Request $request){

        try{

            $request->validate([
                'email' => ['required','string', 'email'],
                'password' => ['string', 'required'],
            ]);

            if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return response()->json(['status' => 'false', 'message' => 'Invalid Credentials']);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => 'true',
                'user' => $user,
                'token' => $user->createToken('API Token of ' . $user->name)->plainTextToken
            ]);


        }catch(ValidationException $e){
            // Handles validation errors
            return response()->json(['status' => 'false', 'message' => $e->errors()]);
        }catch(\Exception $e){
            // Handle other exception
            return response()->json(['status' => 'false', 'message' => 'Something went worng']);
        }

       
    }

    public function destroy_auth(){

        try{    
            Auth::user()->tokens()->delete();

            return response()->json(['status' => true, 'message' => 'successfully logged out']);
            
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Logout Error: ' . $e->getMessage());

            return response()->json(['status' => false, 'message' => 'Something went wrong']);
        }
    }
}
