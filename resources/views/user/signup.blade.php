<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 新規登録</title>
</head>
<!-- ログイン画面 -->

<body class="">
    <x-header></x-header>
    <div class="page signup-page">
        <form class="form" action="/signup" method="post">
            @csrf
            <div class="form-item email">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" />
            </div>
            @error('email')
            <div class="mt-3">
                <p class="text-red-500">
                    {{ $message }}
                </p>
            </div>
            @enderror
            <div class="form-item password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
            </div>
            @error('password')
            <div class="mt-3">
                <p class="text-red-500">
                    {{ $message }}
                </p>
            </div>
            @enderror
            <div class="form-item name">
                <label for="name">name</label>
                <input type="name" id="name" name="name" />
            </div>
            <div class="signup-button">
                <button class="button-white" type="submit">signup</button>
            </div>
        </form>
    </div>
</body>
</ul>
<h3>バリデーションルール</h3>
<h4>メールアドレス</h4>
<ul>
    <li>●●●@×××の形式になっていること</li>
    <li>半角英数、記号のみを許容すること</li>
</ul>
<h4>パスワード</h4>
<ul>
    <li>半角英数、記号のみを許容すること</li>
    <li>8文字以上であること</li>
</ul>
<p>
    JavascriptとUserControllorの両方で同じバリデーションを設けること
</p>
</div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped></style>

</html>