<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Top') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <p>ようこそ、{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}さん</p>
              <div class="p-6 text-gray-900">
                  <a href="{{ route('mypage.planIndex') }}">プラン</a>
                  <a href="{{ route('mypage.selectionIndex') }}">選考情報</a>
                  <a href="">お気に入り</a>
                  <a href="">お知らせ</a>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>