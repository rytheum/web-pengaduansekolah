@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif
            <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data"> @csrf <div
                    class="card">
                    <div class="card-header">Tambah Siswa</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror">
                            @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror">
                            @error('kelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Tambah Siswa</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection