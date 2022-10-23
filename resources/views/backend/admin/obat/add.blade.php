@extends('layouts.backend')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Master Data Obat</h4>
        <p class="card-description">
          Isilah kolom dengan sesuai.
        </p>
        <form class="forms-sample" method="POST" action="{{ route('admin.obat.save') }}">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Nama Obat</label>
            <input type="text" class="form-control" id="exampleInputName1" name="nama_obat" placeholder="Nama Obat">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Jenis Obat</label>
            <select class="form-control" id="exampleFormControlSelect2" name="jenis_obat">
              <option selected disabled>Pilih Jenis Obat</option>
              <option value="keras">Keras</option>
              <option value="sedang">Sedang</option>
              <option value="ringan">Ringan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Konsumsi Perhari</label>
            <input type="number" class="form-control" id="exampleInputPassword4" name="konsumsi_perhari" placeholder="Dosis Konsumsi Obat per Hari">
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Deskripsi Obat</label>
            <input type="text" class="form-control" id="exampleInputCity1" name="desc_obat" placeholder="Deskripsi Obat">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  @endsection