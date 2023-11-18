@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage/selection.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報更新') }}
        </h2>
    </x-slot>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('research.mySelectionsUpdate', $status->tss_selection_status_id) }}" class="selection-form">
        @csrf
        @method('patch')

        <div>
            <!-- 企業名 -->
            <div class="selection-add-box">
                <label for="tss_company_name">企業名</label>
                <input type="text" id="tss_company_name" name="tss_company_name" value="{{ $status->tss_company_name }}" >
            </div>

            <!-- 選考ステータス -->
            <div class="selection-add-box">
                <label for="tss_selection_status">選考ステータス</label>
                <select id="tss_selection_status" name="tss_selection_status">
                    @foreach ($selectionPhases as $phase)
                        <option value="{{ $phase->msp_phase_name }}" {{ $selectedValue == $phase->msp_phase_name ? 'selected' : '' }}>{{ $phase->msp_phase_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('tss_selection_status')" />
            </div>

            <!-- 志望順位 -->
            <div class="selection-add-box">
                <label for="tss_preference_ranking">志望順位</label>
                <input type="number" id="tss_preference_ranking" name="tss_preference_ranking" value="{{ $status->tss_preference_ranking }}" >
                <x-input-error :messages="$errors->get('tss_preference_ranking')" />
            </div>

            <!-- 選考日時 -->
            <div class="selection-add-box">
                <label for="tss_selection_date">選考日時</label>
                <input type="date" id="tss_selection_date" name="tss_selection_date" value="{{ $formattedDate }}">
                <x-input-error :messages="$errors->get('tss_selection_date')" />
            </div>

        </div>

        <div class="btn-box">
            <button type="submit">更新</button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
