@extends('layouts.app', ['page' => __('Pemberitahuan'), 'pageSlug' => 'notifications'])

@section('content')
  <div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Jenis Pemberitahuan</h4>
      </div>
      <div class="card-body">
        <div class="alert alert-info">
          <span>Ini adalah pemberitahuan biasa.</span>
        </div>
        <div class="alert alert-info">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span>Ini adalah pemberitahuan dengan tombol tutup.</span>
        </div>
        <div class="alert alert-info alert-with-icon" data-notify="container">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span data-notify="icon" class="tim-icons icon-bell-55"></span>
          <span data-notify="message">Ini adalah pemberitahuan dengan tombol tutup dan ikon.</span>
        </div>
        <div class="alert alert-info alert-with-icon" data-notify="container">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span data-notify="icon" class="tim-icons icon-bell-55"></span>
          <span data-notify="message">Ini adalah notifikasi dengan tombol tutup dan ikon serta memiliki banyak garis. Anda dapat melihat bahwa ikon dan tombol tutup selalu sejajar secara vertikal. Ini adalah pemberitahuan yang indah. Jadi Anda tidak perlu khawatir tentang gayanya.</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Negara Pemberitahuan</h4>
      </div>
      <div class="card-body">
        <div class="alert alert-danger">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span>
            <b> Utama - </b> Ini adalah pemberitahuan rutin yang dibuat dengan ".alert-danger"</span>
        </div>
        <div class="alert alert-info">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span>
            <b> Informasi - </b> Ini adalah pemberitahuan reguler yang dibuat dengan ".alert-info"</span>
        </div>
        <div class="alert alert-success">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span>
            <b> Sukses - </b> Ini adalah pemberitahuan rutin yang dibuat dengan ".alert-success"</span>
        </div>
        <div class="alert alert-warning">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span>
            <b> Peringatan - </b> Ini adalah pemberitahuan rutin yang dibuat dengan ".alert-warning"</span>
        </div>
        <div class="alert alert-danger">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
          </button>
          <span>
            <b> Bahaya - </b> Ini adalah pemberitahuan rutin yang dibuat dengan ".alert-danger"</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="places-buttons">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <h4 class="card-title">
                Tempat Pemberitahuan
                <p class="category">Klik untuk Melihat Pemberitahuan</p>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-success btn-block" onclick="demo.showNotification('top','left')">Atas Kiri</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-success btn-block" onclick="demo.showNotification('top','center')">Atas Tengah</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-success btn-block" onclick="demo.showNotification('top','right')">Atas Kanan</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 ml-auto mr-auto">
              <div class="row">
                <div class="col-md-4">
                  <button class="btn btn-success btn-block" onclick="demo.showNotification('bottom','left')">Bawah Kiri</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-success btn-block" onclick="demo.showNotification('bottom','center')">Bawah Tengah</button>
                </div>
                <div class="col-md-4">
                  <button class="btn btn-success btn-block" onclick="demo.showNotification('bottom','right')">Bawah Kanan</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
