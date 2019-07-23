<?php

    namespace App\Models;

    use App\Core\App;
    use App\Core\Session;
    use PDO;

    class Password
    {

        public static function change($current_pass,$new_pass)
        {
            $current_pass = $current_pass;
            $new_pass = $new_pass;

            if(!empty($current_pass) && !empty($new_pass))
            {   
                $confirm_pass = App::get('Database')->select(
                    "SELECT password FROM users WHERE password = :password AND id=:id",
                    [
                        "id" => Session::get('id'),
                        "password" => $current_pass
                    ]
                );

                if($confirm_pass == true)
                {
                    $query->update(
                        'users',
                        [
                            "password"=>$new_pass
                        ],
                        Session::get('id')
                    );

                    $pass_message = '
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        Password Updated Successfully;
                    </div>';
                }else{
                    $pass_message = '
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        Wrong current password;
                    </div>';
                }

                return $pass_message;
            }
        }
    }