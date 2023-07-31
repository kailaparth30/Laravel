@extends('layout.app')
@section('content')

    <body>

        <div class="container">
            <form action="{{ route('Customers.store') }}"method="post">
                @csrf
                <div class="model-body">
                    <div class="form-group mb-3">
                        <label class="fw-bold">name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                            value="{{ old('name') }}">
                        <span class="text-danger fw-bold">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div><br>
                    <div class="form-group mb-3">
                        <label class="fw-bold">email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                            value="{{ old('email') }}">
                        <span class="text-danger fw-bold">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div><br>
                    <div class="form-group mb-3">
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
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male">
                        <label class="form-check-label" for="exampleRadios1">
                            male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                        <label class="form-check-label" for="exampleRadios2">
                            female
                        </label>
                    </div>
                    <br>
                    <div class="form-group mb-3">
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
                    <div class="form-group mb-3">
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
                    <div class="form-group mb-3">
                        <label class="fw-bold">country</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="country"
                            value="{{ old('country') }}">
                        <span class="text-danger fw-bold">
                            @error('country')
                                {{ $message }}
                            @enderror
                        </span>
                    </div><br>
                    <div class="form-group mb-3">
                        <label class="fw-bold">dob</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" name="dob"
                            value="{{ old('dob') }}">
                        <span class="text-danger fw-bold">
                            @error('dob')
                                {{ $message }}
                            @enderror
                        </span>
                    </div><br>
                    <button type="submit" class="  btn btn-light mb-5 fw-bold    text-dark fs-3 border-dark" name="submit"
                        value="submit">Submit</button>
                </div>
            </form>
        </div>

    </body>
@endsection
