<?php

namespace App\Http\Controllers\Admin\RegCategory;

use Illuminate\Http\Request;
use App\Models\MaritalStatus;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class MaritalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = MaritalStatus::latest()->get();
        return view('backend.reg_categories.maritalstatus.maritalstatus_index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.reg_categories.maritalstatus.maritalstatus_create');
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
            'maritalstatus' => 'required|unique:marital_statuses,maritalstatus',
        ]);
        $maritalstatus = new MaritalStatus();
        $maritalstatus->maritalstatus = $request->maritalstatus;
        $maritalstatus->save();
        Toastr::success('Maritalstatus Successfully Created :)', 'Success');
        return redirect()->route('admin.maritalstatus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = MaritalStatus::find($id);
        return view('backend.reg_categories.maritalstatus.maritalstatus_show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MaritalStatus::find($id);
        return view('backend.reg_categories.maritalstatus.maritalstatus_edit', compact('data'));
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
            'maritalstatus' => 'required|unique:marital_statuses,maritalstatus',
        ]);
        $maritalstatus = MaritalStatus::find($id);
        $maritalstatus->maritalstatus = $request->maritalstatus;
        $maritalstatus->save();
        Toastr::success('Maritalstatus Successfully Updated :)', 'Success');
        return redirect()->route('admin.maritalstatus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MaritalStatus::find($id)->delete();
        Toastr::success('Maritalstatus Successfully Deleted :)', 'Success');
        return redirect()->back();
    }
}
