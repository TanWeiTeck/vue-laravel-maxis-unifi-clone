<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.list', ['packages' => $packages]);
    }

    public function create()
    {
        $providers = [
            'maxis' => 'Maxis',
            'unifi' => 'Unifi',
            'time' => 'Time',
        ];

        return view('admin.packages.add', ['providers' => $providers]);
    }

    public function doCreate(Request $request)
    {
        //Validation
        $inputs = $this->fieldValidate($request);

        Package::create($inputs);
        return redirect(route('packages.list'));
    }

    public function doDelete($id)
    {
        Package::find($id)->delete();
        return redirect(route('packages.list'));
    }


    public function show($id)
    {
        $providers = [
            'maxis' => 'Maxis',
            'unifi' => 'Unifi',
            'time' => 'Time',
        ];


        $data = Package::find($id);

        return view('admin.packages.edit', ['data' => $data, 'providers' => $providers]);
    }

    public function doUpdate(Request $request, $id)
    { {
            $object = Package::find($id);

            $inputs = $this->fieldValidate($request, $object);

            $object->service_provider = $inputs['service_provider'];
            $object->package_id = $inputs['package_id'];
            $object->internet_speed = $inputs['internet_speed'];
            $object->description = $inputs['description'];
            $object->price = $inputs['price'];
            $object->discount = $inputs['discount'];
            $object->discounted_price = $inputs['discounted_price'];
            $object->is_active = $inputs['is_active'];

            $object->save();

            return redirect(route('packages.list'));
        }
    }

    public function fieldValidate(Request $request,  $object = null)
    {
        $inputs = null;

        $inputs = $request->validate(
            array_merge([
                'service_provider' => 'required|max:250',
                'internet_speed' => 'required|max:250',
                'description' => 'required|max:250',
                'price' => 'required|integer',
                'discount' => 'required|integer',
                'discounted_price' => 'required|integer',
                'is_active' => 'required|boolean',
            ], ($object) ? [
                'package_id' => [
                    'required',  'max:200',
                    Rule::unique('telco_packages')->ignore($object->id)->where(function ($query) {
                        return $query;
                    })
                ],
            ] : [
                'package_id' => [
                    'required',  'max:200',
                    Rule::unique('telco_packages')->where(function ($query) {
                        return $query;
                    })
                ],
            ])
        );
        return $inputs;
    }
}
