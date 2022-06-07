<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $Application = Application::all();
        $packages = Package::all();
        $applicationsByMonth = Application::select(DB::raw("(COUNT(*)) as count"), DB::raw("MONTH(created_at) as month"))
            ->groupBy('month')
            ->get();

        return view('admin.dashboard', ["Application" => $Application, "packages" => $packages, 'applicationByMonth' => $applicationsByMonth]);
    }
}
