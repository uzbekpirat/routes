<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return'xamma maxsulotlar';
    }

    public function create(){
        return "yang maxsulot qo'shish";
    }
    public function show($id)
    {
        return "Mahsulot id: {$id}";
    }
    public function edit($id)
    {
        return "Taxrirlanadigan maxsulot: {$id}";
    }

    public function destroy($id)
    {
        return "Mahsulot o'chirildi, ID: {$id}";
    }

    public function search(Request $request)
    {
   
    return "Qidiruv natijalari";
    }
}
