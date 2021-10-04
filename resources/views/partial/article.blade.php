<div class="row">
    <div>
        <img src="{{ url($article->image) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $article->age }}</div>
            <div>{{ $article->comment }}</div>
        </div>
    </div>
</div>