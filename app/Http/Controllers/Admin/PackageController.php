<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Telco_Package;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class PackageController extends Controller
{
    public function index()
    {
        $Telco_Package = Telco_Package::all();
        return view('admin.packages.list', ['Telco_Package' => $Telco_Package]);
    }

    public function create()
    {
        return view('admin.packages.add');
    }

    public function doCreate(Request $request)
    {
        //Validation
        $inputs = $this->fieldValidate($request);

        Telco_Package::create($inputs);
        return redirect(route('packages.list'));
    }

    public function doDelete($id)
    {
        Telco_Package::find($id)->delete();
        return redirect(route('packages.list'));
    }


    public function show($id)
    {
        $data = Telco_package::find($id);
        return view('admin.packages.edit', ['data' => $data]);
    }

    public function doUpdate(Request $request, $id)
    { {
            $object = Telco_Package::find($id);

            $inputs = $this->fieldValidate($request, $object);

            $object->service_provider = $inputs['service_provider'];
            $object->package_id = $inputs['package_id'];
            $object->internet_speed = $inputs['internet_speed'];
            $object->description = $inputs['description'];
            $object->price = $inputs['price'];
            $object->discount = $inputs['discount'];
            $object->discounted_price = $inputs['discounted_price'];

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
