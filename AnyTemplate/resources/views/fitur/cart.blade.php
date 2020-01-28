@extends('sukses.link')
<div class="container">
  <div id="pesan">
    <h2 class="mt-4">Pemesanan</h2>

    @if(!empty($cart))
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th style="color: black;">Nama Barang</th>
          <th style="color: black;">Deskripsi</th>
          <th style="color: black;">Harga</th>
          <th style="color: black;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart as $c)
        <tr>
          <td style="color: black;">{{$c->nama_barang}}</td>
          <td style="color: black;">{{$c->deskripsi}}</td>
          <td style="color: black;">{{$c->harga}}</td>
          <td>
            <a href="/beli" class="btn btn-danger">Confirm</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</div>
