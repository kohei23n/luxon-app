<head>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<x-app-layout>
    <div class="colum-information">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
            <h2>コラム・企業情報等</h2>
        </div>
    </div>
    <div class="event-remainder">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
            <h2>イベントリマインダー</h2>
        </div>
    </div>
    <div class="entry-reminder">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">    
            <h2>エントリーリマインダー</h2>
        </div>
    </div>
    <div class="list-box">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">         
                    <div class="btn-list">
                    <a class="btn" href="">
                        <img src="{{ asset('images/selection-preparetion.png') }}" alt="Image Description" style="width:78px; height:78px;">選考対策</a>
                    <a class="btn" href="{{ route('research.index') }}">
                        <img src="{{ asset('images/research-industry.png') }}" alt="Image Description" style="width:78px; height:78px;">業界研究</a>
                    <a class="btn" href="{{ route('reserve.index') }}">
                        <img src="{{ asset('images/reserving.png') }}" alt="Image Description" style="width:78px; height:78px;">予約</a>
                    <a class="btn" href="{{ route('mypage.index') }}">
                        <img src="{{ asset('images/my-page.png') }}" alt="Image Description" style="width:78px; height:78px;">マイページ</a>
                    </div>
            </div>
    </div>
</x-app-layout>
