<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "สวัสดีจากหน้า User index";
    }
    public function show($id)
    {
        return "เธอคือ id 1 $id";
    }
    public function update($id)
    {
        return "กำลังอัพเดต 1 $id";
    }
}
