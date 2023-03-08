<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/style_produk.css')}}">
  </head>
  <body>

    <div class="container">
      @foreach($produks as $produk)
      <div class="card">
        <div class="title">
          <h2>{{ $produk->jenis->nama}}</h2>
        </div>
        <div class="img">
          <img src="img/1.png" alt="">
        </div>
        <div class="nama">
          <p>{{$produk->nama_produk}}</p>
        </div>
        <div class="desc">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="harga">
          <p>Rp. {{$produk->harga_produk}}</p>
        </div>
        <div class="button">
          <button type="button" name="button">Beli Sekarang</button>
        </div>
      </div>
      @endforeach
    </div>

  </body>
</html>
