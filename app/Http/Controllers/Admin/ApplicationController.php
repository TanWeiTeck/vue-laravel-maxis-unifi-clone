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
        $applications = Application::all();

        return view('admin.applications.list', ['applications' => $applications]);
    }

    public function create()
    {
        $Package = Package::all();
        return view('admin.applications.add', ['Packages' => $Package]);
    }

    public function doCreate(Request $request)
    {
        $inputs = $this->fieldValidation($request);

        Application::create($inputs);
        return redirect(route('applications.list'));
    }



    // public function doCreate(Request $request)
    // {
    //     //Validation
    //     $this->validate($request, [
    //         'name' => ['required', 'min:3'],
    //         'email'  => 'required',
    //         'location'  => 'required',
    //         'contact' => ['required', 'unique:applications'],
    //         'package_id' => 'required',
    //         'message' => '',
    //     ]);

    //     Application::create($request->all());
    //     return redirect('applicationlist');
    // }

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
        $data = Application::find($id);
        $packages = Package::all();
        return view('admin.applications.edit', ['data' => $data, 'packages' => $packages, 'status' => $status]);
    }




    public function doUpdate(Request $request, $id)
    { {
            $object = Application::find($id);

            $inputs = $this->fieldValidation($request, $object);

            $object->name = $inputs['name'];
            $object->email = $inputs['email'];
            $object->location = $inputs['location'];
            $object->contact = $inputs['contact'];
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
            array_merge([
                'name' => 'required|min:3|max:30',
                'email'  => 'required|max:30',
                'location'  => 'required|integer|max:999999',
                'package_id' => 'required',
                'message' => 'nullable',
                'status' => 'nullable',
                'remark' => 'nullable',
            ], ($object) ? [
                'contact' => [
                    'required',  'max:200',
                    Rule::unique('applications')->ignore($object->id)->where(function ($query) {
                        return $query;
                    })
                ],
            ] : [
                'contact' => [
                    'required',  'max:200',
                    Rule::unique('applications')->where(function ($query) {
                        return $query;
                    })
                ],
            ])
        );
        return $inputs;
    }
}
