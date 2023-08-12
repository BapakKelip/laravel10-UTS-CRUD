@extends('layout.main')

@section('content')
<h3>Data Calon Peserta</h3>
<div class="card mt-4">
    <div class="card-header">
     <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('pesertas/add') }}'">
        <i class="fa-solid fa-circle-plus"></i> Tambahkan Calon Peserta
     </button>
    </div>
    <div class="card-body">
        @if (session('msg'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    <div class="alert alert-success" role="alert">
        <strong>Berhasil</strong> {{ session('msg') }}
      </div>
@endif
      <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>No Pendaftaran</th>
                <th>Tanggal Daftar</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Sarjana</th>
                <th>Pendidikan Fakultas</th>
                <th>Pendidikan Universitas</th>
                <th>Organisasi</th>
                <th>Keterampilan</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>No Telepon</th>
                <th>HandPhone</th>
                <th>Email</th>
                <th>#</th>

            </tr>
            <tbody>
                @foreach ($pesertas as $peserta)
                    <tr>
                        <td>{{ $peserta->id }}</td>
                        <td>{{ $peserta->no_pendaftaran }}</td>
                        <td>{{ $peserta->created_at }}</td>
                        <td>{{ $peserta->name }}</td>
                        <td>{{ $peserta->tempat_lahir }}</td>
                        <td>{{ $peserta->tanggal_lahir }}</td>
                        <td>{{ ($peserta->jenis_kelamin=='T') ? 'Transgender' : 'Laki-Laki' , 'Perempuan' }}</td>
                        <td>{{ $peserta->sarjana }}</td>
                        <td>{{ $peserta->pendidikan_fakultas }}</td>
                        <td>{{ $peserta->pendidikan_universitas }}</td>
                        <td>{{ $peserta->organisasi }}</td>
                        <td>{{ $peserta->keterampilan }}</td>
                        <td>{{ $peserta->alamat }}</td>
                        <td>{{ $peserta->kota }}</td>
                        <td>{{ $peserta->telepon }}</td>
                        <td>{{ $peserta->handphone }}</td>
                        <td>{{ $peserta->email }}</td>
                        <td>
                            <form style="display: inline" onsubmit="return deleteData('{{ $peserta->name }}')" method="POST" action="{{ url('pesertas/' .$peserta->idpesertas) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" title="Edit Data"><i class="fa-solid fa-trash "></i></button>
                            </form>
                        <button onclick="window.location='{{ url('pesertas/' .$peserta->idpesertas) }}'" class="btn btn-sm btn-warning" title="Delete Data"><i class="fa-solid fa-pen-to-square"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
      </table>
    </div>
  </div>
  <script>
    function deleteData(name){
        pesan = confirm(`Yakin ingin menghapus data dengan nama ${name} ingin di hapus?`);
        if(pesan) return true;
        else return false;
    }
  </script>
@endsection
