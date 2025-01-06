@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data"> @csrf <div
                    class="card">
                    <div class="card-header">Tambah Kategori</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="number" name="id" class="form-control @error('id') is-invalid @enderror">
                            @error('id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">
                            @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Tambah Kategori</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection