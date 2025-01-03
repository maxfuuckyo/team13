
@extends('app')

@section('title', '地方縣市登記資料-I專業、科學及技術服務業')

@section('sdg_theme', '地方縣市登記資料-I專業、科學及技術服務業')

@section('sdg_contents')

編輯特定一筆地方縣市登記表單

{!! Form::model($Business, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\BusinessController@update', $Business->id]]) !!}
    @include('Business.form', ['submitButtonText'=>"修改縣市登記資料"])
{!! Form::close() !!}

@endsection