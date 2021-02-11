
@extends('layouts.master')
@section('content')

<div class="container" style="margin-top:10rem; margin-bottom:8rem;align-items:center">
<div class="container my-5 col-lg-8" id="donation-id">
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card" style="width: 20rem">
   <div class="card-header">ATM TRANSFER</div>
   <ul class="list-group list-group-flush">
     <li class="list-group-item">
       <img src="/asset/bri.png" alt="" class="mr-2"style="width:50px; height:35px;" >
        <span>BRI ( Verifikasi Manual )</span>
      </li>
      <li class="list-group-item">
        <img src="/asset/bca.png" alt="bca" class="mr-2"style="width:50px; height:35px;">
         <span>BCA ( Verikasi Manual )</span>
       </li>
       <li class="list-group-item">
         <div class="text-center">
             <a data-toggle="modal" data-target="#modal-2" class="ml-2" style="color:#E40B0B;">Syarat & Ketentuan </a>
         </div>
        </li>
   </ul>
 </div>
  </div>
<div class="col-md-6">
  <div class="card" style="width: 20rem">
  <div class="card-header">E-Wallet</div>
  <ul class="list-group list-group-flush">
   <li class="list-group-item">
     <img src="/asset/dana.png" alt="" class="mr-2"style="width:50px; height:35px;">
      <span>DANA ( Verifikasi Manual )</span>
    </li>
    <li class="list-group-item">
      <img src="/asset/linkaja.png" alt="" style="width:60px; height:35px;">
       <span>Link Aja ( Verikasi Manual )</span>
     </li>
     <li class="list-group-item">
       <div class="text-center">
           <a data-toggle="modal" data-target="#exampleModalLong" class="ml-2" style="color:#E40B0B;">Syarat & Ketentuan </a>
       </div>
      </li>
  </ul>
  </div>
</div>

</div>
</div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Syarat & Ketentuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Pembayaran<strong> Verifikasi Manual </strong> yaitu dimana pembayaran yang Diverifikasi oleh admin sendiri
         dalam waktu 1X24 jam.<br><hr>
         Cara Pembayaran Dengan E-Wallet<strong> Dana</strong>
         <ul>
           <ol>
             <li>Buka Aplikasi Dana</li>
             <li>Klik Tombol Kirim</li>
             <li>Selanjutnya,kirim ke nomor <strong>081215327003</strong> <br> A/N <strong>Arif Dewangga</strong></li>
             <li>Beri Keterangan / Alias <br> <strong>" nama kamu , Donasi Kudus Bisa "</strong></li>
             <li>Pembayaran anda Selesai</li>
           </ol>
         </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-2-title">Syarat & Ketentuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Pembayaran<strong> Verifikasi Manual </strong> yaitu dimana pembayaran yang Diverifikasi oleh admin sendiri
         dalam waktu 1X24 jam.<br><hr>
         Cara Pembayaran Dengan ATM transfer<strong> BRI</strong>
         <ul>
           <ol>
             <!-- <li>Buka Aplikasi Dana</li>
             <li>Klik Tombol Kirim</li>
             <li>Selanjutnya,kirim ke nomor <strong>081215327003</strong> <br> A/N <strong>Arif Dewangga</strong></li>
             <li>Beri Keterangan / Alias <br> <strong>" nama kamu , Donasi Kudus Bisa "</strong></li>
             <li>Pembayaran anda Selesai</li> -->
           </ol>
         </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.mdb.modal', () => {
  myInput.focus()
})
</script>
@stop
