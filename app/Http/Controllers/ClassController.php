<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index(Request $request){
        $classes = DB::table('school_classes')->get();
        return view('admin.class.index',compact('classes'));
    }

    public function add(Request $request){
        if($request->getMethod()=="GET"){
            return view('admin.class.add');
        }else{
            $class = new SchoolClass();
            $class->name = $request->name;
            $class->save();
            return redirect()->back();
        }
    }
    public function edit(Request $request ,$class_id ){
        $class = SchoolClass::where('id',$class_id)->first();
        if($request->getMethod()=="GET"){
            return view('admin.class.edit',compact('class'));
        }else{
            $class->name = $request->name;
            $class->save();
            return redirect()->back();
        }
    }
    public function del($class_id)
    {
        SchoolClass::where('id', $class_id)->delete();
        return redirect()->back();
    }
}
