<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function view(Request $request)
    {

        // $search = $request['search'] ?? "";
        // if ($search != "") {
        //     $customers = customer::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
        // } else {
        //     $customers = Customer::paginate(5);
        // }
        // $data = compact('customers', 'search');

        return view('layout.customer.customer');
    }

    public function trash()
    {
        $customer = customer::onlyTrashed()->get();
        $data = compact('customer');
        return view('layout.customer.customer-trash')->with($data);
    }

    public function delete($id)
    {

        $customers = customer::find($id);

        if (!is_null($customers)) {
            $customers->delete();
        }
        return redirect('/Customers/view');
    }


    public function restore($id)
    {
        $customer = customer::withTrashed()->find($id);

        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect('/Customers/view')->with('msg', 'restore susscesfully');
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
        $customers->status = $params['status'];
        $customers->save();
        return redirect('/Customers/view')->with('msg', 'edited susscesfully');
    }

    public function store(Request $request)
    {

        Customer::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender,
            'status' => $request->status,
            'address' => $request->address,
            'state' => $request->state,
            'country' => $request->country,
            'dob' => $request->dob,

        ]);
        return redirect('/Customers/view')->with('msg', ' Created add susscesfully');
    }

    public function destroy($id)
    {
        $customers = customer::find($id);
        $customers->delete();
        // Session::put('msg', 'The Message');
        return redirect('/Customers/view')->with('msg', ' data deleted susscesfully');
    }

    public function reset()
    {
        return redirect(url('/Customers/view'));
    }
}
