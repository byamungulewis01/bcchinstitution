<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index()
    {
        $collection = Policy::all();
        return view('admin.front-pages.policies', ['collection' => $collection]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:policies,title',
            'description' => 'required|string',
        ]);
        try {
            Policy::create($request->all());
            return back()->with('success', 'Policy Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|unique:policies,title,' . $id,
            'description' => 'required|string',
        ]);

        try {
            Policy::findorfail($id)->update($request->all());
            return back()->with('success', 'Policy Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Policy::findorfail($id)->delete();
        return back()->with('success', 'Policy Delete Successfully');
    }
}
