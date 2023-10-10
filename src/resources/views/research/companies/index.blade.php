<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('業界研究') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>企業一覧</h1>
                    @foreach($companies as $company)
                        <a href="{{ route('research.selectionsIndex', $company->mco_company_id) }}">{{ $company->mco_company_name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
