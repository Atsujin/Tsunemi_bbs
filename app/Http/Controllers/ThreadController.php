<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThreadRequest;
use App\Http\Requests\StoreBbsRequest;
use Illuminate\Http\Request;
use App\Models\Thread;
use App\Models\Bbs;
use Illuminate\Support\Facades\Auth;


class ThreadController extends Controller
{
    public function create()
    {
        return view('thread.create');
    }

    public function store(StoreThreadRequest $request)
    {
        $thread = new Thread;
        $thread->threadSave($request);

        // $thread->name = $request->name;
        // $thread->title = $request->title;
        // $thread->save();

        return redirect('/')->with('success', 'スレッドを作成しました');
    }

    public function show($id)
    {
        $thread = Thread::find($id);
        $bbss = Bbs::where('thread_id', $id)->orderBy('created_at', 'desc')->paginate(20);
        $auth = Auth::user();
       
        return view('thread.show', compact('thread', 'bbss', 'auth'));
    }

    public function edit($id)
    {
        $thread = Thread::find($id);
        return view('thread.edit', compact('thread'));
    }

    public function update(StoreBbsRequest $request, $id)
    {
        $bbs = new Bbs;
        $bbs->name = $request->name;
        $bbs->title = $request->title;
        $bbs->body = $request->body;
        $bbs->thread_id = $id;
        $bbs->save();

        return redirect()->route('thread.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $bbs = Bbs::find($id);
        $bbs->delete();

        return redirect()->back();
    }




}
