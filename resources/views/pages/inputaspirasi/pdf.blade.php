<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="title text-center mb-5">
        <h2>Pengaduan Sekolah</h2>
        <h5>SMK CKTC</h5>
    </div>

    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>NIS</th>
            <th>Kategori_id</th>
            <th>Lokasi</th>
            <th>Keterangan</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inputaspirasis as $key=>$inputaspirasi)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$inputaspirasi->nis}}</td>
                <td>{{$inputaspirasi->kategori_id}}</td>
                <td>{{$inputaspirasi->lokasi}}</td>
                <td>{{$inputaspirasi->keterangan}}</td>
               
                 <td>
                                @if(empty(App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)
                                ->latest()->first()->status))
                                <b>Menunggu</b>
                                @else
                                <b>{{App\Models\Aspirasi::where('input_aspirasi_id',$inputaspirasi->id)
                                    ->latest()->first()->status}}</b>
                                @endif
                            </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>

</html>