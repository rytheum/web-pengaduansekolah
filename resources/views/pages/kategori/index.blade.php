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
                    <h6 class="m-0 font-weight-bold text-primary">CRUD Kategori
                        <span class="float-right">
                            <a href="{{ route('kategori.create') }}" title="Tambah Kategori">
                                <i class="fas fa-fw fa-plus"></i>Tambah
                            </a>
                        </span>
                    </h6>
                </div>
            </div>


            <div class="card-body">
                <table class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               <th>No</th>
                                <th>Id</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if (count($kategoris) > 0)
                            @foreach ($kategoris as $key => $kategori)
                            <tr align:'center'>

                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $kategori->id }}</td>
                                <td>{{ $kategori->keterangan }}</td>
                                <td>



                                    <a href="{{ route('kategori.edit', [$kategori->id]) }}"><button class="btn
                            btn-success"><i class="fas fa-fw fa-edit"></i></button></a>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $kategori->id }}"><i class="fas fa-fw fa-trash"></i>
                                    </button>


                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $kategori->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('kategori.destroy', [$kategori->id]) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">DELETE
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda Yakin ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
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