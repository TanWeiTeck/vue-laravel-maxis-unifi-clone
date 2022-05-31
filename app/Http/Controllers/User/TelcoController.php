<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Package;
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
        $Package = Package::active()->get();
        return view(".user.home", ["TelcoPackages" => $Package]);
    }
    public function index_apply()
    {
        $Package = Package::active()->get();

        return view(".user.apply", ["TelcoPackages" => $Package]);
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
