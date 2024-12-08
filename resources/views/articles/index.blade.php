<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>
    <!--検索フォーム-->
    <form action="{{ route('resources.views.articles.index') }}" method="GET">
        <input type="text" name="keyword" placeholder="検索キーワードを入力" value="{{ request('keyword') }}">
    </form>

    <!--検索結果表示-->
    <ul>
        @forelse ($articles as $article)
        <li>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </li>
        @empty
            <p>検索キーワードは見つかりませんでした。</p>
        @endforelse
    </ul>
</body>
</html>