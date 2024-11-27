<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBbsRequest;
use Illuminate\Http\Request;
use App\Models\Bbs;
use Illuminate\Support\Facades\Auth;
use App\Models\Thread;


class BbsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $threads = Thread::all();
        $auth = Auth::user();

        return view('bbs.index', compact('threads', 'auth'));
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
    public function store(StoreBbsRequest $request)
    {
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
        $auth = Auth::user();

        return view('bbs.show', compact('bbss', 'auth'));
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
