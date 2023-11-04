@section('head')
    <link rel="stylesheet" href="{{ asset('css/mentor/case.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース一覧') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <p>返却前</p>
            @foreach ($cases as $case)
                <a href="{{ route('mentor.caseEdit', $case->tca_case_id) }}">
                    <p>提出者：{{ $case->user->mus_user_last_name }}{{ $case->user->mus_user_first_name }}</p>
                    <p>設問：{{ $case->tca_case_content }}</p>
                </a><br>
            @endforeach
            <p>返却済み</p>
            @foreach ($returnedCases as $returnedCase)
                <div>
                    <p>提出者：{{ $returnedCase->user->mus_user_last_name }}{{ $returnedCase->user->mus_user_first_name }}
                    </p>
                    <p>会社名：{{ $returnedCase->tca_case_content }}</p>
                </div><br>
            @endforeach





            <br>
            <a href="{{ route('mentor.index') }}">戻る</a>
        </div>
    </div>
</x-app-layout>
