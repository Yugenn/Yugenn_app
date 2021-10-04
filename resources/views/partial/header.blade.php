<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <a href="{{ route('articles.index') }}"><h5 class="text-white h4 logo">人間登録アプリ</h5></a>
            <span class="text-muted logo">Home</span>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" href="{{ route('articles.index') }}"></span>
        </button>

        <form class="form-inline my-2 my-lg-0" mechod="GET" action="{{ route('articles.index') }}">

            <input class="form-control mr-sm-2" type="search" name="birthplace" placeholder="出身地">
            <input class="form-control mr-sm-2" type="search" name="name" placeholder="名前">
            <button class="btn btn-outline-success my-2 my-sm-0 logo" type="submit">Search</button>
        </form>
    </nav>
</div>
