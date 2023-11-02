<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('イベント追加') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- イベント追加フォーム -->
            <form method="post" action="{{ route('admin.eventCreate') }}" class="mt-6 space-y-6">
                @csrf
                @method('post')
        
                <div>
                    <!-- 業界ID -->
                    <div class="mt-4">
                        <x-input-label for="mev_industry_id" :value="__('業界')" />
                        <select id="mev_industry_id" name="mev_industry_id">
                            <option value="" disabled selected>選択してください</option>
                            @foreach ($industries as $industry)
                                <option value="{{ $industry->min_industry_id }}">{{ $industry->min_industry_name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('mev_industry_id')" class="mt-2" />
                    </div>

                    <!-- 会社ID -->
                    <div class="mt-4">
                        <x-input-label for="mev_company_id" :value="__('会社')" />
                        <select id="mev_company_id" name="mev_company_id">
                            <option value="" disabled selected>選択してください</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->mco_company_id }}">{{ $company->mco_company_name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('mev_company_id')" class="mt-2" />
                    </div>

                    <!-- イベント名 -->
                    <div class="mt-4">
                        <x-input-label for="mev_event_name" :value="__('イベント名')" />
                        <x-text-input id="mev_event_name" class="block mt-1 w-full" type="text"
                            name="mev_event_name" />
                        <x-input-error :messages="$errors->get('mev_event_name')" class="mt-2" />
                    </div>

                    <!-- イベント概要 -->
                    <div class="mt-4">
                        <x-input-label for="mev_event_overview" :value="__('イベント概要')" />
                        <x-text-input id="mev_event_overview" class="block mt-1 w-full" type="text"
                            name="mev_event_overview" />
                        <x-input-error :messages="$errors->get('mev_event_overview')" class="mt-2" />
                    </div>

                    <!-- イベント詳細（任意） -->
                    <div class="mt-4">
                        <x-input-label for="mev_event_description" :value="__('イベント詳細（任意）')" />
                        <x-text-input id="mev_event_description" class="block mt-1 w-full" type="text"
                            name="mev_event_description" />
                        <x-input-error :messages="$errors->get('mev_event_description')" class="mt-2" />
                    </div>
        
                    <!-- イベント日時 -->
                    <div class="mt-4">
                        <x-input-label for="mev_event_datetime" :value="__('イベント日時')" />
                        <x-text-input id="mev_event_datetime" class="block mt-1 w-full" type="date"
                            name="mev_event_datetime" />
                        <x-input-error :messages="$errors->get('mev_event_datetime')" class="mt-2" />
                    </div>

                    <!-- イベント参加URL -->
                    <div class="mt-4">
                        <x-input-label for="mev_event_participate_url" :value="__('イベント参加URL')" />
                        <x-text-input id="mev_event_participate_url" class="block mt-1 w-full" type="text"
                            name="mev_event_participate_url" />
                        <x-input-error :messages="$errors->get('mev_event_participate_url')" class="mt-2" />
                    </div>

                    <!-- イベント資料URL（任意） -->
                    <div class="mt-4">
                        <x-input-label for="mev_event_materials_url" :value="__('イベント資料URL（任意）')" />
                        <x-text-input id="mev_event_materials_url" class="block mt-1 w-full" type="text"
                            name="mev_event_materials_url" />
                        <x-input-error :messages="$errors->get('mev_event_materials_url')" class="mt-2" />
                    </div>
                </div>
        
                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
        
                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>

            <a href="{{ route('admin.index') }}">戻る</a>

        </div>
    </div>
</x-app-layout>
