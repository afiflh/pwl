@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Hobi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Hobi</li>
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
            <form method="POST" action="{{ $url_form }}"> 
                @csrf
                {!! (isset($hobi))? method_field('PUT') : '' !!}
                
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control @error('nama_hobi') is-invalid @enderror" value="{{ isset($hobi)? $hobi->nama_hobi : old('nama_hobi') }}" name="nama_hobi" type="text"/> 
                    @error('nama_hobi')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Kategori</label>
                    <input class="form-control @error('kategori_hobi') is-invalid @enderror" value="{{ isset($hobi)? $hobi->kategori_hobi : old('kategori_hobi') }}" name="kategori_hobi" type="text"/> 
                    @error('kategori_hobi')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input class="form-control @error('deskripsi') is-invalid @enderror" value="{{ isset($hobi)? $hobi->deskripsi : old('deskripsi') }}" name="deskripsi" type="text"/> 
                    @error('deskripsi')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>



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