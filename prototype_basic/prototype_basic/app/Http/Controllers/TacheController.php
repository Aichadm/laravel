<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Brief;
use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
    //     $tache = Tache::all();
    //     return view('brief.edit',compact('tache'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $id= $request->Brief_id;
       return view('tache.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    Tache::create(['Nom_Tache'=>$request->Nom_Tache,'Date_debut'=>$request->Date_debut,'Date_fin'=>$request->Date_fin,'Description'=>$request->Description,'Brief_id'=>$request->Brief_id])->save();
   
    //     return redirect()->route('brief/'. $request->Brief_id.'/brief.edit');
    $tache=new Tache();
    $tache->Nom_Tache=$request->input('Nom_Tache');
    $tache->Date_debut=$request->input('Date_debut');
    $tache->Date_fin=$request->input('Date_fin');
    $tache->Description=$request->input('Description');
    $tache->Brief_id=$request->input('Brief_id');
    $tache->save();
    return redirect()->route('brief.edit',$tache->Brief_id);
    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function edit($id)
    {
        // $tache = Tache::where('id',$id)
        // ->get();
        $tache=Tache::findOrfail($id);
        return view('Tache.edit',compact('tache'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function update(Request $request, $id)
    {
        // Tache::find($id)->
        // update(['Nom_Tache'=>$request->Nom_Tache,'Date_debut'=>$request->Date_debut,'Date_fin'=>$request->Date_fin,'Description'=>$request->Description,'Brief_id'=>$request->Brief_id]);
        // return redirect('brief/'.$id.'/edit');
        $tache=Tache::findOrfail($id);
        $tache->Nom_Tache=$request->input('Nom_Tache');
        $tache->Date_debut=$request->input('Date_debut');
        $tache->Date_fin=$request->input('Date_fin');
        $tache->Description=$request->input('Description');
        $tache->Brief_id=$request->input('Brief_id');
        $tache->save();
        return redirect()->route('brief.edit',$tache->Brief_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function destroy($id)
    {
        Tache::find($id)->delete();
        return back();
    }
    

}
