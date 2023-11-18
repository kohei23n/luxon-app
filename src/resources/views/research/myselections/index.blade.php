@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage/selection.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考状況') }}
        </h2>
    </x-slot>

    <div class="selection-container">
        <table class="selection-table-title">
            <tr>
                <th>企業名</th>
                <th>選考ステータス</th>
                <th>志望順位</th>
                <th>選考日時</th>
            </tr>
            @foreach ($selectionStatuses as $status)
                <tr>
                    <td class="corporation-name">{{ $status->tss_company_name }}</td>
                    <td>{{ $status->tss_selection_status }}</td>
                    <td>{{ $status->tss_preference_ranking }}</td>
                    <td>{{ $status->tss_selection_date }}</td>
                    <td class="edit-btn"><a
                            href="{{ route('research.mySelectionsEdit', $status->tss_selection_status_id) }}">編集</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="btn-container">
            <div class="add-btn">
                <a href="{{ route('research.mySelectionsAdd') }}">追加</a>
            </div>
            <div class="bk-btn">
                <a href="{{ route('research.index') }}">戻る</a>
            </div>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
