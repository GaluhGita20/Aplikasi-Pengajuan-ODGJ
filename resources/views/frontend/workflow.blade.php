@extends('layouts.frontend')

@section('content')
<style>
  ::selection{
  color: #fff;
  background: #ff7979;
}
.wrapper{
  max-width: 1080px;
  margin: 50px auto;
  padding: 0 20px;
  position: relative;
}
.wrapper .center-line{
  position: absolute;
  height: 100%;
  width: 4px;
  background: #43bf80;
  left: 50%;
  top: 20px;
  transform: translateX(-50%);
}
.wrapper .row{
  display: flex;
}
.wrapper .row-1{
  justify-content: flex-start;
}
.wrapper .row-2{
  justify-content: flex-end;
}
.wrapper .row section{
  background: #fff;
  border-radius: 5px;
  width: calc(50% - 40px);
  padding: 20px;
  position: relative;
}
.wrapper .row section::before{
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  background: #fff;
  top: 28px;
  z-index: -1;
  transform: rotate(45deg);
}
.row-1 section::before{
  right: -7px;
}
.row-2 section::before{
  left: -7px;
}
.row section .icon,
.center-line .scroll-icon{
  position: absolute;
  background: #f2f2f2;
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #58c68e;
  font-size: 17px;
  box-shadow: 0 0 0 4px #fff, inset 0 2px 0 rgba(0,0,0,0.08), 0 3px 0 4px rgba(0,0,0,0.05);
}
.center-line .scroll-icon{
  bottom: 0px;
  left: 50%;
  font-size: 25px;
  transform: translateX(-50%);
}
.row-1 section .icon{
  top: 15px;
  right: -60px;
}
.row-2 section .icon{
  top: 15px;
  left: -60px;
}
.row section .details,
.row section .bottom{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.row section .details .title{
  font-size: 22px;
  font-weight: 600;
}
.row section p{
  margin: 10px 0 17px 0;
}
.row section .bottom a{
  text-decoration: none;
  background: #58c68e;
  color: #fff;
  padding: 7px 15px;
  border-radius: 5px;
  /* font-size: 17px; */
  font-weight: 400;
  transition: all 0.3s ease;
}
.row section .bottom a:hover{
  transform: scale(0.97);
}
@media(max-width: 790px){
  .wrapper .center-line{
    left: 40px;
  }
  .wrapper .row{
    margin: 30px 0 3px 60px;
  }
  .wrapper .row section{
    width: 100%;
  }
  .row-1 section::before{
    left: -7px;
  }
  .row-1 section .icon{
    left: -60px;
  }
}
@media(max-width: 440px){
  .wrapper .center-line,
  .row section::before,
  .row section .icon{
    display: none;
  }
  .wrapper .row{
    margin: 10px 0;
  }
}
</style>

<!-- Page Header Start -->
<div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-4 text-white mb-3 animated slideInDown">Workflow</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a class="text-white" href="#">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-white" href="#">Pages</a>
        </li>
        <li class="breadcrumb-item text-primary active" aria-current="page">
          About Us
        </li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
        <p><span class="text-primary me-2">#</span>Welcome To RUPEN ODGJ</p>
        <h1 class="display-5 mb-4">
          How Does the
          <span class="text-primary">RUPEN ODGJ</span> system work?
        </h1>
        <p class="mb-4">
          <!-- Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No
          stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo
          nonumy clita sit at, sed sit sanctus dolor eos. -->
        </p>
        <div class="wrapper">
          <div class="center-line">
            <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
          </div>
          <div class="row row-1">
            <section>
              <i class="icon fas fa-home"></i>
              <div class="details">
                <span class="title">Keperluan Berkas</span>
              </div>
              <p>Masukkan identitasmu beserta dukumen identitas pendukung seperti KTP serta sedikit data diri ODGJ</p>
              <div class="bottom">
                <a href="#">Read more</a>
                <i>- Client</i>
              </div>
            </section>
          </div>
          <div class="row row-2">
            <section>
              <i class="icon fas fa-star"></i>
              <div class="details">
                <span class="title">Pengecekan Laporan</span>
              </div>
              <p>Petugas akan mengecek laporanmu untuk dibantu proses selanjutnya.</p>
              <div class="bottom">
                <a href="#">Read more</a>
                <i>- LSM</i>
              </div>
            </section>
          </div>
          <div class="row row-1">
            <section>
              <i class="icon fas fa-rocket"></i>
              <div class="details">
                <span class="title">Menunggu Acc Laporan</span>
              </div>
              <p>Tunggu status laporanmu secara berkala, jika laporan ditolak cek alasan dan laporkan kembali, jika laporan diterima pihak LSM/Dinsos akan menghubungimu dan status akan berubah menjadi 'DITERIMA". </p>
              <div class="bottom">
                <a href="#">Read more</a>
                <i>- Aplikasi RUPEN ODGJ</i>
              </div>
            </section>
          </div>
          <div class="row row-2">
            <section>
              <i class="icon fas fa-globe"></i>
              <div class="details">
                <span class="title">Pemantauan Laporan</span>
              </div>
              <p>Cek berkala perkembangan kesehatan pasien ODGJ dengan layanan monitoring</p>
              <div class="bottom">
                <a href="#">Read more</a>
                <i>- Client</i>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

@endsection