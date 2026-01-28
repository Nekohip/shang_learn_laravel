<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cat;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = DB::select("select * from students");
        // dd($data);
        // foreach($data as $key=>$value)
        // {
        //     echo"ID: " . $value->id . "Name: " . $value->name . "Mobile: " . $value->mobile . "<br>";
        // }
        
        //get() == fetchAll()
        $data = Cat::where("name", "apple")->get();
        dd($data);

        //把$data做成datas陣列，傳到car/index
        // return view("car.index", ["datas"=>$data]);
        return view("car.index")->with("datas", $data);
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
}
