@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="birthday">誕生日</label>
            <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}">
        </div>
        <div class="form-group">
            <label for="age">年齢</label>
            <input type="text" name="age" id="age" value="{{ old('age') }}">
        </div>

        <div class="form-group">
            <label for="birthplace">出身地</label>
            <select name="birthplace_id" id="birthplace">
                @foreach ($birthplaces as $birthplace)
                    <option value="{{ $birthplace->id }}" @if(old('birthplace') ==  $birthplace->id) selected @endif>{{ $birthplace->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sex">性別</label>
            <input type="text" name="sex" id="sex" value="{{ old('sex') }}">
        </div>
        <div class="form-group">
            <label for="comment">コメント</label>
            <input type="text" name="comment" id="comment" value="{{ old('comment') }}">
        </div>
        <div class="form-group">
            <label for="image">画像URL</label>
            <input type="text" name="image" id="image" value="{{ old('image') }}">
        </div>
        <input type="submit" value="登録">
    </form>

@endsection
