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
use Illuminate\Validation\Rule;


class TelcoController extends Controller
{
    public function maxis_index()
    {
        $Package = Package::active()->where("service_provider", 'maxis')->get();
        return view(".user.maxis.home", ["TelcoPackages" => $Package]);
    }
    public function maxis_apply()
    {
        $Package = Package::active()->where("service_provider", 'maxis')->get();

        return view(".user.maxis.apply", ["TelcoPackages" => $Package]);
    }

    public function unifi_index()
    {
        $Packages = Package::where("service_provider", 'unifi')->get();
        return view('user.unifi.home', ['Packages' => $Packages]);
    }

    public function unifi_apply()
    {
        $Package = Package::active()->where("service_provider", 'unifi')->get();

        return view(".user.unifi.apply", ["TelcoPackages" => $Package]);
    }
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'type' => '',
                'name' => ['required', 'min:3'],
                'contact' => ['required', Rule::unique('applications')->where('type', $request->type)],
                'email'  => 'required',
                'address1'  => 'required',
                'address2'  => '',
                'postcode' => ['required', 'integer'],
                'city' => 'required',
                'service_provider' => 'required',
                'product_category' => 'required_if:type,get_offer',
                'package_id' => 'required_if:type,application',
                'message' => '',

            ],
            [
                'address1.required' => "The address fill is required",
                'product_category.required_if' => "Please select your interest",
            ]
        );

        $Application = Application::create($request->all());

        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];
        Mail::to($receiverEmailAddress)->send(new NewApplication($Application));
        return back()->with('success', 'Congratulations ! ! !  Your application has been submitted.');
    }

    public function coverage_doCreate(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'email'  => 'required',
            'location'  => 'required',
            'contact' => ['required', 'unique:Coverage_check'],
            'message' => ''
        ]);

        $Coverage_Check = Coverage_Check::create($request->all());

        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];
        Mail::to($receiverEmailAddress)->send(new NewCoverageCheck($Coverage_Check));
        return back()->with('success', 'Congratulations ! ! !  Your application has been submitted.');
    }
}
