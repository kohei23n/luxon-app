@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            @switch($type)
                @case('unassigned')
                    未割り振りのケース一覧
                @break

                @case('assigned')
                    割り振り済み未返却のケース一覧
                @break

                @case('returned')
                    返却済みのケース一覧
                @break

                @default
                    全てのケース一覧
            @endswitch
        </h2>
    </x-slot>

    @forelse ($cases as $case)
        <div class="admin-container">
            <p>提出者：{{ $case->user->mus_user_last_name }}{{ $case->user->mus_user_first_name }}</p>
            <p>ケース設問：{{ $case->tca_case_content }}</p>
            <p>ドキュメントURL：{{ $case->tca_case_url }}</p>
            @if ($type == 'unassigned')
                <a href="{{ route('admin.caseEdit', $case->tca_case_id) }}" class="add-button">割り振る</a>
            @else
                <p>添削メンター：{{ $case->mentor->mus_user_last_name }}</p>
            @endif
        </div>
        @empty
        <div class="admin-container">
            <p>提出はありません！</p>
        </div>
    @endforelse
    <a href="{{ route('admin.caseCount') }}" class="back-button">戻る</a>
</x-app-layout>
