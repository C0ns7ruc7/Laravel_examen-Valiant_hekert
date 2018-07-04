<?php

namespace App\Http\Controllers;

use App\Berichten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerichtenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbQuery = DB::table('berichten')->get();
        return view('berichten.index', compact('dbQuery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berichten.create');
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
            'titel' => 'required|max:128'
        ]);

        Task::create([
            'titel'  => request('title'),
            'content'  => request('body')
        ]);

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berichten  $berichten
     * @return \Illuminate\Http\Response
     */
    public function show($berichten)
    {
        $dbQuery = DB::table('berichten')->where('id', $berichten)->first();
        return view('berichten.show', compact('dbQuery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berichten  $berichten
     * @return \Illuminate\Http\Response
     */
    public function edit($berichten)
    {
        $dbQuery = DB::table('berichten')->where('id', $berichten)->first();
        return view('berichten.create', compact('dbQuery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berichten  $berichten
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berichten $berichten)
    {
        DB::table('gebruikers')->where('id', $berichten)->delete();

        $this->validate(request(), [
            'titel' => 'required|max:128'
        ]);

        Task::create([
            'titel'  => request('title'),
            'content'  => request('body')
        ]);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berichten  $berichten
     * @return \Illuminate\Http\Response
     */
    public function destroy($berichten)
    {
        DB::table('gebruikers')->where('id', $berichten)->delete();
        return $this->index();
    }
}
