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
                <!-- メンター -->
                <div class="add-box">
                    <label for="tin_mentor_id">メンター</label>
                    <select id="tin_mentor_id" name="tin_mentor_id">
                        <option value="" disabled selected>選択してください</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor->mus_user_id }}">{{ $mentor->mus_user_last_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('tin_mentor_id')" />
                </div>

                <!-- 面談日時-->
                <div class="add-box">
                    <label for="tin_datetime">面談日時</label>
                    <input type="datetime-local" id="tin_datetime" name="tin_datetime">
                    <x-input-error :messages="$errors->get('tin_datetime')" />
                </div>

                <!-- 面談時間-->
                <div class="add-box">
                    <label for="tin_time">面談時間（分）</label>
                    <select id="tin_time" name="tin_time">
                        <option value="" disabled selected>選択してください</option>
                        <option value="60">60</option>
                        <option value="75">75</option>
                    </select>
                    <x-input-error :messages="$errors->get('tin_time')" />
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
                <a href="{{ route('reserve.interviewIndex') }}">戻る</a>
            </div>
        </form>


    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
