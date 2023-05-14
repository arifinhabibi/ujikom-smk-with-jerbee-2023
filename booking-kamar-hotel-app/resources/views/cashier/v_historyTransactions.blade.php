@extends('cashier.components.v_main')

@section('main')
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <h3 class="my-4">Riwayat Transaksi</h3>
    
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Kode Pembayaran</th>
                    <th>Nama Pelanggan</th>
                    <th>Tgl Checkin</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        
                        <tr>
                            <td>{{ $transaction->nomor_unik }}</td>
                            <td>{{ $transaction->nama_pelanggan }}</td>
                            <td>{{ $transaction->tgl_checkin }}</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm me-2"
                                >print transaksi</a
                                >
                                <a href="{{ route('detail-transaction', $transaction->id) }}" class="btn btn-light btn-sm me-2"
                                >Detail</a
                                >
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection