<?php 

    use App\Core\Router;

    Router::get('','PagesController@home');
    Router::get('help','PagesController@help');
    Router::get('gallery','PagesController@gallery'); 
    Router::get("overview",'PagesController@overview');
    Router::get('profile','PagesController@profile');
    Router::get('login','PagesController@login');
    Router::get('signup','PagesController@signup');
    Router::get('logout','PagesController@logout');
    Router::get('deletesong','PagesController@deletesong');

    Router::post('login','LoginController@run');
    Router::post('comment','CommentsController@comment');
    Router::post('subscribe','SubscriptionController@subscribe');
    Router::post('changePassword','PasswordController@change');
    Router::post('upload','UploadController@upload');