@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/interview.css') }}">
@endsection

<x-app-layout>
    <div>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('reserve.interviewCreate') }}" class="selection-form">
            @csrf
            @method('post')

            <p>面談枠チケット：{{ $count->tud_interview_count_remaining }}</p>

            {{-- チケットが0より大きい場合は表示 --}}
            @if ($count->tud_interview_count_remaining > 0)
                <!-- 会社 -->
                <div class="selection-add-box">
                    <label for="tes_company_name">会社</label>
                    <input type="text" id="tes_company_name" name="tes_company_name">
                    <x-input-error :messages="$errors->get('tes_company_name')" />
                </div>

                <!-- ドキュメントURL -->
                <div class="selection-add-box">
                    <label for="tes_es_url">ドキュメントURL</label>
                    <input type="text" id="tes_es_url" name="tes_es_url">
                    <x-input-error :messages="$errors->get('tes_es_url')" />
                </div>

                <div class="btn-box">
                    <button type="submit">登録</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                            {{ __('Saved.') }}</p>
                    @endif
                </div>
            @else
                <p>チケットがありません。</p>
            @endif
            <div class="bc-btn">
                <a href="{{ route('reserve.index') }}">戻る</a>
            </div>
        </form>

        
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
