<?php

namespace App\Http\Controllers;

use App\Models\Rencontre;
use Illuminate\Http\Request;
use DB;

class RencontreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Rencontre::all();

        $rencontres = array();

        foreach($r as $rencontre){
            $temp =  new \stdClass();

            $equipe1 = DB::table('equipes')
            ->where('id', '=', $rencontre->equipe_id1) 
            ->first();

            $equipe2 = DB::table('equipes')
            ->where('id', '=', $rencontre->equipe_id2) 
            ->first();

            $temp->id = $rencontre->id;
            if($rencontre->score == ''){
                $temp->score = 'VS';
            } else {
                $temp->score = $rencontre->score;
            }
            $temp->equipe1 = $equipe1;
            $temp->equipe2 = $equipe2;
            $temp->date = $rencontre->date;
            $temp->heure = $rencontre->heure;

            array_push($rencontres, $temp);
        }

        return view('rencontres',compact('rencontres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rencontre  $rencontre
     * @return \Illuminate\Http\Response
     */
    public function show(Rencontre $rencontre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rencontre  $rencontre
     * @return \Illuminate\Http\Response
     */
    public function edit(Rencontre $rencontre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rencontre  $rencontre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rencontre $rencontre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rencontre  $rencontre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rencontre $rencontre)
    {
        //
    }
}
