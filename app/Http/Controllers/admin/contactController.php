<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    public function contact()
    {
        $data = contact::get();

        return view('dashboard.admin.contact', compact('data'));
    }
}
