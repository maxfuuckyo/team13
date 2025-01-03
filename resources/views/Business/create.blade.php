
@extends('app')

@section('title', '地方縣市登記資料-I專業、科學及技術服務業')

@section('sdg_theme', '地方縣市登記資料-I專業、科學及技術服務業')

@section('sdg_contents')

新增地方縣市登記表單

{!! Form::open(['url' => 'Business/store']) !!}
    @include('business.form', ['submitButtonText'=>"新增縣市登記資料"])
{!! Form::close() !!}

@endsection