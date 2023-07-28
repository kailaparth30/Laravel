@extends('layout.app')
@section('content')
    <div class="modal-fade w-100" id="editmodal" tabindex="-1"aria-labelledby="examplemodellabel" aria-hidden="true">
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
                                <input type="hidden" name="id" value="{{ $customers->id }}">
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                    value="{{ $customers->name }}">
                                <span class="text-danger fw-bold">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group">
                                <label class="fw-bold">email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                    value="{{ $customers->email }}">
                                <span class="text-danger fw-bold">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group">
                                <label class="fw-bold">password</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="password"
                                    value="{{ $customers->password }}">
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
                                    value="male" {{ $customers->gender == 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="exampleRadios1">
                                    male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                                    value="female" {{ $customers->gender == 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="exampleRadios2">
                                    female
                                </label>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="fw-bold">address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="address"
                                    value="{{ $customers->address }}">
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
                                    value="{{ $customers->state }}">
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
                                    value="{{ $customers->country }}">
                                <span class="text-danger fw-bold">
                                    @error('country')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group">
                                <label class="fw-bold">dob</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" name="dob"
                                    value="{{ $customers->dob }}">
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
@endsection
