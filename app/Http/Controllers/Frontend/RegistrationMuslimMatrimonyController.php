<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Mail\AdminConfirmMail;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use App\Models\RegistrationMuslimMatrimony;

class RegistrationMuslimMatrimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'lookingfor' => 'required',
            'preferencecountry' => 'required',
            'name' => 'required',
            'education' => 'required',
            'parents_info' => 'required',
            'siblings_info' => 'required',
            'home_district' => 'required',
            'regforwho' => 'required',
            'permission'=> 'required',
            'bg_name' => 'required',
            'bg_lastname' => 'required',
            'street_address' => 'required',
            'phonenumber' => 'required',
            'citizenship' => 'required',
            'maritalstatus' => 'required',
            'email' => 'required',
            'membership' => 'required',
            'termscondition' => 'required',
            'image' => 'required|mimes:jpg,bmp,png,jpeg'
        ]);
        if($request->hasfile('image')){
            $file = $request->file ('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/userimage/',$filename);
        }
        $muslimmatrimony = RegistrationMuslimMatrimony::create([
            'lookingfor' => $request->lookingfor,
            'preferencecountry' => $request->preferencecountry,
            'name' => $request->name,
            'education' => $request->education,
            'parents_info' => $request->parents_info,
            'siblings_info' => $request->siblings_info,
            'home_district' => $request->home_district,
            'regforwho' => $request->regforwho,
            'permission' => $request->permission,
            'bg_name' => $request->bg_name,
            'bg_lastname' => $request->bg_lastname,
            'street_address' => $request->street_address,
            'addressline2' => $request->addressline2,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'phonenumber' => $request->phonenumber,
            'dateofbirth' => $request->dateofbirth,
            'heights' => $request->heights,
            'citizenship' => $request->citizenship,
            'maritalstatus' => $request->maritalstatus,
            'interesthobbies' => $request->interesthobbies,
            'typepartner' => $request->typepartner,
            'email' => $request->email,
            'membership' => $request->membership,
            'termscondition' => $request->termscondition,
            'image' => $filename

        ]);


        Mail::to("azhar.womenindigital@gmail.com")->send(new AdminConfirmMail($muslimmatrimony));
        Toastr::success('Registration Successfully Saved :)', 'Success');
        if($muslimmatrimony){
            return redirect()->back();
        }
        return redirect()->back()->withInput();
        
        
       

    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
