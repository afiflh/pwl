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
                {!! (isset($klg))? method_field('PUT') : '' !!}
                
                <div class="form-group">
                    <label>NIK</label>
                    <input class="form-control @error('nik') is-invalid @enderror" value="{{ isset($klg)? $klg->nik : old('nik') }}" name="nik" type="text" /> 
                    @error('nik')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control @error('nama') is-invalid @enderror" value="{{ isset($klg)? $klg->nama : old('nama') }}" name="nama" type="text"/> 
                    @error('nama')
                        <span class="error invalid-feedback">{{ $message }} </span> 
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="laki_laki" value="l" {{ (isset($klg) && $klg->jk == 'Laki-laki') || old('jk') == 'Laki-laki' ? 'checked' : '' }}>
                        <label class="form-check-label" for="laki_laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" id="perempuan" value="p" {{ (isset($klg) && $klg->jk == 'perempuan') || old('jk') == 'perempuan' ? 'checked' : '' }}>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                    @error('jk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                    @error('tanggal_lahir')
                        <span class="error invalid-feedback">{{ $message }}</span>
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