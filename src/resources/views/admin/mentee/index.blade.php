@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/mentee.css') }}">
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

    <a href="{{ route('admin.menteeAdd') }}">メンティーを追加する</a>

    <div>
        @foreach ($users as $user)
            <p>ID：{{ $user->mus_user_id }}</p>
            <p>氏名：{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}</p>
            <p>大学：{{ $user->userDetail->tud_current_university }}</p>
            <p>第一志望業界：{{ $user->userDetail->tud_first_industry_preference }}</p>
            <p>第二志望業界：{{ $user->userDetail->tud_second_industry_preference }}</p>
            <a href="{{ route('admin.menteeShow', $user->mus_user_id) }}">面談情報</a>
        @endforeach
        <a href="{{ route('admin.index') }}">戻る</a>
    </div>
</x-app-layout>
