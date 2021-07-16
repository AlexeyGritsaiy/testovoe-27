@extends('admin.layouts.master')
@section('content')
{{$client->companies_id}}
{{$client->firstName}}
{{$client->secondName}}
{{$client->lastName}}
{{$client->email}}
{{$client->phone}}
<button href="{{route('clients.edit',$client)}}"></button>
@endsection
