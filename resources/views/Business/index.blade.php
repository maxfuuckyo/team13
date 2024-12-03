@extends('app') 

@section('title', '地方縣市登記資料-I專業、科學及技術服務業')

@section('sdg_theme', '地方縣市登記資料-I專業、科學及技術服務業')

@section('sdg_contents')
    <table border="1">
        <tr>
            <th>統一編號</th>
            <th>公司名稱</th>
            <th>公司地址</th>
            <th>實收資本額</th>
            <th>設立日期</th>
            <th>進口公司地址</th>
            <th>行業代碼</th>
            <th>進口日期</th>
        </tr>
        @foreach ($businesses->slice(0, 20) as $Business)
            <tr>
                <td>{{$Business->unified_number}}</td>
                <td>{{$Business->business_name}}</td>
                <td>{{$Business->business_address}}</td>
                <td>{{$Business->paid_in_capital}}</td>
                <td>{{$Business->establishment_date}}</td>
                <td>{{$Business->imported_business_address}}</td>
                <td>{{$Business->industry_code_imported}}</td>
                <td>{{$Business->imported_date}}</td>
                <td><a href="{{ route('businesses.show', ['id' => $Business->unified_number]) }}">顯示</a></td>
                <td><a href="{{ route('businesses.edit', ['id' => $Business->unified_number]) }}">編輯</a></td>
                <td>
                    <form action="{{ url('/businesses/delete', ['id' => $Business->unified_number]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
