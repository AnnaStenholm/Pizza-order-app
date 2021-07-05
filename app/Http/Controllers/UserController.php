<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class User{
    public $fname;
    public $lname;
    public $email;
    public $password;


    function __construct($fname,$lname, $email,$password){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;
    }
}

class UserController extends Controller
{
    function getUsers(){
        //Mocka users
        $user1 = new User("Anna", "Bengtsson", "anna.bengtsson@gmail.com", "anna1978");
        $user2 = new User("Torbjörn", "Olsson", "torbjorn.olsson@gmail.com", "tobbe1987");
        $users = array($user1,$user2);
        return response()->json($users);
    }
    function getUserView(){
        $users = DB::table('Users')->get();
        return view("users", ["users"=>$users]);
}

function getUsersView(){
    $user1 = new User("Anna", 23);
    $user2 = new User("Torbjörn", 55);
    $user3 = new User("Eva", 40);
    return view('users', ['users'=>array($user1, $user2,$user3)]);

}

}



