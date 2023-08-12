@extends('layout.main')

@section('content')
<h3>Form New Data Calon Peserta</h3>
<div class="card mt-4">
    <div class="card-header">
     <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('pesertas') }}'">
        Kembali
     </button>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ url('pesertas') }}">
        @csrf
            <div class="row mb-3">
              <label for="txtidpesertas" class="col-sm-2 col-form-label">Id Peserta</label>
              <div class="col-sm-10">
                <input type="txtidpesertas" class="form-control @error('txtidpesertas') is-invalid @enderror" id="txtidpesertas" name="txtidpesertas" value="{{ old('id_persertas') }}">
                @error('txtidpesertas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
                <label for="txtpendaftaran" class="col-sm-2 col-form-label">No Pendaftaran</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control @error('txtpendaftaran') is-invalid @enderror" id="txtpendaftaran" name="txtpendaftaran" value="{{ old('id_persertas') }}">
                  @error('txtpendaftaran')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
            </div>
              <div class="row mb-3">
                <label for="txttempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('txttempatlahir') is-invalid @enderror" id="txttempatlahir" name="txttempatlahir" value="{{ old('id_persertas') }}">
                  @error('txttempatlahir')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txttanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control @error('txttanggallahir') is-invalid @enderror" id="txttanggallahir" name="txttanggallahir" value="{{ old('id_persertas') }}">
                  @error('txttanggallahir')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtsarjana" class="col-sm-2 col-form-label">Sarjana</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('txtsarjana') is-invalid @enderror" id="txtsarjana" name="txtsarjana" value="{{ old('id_persertas') }}">
                  @error('txtsarjana')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtdakultas" class="col-sm-2 col-form-label">Pendidikan Fakultas</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('txtdakultas') is-invalid @enderror" id="txtdakultas" name="txtdakultas" value="{{ old('id_persertas') }}">
                  @error('txtdakultas')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
            <div class="row mb-3">
              <label for="txtuniv" class="col-sm-2 col-form-label">Pendidikan Universitas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('txtuniv') is-invalid @enderror" id="txtuniv" name="txtuniv" value="{{ old('txtuniv') }}">
                @error('txtuniv')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
                <label for="txtorganisasi" class="col-sm-2 col-form-label">Organisasi</label>
                <div class="col-sm-10">
                  <input type="txtorganisasi" class="form-control @error('txtorganisasi') is-invalid @enderror" id="txtorganisasi" name="txtorganisasi" value="{{ old('id_persertas') }}">
                  @error('txtorganisasi')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtketerampilan" class="col-sm-2 col-form-label">Keterampilan</label>
                <div class="col-sm-10">
                  <input type="txtketerampilan" class="form-control @error('txtketerampilan') is-invalid @enderror" id="txtketerampilan" name="txtketerampilan" value="{{ old('id_persertas') }}">
                  @error('txtketerampilan')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txtkota" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                  <input type="txtkota" class="form-control @error('txtkota') is-invalid @enderror" id="txtkota" name="txtkota" value="{{ old('id_persertas') }}">
                  @error('txtkota')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="txthandphone" class="col-sm-2 col-form-label">Handphone</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('txthandphone') is-invalid @enderror" id="txthandphone" name="txthandphone" value="{{ old('id_persertas') }}">
                  @error('txthandphone')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
            <div class="row mb-3">
              <label for="txtname" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control @error('txtname') is-invalid @enderror" id="txtname" name="txtname" value="{{ old('txtname') }}">
                @error('txtname')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="txtphone" class="col-sm-2 col-form-label">Nomor HP</label>
              <div class="col-sm-10">
                <input type="telephone" class="form-control @error('txtphone') is-invalid @enderror" id="txtphone" name="txtphone" value="{{ old('txtphone') }}">
                @error('txtphone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea name="txtalamat" class="@error('txtalamat') is-invalid @enderror" lass="form-control" id="txtalamat" cols="140" rows="10" value="{{ old('txtalamat') }}"></textarea>
                @error('txtalamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
                <label for="txtemail" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                  <input type="telephone" class="form-control @error('txtemail') is-invalid @enderror" id="txtemail" name="txtemail" value="{{ old('txtemail') }}">
                  @error('txtemail')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
            <div class="row mb-3">
              <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
              <div class="col-sm-10">
                <select class="form-select form-select-sm @error('txtgender') is-invalid @enderror" name="txtgender" id="txtgender">
                <option value="" selected>-Pilih-</option>
                <option value="L" {{ (old('txtgender')=='L') ? 'selected' : '' }}>Laki-Laki</option>
                <option value="P" {{ (old('txtgender')=='P') ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('txtgender')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
