@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif

            <div class="card shadow mb-4 my-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Aspirasi/Pengaduan
                    </h6>
                </div>
            </div>

            <div class="card-body">
                <table class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Kategori_id</th>
                                <th>Lokasi</th>
                                <th>Keterangan</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if (count($inputaspirasis) > 0)
                            @foreach ($inputaspirasis as $key => $inputaspirasi)
                            <tr align:'center'>

                                <th scope="row">{{ $key + 1 }}</th>
                              
                                <td>{{ $inputaspirasi->nis }}</td>
                                <td>{{ $inputaspirasi->kategori_id }}</td>
                                <td>{{ $inputaspirasi->lokasi }}</td>
                                <td>{{ $inputaspirasi->keterangan }}</td>
                                <td><img src="{{ asset('foto') }}/{{ $inputaspirasi->foto }}" width="40%"></td>
<!--Tambahkan Status-->
                                <td>
                                    @if(
            empty (App\Models\Aspirasi::where('kategori_id', $inputaspirasi->id)
                ->latest()->first()->status)
        )
                                    <b>Menunggu</b>
                                    @else
                                    <b>{{App\Models\Aspirasi::where('kategori_id', $inputaspirasi->id)
                ->latest()->first()->status}}</b>
                                    @endif
                                </td>
<!---->
                                </td>
                                    
                                    <td>
                                        <a href="{{ route('inputaspirasi.show', [$inputaspirasi->id]) }}"><button class="btn btn-outline-success"><i class="fas fa-fw fa-eye"></i></button></a>
                                    </td>
                                            @csrf
                                        </form>
                                    </div>
                                </div>

                                </button></a>

                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td>Tidak ada Data yang dapat ditampilkan.</td>
                            @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection