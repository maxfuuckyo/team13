@extends('app') 

@section('title', '地方縣市登記資料-I專業、科學及技術服務業')

@section('sdg_theme', '地方縣市登記資料-I專業、科學及技術服務業')
<table border="1">
    <tr>
        <td>統一編號</td>
        <td>{{ $Business->unified_number }}</td>
    </tr>
    <tr>
        <td>公司名稱</td>
        <td>{{ $Business->business_name }}</td>
    </tr>
    <tr>
        <td>公司地址</td>
        <td>{{ $Business->business_address }}</td>
    </tr>
    <tr>
        <td>實收資本額</td>
        <td>{{ $Business->paid_in_capital }}</td>
    </tr>
    <tr>
        <td>設立日期</td>
        <td>{{ $Business->establishment_date }}</td>
    </tr>
    <tr>
        <td>進口公司地址</td>
        <td>{{ $Business->imported_business_address }}</td>
    </tr>
    <tr>
        <td>行業代碼</td>
        <td>{{ $Business->industry_code_imported }}</td>
    </tr>
    <tr>
        <td>進口日期</td>
        <td>{{ $Business->imported_date }}</td>
    </tr>
</table>

@endsection