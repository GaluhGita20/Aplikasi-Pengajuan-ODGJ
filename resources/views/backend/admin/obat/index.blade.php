@extends('layouts.backend')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Advanced Table</p>
        <a href="{{ route('admin.obat.add') }}" class="btn btn-primary mr-2 mb-2">Add Obat</a>
        <br>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table  class="display expandable-table" style="width:100%">
                <thead>
                  <tr>
                    <th>Id#</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Dosis</th>
                    <th>Deskripsi</th>
                    <th>Data Dibuat</th>
                    <th>Update</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $data)
                    
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_obat }}</td>
                    <td>{{ $data->jenis_obat }}</td>
                    <td>{{ $data->konsumsi_perhari }}</td>
                    <td>{{ $data->desc_obat }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->updated_at }}</td>
                    <td><a href="{{ route('admin.obat.edit', $data->id) }}" class="btn btn-warning mr-2 mb-2">Edit</a></td>
                    <td>
                      <form action="{{ route('admin.obat.delete', $data->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger mr-2 mb-2">Hapus</a>
                      </form>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
            </table>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection