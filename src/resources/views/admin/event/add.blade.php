@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント追加') }}
        </h2>
    </x-slot>

    <!-- イベント追加フォーム -->
    <form method="post" action="{{ route('admin.eventCreate') }}">
        @csrf
        @method('post')

        <div class="admin-container">
            <!-- 業界ID -->
            <div>
                <label for="mev_industry_id">業界</label>
                <select id="mev_industry_id" name="mev_industry_id">
                    <option value="" disabled {{ old('mev_industry_id') ? '' : 'selected' }}>選択してください</option>
                    @foreach ($industries as $industry)
                        <option value="{{ $industry->min_industry_id }}" {{ old('mev_industry_id') == $industry->min_industry_id ? 'selected' : '' }}>{{ $industry->min_industry_name }}
                        </option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('mev_industry_id')" />
            </div>

            <!-- 会社ID -->
            <div>
                <label for="mev_company_id">会社（任意）</label>
                <select id="mev_company_id" name="mev_company_id">
                    <option value="" disabled {{ old('mev_company_id') ? '' : 'selected' }}>選択してください</option>
                    @foreach ($companies as $company)
                        <option value="{{ $company->mco_company_id }}" {{ old('mev_company_id') == $company->mco_company_id ? 'selected' : '' }}>{{ $company->mco_company_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('mev_company_id')" />
            </div>

            <!-- イベント名 -->
            <div>
                <label for="mev_event_name">イベント名</label>
                <input type="text" id="mev_event_name" name="mev_event_name" value="{{ old('mev_event_name') }}">
                <x-input-error :messages="$errors->get('mev_event_name')" />
            </div>

            <!-- イベント概要 -->
            <div>
                <label for="mev_event_overview">イベント概要</label>
                <input type="text" id="mev_event_overview" name="mev_event_overview" value="{{ old('mev_event_name') }}">
                <x-input-error :messages="$errors->get('mev_event_overview')" />
            </div>

            <!-- イベント詳細（任意） -->
            <div>
                <label for="mev_event_description">イベント詳細（任意）</label>
                <input type="text" id="mev_event_description" name="mev_event_description" value="{{ old('mev_event_description') }}">
                <x-input-error :messages="$errors->get('mev_event_description')" />
            </div>

            <!-- イベント日時 -->
            <div>
                <label for="mev_event_datetime">日時</label>
                <input type="datetime-local" id="mev_event_datetime" name="mev_event_datetime" value="{{ old('mev_event_datetime') }}">
                <x-input-error :messages="$errors->get('mev_event_datetime')" />
            </div>

            <!-- イベント参加URL -->
            <div>
                <label for="mev_event_participate_url">イベント参加URL</label>
                <input type="text" id="mev_event_participate_url" name="mev_event_participate_url" value="{{ old('mev_event_participate_url') }}">
                <x-input-error :messages="$errors->get('mev_event_participate_url')" />
            </div>

            <!-- イベント資料URL（任意） -->
            <div>
                <label for="mev_event_materials_url">イベント資料URL（任意）</label>
                <input type="text" id="mev_event_materials_url" name="mev_event_materials_url" value="{{ old('mev_event_materials_url') }}">
                <x-input-error :messages="$errors->get('mev_event_materials_url')" />
            </div>

            <!-- 仮予約 -->
            <div>
                <label for="mev_temp_enabled">仮予約</label>
                <select id="mev_temp_enabled" name="mev_temp_enabled">
                    <option value="0" selected>なし</option>
                    <option value="1">あり</option>
                </select>
                <x-input-error :messages="$errors->get('mev_temp_enabled')" />
            </div>

            <button type="submit" class="add-button">追加</button>
            <a href="{{ route('admin.index') }}" class="back-button">戻る</a>
        </div>

    </form>

</x-app-layout>
