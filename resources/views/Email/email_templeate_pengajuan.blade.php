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
        background: #ffd502;
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
          <p>Nama Pengaju Bantuan : <strong>{{$nama}}</strong></p>
          <strong>Keterangan : </strong>
                   <p>Hi, {{$nama}} <br>
                     {!! $email_body !!}</p>
                <span style="text-align: center; font-family: sans-serif; font-weight: lightgrey" >
        </div>
        <div class="footer">
          <p style="font-size: 10px; font-family: sans-serif; text-align: center; opacity:0.6;">TERIMAKASIH TELAH BERKONTRIBUSI DALAM PENANGANAN BENCANA DI KUDUS</p>
          <p style="font-size: 8px; font-family: sans-serif; text-align: center;  font-weight: light; opacity: 0.5;"> &copy; Copyright 2021 TEAMS KUDUS BISA</p>
        </div>

      </span>
      </td>
    </div>

  </body>
</html>
