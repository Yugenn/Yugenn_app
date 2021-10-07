@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    @include('partial.article')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>名前</th>
                <td>
                    <p>{{ $article->name }}</p>
                </td>
            </tr>
            <tr>
                <th>誕生日</th>
                <td>{{ $article->birthday }}</td>
            </tr>
            <tr>
                <th>年齢</th>
                <td>{{ $article->age }}</td>
            </tr>
            <tr>
                <th>出身地</th>
                <td>{{ $article->birthplace->name }}</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>{{ $article->sex }}</td>
            </tr>
            <tr>
                <th>コメント</th>
                <td>{{ $article->comment }}</td>
            </tr>
        </tbody>
    </table>

    <a href="/articles/{{ $article->id }}/edit">編集</a>
                <div class="ml-2 mb-4"> 
                    <form action="/articles/{{ $article->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
                    </form>
                </div>
    <a href="{{ route('articles.index') }}">戻る</a>
@endsection
