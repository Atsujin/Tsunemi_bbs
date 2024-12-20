<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>投稿一覧</title>
        @vite('resources/css/app.css')
  </head>
  <body style="background-image:url('/storage/white_00108.jpg')">
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
  <div class="flex flex-col text-center w-full mb-20">
      <!-- <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">皆で語ろう</font>
        </font>
      </h2> -->
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 mt-24">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">投稿一覧</font>
        </font>
      </h1>
      <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">名前 タイトル 本文 のみの投稿でみんなで語りましょう</font>
        </font>
      </p> -->
    </div>   
    <div class="xl:w-1/2 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">投稿する</font>
          </font>
        </h2>
        <a href="/create" class="text-indigo-500 inline-flex items-center">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">こちら</font>
          </font>
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    <div class="flex flex-wrap">
    
    <div class="container px-5 py-24 mx-auto">
    
      @foreach($bbss as $bbs)
      <div class="-my-8 divide-y-2 divide-gray-200">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">{{ $bbs->name }}</span>
          <span class="mt-1 text-gray-500 text-sm">{{ $bbs->created_at }}</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $bbs->title }}</h2>
          <p class="leading-relaxed">{{ $bbs->body }}</p>
          @auth
           @if($auth->name === $bbs->name)
          <form action="{{ route('destroy', ['id' => $bbs->id]) }}" method="post" name="delete">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-indigo-500 inline-flex items-center mt-4">削除する
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
            </button>
          </form>
          @endif
          @endauth
        </div>
      </div>
        @endforeach
</div>
{{ $bbss->links() }}

<div class="mt-48">
  <a href="/" class="text-indigo-500">トップページへ</a>
</div>
    <!-- <section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">CATEGORY</span>
          <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
          <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
          <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">CATEGORY</span>
          <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Meditation bushwick direct trade taxidermy shaman</h2>
          <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
          <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="py-8 flex flex-wrap md:flex-nowrap">
        <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
          <span class="font-semibold title-font text-gray-700">CATEGORY</span>
          <span class="text-sm text-gray-500">12 Jun 2019</span>
        </div>
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Woke master cleanse drinking vinegar salvia</h2>
          <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
          <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section> -->
  </body>
</html>
