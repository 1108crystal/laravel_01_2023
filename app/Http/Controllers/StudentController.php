<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data=Student::get();
        // $data=Student::take(1)->get(); //一筆
        // dd($data);
        
        return view('student.index',['data'=>$data]);


        // return view('student.index',['name'=>'crystal','arg'=>'18']);

        // dd("HI");
        // return view('welcome');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // dd('hello create');
        return view('student.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Student;
        $data->name=$request->name;
        $data->age=$request->age;
        $data->tel=$request->tel;
        $data->email=$request->email;
        $data->save();
        return redirect()->route('student.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        dd("HI show excel");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * 自定義 excel output
     */
    public function excel()
    {
        //
        // dd("HI student excel");
        return view('student.excel');



    }

    public function ccc()
    {
        //
        // dd("HI student excel");
        return view('student.ddd');
    }

    public function childPage()
    {
        return view('child');
    }
}
