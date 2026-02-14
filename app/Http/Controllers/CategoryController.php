<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Danh sách
    public function index()
    {
        $categories = Category::where('is_delete', 0)->get();
        return view('category.index', compact('categories'));
    }

    // Form thêm
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('category.create', compact('categories'));
    }

    // Lưu
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    // Form sửa
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')->get();
        return view('category.edit', compact('category', 'categories'));
    }

    // Cập nhật
    public function update(Request $request, $id)
    {
        Category::findOrFail($id)->update($request->all());
        return redirect()->route('category.index');
    }

    // Xóa mềm
    public function destroy($id)
    {
        Category::findOrFail($id)->update(['is_delete' => 1]);
        return redirect()->route('category.index');
    }
}
