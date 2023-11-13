@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage/home.css') }}">
@endsection

<x-app-layout>
    <div style="padding:25px 0 85px 0; display: flex; aline-item: center; justify-content: center;">
        <div>
            <p class="greet">ようこそ、{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}さん!!!</p>
            <div style="padding-bottom:0;">
                <div class="plan-container">
                    <a href="{{ route('mypage.planIndex') }}">
                        <p>プラン</p>
                        <img src="{{ asset('images/plan.png') }}" alt="プラン">
                    </a>
                </div>
                <div class="selection-information-container">
                    <a href="{{ route('mypage.selectionIndex') }}">
                        <p>選考情報</p>
                        <img src="{{ asset('images/plan.png') }}" alt="選考情報">
                    </a>
                </div>
                <div class="reference-container">
                    <a href="">
                        <p>〜準備中〜</p>
                        <img src="{{ asset('images/plan.png') }}" alt="お気に入り">
                    </a>
                </div>
                <div class="news-container">
                    <a href="">
                        <p>〜準備中〜</p>
                        <img src="{{ asset('images/plan.png') }}" alt="お知らせ">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
