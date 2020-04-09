@extends('layouts.'.$print)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card" >
                <div class="card-header" align="center" style="margin-top: 20px;">
                    <h2>{{isset($obj->name)?$obj->name:'404'}}</h2>
                </div>

                <div class="card-body">
                    <div>
                        {!! isset($obj->body)?$obj->body:'404 pages' !!}
                    </div>
                </div>
            </div>
             @if($print == 'base')
                <a href="?print=ok" target="_blank">Версия для печати</a>
            @endif
        </div>
    </div>
</div>
@endsection
