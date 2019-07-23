<?php

    class Database
    {

        public static function connect($config)
        {
            try
            {
                
                return new PDO($config['DB_DSN'],$config['DB_USER'],$config['DB_PASSWORD'],$config['DB_OPTIONS']);

            }
            catch (PDOException $e)
            {

                echo "Error ".$e->getMessage();

            }
        }
    }

?>
