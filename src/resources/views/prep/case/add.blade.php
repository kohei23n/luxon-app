@section('head')
    <link rel="stylesheet" href="{{ asset('css/prep/case.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <p>ケース添削チケット数：{{ $count->tud_case_study_count_remaining }}</p>
    </x-slot>
    <div class="form-container">
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('prep.caseCreate') }}" class="selection-form">
            @csrf
            @method('post')

            {{-- チケットが0より大きい場合は表示 --}}
            @if ($count->tud_case_study_count_remaining > 0)
                <!-- 設問内容 -->
                <div class="selection-add-box">
                    <label for="tca_case_content">設問内容</label>
                    <input type="text" id="tca_case_content" name="tca_case_content">
                    <x-input-error :messages="$errors->get('tca_case_content')" />
                </div>

                <!-- 思考時間 -->
                <div class="selection-add-box">
                    <label for="tca_case_time">思考時間（分）</label>
                    <input type="number" id="tca_case_time" name="tca_case_time">
                    <x-input-error :messages="$errors->get('tca_case_time')" />
                </div>

                <!-- ドキュメントURL -->
                <div class="selection-add-box">
                    <label for="tca_case_url">ドキュメントURL</label>
                    <input type="text" id="tca_case_url" name="tca_case_url">
                    <x-input-error :messages="$errors->get('tca_case_url')" />
                </div>

                <button type="submit" class="add-button">提出</button>
            @else
                <p>チケットがありません。</p>
            @endif
            <div class="back-button">
                <a href="{{ route('prep.index') }}">戻る</a>
            </div>
        </form>

    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
