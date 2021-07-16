@extends('admin.layouts.master')
@section('content')
    <p><a href="{{ route('company.create') }}" class="btn btn-success">Add client</a></p>
<div class="col-sm-6">
    <h1 class="m-0 text-dark">users</h1>
</div><!-- /.col -->
{{--<p><a href="{{ route('admin.companyCreate') }}" class="btn btn-success">Add User</a></p>--}}
{{--{{dd($companys)}}--}}
<div class="card mb-3">
    <div class="card-header">Filter</div>
    <div class="card-body">
        <form action="?" method="GET">
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">
                        <label for="id" class="col-form-label">ID</label>
{{--                        <input id="id" class="form-control" name="id" value="{{ request('id') }}">--}}
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($companys as $company)
        <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->title }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection
