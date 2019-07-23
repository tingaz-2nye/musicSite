<?php 

    namespace App\Models;

    use App\Core\App;
    use App\Core\Session;
    use PDO;

    class Login
    {
        public static function login($parameters)
        {
            $db = App::get('Database')->db;

            $sql = $db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
            $sql->execute($parameters);

            $user = $sql->rowCount();
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $id = $data['id'];
            $role = $data['role'];

            if($user == 1)
            {   
                Session::init();
                if($role == "Admin")
                {
                    Session::set('id',$id);
                    Session::set('role',$role);
                    Session::set('Loggedin',true);
                }
                elseif($role == "Member")
                {
                    Session::set('id',$id);
                    Session::set('role',$role);
                    Session::set('Loggedin',true);
                }
                return true;
            }
            else if($user < 1)
            {
                return false;
            }
            else if($user > 1)
            {
                return false;
            }
        }
    }