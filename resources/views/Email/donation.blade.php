<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
    <style media="screen">

      .wrapper{
        width: 310px;
        border-radius: 4px;
        margin: auto;
        background: #fff;
        box-shadow: 0 0 10px 1px rgba(0,0,0,0.5);
        border-top: 10px solid #ff4537;
        border-bottom: 10px solid #ff4537;
      }

      .acc{
        padding: 4px 15px;
        background: green;
        color: #fff;
      }

      .box{
        padding: 15px 25px;
      }

      .footer{
        background: #eee;
        padding: 5px 20px;
        border-top: 1px solid #444;
      }
    </style>
  </head>
  <body>

    <div class="wrapper">
      <div class="box">
          <td class="ml-5">
        <?php foreach ($donation as $item): ?>
          <p>Status : <span class="acc">Sukses Donasi</span></p>
          <strong>Keterangan Donasi:</strong>
               <p style="font-family: monospace;">Nama Donatur: {{$item->namalengkap}}<br>
               <p style="font-family: monospace;">Nominal Donasi: Rp.{{number_format ($item->nominal)}}<br>
                <p style="font-family: monospace;">Pembayaran Yang Anda Pilih : {{$item->metodebayar}}<br>
                @foreach( $posts as $post )
                  <p style="font-family: monospace;">Donasi Yang Anda Pilih: {{ $post->title }}<br>
                  <p style="font-family: monospace;">Donasi Ini Akan Kamai Serahkan ke: {{ $post->penerima }}<br>
                @endforeach
                <?php endforeach; ?>
                <span style="text-align: center; font-family: sans-serif; font-weight: lightgrey" >
        </div>
        <div class="footer">
          <p style="font-size: 10px; font-family: sans-serif; text-align: center; opacity:0.6;">TERIMAKASIH TELAH BERDONASI ,SEMOGA DONASI MU BERMANFAAT , AMIN..</p>
          <p style="font-size: 8px; font-family: sans-serif; text-align: center;  font-weight: light; opacity: 0.5;"> &copy; Copyright 2021 Kudus Bisa</p>
        </div>

      </span>
      </td>
    </div>

  </body>
</html>
