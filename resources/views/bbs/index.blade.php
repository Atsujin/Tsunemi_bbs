<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>皆の掲示板</title>
        @vite('resources/css/app.css')
  </head>
  <body style="background-image:url('/storage/white_00108.jpg')">
  <header class="text-gray-600 body-font bg-indigo-400">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">皆の掲示板</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href="/thread/create" class="mr-5 hover:text-gray-900">スレッド作成</a>
      @auth
      <a href="/admin" class="mr-5 hover:text-gray-900">管理人紹介</a>
      @endauth
    </nav>
    @guest
    <button onclick="location.href='/users/index'" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">ログイン
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
    @endguest
    @auth
    <form action="{{ route('users.logout') }}" method="post">
      @csrf
    <button onclick="location.href='/users/index'" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">ログアウト
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
    </form>
    @endauth
  </div>
</header>
    @auth
    <div class="alert alert-danger text-right w-25 mx-auto text-indigo-500 mt-4">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
    @endauth
    <!-- ログインアラート -->
    @if (session('alertMessage'))
    <div class="alert alert-danger text-center w-25 mx-auto text-indigo-500 mt-4">
      {{ session('alertMessage') }}
    </div>
    @endif
    @if (session('message'))
    <div class="alert alert-danger text-center w-25 mx-auto text-indigo-500 mt-4">
      {{ session('message') }}
    </div>
    @endif

    
    <!-- 本文 -->
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">好きな話題を探してみよう</font>
        </font>
      </h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">スレッド
            
          一覧</font>
        </font>
      </h1>
      </div>

      <!-- 掲示板一覧 -->
      @foreach($threads as $thread)
      <div class="-my-8 divide-y-2 divide-gray-200">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <a href="{{ route('thread.show', $thread) }}" class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">作成者 {{ $thread->name }}</span>
          <span class="mt-1 text-gray-500 text-sm">作成日 {{ $thread->created_at }}</span>
          </a>
                <a href="{{ route('thread.show', $thread) }}" class="md:flex-grow">
                  <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $thread->title }}</h2>
                </a>
              </div>
                @endforeach
        </div>
    
</section>
</body>
</html>
