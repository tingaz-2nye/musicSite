<?php 

    namespace App\Models;

    use App\Core\App;
    use App\Core\Session;
    use PDO;

    class Page
    {   
        public static function userfield()
        {
            return App::get('Database')->select(
                'SELECT * FROM users 
                WHERE id=:id',
                [
                    "id" => Session::get('id')
                ]
            );
        }

        public static function home()
        {    
            return App::get('Database')->selectAll('uploads'); 
        }   

        public static function gallery()
        {

        }

        public static function overview($id)
        {
            $data = array();
            $data['comments'] = App::get('Database')->select(
                    "SELECT * FROM comments WHERE song_id=:id",
                    [
                        "id"=>$id
                    ]
                );
            $data['uploads'] = App::get('Database')->select(
                "SELECT * FROM uploads WHERE id=:id",
                [
                    "id"=>$id
                ]
            );

            return $data;
        }

        public static function membership()
        {
            return App::get('Database')->select(
                'SELECT * FROM membership WHERE user_id=:id AND membership_expiry >= Now()',
                [
                    "id" => Session::get('id')
                ]
            );
        }

        public static function membershipValidityCheck()
        {
            $sql1 = App::get('Database')->select(
                "SELECT membership_expiry FROM membership WHERE user_id=:id AND membership_expiry <= NOW() AND membership_validity='Valid'",
                [
                    "id" => Session::get('id'),
                ]
            );
    
            if($sql1)
            {
                App::get('Database')->membership_update(
                    'membership',
                    [
                        "membership_validity"=>"Expired"
                    ],
                    Session::get('id')
                );
            }
        }

        public static function deletesong($id)
        {
            App::get('Database')->delete('uploads',$id);
        }
    }