<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Consultance;
use Illuminate\Http\Request;

class ConsultanceController extends Controller
{
    //index
    public function index()
    {
        $consultances = Consultance::orderByDesc('id')->get();
        return view('admin.consultancy.index', ['consultances' => $consultances]);
    }
    public function create()
    {
        $careers = Career::all();
        return view('admin.consultancy.create', compact('careers'));
    }
    public function edit($id)
    {
        $item = Consultance::findorfail($id);
        $careers = Career::all();
        return view('admin.consultancy.edit', compact('item','careers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:consultances,title',
            'description' => 'required',
            'career_id' => 'required',
            'image' => 'required|mimes:png,jpg'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        $request->merge(['imageName' => $imageName]);
        try {
            Consultance::create($request->all());
            $image->move(public_path('/images'), $imageName);

            return to_route('admin.consultance.index')->with('success', 'Consultance Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:consultances,title,' . $id,
            'image' => 'nullable|mimes:png,jpg',
            'career_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->merge(['imageName' => $imageName]);
            $image->move(public_path('/images'), $imageName);
        }
        if ($request->description != null) {
            $request->merge(['description' => $request->description]);
        } else {
            $request->merge(['description' => Consultance::find($id)->description]);
        }

        try {
            Consultance::findorfail($id)->update($request->all());
            return back()->with('success', 'Consultance Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Consultance::findorfail($id)->delete();
        return back()->with('success', 'Consultance Delete Successfully');
    }
}
