@extends('cashier.components.v_main')

@section('main')
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
          <div class="row justify-content-start">
              <div class="col-lg-5">
                <h3 class="my-3">Detail Transaksi</h3>
                    Kode Pembayaran : {{ $transaction->nomor_unik }} <br>
                    Nama Pelanggan : {{ $transaction->nama_pelanggan }} <br>
                    checkin tgl : {{ $transaction->tgl_checkin }} <br>
                    Tipe Kamar : {{ $product->nama_produk }} <br>
                    Harga : Rp. {{ number_format($product->harga_produk) }} <br>
                    Uang Pembayaran : Rp. {{ number_format($transaction->uang_bayar) }} <br>
                    Uang kembalian : Rp. {{ number_format($transaction->uang_kembali) }} <br>
                    <a href="" class="mt-2 btn btn-warning me-3">print transaksi</a>
                    <a href="{{ route('history-transaction') }}" class="mt-2 btn btn-body">riwayat transaksi</a>
              </div>
            </div>
      </div>
    </section>
@endsection