@extends('layout.app')
@section('content')
    {{--  add  --}}

    <div class="modal-fade w-75" id="addmodal" tabindex="-1"aria-labelledby="examplemodellabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content"style="width:900px;">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="examplemodellabel">Add</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"
                        id="close1">close</b utton>
                </div>
                <div class="container">
                    <form action="{{ route('Customers.store') }}"method="post">
                        @csrf
                        <div class="model-body">
                            <div class="form-group col-mb-6">
                                <label class="fw-bold">name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{ old('name') }}">
                                <span class="text-danger fw-bold">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group col-mb-6">
                                <label class="fw-bold">email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{ old('email') }}">
                                <span class="text-danger fw-bold">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group col-mb-6">
                                <label class="fw-bold">password</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="password"
                                    value="{{ old('password') }}">
                                <span class="text-danger fw-bold">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <label class="fw-bold">gender</label>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                                    value="male">
                                <label class="form-check-label" for="exampleRadios1">
                                    male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                                    value="female">
                                <label class="form-check-label" for="exampleRadios2">
                                    female
                                </label>
                            </div>
                            <br>
                            <div class="form-group col-mb-6">
                                <label class="fw-bold">address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="address"
                                    value="{{ old('address') }}">
                                <span class="text-danger fw-bold">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <br>
                            <div class="form-group col-mb-6">
                                <label class="fw-bold">state</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="state"
                                    value="{{ old('state') }}">
                                <span class="text-danger fw-bold">
                                    @error('state')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <br>
                            <div class="form-group col-mb-6">
                                <label class="fw-bold">country</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="country"
                                    value="{{ old('country') }}">
                                <span class="text-danger fw-bold">
                                    @error('country')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group col-mb-6">
                                <label class="fw-bold">dob</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" name="dob"
                                    value="{{ old('dob') }}">
                                <span class="text-danger fw-bold">
                                    @error('dob')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <button type="submit" class=" btn btn-light mb-5 fw-bold text-dark fs-3 border-dark "
                                name="submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- add end --}}

    {{-- edit add --}}

    <div class="modal-fade" id="editmodal" tabindex="-1"aria-labelledby="examplemodellabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="examplemodellabel">Edit Customer</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"
                        id="close1">close</b utton>
                </div>

                <div class="container">
                    <form action="{{ route('Customer.Update') }}"method="post">
                        @csrf
                        <div class="container">
                            <div class="form-group">
                                <label class="fw-bold">name</label>
                                <input type="hidden" name="id" value="{{ $customers[0]->id }}">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{ $customers[0]->name }}">
                                <span class="text-danger fw-bold">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group">
                                <label class="fw-bold">email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{ $customers[0]->email }}">
                                <span class="text-danger fw-bold">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group">
                                <label class="fw-bold">password</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="password"
                                    value="{{ $customers[0]->password }}">
                                <span class="text-danger fw-bold">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <br>
                            <label class="fw-bold">gender</label>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                                    value="male" {{ $customers[0]->gender == 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="exampleRadios1">
                                    male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                                    value="female" {{ $customers[0]->gender == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="exampleRadios2">
                                    female
                                </label>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="fw-bold">address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="address"
                                    value="{{ $customers[0]->address }}">
                                <span class="text-danger fw-bold">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="fw-bold">state</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="state"
                                    value="{{ $customers[0]->state }}">
                                <span class="text-danger fw-bold">
                                    @error('state')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="fw-bold">country</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="country"
                                    value="{{ $customers[0]->country }}">
                                <span class="text-danger fw-bold">
                                    @error('country')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group">
                                <label class="fw-bold">dob</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" name="dob"
                                    value="{{ $customers[0]->dob }}">
                                <span class="text-danger fw-bold">
                                    @error('dob')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

                            <button type="submit" class="  btn btn-light mb-5 fw-bold text-dark fs-3 border-dark"
                                name="submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- edit end --}}

    {{-- delete add --}}

    <div class="modal-fade" id="deletemodal" tabindex="-1"aria-labelledby="examplemodellabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="deleteCustomermodallabel">delete Customer</h5>
                    <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"
                        id="close1">close</b utton>
                </div>
                <form action="{{ url('Customers/delete') }}" method="get">
                    @csrf
                    @method('DELETE')

                    <div class="modal-body">
                        <h4>Are You Sure you Want to delete this data ?</h4>
                        <h4> <input type="text" id="customer_id" name="customer_id"></h4>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"
                            id="close1">close</button>
                        <button type="submit" class="btn btn-primary">Yes Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- delete end --}}

    <div class="container mt-5">
        <button type="button" class="btn btn-primary fw-bold addbtn">Add</button>
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
                @foreach ($customers as $customer)
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
                            <button type="button" value="{{ $customer->id }}"
                                class="btn btn-primary fw-bold editbtn">Edit</button>
                        </td>
                        <td>
                            <button type="button" value="{{ $customer->id }}"
                                class="btn btn-primary fw-bold Deletebtn">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- delete add --}}

    {{-- delete end --}}
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.addbtn', function() {
                // var customer = $(this).val()
                // alert(customer);
                $('#addmodal').toggle(1000);
            });
            $(document).on('click', '.editbtn', function() {
                $('#editmodal').toggle(1000);
            });
            $(document).on('click', '.Deletebtn', function() {
                var customer = $(this).val()
                $('#deletemodal').toggle(1000);
                $('#customer_id').val(customer);
            });
        });
    </script>
@endsection
