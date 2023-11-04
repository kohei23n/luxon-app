@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/count.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談枠情報') }}
        </h2>
    </x-slot>

    <div>
        @foreach ($users as $user)
            <p>{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
            <a href="{{ route('admin.countEdit', $user->mus_user_id) }}">編集</a>
            <br><br>
        @endforeach
        <a href="{{ route('admin.index') }}">戻る</a>
    </div>
</x-app-layout>
