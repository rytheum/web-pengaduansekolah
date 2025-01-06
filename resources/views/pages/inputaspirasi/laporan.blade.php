@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="form-group">
        <a href="{{url('/laporan/cetak')}}"><button class="btn btn-primary">Export ke PDF</i></button></a>
    </div>

    <div class="card shadow mb-4 my-0">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Kategori_id</th>
                            <th>Lokasi</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tbody>
                        @if (count($inputaspirasis) > 0)
                        @foreach ($inputaspirasis as $key => $inputaspirasi)
                        <tr align:'center'>
                        
                            <th scope="row">{{ $key + 1 }}</th>
                        
                            <td>{{ $inputaspirasi->nisn }}</td>
                            <td>{{ $inputaspirasi->kategori_id }}</td>
                            <td>{{ $inputaspirasi->lokasi }}</td>
                            <td>{{ $inputaspirasi->keterangan }}</td>
                            <!-- <td><img src="{{ asset('foto') }}/{{ $inputaspirasi->foto }}" width="40%"></td> -->
                        
                            <td>
                                @if(empty(App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)
                                ->latest()->first()->status))
                                <b>Menunggu</b>
                                @else
                                <b>{{App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)
                                    ->latest()->first()->status}}</b>
                                @endif
                            </td>
                        
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