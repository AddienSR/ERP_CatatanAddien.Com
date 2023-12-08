@extends('layouts.app', ['page' => __('Topografi'), 'pageSlug' => 'typography'])

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header mb-5">
          <h5 class="card-category">Judul Tabel Putih</h5>
          <h3 class="card-title">Dibuat menggunakan Keluarga Font Poppins</h3>
        </div>
        <div class="card-body">
          <div class="typography-line">
            <h1>
              <span>Header 1</span>Kehidupan Dasbor Putih </h1>
          </div>
          <div class="typography-line">
            <h2>
              <span>Header 2</span>Kehidupan Dasbor Putih </h2>
          </div>
          <div class="typography-line">
            <h3>
              <span>Header 3</span>Kehidupan Dasbor Putih </h3>
          </div>
          <div class="typography-line">
            <h4>
              <span>Header 4</span>Kehidupan Dasbor Putih </h4>
          </div>
          <div class="typography-line">
            <h5>
              <span>Header 5</span>Kehidupan Dasbor Putih </h5>
          </div>
          <div class="typography-line">
            <h6>
              <span>Header 6</span>Kehidupan Dasbor Putih </h6>
          </div>
          <div class="typography-line">
            <p>
              <span>Paragraph</span>
              Saya akan menjadi pemimpin sebuah perusahaan yang akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya. Saya memahami budaya. Saya adalah inti. Saya pikir itu adalah tanggung jawab yang saya miliki, untuk mendorong kemungkinan-kemungkinan, untuk menunjukkan kepada orang-orang, ini adalah level yang bisa dicapai.
            </p>
          </div>
          <div class="typography-line">
            <span>Quote</span>
            <blockquote>
              <p class="blockquote blockquote-success">
                "Saya akan menjadi pemimpin sebuah perusahaan yang pada akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya. Saya memahami budaya. Saya adalah intinya. Saya pikir itu adalah tanggung jawab yang saya miliki, untuk mendorong berbagai kemungkinan, untuk menunjukkan kepada orang-orang, ini adalah level yang mungkin terjadi."
                <br>
                <br>
                <small>
                  - Noaa
                </small>
              </p>
            </blockquote>
          </div>
          <div class="typography-line">
            <span>Muted Text</span>
            <p class="text-muted">
              Saya akan menjadi pemimpin sebuah perusahaan yang akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya...
            </p>
          </div>
          <div class="typography-line">
            <span>success Text</span>
            <p class="text-success">
              Saya akan menjadi pemimpin sebuah perusahaan yang akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya...</p>
          </div>
          <div class="typography-line">
            <span>Info Text</span>
            <p class="text-info">
              Saya akan menjadi pemimpin sebuah perusahaan yang akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya... </p>
          </div>
          <div class="typography-line">
            <span>Success Text</span>
            <p class="text-success">
              Saya akan menjadi pemimpin sebuah perusahaan yang akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya... </p>
          </div>
          <div class="typography-line">
            <span>Warning Text</span>
            <p class="text-warning">
              Saya akan menjadi pemimpin sebuah perusahaan yang akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya...
            </p>
          </div>
          <div class="typography-line">
            <span>Danger Text</span>
            <p class="text-danger">
              Saya akan menjadi pemimpin sebuah perusahaan yang akhirnya bernilai miliaran dolar, karena saya mendapatkan jawabannya... </p>
          </div>
          <div class="typography-line">
            <h2>
              <span>Small Tag</span>
              Header with small subtitle
              <br>
              <small>Use "small" tag for the headers</small>
            </h2>
          </div>
          <div class="typography-line">
            <span>Daftar</span>
            <div class="row">
              <div class="col-md-3">
                <h5>Daftar Tidak Dipesan</h5>
                <ul>
                  <li>Daftar Barang</li>
                  <li>Daftar Barang</li>
                  <li class="list-unstyled">
                    <ul>
                      <li>Daftar Barang</li>
                      <li>Daftar Barang</li>
                      <li>Daftar Barang</li>
                    </ul>
                  </li>
                  <li>Daftar Barang</li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>Daftar Tidak Dipesan</h5>
                <ol>
                  <li>Daftar Barang</li>
                  <li>Daftar Barang</li>
                  <li>Daftar Barang</li>
                  <li>Daftar Barang</li>
                </ol>
              </div>
              <div class="col-md-3">
                <h5>Daftar Tanpa Jenis</h5>
                <ul class="list-unstyled">
                  <li>Daftar Barang</li>
                  <li>Daftar Barang</li>
                  <li>Daftar Barang</li>
                  <li>Daftar Barang</li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>Daftar Sesuai</h5>
                <ul class="list-inline">
                  <li class="list-inline-item">Daftar1</li>
                  <li class="list-inline-item">Daftar2</li>
                  <li class="list-inline-item">Daftar3</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="typography-line">
            <span>Kode</span>
            <p>Ini adalah
              <code>.css-class-as-code</code>, an example of an inline code element. Wrap inline code within a
              <code> &lt;code&gt;...&lt;/code&gt;</code>tag.
            </p>
            <pre>1. #This is an example of preformatted text.<br/>2. #Here is another line of code</pre>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
