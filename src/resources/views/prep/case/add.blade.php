@section('head')
    <link rel="stylesheet" href="{{ asset('css/prep/case.css') }}">
@endsection

<x-app-layout>
    <div>
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('prep.caseCreate') }}">
            @csrf
            @method('post')

            <p>ケース添削チケット：{{ $count->tud_case_study_count_remaining }}</p>

            {{-- チケットが0より大きい場合は表示 --}}
            @if ($count->tud_case_study_count_remaining > 0)
                <!-- 設問内容 -->
                <div>
                    <label for="tca_case_content">設問内容</label>
                    <input type="text" id="tca_case_content" name="tca_case_content">
                    <x-input-error :messages="$errors->get('tca_case_content')" />
                </div>

                <!-- 思考時間 -->
                <div>
                    <label for="tca_case_time">思考時間（分）</label>
                    <input type="number" id="tca_case_time" name="tca_case_time">
                    <x-input-error :messages="$errors->get('tca_case_time')" />
                </div>

                <!-- ドキュメントURL -->
                <div>
                    <label for="tca_case_url">ドキュメントURL</label>
                    <input type="text" id="tca_case_url" name="tca_case_url">
                    <x-input-error :messages="$errors->get('tca_case_url')" />
                </div>

                <div>
                    <button type="submit">提出</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                            {{ __('Saved.') }}</p>
                    @endif
                </div>
            @else
                <p>チケットがありません。</p>
            @endif
        </form>

        <a href="{{ route('reserve.index') }}">戻る</a>

    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
