<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Input; 
use App\Dog; 
use Session; 

class AdminController extends Controller
{
    public function main() {
        # get all dog names
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        sort($allDogs); 
        $allDogs = json_encode($allDogs); 
        
        return view('admin')->with([
            'allDogs' => $allDogs
        ]);
    }
    
    public function search(Request $request) {        
        # get all dog names
        $dogNames = Dog::all()->pluck('name')->toArray(); 
        sort($dogNames); 
        $dogNames = json_encode($dogNames); 
        
        $dog = ucwords($request->input('adminSearch')); 
        $actionType = $request->input('actionType'); 
        
        // no aliases for admin search
        $dogFull = Dog::all()->where('name', 'LIKE', $dog)->first();       
        $allDogs = Dog::all()->pluck('name')->toArray(); 
        
    
        //validate user input
        $rules = [
            'actionType' => 'in:add,edit,delete',
            'adminSearch' => 'required|regex:/^[\pL\s\-.]+$/u'
        ];
        
        $validator = Validator::make($request->all(), $rules); 
        
        //checking dogs with in_array (change to validation regex later)
        if ($validator->fails() || !(in_array($dog, $allDogs))) {
            return redirect('/admin')->withErrors($validator)->withInput(Input::all());   
        }
                
        
        return view('admin')->with([
            'dog' => $dogFull,
            'actionType' => $actionType,
            'allDogs' => $dogNames
        ]); 
    }
    
    public function edit(Request $request) {
        $rules = [
            'name' => 'required|regex:/^[\pL\s\-.]+$/u',
            'group' => 'required|in:Herding,Hound,Non-Sporting,Sporting,Working,Toy',
            'apartment' => 'required|boolean',
            'size' => 'required|in:tiny,small,medium,large',
            'energy' => 'required|integer|between:1,5',
            'social' => 'required|integer|between:1,5',
            'intelligence' => 'required|integer|between:1,5',
            'cleanliness' => 'required|integer|between:1,5',
            'adventure' => 'required|integer|between:1,5'
        ];
        
        if($request->has('aliasOne'))
            $rules['aliasOne'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasTwo'))
            $rules['aliasTwo'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasThree'))
            $rules['aliasThree'] = 'regex:/^[\pL\s\-.]+$/u'; 

        
        $validator = Validator::make($request->all(), $rules); 

        if ($validator->fails()) {
            return redirect('/admin')->withErrors($validator)->withInput(Input::all());   
        }
        
        $dog = Dog::find($request->id); 
        
        $dog->name = $request->name; 
        $dog->aliasOne = $request->aliasOne; 
        $dog->aliasTwo = $request->aliasTwo; 
        $dog->aliasThree = $request->aliasThree; 
        $dog->group = $request->group; 
        $dog->apartment = $request->apartment;
        $dog->size = $request->size; 
        $dog->energy = $request->energy;
        $dog->social = $request->social; 
        $dog->intelligence = $request->intelligence; 
        $dog->cleanliness = $request->cleanliness; 
        $dog->adventure = $request->adventure; 
        
        $dog->save();   
                
        $link = '/breeds/'.$dog->name; 
        $adminMessage = '<a id="successMessage" href="'.$link.'">'.$dog->name.'</a>'.' successfully edited!'; 
                
        Session::flash('adminMessage', $adminMessage);
        return redirect('/admin'); 
    }
    
    public function delete(Request $request) {                
        $dog = Dog::find($request->id);
        
        $dog->tags()->detach(); 
        $dog->delete(); 
        
        $adminMessage = $dog->name.' successfully deleted!'; 
        Session::flash('adminMessage', $adminMessage);
        return redirect('/admin'); 
    }
    
    public function add(Request $request) {
        $dog = new Dog(); 
                        
        $rules = [
            'name' => 'required|regex:/^[\pL\s\-.]+$/u',
            'group' => 'required|in:Herding,Hound,Non-Sporting,Sporting,Working,Toy',
            'apartment' => 'required|boolean',
            'size' => 'required|in:tiny,small,medium,large',
            'energy' => 'required|integer|between:1,5',
            'social' => 'required|integer|between:1,5',
            'intelligence' => 'required|integer|between:1,5',
            'cleanliness' => 'required|integer|between:1,5',
            'adventure' => 'required|integer|between:1,5'
        ];
        
        if($request->has('aliasOne'))
            $rules['aliasOne'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasTwo'))
            $rules['aliasTwo'] = 'regex:/^[\pL\s\-.]+$/u'; 
        if($request->has('aliasThree'))
            $rules['aliasThree'] = 'regex:/^[\pL\s\-.]+$/u'; 

        
        $validator = Validator::make($request->all(), $rules); 

        if ($validator->fails()) {
            return redirect('/admin')->withErrors($validator)->withInput(Input::all());   
        }
        
        $dog->name = $request->name; 
        $dog->group = $request->group; 
        $dog->apartment = $request->apartment;
        $dog->size = $request->size; 
        $dog->energy = $request->energy;
        $dog->social = $request->social; 
        $dog->intelligence = $request->intelligence; 
        $dog->cleanliness = $request->cleanliness; 
        $dog->adventure = $request->adventure; 
        
        if($request->has('aliasOne'))
            $dog->aliasOne = $request->aliasOne; 
        if($request->has('aliasTwo'))
            $dog->aliasTwo = $request->aliasTwo; 
        if($request->has('aliasThree'))
            $dog->aliasThree = $request->aliasThree; 
        
        $dog->save();   
        
        $link = '/breeds/'.$dog->name; 
        $adminMessage = '<a id="successMessage" href="'.$link.'">'.$dog->name.'</a>'.' successfully added!'; 
        
        Session::flash('adminMessage', $adminMessage);
        return redirect('/admin'); 
    }
}
