<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class AdminController extends Controller
{
   public function addview()
   {
    return view('admin.add_medicine');
   }
   public function upload(Request $request)
   {
    $medicine=new medicine;
    $image=$request->file;
    $imagename=time().'.'.$image->getClientoriginalExtension();
    $request->file->move('medicineimage',$imagename);
    $medicine->image=$imagename;
    $medicine->name=$request->name;
    $medicine->number=$request->number;
    $medicine->catagory=$request->catagory;
    $medicine->date=$request->date;
    $medicine->save();

    return redirect()->back()->with('message','Medicine Added Successfully');
   } 
}