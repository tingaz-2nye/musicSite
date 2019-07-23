<?php 

    use App\Core\{App,Session};

    App::bind('Config', require "config/config.php");

    App::bind('Database', new Queries(
        Database::connect(App::get('Config')['database'])
    ));


    function view($view, $data = [])
    {   
        extract($data);

        return require "App/views/{$view}.view.php";
    }

    function redirect($location)
    {
       header ("Location: {$location}");
    }

    Session::init();
    
    