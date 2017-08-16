@extends('common.default')
@section('title', $user->name . "的用户资料")
@section('content')
{{ $user->name }} - {{ $user->email }}
@stop