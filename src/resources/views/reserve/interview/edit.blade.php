@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/interview.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('面談情報編集') }}
        </h2>
    </x-slot>

    <div class="container">
        <form method="post" action="{{ route('reserve.interviewUpdate', $interview->tin_interview_id) }}" class="form-container">
            @csrf
            @method('patch')

            <!-- メンター -->
            <div class="add-box">
                <label for="tin_mentor_id">メンター</label>
                <select id="tin_mentor_id" name="tin_mentor_id">
                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->mus_user_id }}" {{ $mentor->mus_user_id === $interview->tin_mentor_id ? 'selected' : '' }}>{{ $mentor->mus_user_last_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('tin_mentor_id')" />
            </div>

            <!-- 面談日時-->
            <div class="add-box">
                <label for="tin_datetime">面談日時</label>
                <input type="datetime-local" id="tin_datetime" name="tin_datetime" value="{{ $interview->tin_datetime }}">
                <x-input-error :messages="$errors->get('tin_datetime')" />
            </div>

            <!-- 面談時間-->
            <div class="add-box">
                <label for="tin_time">面談時間（分）</label>
                <select id="tin_time" name="tin_time">
                    <option value="60" {{ $interview->tin_time === 60 ? 'selected' : '' }}>60</option>
                    <option value="75" {{ $interview->tin_time === 75 ? 'selected' : '' }}>75</option>
                </select>
                <x-input-error :messages="$errors->get('tin_time')" />
            </div>

            <button type="submit" class="add-button">更新</button>
            <a href="{{ route('reserve.interviewIndex') }}" class="back-button">戻る</a>
        </form>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
