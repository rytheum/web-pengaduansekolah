@extends('layouts.backend.master')

@section('content')
<h3 class="border-bottom pb-3 mb-3">Dashboard</h3>
<div class="row mb-3 pb-3">
    <div class="col-sm-6 mb-3">
        <div class="card">
            <div class="card-body bg-warning opacity -75">
                <i class="fas fa-person fa-5x"></i>
            </div>
            <div class="card-footer bg-warning active">
                <a href="{{route('siswa.index')}}" class="nav-link text-white">
                    CRUD SISWA
                    <i class="fas fa-arrow-right float-end"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="card">
            <div class="card-body bg-success opacity-75">
                <i class="fas fa-list fa-5x"></i>
            </div>
            <div class="card-footer bg-success active">
                <a href="{{route('inputaspirasi.index')}}" class="nav-link text-white">List Aspirasi
                    <i class="fas fa-arrow-right float-end"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3 pb-3">
    <div class="col-sm-6 mb-3">
        <div class="card">
            <div class="card-body bg-danger opacity -75">
                <i class="fas fa-table fa-5x"></i>
            </div>
            <div class="card-footer bg-danger active">
                <a href="{{route('kategori.index')}}" class="nav-link text-white">
                    CRUD Kategori
                    <i class="fas fa-arrow-right float-end"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="card">
            <div class="card-body bg-primary opacity-75">
                <i class="fas fa-print fa-5x"></i>
            </div>
            <div class="card-footer bg-primary active">
                <a href="{{url('/laporan')}}" class="nav-link text-white">Laporan
                    <i class="fas fa-arrow-right float-end"></i>
                </a>
            </div>
        </div>
    </div>

</div>
</div>
@endsection