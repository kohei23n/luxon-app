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

    <div>
        <div>
            <div>
                @forelse ($entrySheets as $sheet)
                    <p>提出者：{{ $sheet->user->mus_user_last_name }}{{ $sheet->user->mus_user_first_name }}</p>
                    <p>会社：{{ $sheet->company->mco_company_name }}</p>
                    <p>ドキュメントURL：{{ $sheet->tes_es_url }}</p>
                    @if ($type == 'unassigned')
                        <a href="{{ route('admin.esEdit', $sheet->tes_es_id) }}">割り振る</a>
                    @else
                        <p>添削メンター：{{ $sheet->mentor->mus_user_last_name }}</p>
                    @endif
                    <br><br>
                @empty
                    <p>提出はありません！</p>
                @endforelse
                <a href="{{ route('admin.esCount') }}">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
