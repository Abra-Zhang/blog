@extends('common.default')
@section('title', '写文章')
{{var_dump(Auth::user()->is_admin)}}