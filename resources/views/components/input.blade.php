<div class="form-group">
    <label>{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="exampleInputEmail1" name="{{ $name }}"
        value="{{ old('name') }}">
    <span class="text-danger fw-bold">
        {{-- {{ $demo }} --}}
        @error('name')
            {{ $message }}
        @enderror
    </span>
</div>


