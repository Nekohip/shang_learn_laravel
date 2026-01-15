<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            ["id" => 1, "name" => "amy", "age" => 3],
            ["id" => 2, "name" => "bob", "age" => 5],
            ["id" => 3, "name" => "cat", "age" => 2]
        ];
        //在前端呼叫時，要用"$datas"
        return view("fox.index", ["datas" => $data]);
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

    public function f1()
    {
        return view("fox.f1");
    }

    public function f2()
    {
        return view("fox.f2");
    }

    public function f3()
    {
        return view("fox.f3");
    }
}
