@extends('layouts.main')

@section('content')

<div class="content-form">
    <div class="form">
        <h4>Tambah Produk</h4>
            <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }};
                    {{-- window.location.href = "{{ route('products.screen') }}"; --}}
                </div>
                @endif
              
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }};

                </div>
                @endif
                @csrf
                <div class="form-group row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_produk" name="nama_product" placeholder="Nama Produk" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="upload_image" class="col-sm-2 col-form-label">Pilih Foto Produk</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="upload_image" name="foto" required>
                    </div>
                </div>

                <div class="btn-form-product">
                    <input type="submit" class="btn btn-primary" id="btn-add" value="Add Product" name="submit">
                    <input type="reset" class="btn btn-warning" id="btn-cancel" value="Cancel" name="reset">
                </div>
                <!-- <a href="" class="btn btn-warning" id="btn-cancel">Cancel</a> -->
            </form>
    </div>
</div>

@endsection
