@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('メンティー情報') }}
        </h2>
    </x-slot>

    @if (session('status') || session('error'))
        <div class="alert {{ session('status') ? 'alert-success' : 'alert-danger' }}">
            {{ session('status') ?: session('error') }}
        </div>
    @endif

    <a href="{{ route('admin.menteeAdd') }}" class="add-button">メンティーを追加する</a>
    <a href="{{ route('admin.index') }}" class="back-button">戻る</a>

    @foreach ($users as $user)
        <div class="admin-container">
            <p>ID：{{ $user->mus_user_id }}</p>
            <p>氏名：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
            <p>大学：{{ $user->userDetail->tud_current_university }}</p>
            <p>第一志望業界：{{ $user->userDetail->tud_first_industry_preference }}</p>
            <p>第二志望業界：{{ $user->userDetail->tud_second_industry_preference }}</p>
            <p>専属メンター：{{ $user->dedicatedMentorName }}</p>
            <a href="{{ route('admin.menteeEdit', $user->mus_user_id) }}" class="add-button">編集</a>
            <a href="{{ route('admin.menteeShow', $user->mus_user_id) }}" class="edit-button">面談情報</a>
        </div>
    @endforeach
</x-app-layout>
