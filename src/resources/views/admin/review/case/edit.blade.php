@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ケース割り振り') }}
        </h2>
    </x-slot>
    <form method="post" action="{{ route('admin.caseUpdate', $id) }}">
        @csrf
        @method('patch')

        <div class="admin-container">
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

            <button type="submit" class="add-button">確定</button>
        </div>
    </form>

    <a href="{{ route('admin.caseCount') }}" class="back-button">戻る</a>
</x-app-layout>
