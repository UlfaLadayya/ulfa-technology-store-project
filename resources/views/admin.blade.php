@extends('layouts.main')

@section('content')

<div class="btn-content">
    <a href="{{ route('formaddproduct.show') }}" class="btn btn-primary btn-sm" id="btn-add-product">
        Add Product
    </a>
    <a href="" class="btn btn-primary btn-sm" id="btn-download">
        <i class="fas fa-download" id="icon-download"></i>General Report
    </a>
</div>
<br>
<div class="table-content">
    <table class="table table-striped">
        <thead>
            <tr class="highlight">
                <th>#</th>
                <th scope="col" class="thumbnail_produk">Thumbnail</th>
                <th scope="col" class="produk_dijual">Produk</th>
                <th scope="col" class="tabel_kategori">Kategori</th>
                <th scope="col" class="tabel_harga">Harga</th>
                <th scope="col" class="action">Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($products as $index => $products)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td><img src="../uploads/{{ $products->foto }}" alt="{{ $products->nama_product }}" class="thumbnail"></td>
                <td>{{ $products->nama_product }}</td>
                <td>{{ $products->kategori }}</td>
                <td>{{ $products->harga }}</td>
                <td>
                    <div class="edit-delete">
                        <a href="{{ route('product.edit', $products->id) }}" class="btn btn-primary btn-sm" id="edit-form">Edit</a>
                        <form action="{{ route('product.delete', $products->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakan anda yakin ingin menghapus produk ini?')" class="btn btn-primary btn-sm" id="delete-form">Delete</button>
                        </form>
                    {{-- <a href="" onclick="return confirm('Apakan anda yakin ingin menghapus produk ini?')" class="btn btn-primary btn-sm" id="delete-form">Delete</a> --}}
                    </div>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="6">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
