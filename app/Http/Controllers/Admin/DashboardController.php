<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $Applications = array(
            'all' => Application::all(),
            'maxis' => Application::where(['service_provider' => 'maxis', 'type' => 'application'])->get(),
            'unifi' => Application::where(['service_provider' => 'unifi', 'type' => 'application'])->get(),
            'other' => Application::whereNull(['package_id'])->get(),
            'allByMonth' => Application::select(DB::raw("(COUNT(*)) as count"), DB::raw("MONTH(created_at) as month"))
                ->groupBy('month')
                ->get(),
            'maxisByMonth' => Application::where("service_provider", 'maxis')->select(DB::raw("(COUNT(*)) as count"), DB::raw("MONTH(created_at) as month"))
                ->groupBy('month')
                ->get(),
            'unifiByMonth' => Application::where("service_provider", 'unifi')->select(DB::raw("(COUNT(*)) as count"), DB::raw("MONTH(created_at) as month"))
                ->groupBy('month')
                ->get()
        );
        // dd($Application['all']);
        $Packages = array(
            'all' => Package::all(),
            'maxis' => Package::where('service_provider', 'maxis')->get(),
            'unifi' => Package::where('service_provider', 'unifi')->get(),
        );

        return view('admin.dashboard', ["Applications" => $Applications, "Packages" => $Packages]);
    }
}
