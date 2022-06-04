<?php

namespace App\Http\Controllers\User;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnifiController extends Controller
{
    public function index()
    {
        $Packages = Package::where("service_provider", 'unifi')->get();
        // dd($Packages);
        return view('user.unifi.home', ['Packages' => $Packages]);
    }
}
