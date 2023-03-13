@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Keluarga</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">LIST</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered tabel-hover">
            <thead class="tabel">
                <th class="text-center bg-secondary">ID</th>
                <th class="text-center bg-secondary">Nama</th>
                <th class="text-center bg-secondary">Jenis Kelamin</th>
                <th class="text-center bg-secondary">Hubungan Keluarga</th>
                <th class="text-center bg-secondary">Tanggal Lahir</th>
            </thead>
            @foreach ($keluarga as $keluarga)
            <tr>
                <td>{{$keluarga->id}}</td>
                <td>{{$keluarga->nama}}</td>
                <td>{{$keluarga->jenis_kelamin}}</td> 
                <td>{{$keluarga->hubungan}}</td>
                <td>{{$keluarga->tanggal_lahir}}</td>
             </tr>
            @endforeach
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Sudah dulu ygy
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

  @endsection

  @push('custom_css')
      <style>
        th{
            
        }
        /* .card{
            background:green;
            color:aliceblue;
            transition: 0.5s;
        }

        .card:hover{
            background: aqua;
            color: blue;
            transform:scale(0.9);
        } */
      </style>
  @endpush

  @push('custom_js')
      {{-- <script>
        alert('Halaman Home')
      </script> --}}
  @endpush