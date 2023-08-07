@extends('layout.app')
@section('content')

<div class="container">
    @if (session()->has('msg'))
    <p class="alert alert-success"> {{ session()->get('msg') }}</p>
    @endif
    <form action="{{ route('Customer.Update') }}" method="post">
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
            <label class="fw-bold">status</label>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="active" {{
                    $customers->status == 'active' ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleRadios1">
                    Active
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="in    active" {{
                    $customers->status == 'inactive' ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleRadios1">
                    inactive
                </label>
            </div>
            <br>
            <label class="fw-bold">gender</label>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" {{
                    $customers->gender == 'male' ? 'checked' : '' }}>
                <label class="form-check-label" for="exampleRadios1">
                    male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female" {{
                    $customers->gender == 'female' ? 'checked' : '' }}>
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

            <button type="submit" data-toggle="modal" data-target="#edit-data"
                class="btn btn-light mb-5 fw-bold text-dark fs-3 border-dark msg" name="submit"
                value="submit">Submit</button>


        </div>
    </form>
</div>
@section('scripts')

<script>
    $(".msg").click(function(){
        if(confirm("Are you sure you want to edit this?")){
            $("#delete-button").attr("href", "Customer.edit?ACTION=delete&ID='1'");
        }
        else{
            return false;
        }
    });
</script>

@endsection
@endsection