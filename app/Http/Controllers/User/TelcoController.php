<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Application;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewApplication;
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
    public function doCreate(Request $request)
    {
        $inputs = $this->fieldValidation($request);

        $Application = Application::create($inputs);

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new NewApplication($Application));
        return back()->with('success', 'Congratulations ! ! !  Your application has been submitted.');
    }

    public function fieldValidation(Request $request)
    {
        $inputs = $request->validate(
            array_merge(
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
                ]
            )
        );

        return $inputs;
    }
}
