<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class FormController extends Controller
{
    public function form(){
        return view('form');
    }

    public function store(Request $request){

        $formations= array("", "", "");
        $i=0;
        for ($x = 1; $x < 24; $x++){
            if ($request['formation'.$x]!= null){
                $formations[$i]=$request['formation'.$x];
                $i++;
                if($i==3){
                    $x=24;
                }
            }
        }

        DB::table('inscription')->insert([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'statue' => $request->genre,
            'numero' => $request->numero,
            'date de naissance' => $request->naissance,
            'lieux de naissance' => $request->lieu,
            'email' => $request->email,
            'niveaux scolaier' => $request->Niveau_Scolaire,
            'profession' => $request->Profession,
            'maladie' => $request->maladies,
            'contact durgence' => $request->urgence,
            'payement' => $request->payement,
            'formation_a' => $formations[0] ,
            'formation_b' => $formations[1] ,
            'formation_c' => $formations[2]
            
        ]);


/*         return view('show',['name'=>$request->name,'mail'=>$request->mail,
        'phone'=>$request->phone,'course'=>$request->course]); */

        return redirect('show');
    }

    public function show(){

        $students = DB::table('inscription')->get();
        return view('show',['students'=>$students]);
    }
}
