<?php 

    namespace App\Controllers;

    use App\Models\Password;
    use App\Models\Page;

    class PasswordController
    {
        public function change()
        {
            $current = $_POST['current_pass'];
            $new = $_POST['new_pass'];

            $pass_message = Password::change($current,$new);
            $membershipFields = Page::membership();
            $userfields = Page::userfield();

            return view('profile',compact('userfields','membershipFields','pass_message'));
        }
    }

