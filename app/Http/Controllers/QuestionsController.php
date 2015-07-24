<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
{

   public function index(){
   $question = DB::select('select * from questions where id=4');
   return view('questions', ['question'=>$question]);
   }
}
