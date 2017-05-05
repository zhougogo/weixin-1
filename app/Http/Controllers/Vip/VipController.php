<?php

namespace App\Http\Controllers\Vip;

use App\Models\Vip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipController extends Controller
{
    public function index()
    {
        return view('vip');
    }

    public function create(Request $request)
    {

        $result = Vip::create($request->all());
        return view('submitSuess',compact('result'));
    }
}
