<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Reply $reply)
    {
        $this->authorize('update', $reply->conversation);

        $reply->conversation->setBestReply($reply);
        // $reply->conversation->best_reply_id = $reply->id;
        // $reply->conversation->save();

        return back();
    }
}
