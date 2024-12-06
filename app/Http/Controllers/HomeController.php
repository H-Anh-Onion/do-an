<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage () {
        return view('home');
    }

    public function member () {
        $allmember = User::all();

        return view('member', ["thanhvien" => $allmember]);
    }

    public function deleteMember ($id) {
        User::destroy($id);
    }
}
