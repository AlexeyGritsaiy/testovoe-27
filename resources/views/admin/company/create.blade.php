@extends('admin.layouts.master')
@section('content')
<form method="POST" action="{{ route('company.store') }}">
    @csrf

    <div class="form-group">
        <label for="title" class="col-form-label">Name</label>
        <input id="name" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required>

    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
