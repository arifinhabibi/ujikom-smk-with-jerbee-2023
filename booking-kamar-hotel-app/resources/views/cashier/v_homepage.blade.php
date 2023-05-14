@extends('cashier.components.v_main')

@section('main')
    <h3 class="mx-5 my-4">List Room</h3>
    <div class="container-fluid px-md-0">
        <div class="row no-gutters">
            @foreach ($products as $key => $product)
            <div class="col-lg-6">
                <div class="room-wrap d-md-flex">
                    <a href="#" class="img" style="background-image: url(assets/cashier/images/{{ $product->image_kamar }});"></a>
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
                            <p class="pt-1"><a href="{{ route('order', $product->id) }}" class="btn-custom px-3 py-2">pilih kamar<span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
            

            @endforeach

            
        </div>
    </div>

@endsection