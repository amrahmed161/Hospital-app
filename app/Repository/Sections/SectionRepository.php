<?php


namespace App\Repository\Sections;
use App\Interface\Sections\SectionRepositoryInterface;
use App\Models\section;

class SectionRepository implements SectionRepositoryInterface
{
    public function index(){
        $sections = section::all();
        return view('Dashboard.Sections.index',compact('sections'));
    }
    public function store($request)
    {
        Section::create([
            'name' => $request->input('name'),
        ]);
        session()->flash('add');
        return redirect()->route('sections.index');
    }

    public function update($request)
    {
        $section = section::findOrFail($request->id);
        $section->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('sections.index');
    }

    public function destroy($request){
        Section::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('sections.index');
    }
    public function show($id){
        $doctors = section::findOrFail($id)->doctors;
        $section = section::findOrFail($id);
        return view ('Dashboard.Sections.show_doctors',compact('doctors','section'));
    }
}
