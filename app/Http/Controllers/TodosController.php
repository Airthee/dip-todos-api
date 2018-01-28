<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    /**
     * Get and return todos
     */
    public function index(){
      $todos = DB::table('todolist')->get();
      $response = response(json_encode($todos))
        ->withHeaders([
          'Access-Control-Allow-Origin'=> '*',
        ]);

      return $response;
    }

    /**
     * Return one todo with id
     */
    public function getOne($id){
      $todo = null;
      return $todo;
    }
}
