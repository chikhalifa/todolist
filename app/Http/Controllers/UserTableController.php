<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertable;

class UserTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usertable= Usertable::all();
        return view('pages.index', compact('usertable'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.home');
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
        
        $storeData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|max:255',
            'taskname' => 'required|numeric',
        ]);
        $usertable= Usertable::create($storeData);

        return redirect('/todo')->with('completed', 'Task  created!');
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
        $usertable = Usertable::findOrFail($id);
        return view('update', compact('usertable'));
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
        //
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'taskname' => 'required|max:225',
        ]);

        Usertable::whereId($id)->update($data);
        return redirect('/todo')->with('completed', 'Task updated');
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
        $usertable=Usertable::find( $id );
        $usertable->delete();
        return redirect('/todo')->with('completed', 'Task deleted');
    }
}
