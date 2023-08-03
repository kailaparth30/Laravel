@extends('layout.app')
@section('content')

@livewire('coustomer')

@section('scripts')

<script>
    $(".delete").click(function(){
        if(confirm("Are you sure you want to delete this?"));
        else{
            return false;
        }
    });
</script>

@endsection
@endsection