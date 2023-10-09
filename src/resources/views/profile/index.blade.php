<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <p>ようこそ、{{ $user->mus_user_last_name }}{{ $user->mus_user_first_name }}さん</p>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">プラン情報</h2>
                <p>プラン名：{{ $user->servicePlan->tsp_service_plan_name ?? 'なし' }}</p>
                <p>対象月：{{ $user->servicePlan->tsp_service_plan_month ?? 'なし' }}</p>
                <p>金額：{{ $user->servicePlan->tsp_subscribe_price }}円</p>
                <p>イベント参加回数：{{ $user->servicePlan->tsp_event_attendance ?? 'なし' }}</p>
                <p>個別面談回数：{{ $user->servicePlan->tsp_interview_count ?? 'なし' }}</p>
                <p>ケース対策回数：{{ $user->servicePlan->tsp_case_study_count ?? 'なし' }}</p>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">専属メンター情報</h2>
                <p>メンター姓：{{ $user->dedicatedMentor->mme_last_name ?? 'なし' }}</p>
                <p>メンター名：{{ $user->dedicatedMentor->mme_first_name ?? 'なし' }}</p>
                <p>メンターLINE URL：{{ $user->dedicatedMentor->mme_line_url ?? 'なし' }}</p>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">選考情報</h2>
                <div class="max-w-xl">
                    <table>
                        <tr>
                            <th>企業名</th>
                            <th>選考ステータス</th>
                            <th>志望順位</th>
                            <th>選考日時</th>
                        </tr>
                        @foreach ($user->selectionStatuses as $status)
                            <tr>
                                <td>{{ $status->tss_company_name }}</td>
                                <td>{{ $status->tss_selection_status }}</td>
                                <td>{{ $status->tss_preference_ranking }}</td>
                                <td>{{ $status->tss_selection_date }}</td>
                                <td><a href="{{ route('profile.selectionEdit', $status->tss_selection_status_id) }}">編集ボタン</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <a href="{{ route('profile.selectionAdd') }}">追加ボタン</a>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">個人情報</h2>
                <a href="{{ route('profile.edit') }}">編集ボタン</a>
            </div>

        </div>
    </div>
</x-app-layout>
