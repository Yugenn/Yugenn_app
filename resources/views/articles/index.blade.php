@extends('layouts.main')

@section('title', '一覧画面')

@section('content')
    @if (!empty($articles))
        <ul>
            @foreach ($articles as $article)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.article')
                </li>
            @endforeach
        </ul>
    @endif
@endsection
