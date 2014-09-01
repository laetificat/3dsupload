@extends('layouts.master')

@section('head')
@parent
    <script type="text/javascript" src="">
@stop

@section('content')
    {{ Form::open(array('action' => 'UploadController@Upload', 'files' => true)) }}
        {{ Form::file('image', $attributes = array()) }} <br />
        {{ Form::submit('Upload') }}
    {{ Form::close() }}
@stop