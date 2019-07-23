<?php 

    namespace App\Controllers;

    use App\Core\Session;
    use App\Models\Page;

    class PagesController
    {   

        public function home()
        {

            $musicFiles = Page::home();
            $userfields = Page::userfield();
            
            return view('index',compact('musicFiles','userfields'));
        }

        public function gallery()
        {
            $userfields = Page::userfield();

            return view('gallery',compact('userfields'));
        }

        public function help()
        {
            $userfields = Page::userfield();

            return view('help',compact('userfields'));
        }

        public function overview()
        {   
            $id = $_GET['songId'];
            $userfields = Page::userfield();
            $data = Page::overview($id);
            
            $musicFiles = $data['uploads'];
            $comments = $data['comments'];

            return view('overview',compact('userfields','musicFiles','comments','id'));
        }

        public function profile()
        {   
            Page::membershipValidityCheck();
            $membershipFields = Page::membership();
            $userfields = Page::userfield();
            
            return view('profile',compact('userfields','membershipFields'));
        }
        public function deletesong()
        {   
            $id = $_GET['id'];

            Page::deletesong($id);

            redirect('/');
        }
        public function login()
        {
            return view('login');
        }

        public function signup()
        {
            
            return view('signup');
        }

        public function logout()
        {
            Session::destroy();
            redirect('login');
        }
    }