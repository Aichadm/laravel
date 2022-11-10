<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brief;

use App\Models\Tache;


class BriefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $brief=Brief::all();
       return view('brief.index',['brief'=>$brief]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brief.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brief=new Brief();
        $brief->Nom_Brief=$request->input('Nom_Brief');
        $brief->Date_livraison=$request->input('Date_livraison');
        $brief->Date_recuperation=$request->input('Date_recuperation');
        $brief->save();
        return redirect()->route('brief.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tache=Tache::select('*')->where('Brief_id',$id)->get();
        $brief=Brief::find($id);
      return view('brief.edit',compact ('brief','tache'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Brief::find($id)->
        update(['Nom_Brief'=>$request->Nom_Brief,
        'Date_livraison'=>$request->Date_livraison ,
        'Date_recuperation'=>$request->Date_recuperation]);
        return redirect('brief/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brief::find($id)->delete();
        return redirect()->route("brief.index");
   
    }
 
}
