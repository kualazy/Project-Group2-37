<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends Controller
{
    public function index(){
        $promotions = Promotion::get();
        return view('admin.admin.promotion', [
            'promotions' => $promotions
        ]);
    }

    public function add()
    {
        return view('admin.admin.addpromotion');
    }

    public function edit($id)
    {
        $promotion = Promotion::find($id);
        return view('admin.admin.editpromotion', [
            'promotion' => $promotion
        ]);
    }

    public function store(Request $request)
    {

        $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/public/promotions', $image_name);
        $path = '/storage/promotions/' . $image_name;

        Promotion::create([
            'name' => $request->name,
            'content' => $request->content,
            'image' => $path
        ]);

        return redirect()->route('admin.promotion');
    }

    public function update(Request $request, $id)
    {


        $promotion = Promotion::find($id);

        $promotion->update([
            'name' => $request->name,
            'content' => $request->content,
        ]);

        if ($request->file('image')) {
            $image_name = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/public/promotions', $image_name);
            $path = '/storage/promotions/' . $image_name;

            $promotion->update([
                'image' => $path
            ]);
        }

        return redirect()->route('admin.promotion');
    }

    public function delete($id)
    {
        Promotion::find($id)->delete();
        return redirect()->back();
    }
    
}
