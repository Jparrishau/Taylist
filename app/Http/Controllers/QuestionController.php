<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function createQuestion(Request $request){
        $question = new Question();
        $question->question = $request['question'];
        $request->user()->questions()->save($question);
    }
}
