<?php

namespace App\Http\Controllers;
use App\Answer;
use Illuminate\Http\Request;
use App\User;

class VoteAnswerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function __invoke(Answer $answer){
        $vote = (int) request()->vote;
        auth()->user()->voteAnswer($answer, $vote);
        return back();
    }

}
