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
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <span>List CRUD SISWA</span>
                    <a href="{{ route('siswa.create') }}" title="Tambah Data">
                        <button class="btn btn-primary">Tambah</button>
                    </a>
                </div>
            </div>


            <div class="card-body">
                <table class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if (count($siswas) > 0)
                                @foreach ($siswas as $key => $siswa)
                                    <tr align:'center'>

                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $siswa->nis }}</td>
                                        <td>{{ $siswa->kelas }}</td>
                                        <td>

                                            <a href="{{ route('siswa.edit', [$siswa->nis]) }}"><button class="btn
                                    btn-success"><i class="fas fa-fw fa-edit"></i></button></a>

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $siswa->nis }}"><i
                                                    class="fas fa-fw fa-trash"></i>
                                            </button>
                                        </td>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{ $siswa->nis }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ route('siswa.destroy', [$siswa->nis]) }}" method="post">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">DELETE
                                                            </h5>
                                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda Yakin ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                        </div>
                                                    </div>
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