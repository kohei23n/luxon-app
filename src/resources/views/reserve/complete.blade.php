@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/complete.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('完了画面') }}
        </h2>
    </x-slot>
    <div class="complete-container">
        <div class="event-detail">
            <h1>完了しました！</h1>
        </div>
        <a href="{{ route('reserve.index') }}" class="back-button">戻る</a>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
