@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About-us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">About-us</a></li>
              <li class="breadcrumb-item active">About-us Page</li>
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
          <h3 class="card-title">Ini tentang saya</h3>

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
            Nama: Afif Lukmanul Hakim <br> NIM: 2141720262
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Sudah dulu yaaa
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
        .card{
            background:green;
            color:aliceblue;
            transition: 0.5s;
        }

        .card:hover{
            background: aqua;
            color: blue;
            transform:scale(0.9);
        }
      </style>
  @endpush

  @push('custom_js')
      <script>
        alert('Halaman About-us')
      </script>
  @endpush
