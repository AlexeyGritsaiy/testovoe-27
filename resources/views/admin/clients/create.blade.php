@extends('admin.layouts.master')
@section('content')
<form method="POST" enctype="multipart/form-data"

      @isset($client)
      action="{{ route('clients.update', $client) }}"
      @else
      action="{{ route('clients.store') }}"
    @endisset
    >
{{--    @isset($client)--}}

{{--        @method('PUT')--}}
{{--    @endisset--}}
    @isset($client)
        @method('PUT')
    @endisset
    @csrf
{{--{{dd($client)}}--}}
    <div class="form-group">
        <label for="companies_id" class="col-form-label">companies_id</label>
{{--        {{@foreach ()}}--}}
        <select name="companies_id" id="">
            @foreach($companys as $company)
            <option value="{{$company->id}}">{{$company->title}}</option>
            @endforeach
        </select>

{{--        <input id="companies_id" class="form-control{{ $errors->has('companies_id') ? ' is-invalid' : '' }}" name="companies_id" value="@isset($client){{ $client->companies_id }}@endisset" required>--}}

    </div>
    <div class="form-group">
        <label for="firstName" class="col-form-label">firstName</label>
        <input id="firstName" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="@isset($client){{ $client->firstName }}@endisset" required>

    </div>
    <div class="form-group">
        <label for="secondName" class="col-form-label">secondName</label>
        <input id="secondName" class="form-control{{ $errors->has('secondName') ? ' is-invalid' : '' }}" name="secondName" value="@isset($client){{ $client->secondName }}@endisset" required>

    </div>
    <div class="form-group">
        <label for="lastName" class="col-form-label">lastName</label>
        <input id="lastName" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="@isset($client){{ $client->lastName }}@endisset" required>

    </div>
    <div class="form-group">
        <label for="email" class="col-form-label">email</label>
        <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="@isset($client){{ $client->email }}@endisset" required>
    </div>
    <div class="form-group">
        <label for="phone" class="col-form-label">phone</label>
        <input id="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="@isset($client){{ $client->phone }}@endisset" required>
    </div>


    <div class="form-group">
        <button class="btn btn-success">Сохранить</button>
    </div>
</form>
@endsection
