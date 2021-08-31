<?php

namespace App\Http\Controllers\Admin\RegCategory;

use App\Models\LookingFor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class LookingForController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = LookingFor::latest()->get();
        return view('backend.reg_categories.lookingfor.looking_index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reg_categories.lookingfor.looking_create');
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
            'lookingforname' => 'required|unique:looking_fors,lookingforname',
        ]);
        $lookingfor = new LookingFor();
        $lookingfor->lookingforname = $request->lookingforname;
        $lookingfor->save();
        Toastr::success('Looking For Successfully Created :)', 'Success');
        return redirect()->route('admin.looking.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = LookingFor::find($id);
        return view('backend.reg_categories.lookingfor.looking_show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = LookingFor::find($id);
        return view('backend.reg_categories.lookingfor.looking_edit', compact('data'));
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
            'lookingforname' => 'required|unique:looking_fors,lookingforname',
        ]);
        $lookingfor = LookingFor::find($id);
        $lookingfor->lookingforname = $request->lookingforname;
        $lookingfor->save();
        Toastr::success('Looking For Successfully Updated :)', 'Success');
        return redirect()->route('admin.looking.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LookingFor::find($id)->delete();
        Toastr::success('Looking For Successfully Deleted :)', 'Success');
        return redirect()->back();
        
    }
}
