@section('head')
    <link rel="stylesheet" href="{{ asset('css/research/selections.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報追加') }}
        </h2>
    </x-slot>

    <form method="post" action="{{ route('research.selectionsCreate', $id) }}" class="selection-form-container">
        @csrf
        @method('post')

        <div>
            <!-- 選考段階 -->
            <div class="selection-phase-container">
                <label for="msd_selection_phase_id">選考段階</label>
                <select id="msd_selection_phase_id" name="msd_selection_phase_id" class="select-selection-phase">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($selectionPhases as $phase)
                        <option value="{{ $phase->msp_phase_id }}">{{ $phase->msp_phase_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('msd_selection_phase_id')" />
            </div>

            <!-- 選考詳細 -->
            <div class="selection-detail-container">
                <label for="msd_selection_detail">選考詳細</label>
                <textarea name="msd_selection_detail" id="msd_selection_detail" cols="30" rows="10"
                    class="selection-detail-input" placeholder="選考情報を記入してください"></textarea>
                <x-input-error :messages="$errors->get('msd_selection_detail')" />
            </div>
        </div>

        <button type="submit" class="add-button">追加</button>
    </form>

    {{-- メニューバー --}}
    @if (!$user->isMentor)
        {{-- メニューバー --}}
        <div class="list-box">
            <x-menubar />
        </div>
    @endif
</x-app-layout>
