@extends('main')

@section('container')

    <div class="text-center mt-5" >

        <h3>Selamat Anda masuk sebagai peserta lomba dengan nilai  </h3>
        86
    </div>
    <div class="d-flex justify-content-center">
        @if (($nilai >= 0) and ($nilai <= 70))
            <div>

                Maaf anda tidak lolos sebagai peserta lomba.
            </div>
        @else
            <div>
                Selamat Mengikuti Lomba dengan antusias.
            </div>
        @endif
    </div>

@endsection
