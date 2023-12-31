@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage/selection.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報追加') }}
        </h2>
    </x-slot>

    <div class="container">
        <form method="post" action="{{ route('research.mySelectionsCreate') }}" class="form-container">
            @csrf
            @method('post')

            <!-- 企業名 -->
            <div class="selection-add-box">
                <label for="tss_company_name">企業名</label>
                <input type="text" id="tss_company_name" name="tss_company_name">
                <x-input-error :messages="$errors->get('tss_company_name')" />
            </div>

            <!-- 選考ステータス -->
            <div class="selection-add-box">
                <label for="tss_selection_status">選考ステータス</label>
                <select id="tss_selection_status" name="tss_selection_status">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($selectionPhases as $phase)
                        <option value="{{ $phase->msp_phase_name }}">{{ $phase->msp_phase_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('tss_selection_status')" />
            </div>

            <!-- 志望順位 -->
            <div class="selection-add-box">
                <label for="tss_preference_ranking">志望順位</label>
                <input type="number" id="tss_preference_ranking" name="tss_preference_ranking">
                <x-input-error :messages="$errors->get('tss_preference_ranking')" />
            </div>

            <!-- 選考日時 -->
            <div class="selection-add-box">
                <label for="tss_selection_date">選考日時</label>
                <input type="date" id="tss_selection_date" name="tss_selection_date">
                <x-input-error :messages="$errors->get('tss_selection_date')" />
            </div>

            <button type="submit" class="add-button">追加</button>
        </form>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
