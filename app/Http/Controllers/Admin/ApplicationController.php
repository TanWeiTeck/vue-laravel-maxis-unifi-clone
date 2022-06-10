<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index()
    {
        $request = [
            'status' => '',
            'service_provider' => '',
            'type' => ''
        ];
        $status = [
            'pending' => 'pending',
            'called' => 'called',
            'follow-up' => 'follow-up',
            'closed' => 'closed',
            'cancelled' => 'cancelled',
            'resolved' => 'resolved',
        ];
        $Providers = [
            'maxis' => 'Maxis',
            'unifi' => 'Unifi',
            'time' => 'Time',
        ];

        $Types = [
            'application' => 'application',
            'coverage_check' => 'coverage_check',
            'get_offer' => 'get_offer',
        ];

        $Applications = Application::all();
        return view('admin.applications.list', ['Applications' => $Applications, 'status' => $status,  'Providers' => $Providers, 'Types' => $Types, 'request' => $request]);
    }

    public function create()
    {
        $Package = Package::all();
        $Providers = [
            'maxis' => 'Maxis',
            'unifi' => 'Unifi',
            'time' => 'Time',
        ];
        return view('admin.applications.add', ['Packages' => $Package,  'Providers' => $Providers]);
    }

    public function doCreate(Request $request)
    {
        $inputs = $this->fieldValidation($request);

        Application::create($inputs);
        return redirect(route('applications.list'));
    }

    public function doDelete($id)
    {
        Application::find($id)->delete();
        return redirect(route('applications.list'));
    }



    public function edit($id)
    {
        $status = [
            'pending' => 'pending',
            'called' => 'called',
            'follow-up' => 'follow-up',
            'closed' => 'closed',
            'cancelled' => 'cancelled',
            'resolved' => 'resolved',
        ];
        $Providers = [
            'maxis' => 'Maxis',
            'unifi' => 'Unifi',
            'time' => 'Time',
        ];
        $data = Application::find($id);
        $packages = Package::all();
        return view('admin.applications.edit', ['data' => $data, 'packages' => $packages, 'status' => $status,  'Providers' => $Providers]);
    }




    public function doUpdate(Request $request, $id)
    { {
            $object = Application::find($id);

            $inputs = $this->fieldValidation($request, $object);

            $object->name = $inputs['name'];
            $object->email = $inputs['email'];
            $object->contact = $inputs['contact'];
            $object->address1 = $inputs['address1'];
            $object->address2 = $inputs['address2'];
            $object->postcode = $inputs['postcode'];
            $object->city = $inputs['city'];
            $object->service_provider = $inputs['service_provider'];
            $object->package_id = $inputs['package_id'];
            $object->message = $inputs['message'];
            $object->status = $inputs['status'];
            $object->remark = $inputs['remark'];

            $object->save();
            return redirect(route('applications.list'));
        }
    }

    public function fieldValidation(Request $request, $object = null)
    {
        $inputs = null;

        $inputs = $request->validate(
            array_merge(
                [
                    'type' => 'required|min:3|max:30',
                    'name' => 'required|min:3|max:50',
                    'email'  => 'required|max:30',
                    'address1'  => 'required',
                    'address2'  => 'nullable',
                    'postcode'  => 'required',
                    'city'  => 'required',
                    'service_provider'  => 'required',
                    'package_id' => 'required',
                    'message' => 'nullable',
                    'status' => 'nullable',
                    'remark' => 'nullable',
                ],
                [
                    'address1.required' => "The address fill is required",
                ],
                ($object) ? [
                    'contact' => [
                        'required',  'max:200',
                        Rule::unique('applications')->where('type', $request->type)->ignore($object->id)->where(function ($query) {
                            return $query;
                        })
                    ],
                ] : [
                    'contact' => [
                        'required',  'max:200',
                        Rule::unique('applications')->where('type', $request->type)->where(function ($query) {
                            return $query;
                        })
                    ],
                ],
            )
        );
        return $inputs;
    }


    public function filter(Request $request)
    {
        // dd($request['status']);
        $status = [
            'pending' => 'pending',
            'called' => 'called',
            'follow-up' => 'follow-up',
            'closed' => 'closed',
            'cancelled' => 'cancelled',
            'resolved' => 'resolved',
        ];
        $Providers = [
            'maxis' => 'Maxis',
            'unifi' => 'Unifi',
            'time' => 'Time',
        ];
        $Types = [
            'application' => 'application',
            'coverage_check' => 'coverage_check',
            'get_offer' => 'get_offer',
        ];

        $filteredApplications = Application::where('status', 'LIKE', '%' . $request['status'] . '%')
            ->where('service_provider', 'LIKE', '%' . $request['service_provider'] . '%')
            ->where('type', 'LIKE', '%' . $request['type'] . '%')->get();
        return view('admin.applications.list', ['Applications' => $filteredApplications, 'status' => $status,  'Providers' => $Providers, 'request' => $request, 'Types' => $Types]);
    }
}
