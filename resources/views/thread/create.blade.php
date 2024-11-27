<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>スレッド作成</title>
        @vite('resources/css/app.css')
  </head>
  <body style="background-image:url('/storage/white_00108.jpg')">
    <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">スレッド作成</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">名前 タイトル を記入してください</p>
    </div>
        <form action="{{ route('thread.store') }}" method="post">
          @csrf
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
          @error('name')
          <p class="alert alert-denger text-red-500">{{ $message }}</p>
          @enderror
            <label for="name" class="leading-7 text-sm text-gray-600">名前</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>           
          <div class="p-2 w-1/2">
          <div class="relative">
          @error('title')
          <p class="alert alert-denger text-red-500">{{ $message }}</p>
          @enderror
            <label for="title" class="leading-7 text-sm text-gray-600">タイトル</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full mt-12">
          <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">作成する</button>
        </div>
      </div>
    </div>
        </form>
        <div class="mt-48">
        <a href="/" class="text-indigo-500 w-12 ml-36">トップページへ</a>
        </div>
    </div>
  </div>
  </section>
  </body>
</html>
