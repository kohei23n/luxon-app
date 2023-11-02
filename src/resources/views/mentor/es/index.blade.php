<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ES一覧') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <p>返却前</p>
            @foreach ($entrySheets as $entrySheet)
                <a href="{{ route('mentor.esEdit', $entrySheet->tes_es_id) }}">
                    <p>提出者：{{ $entrySheet->user->mus_user_last_name }}{{ $entrySheet->user->mus_user_first_name }}</p>
                    <p>会社名：{{ $entrySheet->company->mco_company_name }}</p>
                </a><br>
            @endforeach
            <p>返却済み</p>
            @foreach ($returnedSheets as $returnedSheet)
                <div>
                    <p>提出者：{{ $returnedSheet->user->mus_user_last_name }}{{ $returnedSheet->user->mus_user_first_name }}</p>
                    <p>会社名：{{ $returnedSheet->company->mco_company_name }}</p>
                </div><br>
            @endforeach
            <br>
            <a href="{{ route('mentor.index') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
