<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('crad.index', compact('products'));
    }

    // عرض صفحة الإضافة
    // public function create()
    // {
    //     return view('crad.create');
    // }

    // حفظ البيانات الجديدة
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Product::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')->with('success', 'تم الحفظ بنجاح');
    }

    // عرض صفحة التعديل
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('crad.edit', compact('product'));
    }

    // حفظ التعديل
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|max:255',
            'description' => 'nullable|string'
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;

        if ($request->filled('password')) {
            $product->password = bcrypt($request->password);
        }

        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success', 'تم التعديل بنجاح');
    }

    // حذف المنتج
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index')->with('success', 'تم الحذف بنجاح');
    }
}
