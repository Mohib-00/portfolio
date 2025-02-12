<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserAuthcontroller extends Controller
{
    public function register(Request $request) {
        try {
            
            $validateuser = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
                'confirmPassword' => 'required|same:password',  
            ]);
    
            
            if ($validateuser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation error',
                    'errors' => $validateuser->errors()  
                ], 401);  
            }
    
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),  
            ]);
    
            
            return response()->json([
                'status' => true,
                'message' => 'User created successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken  
            ], 200);
    
        } catch (\Throwable $th) {
           
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
    
 
 
     public function login(Request $request)
{
    try {
      
        $validateuser = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

       
        if ($validateuser->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validateuser->errors(),
            ], 422); 
        }

        
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'status' => false,
                'message' => 'The credentials do not match our record.',
                'errors' => [
                    'password' => ['The password you entered is incorrect.']
                ],
            ], 401); 
        }
 
        $user = Auth::user();

        return response()->json([
            'status' => true,
            'message' => 'User logged in successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken,
            'userType' => $user->userType,
        ], 200);

    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => $th->getMessage(),
        ], 500);
    }
}


public function logout() {
       
    auth()->user()->tokens()->delete();

    Session::flush(); 

    return response()->json([
        'status' => true,
        'message' => 'User logged out',
        'data' => [],
    ], 200);
}

     public function logoutuser() {
       
        auth()->user()->tokens()->delete();
 
        Session::flush(); 
    
        return response()->json([
            'status' => true,
            'message' => 'User logged out',
            'data' => [],
        ], 200);
    }
 
     
     public function home(){ 
         //$user = Auth::user();         
         return view('userpages.home');
     }
 
     public function admin(){ 
        // $user = Auth::user();         
         return view('adminpages.admin');
     }

     public function about(){ 
        //$user = Auth::user();         
        return view('userpages.about');
    }

    public function portfolio(){ 
        //$user = Auth::user();         
        return view('userpages.portfolio');
    }
    public function services(){ 
        //$user = Auth::user();         
        return view('userpages.servicepage');
    }
    public function contact(){ 
        //$user = Auth::user();         
        return view('userpages.contact');
    }
    public function allmembers(){ 
        //$user = Auth::user();         
        return view('userpages.members');
    }

    public function teams(){ 
        //$user = Auth::user();         
        return view('userpages.team');
    }

    public function news(){ 
        //$user = Auth::user();         
        return view('userpages.allnews');
    }
    public function board(){ 
        //$user = Auth::user();         
        return view('userpages.board');
    }
    public function event(){ 
        //$user = Auth::user();         
        return view('userpages.events');
    }
    public function wedo(){ 
        //$user = Auth::user();         
        return view('userpages.whatwedo');
    }
    public function resources(){ 
        //$user = Auth::user();         
        return view('userpages.resources');
    }
    public function joinus(){ 
        //$user = Auth::user();         
        return view('userpages.joinus');
    }

    public function memberships(){ 
        //$user = Auth::user();         
        return view('userpages.membership');
    }
    public function supportourwork(){ 
        //$user = Auth::user();         
        return view('userpages.supportwork');
    }
    public function joinourteam(){ 
        //$user = Auth::user();         
        return view('userpages.careers');
    }

     
}
