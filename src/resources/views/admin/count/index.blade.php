@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談枠情報') }}
        </h2>
    </x-slot>
    
    <a href="{{ route('admin.index') }}" class="back-button">戻る</a>

    @foreach ($users as $user)
        <div class="admin-container">
            <p>ID：{{ $user->mus_user_id }}</p>
            <p>氏名：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
            <a href="{{ route('admin.countEdit', $user->mus_user_id) }}" class="edit-button">編集</a>
        </div>
    @endforeach
</x-app-layout>
