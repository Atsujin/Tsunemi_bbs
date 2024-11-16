<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>皆の掲示板</title>
        @vite('resources/css/app.css')
  </head>
  <body style="background-image:url('/storage/white_00108.jpg')">
    <!-- ログインアラート -->
    @if (session('alertMessage'))
    <div class="alert alert-danger text-right w-25 mx-auto text-indigo-500 mt-4">
      {{ session('alertMessage') }}
    </div>
    @endif
    <!-- ログイン済みの場合 -->
    @auth
    <div class="alert alert-danger text-right w-25 mx-auto text-indigo-500 mt-4">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
    <form action="{{ route('users.logout') }}" method="post">
      @csrf
      <button class="flex ml-auto mt-4 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">ログアウト</font>
      </font>
      </button>
    </form>
    @endauth
    <!-- 本文 -->
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">皆で語ろう</font>
        </font>
      </h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">皆の掲示板</font>
        </font>
      </h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">名前 タイトル 本文 のみの投稿でみんなで語りましょう</font>
        </font>
      </p>
    </div>
    <div class="flex flex-wrap">
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60 text-center">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">投稿する</font>
          </font>
        </h2>
        <!-- <p class="leading-relaxed text-base mb-4">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">指のひげのフレキシタリアン ストリート アート 8 ビット チョッキ。蒸留所の六角形がエジソン バルブチェを混乱させます。</font>
          </font>
        </p> -->
        <a href="/create" class="text-indigo-500 inline-flex items-center">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">こちら</font>
          </font>
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60 text-center">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">投稿を見る</font>
          </font>
        </h2>
        <!-- <p class="leading-relaxed text-base mb-4">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">指のひげのフレキシタリアン ストリート アート 8 ビット チョッキ。蒸留所の六角形がエジソン バルブチェを混乱させます。</font>
          </font>
        </p> -->
        <a href="{{ route('show') }}" class="text-indigo-500 inline-flex items-center">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">こちら</font>
          </font>
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <!-- <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">ネプチューン</font>
          </font>
        </h2>
        <p class="leading-relaxed text-base mb-4">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">指のひげのフレキシタリアン ストリート アート 8 ビット チョッキ。蒸留所の六角形がエジソン バルブチェを混乱させます。</font>
          </font>
        </p>
        <a class="text-indigo-500 inline-flex items-center">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">もっと詳しく知る</font>
          </font>
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">メランコレ</font>
          </font>
        </h2>
        <p class="leading-relaxed text-base mb-4">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">指のひげのフレキシタリアン ストリート アート 8 ビット チョッキ。蒸留所の六角形がエジソン バルブチェを混乱させます。</font>
          </font>
        </p>
        <a class="text-indigo-500 inline-flex items-center">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">もっと詳しく知る</font>
          </font>
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div> -->
    @guest
    <button onclick="location.href='/users/index'" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">ログイン</font>
      </font>
    </button>
    @endguest
  </div>
</section>
@auth
<div class="text-center mt-48">
<a href="/admin" class="text-indigo-500">管理人紹介</a>
</div>
@endauth
  </body>
</html>
