@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/review/case.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース割り振り') }}
        </h2>
    </x-slot>
    <div>
        <form method="post" action="{{ route('admin.caseUpdate', $id) }}">
            @csrf
            @method('patch')

            <!-- ケース情報 -->
            <div>
                <p>提出者：{{ $case->user->mus_user_last_name }}{{ $case->user->mus_user_first_name }}</p>
                <p>ケース設問：{{ $case->tca_case_content }}</p>
                <p>ドキュメントURL：{{ $case->tca_case_url }}</p>
            </div>

            <!-- ケース割り振り -->
            <div>
                <label for="tca_mentor_id">ケース割り当て</label>
                <select id="tca_mentor_id" name="tca_mentor_id">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->mus_user_id }}">{{ $mentor->mus_user_last_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('tca_mentor_id')" />
            </div>

            <div>
                <button type="submit">確定</button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                        {{ __('Saved.') }}</p>
                @endif
            </div>
        </form>

        <a href="{{ route('admin.caseCount') }}">戻る</a>
    </div>
</x-app-layout>
