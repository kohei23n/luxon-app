@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('ES割り振り') }}
        </h2>
    </x-slot>
    <form method="post" action="{{ route('admin.esUpdate', $id) }}">
        @csrf
        @method('patch')

        <div class="admin-container">
            <!-- ES情報 -->
            <div>
                <p>提出者：{{ $sheet->user->mus_user_last_name }}{{ $sheet->user->mus_user_first_name }}</p>
                <p>会社：{{ $sheet->tes_company_name }}</p>
                <p>ドキュメントURL：{{ $sheet->tes_es_url }}</p>
            </div>

            <!-- ES割り振り -->
            <div>
                <label for="tes_mentor_id">ES割り当て</label>
                <select id="tes_mentor_id" name="tes_mentor_id">
                    <option value="" disabled selected>選択してください</option>
                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->mus_user_id }}">{{ $mentor->mus_user_last_name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('tes_mentor_id')" />
            </div>

            <button type="submit" class="add-button">確定</button>
        </div>
    </form>

    <a href="{{ route('admin.esCount') }}" class="back-button">戻る</a>
</x-app-layout>
