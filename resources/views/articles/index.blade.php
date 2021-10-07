@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

<a href="{{ route('articles.create') }}"><button type="button">新規登録</button></a>
    <ul>
        @foreach ($articles as $article)
            <li class="list-unstyled border mb-5 pl-3 shadow">
                @include('partial.article')
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
@endsection
