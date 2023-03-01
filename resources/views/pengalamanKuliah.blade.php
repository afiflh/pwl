@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengalaman Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pengalaman</a></li>
              <li class="breadcrumb-item active">Pengalaman Kuliah</li>
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
          <h3 class="card-title"></h3>

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
            Halo, saya Afif Lukmanul Hakim, seorang mahasiswa di Politeknik Negeri Malang dengan program studi Teknik Informatika. 
            Sebagai seorang mahasiswa, saya juga mengalami beberapa keluh kesah selama kuliah di Politeknik Negeri Malang. 
            Berikut ini adalah beberapa keluh kesah yang saya alami selama kuliah: <br>

            1. Beban tugas yang berat <br>
                Salah satu keluhan yang saya alami adalah beban tugas yang terkadang terasa sangat berat. 
                Sebagai mahasiswa Teknik Informatika, saya harus belajar banyak hal seperti pemrograman, jaringan komputer, 
                basis data, keamanan informasi, dan lain-lain. Kadang-kadang, tugas yang diberikan oleh dosen terasa sangat banyak dan sulit untuk dikerjakan dalam waktu yang singkat. <br>
            2. Tekanan untuk mendapatkan nilai tinggi <br>
                Seperti mahasiswa pada umumnya, saya juga merasa tekanan untuk mendapatkan nilai tinggi dalam setiap mata kuliah. 
                Terkadang, tekanan ini membuat saya merasa cemas dan khawatir jika tidak bisa mendapatkan nilai yang memuaskan. <br>
            3. Kesulitan mengatur waktu <br>
                Kuliah di Politeknik Negeri Malang juga membutuhkan kemampuan untuk mengatur waktu dengan baik. Saya pernah merasa kesulitan mengatur waktu antara kuliah, 
                tugas, dan kegiatan lainnya seperti organisasi atau kegiatan sosial. <br>
                Meskipun saya mengalami beberapa keluh kesah selama kuliah di Politeknik Negeri Malang, 
                saya tetap bersyukur karena hal-hal ini membuat saya belajar menjadi lebih mandiri dan gigih dalam menyelesaikan tugas-tugas yang diberikan. 
                Saya berharap kekurangan yang saya alami bisa menjadi masukan bagi kampus untuk terus meningkatkan kualitas pendidikan dan lingkungan belajar bagi mahasiswanya.

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          uhuy
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
      
  @endpush