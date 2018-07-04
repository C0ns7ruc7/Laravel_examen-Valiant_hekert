<?php

namespace App\Http\Controllers;

use App\Gebruikers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GebruikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbQuery = DB::table('gebruikers')->get();
        return view('gebruikers.index', compact('dbQuery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gebruikers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'gebruiker' => 'required|max:128'
        ]);

        Gebruikers::create([
            'gebruiker'  => request('gebruiker'),
            'email'  => request('email'),
            'wachtwoord'  => request(bcrypt('wachtwoord'))
        ]);

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dbQuery = DB::table('gebruikers')->where('id', $id)->first();
        return view('gebruikers.show', compact('dbQuery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dbQuery = DB::table('gebruikers')->where('id', $id)->first();
        return view('gebruikers.create', compact('dbQuery'));
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
        DB::table('gebruikers')->where('id', $id)->delete();

        $this->validate(request(), [
            'gebruiker' => 'required|max:128'
        ]);

        Gebruikers::create([
            'gebruiker'  => request('gebruiker'),
            'email'  => request('email'),
            'wachtwoord'  => request(bcrypt('wachtwoord'))
        ]);
        
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('gebruikers')->where('id', $id)->delete();
        return $this->index();
    }
}
