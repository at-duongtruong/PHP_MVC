<?php
namespace App\Controllers;
use App\Models\User;
use App\Core\Session;
class UsersController extends Controller
{
    public function login(){
        view('users.login');
    }

    public function checkLogin(){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];           
            $user = new User();
            $check = $user->checkLogin($username,$password);
            if($check)
            {
                Session::set('username',$check['username']);
                header('location:/home/index');
            }
            else{
                $error['error'] = "Username or password is incorrect !";
                $error['username'] = $_POST['username'];    
                view('users.login',$error);
            }
        }
    }
    public function register(){
            if(isset($_POST['submit'])){
                $user = new User();
                $request = array();
                $request['username'] = $_POST['username'];
                $request['password'] = $_POST['password'];
                $request['fullname'] = $_POST['fullname'];   
                $result =$user->add($request);
                Session::set('username',$request['username']);
                header('location:/home/index');              
            }
            view('users.register');
        }
    public function logout(){
            Session::destroy();
            header("Location:/users/login");
        }
    }