<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return response()->json(['menu'=> $menu]);
        return view ('products',compact('menu'));
    }
    public function indexx(){
        $menu = Menu::all();
        return view ('products',compact('menu'));
    }


    public function menu(){
        return view ('create');
    }
    public function about(){
        return view('about');
    }
    public function insertmenu(Request $request){
           $menu = new Menu();
           Menu::create([
            'name' => $request-> name,
            'image' => $request -> image,
            'description' => $request-> description,
            'price' => $request -> price,
           ]);
           return redirect('dashboard')->with('success','Menu successfully Added');
    }
    public function show($id){
        $menu = Menu::find($id);
        return view('show',compact('menu'));
    }

    public function edit($id){
        $menu = Menu::find($id);
        return view('edit',compact('menu'));
    }

    public function update(Request $request, $id){
        $menu = Menu::find($id);
        $menu->name=$request->name;
        $menu->image=$request->image;
        $menu->description=$request->description;
        $menu->price=$request->price;
        $menu->save();
        return redirect('dashboard')->with('success','Menu successfully Updated');
    }

    public function destroy($id){
        Menu::find($id)->delete();
        return redirect('dashboard')->with('success','Menu successfully Deleted');
    }

    public function mainindex(){
        $menu = Menu::get();
        return view('index',compact('menu'));
    }
    public function deleteProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Menu successfully deleted.');
        }
    }
}
