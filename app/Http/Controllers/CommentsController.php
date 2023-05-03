<?php

namespace App\Http\Controllers;

use App\Mail\CommentReceived;
use App\Models\Comment;
use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|min:10|max:5000|string',
            'team_id' => 'required'
        ]); 

        $team = Team::find($request->team_id);
        $user = User::find(Auth::user()->id);

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->user()->associate($user);
        $comment->team()->associate($team);
        $comment->save();

        $mailData = $comment;
        // dd($comment->team);

        Mail::to($team->email)->send(new CommentReceived($mailData));

        return redirect('/teams/' . $team->id)->with('status', 'Comment posted successfully!');
    }

    public function forbidden() {
        return view('/forbidden-comment');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
