<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // $data=[
        //     'name'=>'crystal',
        //     'arg'=>'18'
        // ];
        $data=[
            ['name'=>'amy',
            'mobile'=>'0911-111-111'],
            ['name'=>'bob',
            'mobile'=>'092-222-222'],
            ['name'=>'cat',
            'mobile'=>'0933-333-333'],
            ['name'=>'dig',
            'mobile'=>'0944-444-444'],         
        ];

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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
