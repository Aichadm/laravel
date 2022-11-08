<?php

namespace App\Http\Controllers;


use App\Models\Promotion;
use Illuminate\Http\Request;


class PromotionController extends Controller
{
   //
   protected function index(){
    $Promotions=Promotion::all();
    
    return view('index',['promotions'=>$Promotions]);
   }
   protected function create(){
    return view('create');
   }
   protected function store(Request $request){
    $title=$request->input('name');
    Promotion::create(['name'=>$title]);
    return redirect('/');
   }
   public function edit($id){
      $Promotions=Promotion::findOrFail($id);
      return view('edit',['name'=>$Promotions]);

   }
   public function update(Request $request,$id){
   $Promotions=Promotion::findOrFail($id);
   $Promotions->update(['name'=>$request->name]);
   return redirect('/');

   }
   public function destroy(Request $request,$id){
      //
      $Promotions=Promotion::findOrFail($id);
      $Promotions->delete(['promotions'=>$Promotions]);
      return redirect('/');
   }
   public function search(Request $request){
      if($request->ajax()){
          $input = $request->key;
      $output="";
      $Promotion= Promotion::where('name','like','%'.$input."%")
      ->get();
      if($Promotion)
      {
      foreach ($Promotion as $value) {
      $output.='<tr>
      <td>'.$value->id.'</td>
      <td>'.$value->name.'</td>
      <td>
      <a href="edit/.'.$value->id.'">Modifier</a>
      <a href="delete/.'.$value->id.'">Supprimer</a>
      <td>
      </tr>';
  }
    return Response($output);
    }
   }
  }




}
