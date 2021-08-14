<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $data = Task::where('user_id', $user_id)->orderBy('dead_line', 'asc')->get();
        return view('Task.index', compact('data'));
    }

    public function create($id, Request $request)
    {
        return view('Task.create');
    }

    public function store($id, Request $request)
    {
        Task::create($request->input());
        return redirect()->route('home');
    }

    public function show($id, Request $request)
    {
        $data = Task::where('id', $id)->get()->first();
        return view('Task.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Task::where('id', $id)->get()->first();
        return view('Task.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = Task::find($id);
        $data->fill($request->all());
        $data->save();

        return redirect()->route('home');
    }

    public function remove($id, Request $request)
    {
        Task::find($id)->delete();
        return redirect()->route('home');
    }

    public function action($id, Request $request)
    {
        $check = Task::find($id);


        if($check->check == 'check')
        {
            Task::where('id', $id)->update(['check' => "uncheck"]);
        }
        elseif($check->check == 'uncheck')
        {
            Task::where('id', $id)->update(['check' => "check"]);
        }
        $data = Task::all();
        return view('Task.index', compact('data'));
    }


}
