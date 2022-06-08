<?php

namespace App\Http\Controllers\User;

use App\Models\Package;
use App\Mail\NewGetOffer;
use App\Models\Get_Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class UnifiController extends Controller
{
    public function index()
    {
        $Packages = Package::where("service_provider", 'unifi')->get();
        return view('user.unifi.home', ['Packages' => $Packages]);
    }

    public function getoffer_doCreate(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'contact' => ['required', 'unique:Get_Offer'],
            'email'  => 'required',
            'address'  => 'required',
            'product_category' => 'required'

        ]);

        $Get_Offer = Get_Offer::create($request->all());

        $receiverEmailAddress = ['tanweiteck.twt@gmail.com'];
        Mail::to($receiverEmailAddress)->send(new NewGetOffer($Get_Offer));
        return back()->with('success', 'Congratulations ! ! !  Your application has been submitted.');
    }
}
