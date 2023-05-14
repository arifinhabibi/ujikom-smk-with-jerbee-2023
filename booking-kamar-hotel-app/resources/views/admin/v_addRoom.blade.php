@extends('admin.components.v_main')

@section('main')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content pt-3">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Add Room
                </h3>

                
              </div>
              <!-- /.card-header -->
              <form action="" method="post" enctype='multipart/form-data'>
                @csrf
              <div class="card-body">

                    <ul class="todo-list" data-widget="todo-list">
                        <li>
                      <span class="text"><label for="nama_produk">nama produk</label><input id="nama_produk" name="nama_produk" type="text" class="form-control" required></span>
                    </li>
                    <li>
                      <span class="text"><label for="harga">harga produk</label><input id="harga" name="harga_produk" type="number" class="form-control" required></span>
                    </li>
                     <li>
                      <span class="text"><label for="size-kasur">size kasur</label><input id="size-kasur" name="ukuran_kasur" type="text" class="form-control" required></span>
                    </li>
                     <li>
                      <span class="text"><label for="size-room">ukuran kamar</label><input id="size-room" name="ukuran_kamar" type="text" class="form-control" required></span>
                    </li>
                    <li>
                        <span class="text"><label for="maks">maks</label><input id="maks" name="maks" type="number" class="form-control" required></span>
                    </li>
                    <li>
                        <span class="text"><label for="tersedia">kamar tersedia</label><input id="tersedia" name="tersedia" type="number" class="form-control" required></span>
                    </li>
                    <li>
                      <span class="text"><label for="foto">kamar foto</label><input id="foto" name="image_kamar" type="file" accept="image/png, image/jpeg" class="form-control" required></span>
                    </li>
                  
                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <button type="submit" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add</button>
            </div>
        </form>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection