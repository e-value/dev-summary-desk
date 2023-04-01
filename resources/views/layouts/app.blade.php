<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(function(){
            $('input[type=checkbox][id^="law_category_"]').change(function() {
                if ($(this).is(':checked')) {
                    // inputタグのid部分の13文字目以降の値を取得
                    // 例) id="law_category_{{$law_category->id}}" の{{$law_category->id}}を取得
                    var law_category_id = $(this).attr('id').substr(13);

                    // 法分類のチェックボックスを入れるとlaws_belongs_to_category_{{$law_category->id}}を非表示に
                    var laws_belongs_to_category_id = '#laws_belongs_to_category_' + law_category_id
                    $(laws_belongs_to_category_id).show();
                }else {
                    // inputタグのid部分の13文字目以降の値を取得
                    // 例) id="law_category_{{$law_category->id}}" の{{$law_category->id}}を取得
                    var law_category_id = $(this).attr('id').substr(13);

                    // 法分類のチェックボックスを外すとlaws_belongs_to_category_{{$law_category->id}}を非表示に
                    var laws_belongs_to_category_id = '#laws_belongs_to_category_' + law_category_id
                    $(laws_belongs_to_category_id).hide();

                    // <div id="laws_belongs_to_category_{{$law_category->id}}">以下にあるinputタグのチェックボックスを全て外す。
                    // 全ての法律のチェックボックスをname="law_ids[]"をcategory_id_1_law_ids[]とするとrequestで取得した後、うまく扱えないので、law_idsと共通にした。
                    // また、law_ids[]だけだと、全てのチェックを外してしまうので、「laws_belongs_to_category_{{$law_category->id}}以下にある、inputタグ」という記載方法にした。
                    $(laws_belongs_to_category_id + ' input').prop('checked', false);
                }
            });
        });
    </script>
</body>
</html>
