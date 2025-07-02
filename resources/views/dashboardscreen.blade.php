@extends('layouts.main')

@section('content')

<div class="content">
    <div class="btn-general-report">
        <h3>Dashboard</h3>
        <a href="" class="btn btn-primary btn-sm" id="btn-report">
            <i class="fas fa-download" id="icon-download-report"></i>General Report
        </a>
    </div>

    <div class="cards">
        <div  class="body-dash">
            <div class="people">
                <h6>Number of buyers</h6>
                <p class="buyer">4 people</p>
            </div>
            <i class="fas fa-user-friends" id="fas-user"></i>
        </div>

        <div  class="body-product">
            <div class="product-sold">
                <h6 id="word-h6">Total Products Sold</h6>
                <p class="total-product">8 products</p>
            </div>
            <i class="fas fa-tablet-alt" id="fas-tab"></i>
        </div>

        <div  class="body-favorite">
            <div class="favorite">
                <h6 id="word-fav">Favorite Products</h6>
                <p class="tablet">Tablet/Tab</p>
            </div>
            <i class="fas fa-heart" id="fas-heart"></i>
        </div>

        {{-- <div  class="body-earn">
            <div class="earning">
                <h6>Earnings (Daily)</h6>
                <p class="earns">100 people</p>
            </div>
            <i class="fas fa-user-friends" id="fas-user"></i>
        </div> --}}
    </div>

    <div class="table-penjualan">
        <table class="table table-striped">
            <thead>
                <tr class="highlight">
                    <th>#</th>
                    <th scope="col" class="thumbnail_produk">Nama User</th>
                    <th scope="col" class="produk_dijual">Produk</th>
                    <th scope="col" class="tabel_kategori">Kategori</th>
                    <th scope="col" class="tabel_harga">Harga</th>
                    <th scope="col" class="tabel_harga">Jumlah Pembelian</th>
                    <th scope="col" class="tabel_harga">Total</th>
                </tr>
            </thead>
    
            <tbody>
                @forelse ($products as $index => $products)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $products->nama_user }}</td>
                    <td>{{ $products->product }}</td>
                    <td>{{ $products->kategori }}</td>
                    <td>{{ $products->harga }}</td>
                    <td>{{ $products->jumlah_pembelian }}</td>
                    <td>{{ $products->total }}</td>
                </tr>
                @empty
                    <tr>
                        <td colspan="6">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

{{-- style="margin-left:70px; background-color:lightgray; width:700px; height:400px" --}}
@endsection          