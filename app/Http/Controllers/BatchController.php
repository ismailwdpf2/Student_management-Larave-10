<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view ('Admin.batch.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Admin.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $batches =  $request->all();
        Batch::create($batches);
        return redirect()->route('batch.index')->with('success', "Successfully added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches = Batch::find($id);
        return view('Admin.batch.show', compact('batches'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches = Batch::find($id);
        return view('Admin.batch.edit', compact('batches'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batch $batch)
    {
        // $batches = Batch::find($id);
        // $input = $request->all();
        // $batches->update($input);
        $batch->update($request->all());
        return redirect()->route('batch.index')->with('warning', 'Batch updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->route('course.index')->with('danger', 'Course information deleted');
    }
}
