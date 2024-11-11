<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SendNotification;

class PushNotificationController extends Controller
{
    public function sendPusher()
    {
        $data = ['name'=>'DeveloperCoder', 'subscribe_to'=>'HelloYouTube'];
        event(new SendNotification($data,'my-channel','my-event'));
    }
}
