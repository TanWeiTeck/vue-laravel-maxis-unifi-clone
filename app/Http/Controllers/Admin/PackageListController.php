<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Telco_Package;
use App\Http\Controllers\Controller;

class PackageListController extends Controller
{
    public function index()
    {
        $Telco_Package = Telco_Package::all();
        return view('admin.package_list', ['Telco_Package' => $Telco_Package]);
    }

    public function add()
    {
        return view('admin.addpackage');
    }

    public function create(Request $request)
    {
        //Validation
        $this->validate($request, [
            'service_provider' => 'required',
            'package_id'  => ['required', 'unique:telco_packages'],
            'internet_speed'  => 'required',
            'description' => 'required',
            'price' => ['required', 'integer'],
            'discount' => 'required',
            'discounted_price' => ['required', 'integer']
        ]);

        Telco_Package::create($request->all());
        return redirect('packagelist');
    }

    public function delete($id)
    {
        Telco_Package::find($id)->delete();
        return redirect('packagelist');
    }


    public function edit($id)
    {
        $data = Telco_package::find($id);
        return view('admin.edit', ['data' => $data]);
    }

    public function update(Request $request)
    { {
            $this->validate($request, [
                'service_provider' => 'required',
                'package_id'  => ['required'],
                'internet_speed'  => 'required',
                'description' => 'required',
                'price' => ['required', 'integer'],
                'discount' => 'required',
                'discounted_price' => ['required', 'integer']
            ]);

            $data = Telco_Package::find($request->id);
            $data->service_provider = $request->service_provider;
            $data->package_id = $request->package_id;
            $data->internet_speed = $request->internet_speed;
            $data->description = $request->description;
            $data->price = $request->price;
            $data->discount = $request->discount;
            $data->discounted_price = $request->discounted_price;

            $data->save();
            return redirect('packagelist');
        }
    }
}
