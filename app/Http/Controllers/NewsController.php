<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index() {
        $news = News::latest()->paginate(3);
        $teams = Team::all();

        return view('news', compact('news', 'teams'));
    }

    public function show($id) {
        $news = News::find($id);

        return view('singlenews', compact('news'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:2|max:255|string',
            'content' => 'required|min:5|max:5000|string'
        ]);


        $user = User::find(Auth::user()->id);

        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->user()->associate($user);

        $news->save();

        foreach($request->team as $teamId) {
            $news->team()->attach($teamId);
        }

        return redirect('/news')->with('status', 'Thank you for publishing article on www.nba.com.');    
    }

    public function teamnews($name) {
        $team = Team::where('name', $name)->get()[0];
        $news = $team->news;
        $teams = Team::all();

        return view('teamnews', compact('news', 'name', 'teams'));
    }
}
