@extends('layouts.main')

@section('title', '編集画面')

@section('content')

    <h1>更新フォーム</h1>

    <form action="{{ route('articles.update', $article) }}" method="post">
        @csrf
        @method('PATCH')
        <div>
            <p>
                <label for="name">名前</label>
                <input type="text" name="name" value="{{ $article->name }}" class="form-control">
            </p>
        </div>
        <div>
            <p>
                <label for="birthday">誕生日</label>
                <input type="text" name="price" value="{{ $article->sex }}" class="form-control">
            </p>
        </div>
        <div>
            <p>
                <label for="age">年齢</label>
                <input type="text" name="volume" value="{{ $article->birthday }}" class="form-control">
            </p>
        </div>
        <div>
            <p>
                <label for="name">出身地</label>
                <select name="birthplace" id="birthplace" class="form-control">
                    @foreach ($birthplaces as $birthplace)
                        <option value="{{ $birthplace->id }}" @if( $article->birthplace_id  == $birthplace->id) selected @endif>{{ $birthplace->name }}</option>
                    @endforeach
                </select>
            </p>
        </div>
        <div>
            <p>
                <label for="comment">コメント</label>
                <textarea name="comment" id="comment" cols="30" rows="10" class="form-control">{{ $article->comment }}</textarea>
            </p>
        </div>

        <input type="hidden" name="birthplace_id" value="{{ $article->birthplace_id }}">
        <input type="hidden" name="image" value="{{ $article->imgage }}">

        <div class="register mt-4 mb-3">
            <button type="submit" class="btn btn-primary">更新</button>
        </div>
    </form>
    <a href="{{ route('articles.index') }}">戻る</a>
@endsection