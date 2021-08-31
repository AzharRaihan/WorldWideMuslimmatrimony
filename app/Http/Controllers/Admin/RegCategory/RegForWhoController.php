<?php

namespace App\Http\Controllers\Admin\RegCategory;

use App\Models\RegForWho;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class RegForWhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = RegForWho::latest()->get();
        return view('backend.reg_categories.regforwho.regwho_index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reg_categories.regforwho.regwho_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'regforwho' => 'required|unique:reg_for_whos,regforwho',
        ]);
        $regforwho = new RegForWho();
        $regforwho->regforwho = $request->regforwho;
        $regforwho->save();
        Toastr::success('Register For Who Successfully Created :)', 'Success');
        return redirect()->route('admin.regforwho.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = RegForWho::find($id);
        return view('backend.reg_categories.regforwho.regwho_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = RegForWho::find($id);
        return view('backend.reg_categories.regforwho.regwho_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'regforwho' => 'required|unique:reg_for_whos,regforwho',
        ]);
        $regforwho = RegForWho::find($id);
        $regforwho->regforwho = $request->regforwho;
        $regforwho->save();
        Toastr::success('Register For Who Successfully Updated :)', 'Success');
        return redirect()->route('admin.regforwho.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RegForWho::find($id)->delete();
        Toastr::success('Register For Who Successfully Deleted :)', 'Success');
        return redirect()->back();
    }
}
