@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/es.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ES一覧') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <p>返却前</p>
            @foreach ($entrySheets as $entrySheet)
                <a href="{{ route('mentor.esEdit', $entrySheet->tes_es_id) }}">
                    <p>提出者：{{ $entrySheet->user->mus_user_last_name }}{{ $entrySheet->user->mus_user_first_name }}</p>
                    <p>会社名：{{ $entrySheet->tes_company_name }}</p>
                </a><br>
            @endforeach
            <p>返却済み</p>
            @foreach ($returnedSheets as $returnedSheet)
                <div>
                    <p>提出者：{{ $returnedSheet->user->mus_user_last_name }}{{ $returnedSheet->user->mus_user_first_name }}
                    </p>
                    <p>会社名：{{ $returnedSheet->tes_company_name }}</p>
                </div><br>
            @endforeach
            <br>
            <a href="{{ route('mentor.index') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
