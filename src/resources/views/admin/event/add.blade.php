<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('イベント追加') }}
        </h2>
    </x-slot>

    <div>
        <div>

            <!-- イベント追加フォーム -->
            <form method="post" action="{{ route('admin.eventCreate') }}">
                @csrf
                @method('post')

                <div>
                    <!-- 業界ID -->
                    <div>
                        <x-input-label for="mev_industry_id" :value="__('業界')" />
                        <select id="mev_industry_id" name="mev_industry_id">
                            <option value="" disabled selected>選択してください</option>
                            @foreach ($industries as $industry)
                                <option value="{{ $industry->min_industry_id }}">{{ $industry->min_industry_name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('mev_industry_id')" />
                    </div>

                    <!-- 会社ID -->
                    <div>
                        <x-input-label for="mev_company_id" :value="__('会社')" />
                        <select id="mev_company_id" name="mev_company_id">
                            <option value="" disabled selected>選択してください</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->mco_company_id }}">{{ $company->mco_company_name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('mev_company_id')" />
                    </div>

                    <!-- イベント名 -->
                    <div>
                        <x-input-label for="mev_event_name" :value="__('イベント名')" />
                        <x-text-input id="mev_event_name" type="text" name="mev_event_name" />
                        <x-input-error :messages="$errors->get('mev_event_name')" />
                    </div>

                    <!-- イベント概要 -->
                    <div>
                        <x-input-label for="mev_event_overview" :value="__('イベント概要')" />
                        <x-text-input id="mev_event_overview" type="text" name="mev_event_overview" />
                        <x-input-error :messages="$errors->get('mev_event_overview')" />
                    </div>

                    <!-- イベント詳細（任意） -->
                    <div>
                        <x-input-label for="mev_event_description" :value="__('イベント詳細（任意）')" />
                        <x-text-input id="mev_event_description" type="text" name="mev_event_description" />
                        <x-input-error :messages="$errors->get('mev_event_description')" />
                    </div>

                    <!-- イベント日時 -->
                    <div>
                        <x-input-label for="mev_event_datetime" :value="__('イベント日時')" />
                        <x-text-input id="mev_event_datetime" type="date" name="mev_event_datetime" />
                        <x-input-error :messages="$errors->get('mev_event_datetime')" />
                    </div>

                    <!-- イベント参加URL -->
                    <div>
                        <x-input-label for="mev_event_participate_url" :value="__('イベント参加URL')" />
                        <x-text-input id="mev_event_participate_url" type="text" name="mev_event_participate_url" />
                        <x-input-error :messages="$errors->get('mev_event_participate_url')" />
                    </div>

                    <!-- イベント資料URL（任意） -->
                    <div>
                        <x-input-label for="mev_event_materials_url" :value="__('イベント資料URL（任意）')" />
                        <x-text-input id="mev_event_materials_url" type="text" name="mev_event_materials_url" />
                        <x-input-error :messages="$errors->get('mev_event_materials_url')" />
                    </div>
                </div>

                <div>
                    <button type="submit">追加</button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                            {{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <a href="{{ route('admin.index') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
