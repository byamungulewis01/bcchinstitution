<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //index
    public function index()
    {
        $collection = Partner::orderByDesc('id')->get();
        return view('admin.front-pages.partners', ['collection' => $collection]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'file' => 'required|mimes:png,jpg,jpeg'
        ]);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
        }
        try {
            Partner::create(['name' => $request->name, 'image' => $imageName]);
            $image->move(public_path('images/partner'), $imageName);

            return back()->with('success', 'Partner Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'file' => 'nullable|mimes:png,jpg'
        ]);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/partner'), $imageName);
        }

        try {
            Partner::findorfail($id)->update(['name' => $request->name, 'image' => $imageName]);
            return back()->with('success', 'Partner Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Partner::findorfail($id)->delete();
        return back()->with('success', 'Partner Delete Successfully');
    }
}
