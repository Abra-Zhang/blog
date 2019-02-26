@extends('layouts.dashboard')

@section('css')
    {!! editor_css() !!}
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h2><input type="text" placeholder="标题"></h2>
                <div id="mdeditor">
                  <textarea class="form-control" name="content" style="display:none;"></textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {!! editor_js() !!}
    {!! editor_config('mdeditor') !!}
@endsection
