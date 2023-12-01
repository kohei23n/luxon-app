@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/interview.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談予約') }}
        </h2>
    </x-slot>

    <div class="container">
        <p class="counter">面談チケット：{{ $count->tud_interview_count_remaining }}</p>

        <form method="post" action="{{ route('reserve.interviewCreate') }}" class="form-container">
            @csrf
            @method('post')

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

                <button type="submit" class="add-button">登録</button>
            @else
                <p>チケットがありません。</p>
            @endif
            <a href="{{ route('reserve.interviewIndex') }}" class="back-button">戻る</a>
        </form>

    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
