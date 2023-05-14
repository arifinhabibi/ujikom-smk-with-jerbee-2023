@extends('cashier.components.v_main')

@section('main')

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
          <div class="row justify-content-start">
              <div class="col-lg-5">
                      <form action="{{ route('order-processing', $product->id) }}" method="post" class="appointment-form">
                        @csrf
                        <input type="text" name="id_produk" value="{{ $product->id }}" hidden>

                        <h3 class="my-3">Booking Kamar</h3>
                        @if ($error = Session::get('kurang'))
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                          </div>
                        @endif
                          <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="fullName" placeholder="Nama Lengkap" required>
                                </div>
                              </div>
                              
                              <div class="col-md-6">
                                <div class="form-group">
                                <input type="text" class="form-control" name="noHP" placeholder="Nomor HP" required>
                              </div>
                            </div>
                            
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="input-wrap">
                              <div class="icon"><span class="ion-md-calendar"></span></div>
                              <input type="text" id="checkin" name="checkin" class="form-control appointment_date-check-in" placeholder="Tanggal Check-In" required>
                          </div>
                              </div>
                              </div>
                              
                               <div class="col-md-12 mt-3">
                                    <h5 class="mb-0">Harga : Rp. {{ number_format($product->harga_produk) }}</h5>
                                    <input type="integer" value="{{ $product->harga_produk }}" name="harga_product" hidden>
                                    <div class="form-group">
                                      <label for="pay">Uang Pembayaran</label>
                                      <input type="number" id="pay" class="form-control" name="uang_bayar" placeholder="masukkan uang pembayaran disini" required>
                                    </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <button type="submit" class="btn btn-primary py-3 px-4">Buat Pesanan</button>
                                </div>
                              </div>
                          </div>
                  </form>
              </div>
                <div class="col-lg-7 my-4">
                  <div class="room-wrap d-md-flex">
                      <div class="half left-arrow d-flex align-items-center">
                        <div class="text p-4 p-xl-5 text-center">
                          <p class="mb-0"><span class="price mr-1">Rp. {{ number_format($product->harga_produk) }}</span> <span class="per">per malam</span></p>
                          <h3 class="mb-3"><a href="#">{{ $product->nama_produk }}</a></h3>
                          <ul class="list-accomodation">
                              <li><span>Kasur:</span> {{ $product->ukuran_kasur }}</li>
                              <li><span>Ukuran:</span> {{ $product->ukuran_kamar }}</li>
                              <li><span>Max:</span> {{ $product->maks }}</li>
                              <li><span>Tersedia:</span> {{ $product->tersedia }} Kamar</li>
                          </ul>
                      </div>
                      </div>
                  </div>
              </div>
              
            </div>
      </div>
    </section>

    @endsection
