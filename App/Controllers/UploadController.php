<?php 

    namespace App\Controllers;

    use App\Models\Upload;
    use App\Models\Page;

    class UploadController
    {
        public function upload()
        {
            $message = Upload::upload();

            $musicFiles = Page::home();
            $userfields = Page::userfield();

            return view('index',compact('message','musicFiles','userfields'));
        }
    }