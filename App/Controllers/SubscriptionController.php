<?php 

    namespace App\Controllers;

    use App\Models\Subscribe;
    use App\Models\Page;

    class SubscriptionController
    {
        public function subscribe()
        {
            $type = $_POST['sub_type'];

            $message = subscribe::subscribe($type);
            $membershipFields = Page::membership();
            $userfields = Page::userfield();
            
            return view('profile',compact('userfields','membershipFields','message'));
        }
    }