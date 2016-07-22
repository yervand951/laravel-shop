@extends('layouts.admin.adminApp')
@section('content')
    {{Form::open(array('url'=>'admin/prtype','method'=>'post','files' =>true))}}
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name',null,array('id'=>'name','class'=>'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::label('parent','Parent')}}
        <select name="parent" id="parent" class="form-control">
            <option value="0">No Parent</option>
            @if(isset($parent))
                @foreach($parent as $value)
                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="form-group">
        {{Form::submit('Create',array('class'=>'form-control'))}}
    </div>

    {{Form::close()}}

@stop