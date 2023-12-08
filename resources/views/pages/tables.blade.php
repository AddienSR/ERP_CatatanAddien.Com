@extends('layouts.app', ['page' => __('Table'), 'pageSlug' => 'tables'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title "> Tabel Sederhana</h4>
            <p class="card-category"> Berikut adalah subjudul untuk tabel ini</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-success">
                  <th>
                    ID
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Negara
                  </th>
                  <th>
                    Kota
                  </th>
                  <th>
                    Gaji
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Nigeria
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-success">
                      Rp 36.738.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-success">
                      Rp 23.789.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherland
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-success">
                      Rp 56.142.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea Selatan
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-success">
                      Rp 38.735.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen di Kärnten
                    </td>
                    <td class="text-success">
                      Rp 63.542.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chili
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-success">
                      Rp 78.615.000
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header card-header-success">
            <h4 class="card-title mt-0"> Tabel di Latar Belakang Polos</h4>
            <p class="card-category"> Berikut adalah subjudul untuk tabel ini</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Negara
                  </th>
                  <th>
                    Kota
                  </th>
                  <th>
                    Gaji
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Nigeria
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      Rp 36.738.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td>
                      Rp 23.789.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherland
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td>
                      Rp 56.142.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea Selatan
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td>
                      Rp 38.735.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen di Kärnten
                    </td>
                    <td>
                      Rp 63.542.000
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      Rp 78.615.000
                    </td>
                  </tr>
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