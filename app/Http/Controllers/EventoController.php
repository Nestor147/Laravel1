<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    public function index(){
        
        $evento=Evento::get();
        dd($evento);
        return view('evento',['evento'=>$evento]);
    }
}
