<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'status' => true,
            'message' => 'Data sensor ditemukan',
            'data' => null,
            'errors' => null,
        ];
        return response()->json($data, 200);
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
        $data = [
            'status' => true,
            'message' => 'Response post method sensor ditemukan',
            'data' => null,
            'errors' => null,
        ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'status' => true,
            'message' => 'Data sensor ditemukan by id : ' . $id,
            'data' => null,
            'errors' => null,
        ];
        return response()->json($data, 200);
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
        $data = [
            'status' => true,
            'message' => 'Response patch method id ' . $id,
            'data' => null,
            'errors' => null,
        ];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = [
            'status' => true,
            'message' => 'Response delete method id ' . $id,
            'data' => null,
            'errors' => null,
        ];
        return response()->json($data);
    }
}
