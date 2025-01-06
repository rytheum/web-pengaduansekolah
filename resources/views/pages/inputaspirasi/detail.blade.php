@extends('layouts.backend.master')

@section('content')
@if (Session::has('message'))
<div class="alert alert-success">
    {{ Session::get('message') }}
</div>
@endif

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">

        <div class="card">
            <div class="card-header">
                <b>Detail Pengaduan</b>
            </div>

            <div class="card-body">
                <div class="form-group">
                    NISN:
                    <b>{{ $inputaspirasi->nis }}</b><br>
                    Kategori: <b>{{ $inputaspirasi->kategori->keterangan }}</b><br>
                    Lokasi: <b>{{ $inputaspirasi->lokasi }}</b><br>
                    Keterangan: <b>{{ $inputaspirasi->keterangan }}</b><br>
                    Foto: <br> <img src="{{ asset('foto') }}/{{ $inputaspirasi->foto }}" width="50%">
                </div>
                <div class="form-group">History Aspirasi:<br>
            @foreach(App\Models\Aspirasi::Where('input_aspirasi_id',$inputaspirasi->id)->get() as $aspirasi)
            <b>{{$aspirasi->created_at}} - {{$aspirasi->feedback}}</b><br>
            @endforeach
            </div>
                
                    <div class="form-group">
                        <a href="{{ route('aspirasi.show', [$inputaspirasi->id]) }}"> <button class="btn btn-primary">Beri
                                Tanggapan Aspirasi</button></a>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection