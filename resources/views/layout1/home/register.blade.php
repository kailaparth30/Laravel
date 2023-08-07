@extends('layout.app')
@section('content')

<body>
    <div class="container">
        <form action="{{ url('registerdatastore') }}" method="post">
            @csrf
            <h4 class="text-center fw-bold fs-3 bg-primary rounded p-2 ">Register</h4>
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

                <button type="submit" class="  btn btn-light mb-5 fw-bold text-dark fs-3 border-dark text-center"
                    name="submit" value="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
@endsection