<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Telco_Package;
use App\Models\Application;
use App\Models\Coverage_check;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewApplication;
use App\Mail\NewCoverageCheck;

class TelcoController extends Controller
{
    public function index()
    {
        $Telco_Packages = Telco_Package::all();
        return view(".user.home", ["TelcoPackages" => $Telco_Packages]);
    }
    public function index_apply()
    {
        $Telco_Packages = Telco_Package::all();

        return view(".user.apply", ["TelcoPackages" => $Telco_Packages]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'email'  => 'required',
            'location'  => 'required',
            'contact' => ['required', 'unique:applications'],
            'package_id' => 'required',
            'message' => ''
        ]);


        $Application = Application::create($request->all());

        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];
        Mail::to($receiverEmailAddress)->send(new NewApplication($Application));
        return back()->with('success', 'Congratulations ! ! !  Your application has been submitted.');
    }

    public function store_coverage(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'email'  => 'required',
            'location'  => 'required',
            'contact' => ['required', 'unique:applications'],
            'message' => ''
        ]);

        $Coverage_Check = Coverage_Check::create($request->all());

        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];
        Mail::to($receiverEmailAddress)->send(new NewCoverageCheck($Coverage_Check));
        return back()->with('success', 'Congratulations ! ! !  Your application has been submitted.');
    }
}
