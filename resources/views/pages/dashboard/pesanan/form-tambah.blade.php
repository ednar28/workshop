@extends('layouts.dashboard.halaman-layout')

@section('konten')
<div class="wrapper-content">
   <h1>Buat Pesanan</h1>

   <form action="{{ route('') }}" method="POST">
       <div class="card">
           @csrf
           <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <x-form-input label="ID Pemesanan" name="id_pemesanan" value="{{$pemesanans->id_pemesanan}}"/>
            <x-form-input label=" Jumlah Produk Pemesanan" name="jumlah_produk_pemesanan" value="{{$pemesanans->jumlah_produk_pemesanan}}"/>
            <x-form-input label="Tanggal Pemesanan" name="tanggal_pemesanan" value="{{$pemesanans->tanggal_pemesanan}}"/>
            <x-form-input label="Sub Total Pemesanan" name="sub_total_pemesanan" value="{{$pemesanans->sub_total_pemesanan}}"/>
          </div>

           <div class="flex items-center justify-center space-x-4">
               <x-button-submit />
               <a href="{{ route('produk.dashboard-produk') }}" class="w-28 btn btn-info block">Batal</a>
           </div>
       </div>
   </form>
</div>
@endsection