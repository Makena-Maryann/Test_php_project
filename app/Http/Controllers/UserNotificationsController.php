<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $notifications = auth()->user()->unreadNotifications;

        // $notifications->markAsRead();

        return view('notifications.show', [
            'notifications' => tap(auth()->user()->unreadNotifications)->markAsRead()
        ]);
    }

}
