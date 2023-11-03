@section('head')
    <link rel="stylesheet" href="{{ asset('css/mypage-selection.css') }}">
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('選考情報') }}
        </h2>
    </x-slot>

    <div>
        <h2>選考情報</h2>
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
        <a href="{{ route('mypage.selectionAdd') }}">追加ボタン</a>
        <a href="{{ route('mypage.index') }}">戻る</a>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
