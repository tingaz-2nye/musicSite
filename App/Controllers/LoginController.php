<?php 
    namespace App\Controllers;

    use App\Models\Login;

    class LoginController
    {
        public function run()
        {
            $login = Login::login(
                [
                    "email" => $_POST['email'],
                    "password" => md5($_POST['password'])
                ]
            );

            if($login == true)
            {
                redirect('/');
            }
            elseif($login == false)
            {
                $message = 'Wrong email and password';
                return view('login',compact('message'));
            }

        }
    }
