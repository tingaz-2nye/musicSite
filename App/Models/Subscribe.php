<?php

    namespace App\Models;

    use App\Core\App;
    use App\Core\Session;
    use PDO;

    class Subscribe
    {
        public static function subscribe($type)
        {
            $type = $type;
            $date = date('Y-m-j');

            $get_member = App::get('Database')->selectCount(
                'SELECT membership_validity FROM membership WHERE user_id=:id AND membership_validity=:validity',
                [
                    "id"=> Session::get('id'),
                    "validity"=>'Valid'
                ]
            );
            if($get_member < 1){
                if($type == "Gold")
                {

                    $newdate = strtotime('+ 1 year',strtotime($date));
                    $newdate = date('Y-m-j',$newdate);

                    App::get('Database')->insert(
                        'membership',
                        [
                            "user_id" => Session::get('id'),
                            "membership_type" => $type,
                            "membership_expiry" => $newdate,
                            "membership_validity" => "Valid"
                        ]
                    );
                }
                else if($type == "Premium")
                {
                    
                    $newdate = strtotime('+ 6 month',strtotime($date));
                    $newdate = date('Y-m-j',$newdate);

                    App::get('Database')->insert(
                        'membership',
                        [
                            "user_id" => Session::get('id'),
                            "membership_type" => $type,
                            "membership_expiry" => $newdate,
                            "membership_validity" => "Valid"
                        ]
                    );
                    $message = '
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        Subscription was successfull
                    </div>';

                }
            }
            else if($get_member >= 1){
                $message = '
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        Current Membership is still Valid
                    </div>';
            }

            return $message;
        
        }
    }