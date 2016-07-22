@extends('layouts.admin.adminApp')
@section('content')
    @foreach($data as $value)
        @if($value['parent'] == $parent_id)

            @include('layouts.admin.component.prtype-all', [])
            {{
            test($data,$value['id'],$data1['padd']);
                unset($value); }}
        @endif
    @endforeach


    <?php function test($data,$parent_id ,$int){
        $data1['padd'] = $int + 15;


   } test($parents,0,5);

@stop



