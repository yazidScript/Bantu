@extends('layouts.master')
@section('content')

<header>
  <div class="'banner'" style="height:100px">
  </div>
</header>
<div class="container">
         <section class="c-section container-fluid pt-2 pt-md-4">
          <div class="container px-2 px-md-0">
              <div class="row align-items-center">
                  <div class="col-12 col-md order-md-2 col-md-3">
                      <div class="row">
                          <div class="col-12">
                              <picture class="img-tentang">
                                  <img alt="img tentang" class="col-12" src="./asset/gambar1.png">
                                  <!-- <h1 style="font-size:30px; display:flex; justify-content: center;">Kudus Bisa !</h1> -->
                              </picture>
                              <div class="u-lazy__placeholder-2"></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md col-md">
                      <h1 class="title">Semangat Kudus Bisa</h1>
                      <div class="mb-2 mb-md-4">
                          Kudus Bisa<br />
                          Saat ini Indonesia dalam posisi tanggap darurat bencana alam dan pandemi covid-19.<br />
                          <br />
                          Dikudus sekarang ini terjadi bencana alam banjir dan tanah longsor karna cuaca nya musim hujan.<br />
                          Berita bencana untuk berdonasi masih banyak diberitakan disosial media seperti di Facebook.Masalah inilah yang membuat kami berfikir bagaimana orang melihat berita tersebut<br />
                          untuk berdonasi bukan hanya diberitakan di media sosial akan tetapi ada juga di website.<br />
                          <br />
                          Akhirnya kami membuat website “KUDUS BISA” yaitu sebuah website untuk berdonasi membantu sesama yang sedang terkena musibah bencana dikota Kudus.<br />
                          Kita ketik saja alamat URL nya kemudia kita masuk halaman beranda,dihalaman beranda tersebut kita bisa melihat berita sesuai dengan wilayah nya.kita juga bisa berdonasi lewat website dengan cara kita membuka berita tersebut kemudian kita bisa membaca berita tersebut dengan lengkap dan jelas setelah itu bisa berdonasi dengan mengisikan identitas yang ada di website nya dan bisa ditransfer ke rekening yang sudah disediakan kemudian setelah terkumpul nanti ada tim dari KUDUS BISA yang akan menyalurkan langsung ke tempat terjadinya bencana.<br />
                          <br />
                          Jadi,kita berdonasi tidak perlu ragu akan tertipu karna website kami resmi untuk menyalurkan bantuan bencana disekitar Kudus. <br />
                          <br />

                      </div>
                  </div>
              </div>
          </div>
      </section>

      <div class="col-12 col-md col-md">
        <div class="judul-kategory" style="padding-bottom:3px;">
            <h1 style="font-family: 'Roboto', sans-serif;">Permohonan Bantuan</h1>
            <p>Permohonan Bantuan ini adalah sifatnya umum dikhususkan untuk daerah kudus bila disekitar anda (kudus) ada bencana atau musibah lainnya yang mungkin butuh donasi untuk membantu korban tersebut maka <strong>Kudus Bisa</strong> akan membantu
            sebisa mungkin , dengan mengajukan permohonan melalui form dibawah ini.</p>
        </div>


          <div class="row col-lg-12 mb-4">
            <form>
              <div class="form-group">
                <label for="inputNoHp">Nama</label>
                <input type="text" class="form-control" id="NoHp" placeholder="">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">No HP</label>
                  <input type="text" class="form-control" id="nama" placeholder="">
                </div>
              </div>

              <div class="form-group">
                <label for="inputDate">Tanggal</label>
                <input type="date" class="form-control" id="date" placeholder="">
              </div>
              <div class="form-group">
                <label for="inputAddress">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3"></textarea>
              </div>
              <div class="form-group">
                  <label for="gambar" class="">Foto</label>
                  <input name="gambar" type="file" class="form-control" value="" id="gambar">
              </div>
              <button type="submit" class="btn text-white" style="background-color:#E40B0B;">Kirim</button>
            </form>
        </div>

          </div>
    </div>


@stop
