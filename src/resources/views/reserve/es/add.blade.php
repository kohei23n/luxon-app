@section('head')
    <link rel="stylesheet" href="{{ asset('css/reserve/es.css') }}">
@endsection

<x-app-layout>

    <div class="container">
        <p class="counter">ES添削チケット：{{ $count->tud_es_count_remaining }}</p>
        {{-- <a href="{{ route('reserve.ticketEdit') }}" class="ticket-link">チケットを増やす ></a> --}}

        <div class="form-container">
            <form method="post" action="{{ route('reserve.esCreate') }}">
                @csrf
                @method('post')


                {{-- チケットが0より大きい場合は表示 --}}
                @if ($count->tud_es_count_remaining > 0)
                    <!-- 会社 -->
                    <div class="selection-add-box">
                        <label for="tes_company_name">会社</label>
                        <input type="text" id="tes_company_name" name="tes_company_name">
                        <x-input-error :messages="$errors->get('tes_company_name')" />
                    </div>

                    <!-- ドキュメントURL -->
                    <div class="selection-add-box">
                        <label for="tes_es_url">ドキュメントURL</label>
                        <input type="text" id="tes_es_url" name="tes_es_url">
                        <x-input-error :messages="$errors->get('tes_es_url')" />
                    </div>

                    <button type="submit" class="add-button">提出</button>
                @else
                    <p>チケットがありません。</p>
                @endif
                <a href="{{ route('reserve.index') }}" class="back-button">戻る</a>
            </form>
        </div>
    </div>
    {{-- メニューバー --}}
    <div class="list-box">
        <x-menubar />
    </div>
</x-app-layout>
