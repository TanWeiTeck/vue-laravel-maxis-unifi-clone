<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Telco_Package;
use App\Models\Application;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Application = Application::all();
        $Telco_Package = Telco_Package::all();
        $ApplicationData = Application::where("package_id", 'MX-030089')->get();

        return view('admin.dashboard', ["Application" => $Application, "Telco_Package" => $Telco_Package]);
    }
}
