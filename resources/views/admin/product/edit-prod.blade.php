@extends('admin.adminApp')

@section('content')


    {{Form::model($model,array('url'=>array('admin/product',$model->id),'files' =>true))}}
    {{Form::hidden('_method','put')}}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',null,array('id'=>'title','class'=>'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::label('price','Price')}}
        {{Form::number('price',null,array('id'=>'prive','class'=>'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description',null,array('id'=>'description','class'=>'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::file('img',array('class'=>'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::submit('Edit',array('class'=>'form-control'))}}
    </div>
    {{Form::close()}}

@stop