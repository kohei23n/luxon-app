<x-app-layout>
    <div>
        <div>
            <p>完了しました！</p>
            <a href="{{ route('reserve.index') }}">戻る</a>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
