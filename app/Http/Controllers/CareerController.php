<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $collection = Career::orderByDesc('id')->get();
        return view('admin.consultancy.carees', ['collection' => $collection]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:careers,title',
            'description' => 'required|string|max:200',
            'file' => 'required|mimes:png,jpg,jpeg'
        ]);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['image' => $imageName]);
        try {
            Career::create($request->all());
            $image->move(public_path('images/careers'), $imageName);

            return back()->with('success', 'Career Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|unique:careers,title,' . $id,
            'description' => 'required|string|max:200',
            'file' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/careers'), $imageName);
            $request->merge(['image' => $imageName]);
        }
        try {
            Career::findorfail($id)->update($request->all());
            return back()->with('success', 'Career Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Career::findorfail($id)->delete();
        return back()->with('success', 'Career Delete Successfully');
    }
}
