@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/event.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント編集') }}
        </h2>
    </x-slot>
    <div class="admin-container">
        <!-- イベント更新 -->
        <form method="post" action="{{ route('admin.eventUpdate', $event->mev_event_id) }}">
            @csrf
            @method('patch')

            <div>
                <!-- 業界ID -->
                <div>
                    <label for="mev_industry_id">業界</label>
                    <select id="mev_industry_id" name="mev_industry_id">
                        @foreach ($industries as $industry)
                            @if ($event->industry->min_industry_id != $industry->min_industry_id)
                                <option value="{{ $industry->min_industry_id }}">{{ $industry->min_industry_name }}
                                </option>
                            @else
                                <option value="{{ $industry->min_industry_id }}" selected>
                                    {{ $industry->min_industry_name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('mev_industry_id')" />
                </div>

                <!-- 会社ID -->
                <div>
                    <label for="mev_company_id">会社（任意）</label>
                    <select id="mev_company_id" name="mev_company_id">
                        <option value="" disabled selected>{{ optional($event->company)->mco_company_name }}
                        </option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->mco_company_id }}">{{ $company->mco_company_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('mev_company_id')" />
                </div>

                <!-- イベント名 -->
                <div>
                    <label for="mev_event_name">イベント名</label>
                    <input type="text" id="mev_event_name" name="mev_event_name"
                        value="{{ $event->mev_event_name }}">
                    <x-input-error :messages="$errors->get('mev_event_name')" />
                </div>

                <!-- イベント概要 -->
                <div>
                    <label for="mev_event_overview">イベント概要</label>
                    <input type="text" id="mev_event_overview" name="mev_event_overview"
                        value="{{ $event->mev_event_overview }}">
                    <x-input-error :messages="$errors->get('mev_event_overview')" />
                </div>

                <!-- イベント詳細（任意） -->
                <div>
                    <label for="mev_event_description">イベント詳細（任意）</label>
                    <input type="text" id="mev_event_description" name="mev_event_description"
                        value="{{ $event->mev_event_description }}">
                    <x-input-error :messages="$errors->get('mev_event_description')" />
                </div>

                <!-- イベント日時 -->
                <div>
                    <label for="mev_event_datetime">日時</label>
                    <input type="datetime-local" id="mev_event_datetime" name="mev_event_datetime"
                        value="{{ $event->mev_event_datetime }}">
                    <x-input-error :messages="$errors->get('mev_event_datetime')" />
                </div>

                <!-- イベント参加URL -->
                <div>
                    <label for="mev_event_participate_url">イベント参加URL</label>
                    <input type="text" id="mev_event_participate_url" name="mev_event_participate_url"
                        value="{{ $event->mev_event_participate_url }}">
                    <x-input-error :messages="$errors->get('mev_event_participate_url')" />
                </div>

                <!-- イベント資料URL（任意） -->
                <div>
                    <label for="mev_event_materials_url">イベント資料URL（任意）</label>
                    <input type="text" id="mev_event_materials_url" name="mev_event_materials_url"
                        value="{{ $event->mev_event_materials_url }}">
                    <x-input-error :messages="$errors->get('mev_event_materials_url')" />
                </div>
            </div>

            <button type="submit" class="add-button">更新</button>
        </form>
        <!-- イベント削除 -->
        <form method="post" action="{{ route('admin.eventDelete', $event->mev_event_id) }}">
            @csrf
            @method('delete')
            <button type="submit" class="delete-button">削除</button>
        </form>
        <a href="{{ route('admin.eventIndex') }}" class="back-button">戻る</a>
    </div>
</x-app-layout>
