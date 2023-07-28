<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return view('layout.Customer.form');
    }

    public function Customer(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required ',
                'address' => 'required ',
                'state' => 'required ',
                'country' => 'required ',
                'gander' => 'required', 'in:male,female,',
                'password_confir' => 'required|same:password',
            ]
        );
    }

    public function view()
    {
        $customers = Customer::all();
        return view('layout.customer.customer', compact(['customers']));
    }

    public function delete($id)
    {
        $customers = customer::find($id);

        if (!is_null($customers)) {
            $customers->delete();
        }
        return redirect('/Customers/view');
    }

    public function edit($id)
    {
        $customers = customer::find($id);

        return view('layout.customer.edit', compact('customers'));
    }

    public function Update(Request $request)
    {

        $params = $request->all();
        $customers = customer::find($params['id']);

        $customers->name = $params['name'];
        $customers->email = $params['email'];
        $customers->gender = $params['gender'];
        $customers->address = $params['address'];
        $customers->state = $params['state'];
        $customers->country = $params['country'];
        $customers->dob = $params['dob'];
        $customers->password = $params['password'];
        // $customers->status = $params['status'];
        $customers->save();
        return redirect('/Customers/view');
    }

    public function store(Request $request)
    {

        Customer::create([

            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'address' => $request->address,
            'state' => $request->state,
            'country' => $request->country,
            'dob' => $request->dob,
            'password' => $request->password,
            'status' => 1
        ]);
        return redirect('/Customers/view');
    }

    public function destroy(Request $request)
    {
        $customers_id = $request->input('customer_id');
        $customers = customer::find($customers_id);
        $customers->delete();
        return redirect('/Customers/view');
    }
}
