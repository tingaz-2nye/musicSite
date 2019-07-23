<?php 

    namespace App\Models;

    use App\Core\App;
    use PDO;

    class Upload
    {
        public static function upload()
        {
            $message = App::get('Database')->upload();

            return $message;
        }
    }