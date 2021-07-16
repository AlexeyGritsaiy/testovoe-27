@extends('admin.layouts.master')
@section('content')
    <div class="col-sm-6">
    <h1 class="m-0 text-dark">Clients</h1>
</div><!-- /.col -->
<p><a href="{{ route('clients.create') }}" class="btn btn-success">Add client</a></p>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Company title</th>
        <th>firstName</th>
        <th>secondName</th>
        <th>lastName</th>
        <th>email</th>
        <th>phone</th>
    </tr>
    </thead>
    <tbody>

    @foreach ($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->company->title }}</td>
            <td>{{ $client->firstName }}</td>
            <td>{{ $client->secondName }}</td>
            <td>{{ $client->lastName }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->phone }}</td>
            <td><a href="{{ route('clients.edit', $client) }}">edit</a>  </td>

        </tr>

    @endforeach

    </tbody>
</table>
@endsection

