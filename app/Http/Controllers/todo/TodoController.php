<?php

namespace App\Http\Controllers\todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('todo.app');
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
            $request->validate([
                'task' => 'required|min:3|max:200',
            ],[
                'task.required'=>'input harus di isi',
                'task.min'=>'input harus minimal 3 huruf',
                'task.max'=>'input harus maximal 200 huruf',

            ]);

            $data=[
                'task' =>$request->input('task')
            ];

            
            try {
                Todo::create($data);
                return redirect('/todo')->with('success', 'Data task berhasil disimpan');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Gagal menyimpan: ' . $e->getMessage());
            }

        }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
