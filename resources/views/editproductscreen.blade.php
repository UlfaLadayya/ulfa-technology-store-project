@extends('layouts.main')

@section('content')

<div class="content-form">
    <div class="form">
        <h4>Edit Produk</h4>
        {{-- <div class="col-md-7 m-auto p-4 shadow p-4 mb-4 bg-body rounded"> --}}
        <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
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
            {{-- <input type="hidden" name="id" value="{{ $product->id }}"> --}}
            <div class="form-group row">
                <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="text" name="nama_product" class="form-control" id="fromControlInput" value="{{ old('nama_product', $product->nama_product) }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="text" name="kategori" class="form-control" id="fromControlInput" value="{{ old('kategori', $product->kategori) }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="text" name="harga" class="form-control" id="fromControlInput" value="{{ old('harga', $product->harga) }}">
                </div>
            </div>

            <div class="form-group row">
                
                <label for="upload_image" class="col-sm-2 col-form-label">Pilih Foto Produk</label>
                <ul style="list-style: none; padding: 0;">
                    <li style="margin-left:174px;">
                        <?php if (!empty($product->foto)) : ?>
                        <img src="{{ url('uploads/' . $product->foto) }}" alt="Foto Produk" class="img-fluid" style="max-width: 200px; max-height: 200px;">
                        <?php else: ?>
                            <p>Foto tidak ada..</p>
                        <?php endif; ?>
                    </li>

                    <li style="margin-left:174px;">
                        <div class="col-sm-10">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="file" class="form-control" id="fromControlInput" name="foto" value="{{ url('uploads/' . $product->foto) }}">
                        </div>
                    </li>

                    <li style="font-size:12px; margin-left:187px;">
                        <b>Jika tidak ingin mengganti foto produk, abaikan saja..</b> 
                    </li>
                </ul>
                
            </div>

            {{-- <div class="form-group row">
                <label for="upload_image" class="col-sm-2 col-form-label">Pilih Foto Produk</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="upload_image" name="foto" required>
                </div>
            </div> --}}

            <div class="btn-form-product">
                <input type="submit" class="btn btn-primary" id="btn-add" value="Add Product" name="submit">
                <input type="reset" class="btn btn-warning" id="btn-cancel" value="Cancel" name="reset">
            </div>

        </form>
    </div>
</div>

@endsection

    