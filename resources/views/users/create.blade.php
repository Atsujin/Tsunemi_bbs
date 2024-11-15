<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>新規登録</title>
        @vite('resources/css/app.css')
  </head>
  <body style="background-image:url('/storage/images/white_00108.jpg')">
  <section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">新規登録</h1>
      <!-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">新規登録はこちら</p> -->
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-col -m-2">
        <form action="{{ route('users.store') }}" method="post">
          @csrf
        <div class="p-2 w-1/2">
          <div class="relative">
          @error('name')
          <p class="alert alert-denger text-red-500">{{ $message }}</p>
          @enderror
            <label for="name" class="leading-7 text-sm text-gray-600">名前</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 ">
          <div class="relative">
          @error('email')
          <p class="alert alert-denger text-red-500">{{ $message }}</p>
          @enderror
            <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2">
          <div class="relative">
          @error('gender')
          <p class="alert alert-denger text-red-500">{{ $message }}</p>
          @enderror
            <label for="gender" class="leading-7 text-sm text-gray-600">性別</label><br>
            <input type="radio" id="gender" name="gender" value="0">男性
            <input type="radio" id="gender" name="gender" value="1">女性
          </div>
        </div>
        <div class="p-2" >
          <div class="relative">
          @error('age')
          <p class="alert alert-denger text-red-500">{{ $message }}</p>
          @enderror
            <label for="age" class="leading-7 text-sm text-gray-600">年齢</label><br>
            <!-- <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"> -->
             <select name="age">
             <option value="">選択してください</option>
             <option value="0~12">0~12歳</option>
             <option value="13~24">13~24歳</option>
             <option value="25~36">25~36歳</option>
             <option value="37~48">37~48歳</option>
             <option value="49~60">49~60歳</option>
             </select>
          </div>
        </div>
        <div class="p-2 ">
          <div class="relative">
          @error('password')
          <p class="alert alert-denger text-red-500">{{ $message }}</p>
          @enderror
            <label for="password" class="leading-7 text-sm text-gray-600">パスワード</label>
            <input type="password" id="password" name="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2">
          <div class="relative">
            <label for="password" class="leading-7 text-sm text-gray-600">パスワード（再確認）</label>
            <input type="password" id="password" name="password_confirmation" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <!-- <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div> -->
        <div class="p-2 w-full ">
          <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>
  </body>
</html>