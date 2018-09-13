<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spa;

class SpaController extends Controller
{
    public function index()
    {
        return view('spa');
    }

    public function storePets(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'breed' => 'required',
            'birthday' => array(
                'required',
                'regex: /(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/'
            ),
            'gender' => 'required',
            'sterilised' => 'required',
            'weight' => 'required',
        ]);

        $pets = Spa::create($request->all());
        return redirect()->route('/payment');
    }

    public function storePayment(Request $request)
    {
        $this->validate(request(), [
            'holder' => 'required',
            'number' => array(
                'required',
                'regex: /\d{4}\-\d{4}\-\d{4}\-\d{4}/'
            ),
            'month' => 'required',
            'year' => 'required',
            'cvc' => 'required|digits:3'
        ]);

        $payment = Spa::create($request->all());
        return redirect()->route('/confirm');
    }

    public function create()
    {

    }
}
