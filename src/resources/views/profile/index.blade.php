<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('選考情報') }}
                </h2>
                <p class="mt-1 text-sm text-gray-600">テキストが入ります。</p>
                <div class="max-w-xl">
                    <table>
                        <tr>
                            <th>企業名</th>
                            <th>選考ステータス</th>
                            <th>志望順位</th>
                            <th>選考日時</th>
                        </tr>
                        @foreach ($selectionStatuses as $selectionStatus)
                            <tr>
                                <td>{{ $selectionStatus->tss_company_name }}</td>
                                <td>{{ $selectionStatus->tss_selection_status }}</td>
                                <td>{{ $selectionStatus->tss_preference_ranking }}</td>
                                <td>{{ $selectionStatus->tss_selection_date }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
