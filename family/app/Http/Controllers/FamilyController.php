<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $families = \App\Family::paginate(1);

        return view('families.index', ['families' => $families]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $users= User::all(['id', 'name']);
        foreach ($users as $data)
        {
            $users[$data->id] = $data->name;
        }

        //
        return view('families.create',['users' => $users]);
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
        //dd($request->all());
        $family = new Family($request->all());
        
        if ($family->save()) 
        {
             flash('El usuario se creo correctamente!')->success();
             return redirect('users');
        }else
        {
             flash('Disculpa! el usuario no se pudo crear.')->error();
             return view('users.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = 'hola';
        return view('families.show', ['family' => Family::findOrFail($id),'users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  
        return view('families.edit', ['family' => Family::findOrFail($id)]);
  
    }
    public function editFamily($id)
    {
        //  
        
        $family = Family::where('user_id', $id)->first();


        return view('families.Userfamily', ['family' => $family]);
  
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
        return redirect()->route('users.edit', $user->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
