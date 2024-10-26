<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function index()
    {
        $collection = Testimony::orderByDesc('id')->get();
        return view('admin.front-pages.testimonies', ['collection' => $collection]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
            'file' => 'required|mimes:png,jpg,jpeg',
            'position' => 'required|string',
        ]);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['image' => $imageName]);
        try {
            Testimony::create($request->all());
            $image->move(public_path('images/testimonies'), $imageName);
            return back()->with('success', 'Testimony Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
            'file' => 'nullable|mimes:png,jpg,jpeg',
            'position' => 'required|string',
        ]);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/testimonies'), $imageName);
            $request->merge(['image' => $imageName]);
        }

        try {
            Testimony::findorfail($id)->update($request->all());
            return back()->with('success', 'Testimony Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Testimony::findorfail($id)->delete();
        return back()->with('success', 'Testimony Delete Successfully');
    }
}
