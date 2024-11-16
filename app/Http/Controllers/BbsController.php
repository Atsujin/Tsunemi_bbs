<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bbs;

class BbsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:20'],
            'title' => ['required', 'max:20'],
            'body' => ['required', 'max:255']
        ]);

        $bbs = new Bbs;
        $bbs->name = $request->name;
        $bbs->title = $request->title;
        $bbs->body = $request->body;
        $bbs->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $bbss = Bbs::orderBy('created_at', 'desc')->paginate(20);

        return view('bbs.show', compact('bbss'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bbs = Bbs::find($id);
        $bbs->delete();

        return redirect('/');
    }
}
