@extends('layouts.app', ['page' => 'Informasi Penyedia', 'pageSlug' => 'providers', 'section' => 'providers'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Informasi Penyedia</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Informasi Pembayaran</th>
                            <th>Pembayaran Dibuat</th>
                            <th>Total Pembayaran</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $provider->id }}</td>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->description }}</td>
                                <td>{{ $provider->email }}</td>
                                <td>{{ $provider->phone }}</td>
                                <td style="max-width: 175px">{{ $provider->paymentinfo }}</td>
                                <td>{{ $provider->transactions->count() }}</td>
                                <td>{{ format_money(abs($provider->transactions->sum('amount'))) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pembayaran Terakhir</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Tanggal</th>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Metode</th>
                            <th>Jumlah</th>
                            <th>Referensi</th>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ date('d-m-y', strtotime($transaction->created_at)) }}</td>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->title }}</td>
                                    <td><a href="{{ route('methods.show', $transaction->method) }}">{{ $transaction->method->name }}</a></td>
                                    <td>{{ format_money($transaction->amount) }}</td>
                                    <td>{{ $transaction->reference }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tanda Terima Terakhir</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Tanggal</th>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Produk</th>
                            <th>Persediaan</th>
                            <th>Persediaan Rusak</th>
                            <th>Total Persediaan</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($receipts as $receipt)
                                <tr>
                                    <td>{{ date('d-m-y', strtotime($receipt->created_at)) }}</td>
                                    <td><a href="{{ route('receipts.show', $receipt) }}">{{ $receipt->id }}</a></td>
                                    <td>{{ $receipt->title }}</td>
                                    <td>{{ $receipt->products->count() }}</td>
                                    <td>{{ $receipt->products->sum('stock') }}</td>
                                    <td>{{ $receipt->products->sum('stock_defective') }}</td>
                                    <td>{{ $receipt->products->sum('stock') + $receipt->products->sum('stock_defective') }}</td>
                                    <td class="td-actions text-right">
                                        <a href="{{ route('receipts.show', $receipt) }}" class="btn btn-link" data-toggle="tooltip" data-placement="bottom" title="Ver Receipt">
                                            <i class="tim-icons icon-zoom-split"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
