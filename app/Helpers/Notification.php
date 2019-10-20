<?php

namespace App\Helpers;

use App\Admin;
use Berkayk\OneSignal\OneSignalClient;
use DB;
use OneSignal;
use App\Notifications\PushNotification;

class Notification {
	public static function send_push_notification( $title, $message,  $subscribedOnly = false ) {

		// Send to all users
		if ( ! $subscribedOnly ) {

            $config = array(
                'app_id' => 'de974fef-a500-409b-a4c2-6e9edb4a0e13',
                'rest_api_key' => 'Y2ExODA5NzgtYjZkNi00ZWY4LWEwODgtNzNhMzk4YzBjYTg3',
                'user_auth_key' => "YOUR-USER-AUTH-KEY"
            );

            $client = new OneSignalClient($config['app_id'], $config['rest_api_key'], $config['user_auth_key']);
            $client->sendNotificationToAll(
				$title ? $title : 'Test'
			);

			$allUsers = Admin::all();
			foreach($allUsers as $user) {

//				PushNotification::create([
//					'notifiable' => $user->id,
//					'title' => $title,
//					'message' => $message
//				]);
			}

			return true;
		}else{
              dd('hello');
        }
    }
}
