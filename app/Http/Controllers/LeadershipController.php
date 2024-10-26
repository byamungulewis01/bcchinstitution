<?php

namespace App\Http\Controllers;

use App\Models\Leadership;
use Illuminate\Http\Request;

class LeadershipController extends Controller
{
    public function index()
    {
        $collection = Leadership::orderByDesc('id')->get();
        return view('admin.front-pages.leaders', ['collection' => $collection]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string|max:30',
            'description' => 'required|string|max:200',
            'file' => 'required|mimes:png,jpg,jpeg'
        ]);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['image' => $imageName]);
        try {
            Leadership::create($request->all());
            $image->move(public_path('images/leaders'), $imageName);

            return back()->with('success', 'Leader Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string|max:30',
            'description' => 'required|string|max:200',
            'file' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/leaders'), $imageName);
            $request->merge(['image' => $imageName]);
        }
        try {
            Leadership::findorfail($id)->update($request->all());
            return back()->with('success', 'Leader Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Leadership::findorfail($id)->delete();
        return back()->with('success', 'Leader Delete Successfully');
    }
}
