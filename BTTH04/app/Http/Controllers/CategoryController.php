<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // truy van
        $categories = Category::all();
        // do ra views
        return view('categories.index',compact('categories'));
    }
    public function create(){
        echo "Create from Category Controller";

    }
    //them su phu thuoc
    //xử lý việc lưu dữ liệu từ request gửi lên vào cơ sở dữ liệu.
//Khi một request POST gửi dữ liệu từ client lên server
// phương thức store được gọi để xử lý request đó. Tham số $request là một đối tượng Request trong Laravel
// chứa thông tin về request như dữ liệu form, header, file tải lên, vv.
    public function store(Request $request){

    }

//hiển thị thông tin chi tiết của một đối tượng dựa trên giá trị $id được truyền vào.
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
