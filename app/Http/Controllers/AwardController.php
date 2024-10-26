<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function index()
    {
        $collection = Award::orderByDesc('id')->get();
        return view('admin.front-pages.awards', ['collection' => $collection]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
            'file' => 'required|mimes:pdf'
        ]);
        if ($request->hasFile('file')) {
            $pdf = $request->file('file');
            $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
        }
        $request->merge(['file_url' => $pdfName]);
        try {
            Award::create($request->all());
            $pdf->move(public_path('files/awards'), $pdfName);
            return back()->with('success', 'Award Added Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'file' => 'nullable|mimes:pdf'
        ]);

        if ($request->hasFile('file')) {
            $pdf = $request->file('file');
            $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('files/awards'), $pdfName);
            $request->merge(['file_url' => $pdfName]);
        }
        try {
            Award::findorfail($id)->update($request->all());
            return back()->with('success', 'Award Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Some things went wrong try again' . $th->getMessage());
        }
    }
    public function destroy($id)
    {
        Award::findorfail($id)->delete();
        return back()->with('success', 'Award Delete Successfully');
    }
}
