@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage-selection.css') }}">
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('選考情報') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">選考情報</h2>
                <div class="max-w-xl">
                    <table class="selection-table-title">
                        <tr>
                            <th>企業名</th>
                            <th>選考ステータス</th>
                            <th>志望順位</th>
                            <th>選考日時</th>
                        </tr>
                        @foreach ($user->selectionStatuses as $status)
                            <tr>
                                <td class="corporation-name">{{ $status->tss_company_name }}</td>
                                <td>{{ $status->tss_selection_status }}</td>
                                <td>{{ $status->tss_preference_ranking }}</td>
                                <td>{{ $status->tss_selection_date }}</td>
                                <td class="edit-btn"><a
                                        href="{{ route('mypage.selectionEdit', $status->tss_selection_status_id) }}">編集<br>ボタン</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <a href="{{ route('mypage.selectionAdd') }}">追加ボタン</a>
                <a href="{{ route('mypage.index') }}">戻る</a>
            </div>

        </div>
    </div>
</x-app-layout>
