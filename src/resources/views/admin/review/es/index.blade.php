@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            @switch($type)
                @case('unassigned')
                    未割り振りのES一覧
                @break

                @case('assigned')
                    割り振り済み未返却のES一覧
                @break

                @case('returned')
                    返却済みのES一覧
                @break

                @default
                    全てのES一覧
            @endswitch
        </h2>
    </x-slot>

    @forelse ($entrySheets as $sheet)
        <div class="admin-container">
            <p>提出者：{{ $sheet->user->mus_user_last_name }}{{ $sheet->user->mus_user_first_name }}</p>
            <p>会社：{{ $sheet->tes_company_name }}</p>
            <p>ドキュメントURL：{{ $sheet->tes_es_url }}</p>
            @if ($type == 'unassigned')
                <a href="{{ route('admin.esEdit', $sheet->tes_es_id) }}" class="add-button">割り振る</a>
            @else
                <p>添削メンター：{{ $sheet->mentor->mus_user_last_name }}</p>
            @endif
        </div>
    @empty
        <div class="admin-container">
            <p>提出はありません！</p>
        </div>
    @endforelse
    <a href="{{ route('admin.esCount') }}" class="back-button">戻る</a>
</x-app-layout>
