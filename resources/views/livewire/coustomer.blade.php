<div class="container mt-5">
    <form action="">
        <div class="form-group">
            {{-- <input type="search" wire:model="search" class="form-control mb-4" id="" value="{{$search}}"
                placeholder="search"> --}}
            {{-- <button class="btn btn-danger mb-2 mt-2 ">search</button>
            <a href="{{url('/Customers/reset')}}">
                <button class="btn btn-danger mb-2 mt-2 ">reset</button>
            </a> --}}
        </div>

    </form>
    @if (session()->has('msg'))
    <p class="alert alert-success"> {{ session()->get('msg') }}</p>
    @endif
    <a href="{{ url('/Customers/index') }}"><button type="button"
            class="btn btn-primary fw-bold addbtn mb-4">Add</button></a>
    <a href="{{ url('/Customers/trash') }}"><button type="button" class="btn btn-primary fw-bold addbtn mb-4">Go to
            trash</button></a>
    <table class="table" id="tableid">
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
                <th>Delete</th>
                <th>Edit</th>
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
                            class="btn btn-primary delete">Delete</button></a>
                </td>

                <td>
                    <a href="{{ route('Customer.edit', ['id' => $customer->id]) }}"><button
                            class="btn btn-primary">Edit</button></a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="row">
        {{$customers->links()}}
    </div> --}}
    @section('scripts')

    <script>
        $(document).ready(function() {
            $('#tableid').DataTable({ });
        });
    </script>

    @endsection
</div>