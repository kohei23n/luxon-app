<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @forelse ($cases as $case)
                    <p>提出者：{{ $case->user->mus_user_last_name }}{{ $case->user->mus_user_first_name }}</p>
                    <p>ケース設問：{{ $case->tca_case_content }}</p>
                    <p>ドキュメントURL：{{ $case->tca_case_url }}</p>
                    @if ($type == 'unassigned')
                        <a href="{{ route('admin.caseEdit', $case->tca_case_id) }}">割り振る</a>
                    @else
                        <p>添削メンター：{{ $case->mentor->mme_last_name }}</p>
                    @endif
                    <br><br>
                @empty
                    <p>提出はありません！</p>
                @endforelse
                <a href="{{ route('admin.caseCount') }}">戻る</a>
            </div>
        </div>
    </div>
</x-app-layout>
