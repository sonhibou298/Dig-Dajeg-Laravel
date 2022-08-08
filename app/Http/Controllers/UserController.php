<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Patient;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'nom' => ['required', 'min:2'],
            'prenom' => ['required', 'min:2'],
            'telephone' => ['required', 'numeric', 'min:9'],
            'adresse' => ['required', 'min:2'],
            'genre' => ['required'],
            'dateNaissance' => ['required'],
            'email' => ['email:rfc,dns'],
            'password' => ['required', 'min:4'],
        ]);

        $user = User::create([
            'nom' => $fields['nom'],
            'prenom' => $fields['prenom'],
            'genre' => $fields['genre'],
            'telephone' => $fields['telephone'],
            'adresse' => $fields['adresse'],
            'dateNaissance' => $fields['dateNaissance'],
            'email' => $fields['email'],
            'password' =>Hash::make($fields['password']),
            'profil' => $request->input('profil'),
            'role_id' => $request->input('role_id'),
        ]);

        if ($request->input('role_id') == 3)
        {
            $getId = User::where('role_id', '=', '3')->latest()->first()->id;
            $patient = Patient::create([
                'user_id' => $getId,
            ]);
        }
        return redirect('login')->with('message', 'Success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json([
            'success'=> 'Utilisateur modifié avec succès'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'message' => 'Utilisateur supprimé'
        ]);
    }

    public function search($prenom)
    {
        return User::where('prenom', 'like' , '%'.$prenom.'%')->get();
    }

//    public function login(Request $request)
//    {
//        if(!Auth::attempt($request->only('email', 'password')))
//        {
//            return response([
//                'message'=>'Login ou mot de passe incorrect'
//            ], \Symfony\Component\HttpFoundation\Response::HTTP_UNAUTHORIZED);
//        }
//
//        $user = Auth::user();
//        return response()->json([
//            'message' => 'Connexion reussie'
//        ]);
//    }


//    public function login(LoginRequest $request){
//        $request->authenticate();
//
//        $request->session()->regenerate();
//
//        return redirect()->intended(RouteServiceProvider::HOME);
//    }

//    public function login(Request $request)
//    {
//        try {
//            $validateUser = Validator::make($request->all(),
//                [
//                    'email' => 'required|email',
//                    'password' => 'required'
//                ]);
//
//            if($validateUser->fails()){
//                return response()->json([
//                    'status' => false,
//                    'message' => 'validation error',
//                    'errors' => $validateUser->errors()
//                ], 401);
//            }
//
//            if(!Auth::attempt($request->only(['email', 'password']))){
//                return response()->json([
//                    'status' => false,
//                    'message' => 'Email & Password does not match with our record.',
//                ], 401);
//            }
//
//            $user = User::where('email', $request->email)->first();
//
//            return response()->json([
//                'status' => true,
//                'message' => 'User Logged In Successfully',
//                'token' => $user->createToken("API TOKEN")->plainTextToken
//            ], 200);
//
//        } catch (\Throwable $th) {
//            return response()->json([
//                'status' => false,
//                'message' => $th->getMessage()
//            ], 500);
//        }
//    }
    public function deconnexion(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

    }
}
