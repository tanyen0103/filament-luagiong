<?php

namespace App\Http\Controllers;

// use App\Filament\Resources\NhomluaResource;
use App\Models\Nhomlua;
use App\Http\Resources\Nhomlua as NhomluaResource;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class NhomluaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhomlua = Nhomlua::all();
        $arr = [
        'status' => true,
        'message' => "Danh sách nhóm lúa",
        'data'=>NhomluaResource::collection($nhomlua)
        ];
        return response()->json($arr, 200);
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
        $input = $request->all();
        $validator = Validator::make($input,[
            'name' =>'required|max:5',
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' => false,
                'message' => 'Lỗi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $nhomlua = Nhomlua::create($input);
        $arr = [
            'status' => true,
            'message' => "Nhóm lúa đã lưu thành công",
            'data' => new NhomluaResource($nhomlua)
        ];
        return response()->json($arr, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhomlua = Nhomlua::find($id);
        if(is_null($nhomlua)){
            $arr = [
                'success' => false,
                'message' => 'Không có nhóm lúa này',
                'data' => []
            ];
            return response()->json($arr, 200);
        }
        $arr = [
            'status' => true,
            'message' => 'Chi tiết nhóm lúa',
            'data' => new NhomluaResource($nhomlua)
        ];
        return response()->json($arr, 201);
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
    public function update(Request $request, Nhomlua $nhomlua)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'name' =>'required|max:5',
        ]);
        if ($validator->fails()) {
            $arr = [
                'success' =>false,
                'message' => 'Lôi kiểm tra dữ liệu',
                'data' => $validator->errors()
            ];
            return response()->json($arr, 200);
        }
        $nhomlua->name = $input['name'];
        $nhomlua->save();
        $arr = [
            'status' => true,
            'message' => 'Nhóm lúa cập nhật thành công',
            'data' => new NhomluaResource($nhomlua)
        ];
        return response() ->json($arr, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nhomlua $nhomlua)
    {
        $nhomlua->delete();
        $arr = [
            'status' => true,
            'message' =>'Nhóm lúa đã được xoá',
            'data' => [],
        ];
        return response()->json($arr, 200);
    }
}
