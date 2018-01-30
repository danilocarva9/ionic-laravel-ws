<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
use DB;

class UserDeviceController extends Controller
{




    public function getAll()
    { 
       $users = User::all();
	   return $users;
    }




/*

  	public function saveUser(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email'); 
        $user->password = bcrypt($request->input('password'));
        $user->status_id = $request->input('status_id'); 
        $user->save();
        $lastInsertedId = $user->id; //Get id from inserted user

        $perfil = new Perfil;
        $perfil->user_id = $lastInsertedId;
        $perfil->cid_id = $request->input('cidade'); 
        $perfil->save();
      
        return response()->json(['message' => 'Usuário criado com sucesso']);
    }





    






    // /**
    //  * @param CourseForm $request
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function store(CourseForm $request)
    // {
    //     if($request->ajax())
    //     {
    //         $course = new Course();
    //         $course->author = $request->input('author');
    //         $course->name = $request->input('name');
    //         $course->description = $request->input('description');
    //         $course->price = $request->input('price');
    //         $course->save();
    //         return response()->json(['message' => 'Course saved']);
    //     }
    // }




    // public function authorize()
    // {
    //     return true;
    // }




   // public function rules()
   //  {
   //      return [
   //          "author"        =>      "required|between:5,60",
   //          "name"     => "required|between:5,60",
   //          "description" => "required|between:5,255",
   //          "price"     => "required|between:1,15"
   //      ];
   //  }
 
   //  public function messages()
   //  {
   //      return [
   //          'author.between' => 'The :attribute must be between :min - :max.',
   //          'author.required' => 'The :attribute is required!',
   //          'name.between' => 'The :attribute must be between :min - :max.',
   //          'name.required' => 'The :attribute is required!',
   //          'description.between' => 'The :attribute must be between :min - :max.',
   //          'description.required' => 'The :attribute is required!',
   //          'price.between' => 'The :attribute must be between :min - :max.',
   //          'price.required' => 'The :attribute is required!',
   //      ];
   //  }







}
