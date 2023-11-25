@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/es.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ES返却') }}
        </h2>
    </x-slot>

    <div>
        <p>提出者：{{ $entrySheet->user->mus_user_last_name }}{{ $entrySheet->user->mus_user_first_name }}</p>
        <p>会社名：{{ $entrySheet->tes_company_name }}</p>
        <p>URL：{{ $entrySheet->tes_es_url }}</p>

        <form method="post" action="{{ route('mentor.esUpdate', $entrySheet->tes_es_id) }}">
            @csrf
            @method('patch')

            <button type="submit" class="add-button">返却</button>
        </form>

        <a href="{{ route('mentor.esIndex') }}">戻る</a>
    </div>
</x-app-layout>
