@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <a href="{{ url('/Customers/index') }}"><button type="button" class="btn btn-primary fw-bold addbtn">Add</button></a>
        <a href="{{ url('/Customers/trash') }}"><button type="button" class="btn btn-primary fw-bold addbtn">Go to
                trash</button></a>
        <table class="table ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>password</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>state</th>
                    <th>country</th>
                    <th>status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->password }}</td>
                        <td>{{ $customer->gender }}</td>
                        {{-- @if ($customer->gender == '1')
                        <td>male</td>
                    @else
                        <td>female</td>
                    @endif --}}
                        </td>
                        <td>{{ $customer->dob }}</td>
                        <td>{{ $customer->state }}</td>
                        <td>{{ $customer->country }}</td>
                        @if ($customer->status == '1')
                            <td>Active</td>
                        @else
                            <td>Inactive</td>
                        @endif
                        <td>
                            <a href="{{ route('Customer.delete', ['id' => $customer->id]) }}"><button
                                    class="btn btn-primary">Delete</button></a>
                        </td>

                        <td>
                            <a href="{{ route('Customer.restore', ['id' => $customer->id]) }}"><button
                                    class="btn btn-primary">Resport</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
