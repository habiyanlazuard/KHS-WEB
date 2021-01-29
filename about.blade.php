@extends('layout/main');

@section('title','Portal')

@section('container')
<br>
  <div class="row">
    <div class="col-5">
      <button type="button" class="btn btn-primary">
        Profile <span class="badge bg-secondary">9</span>
        <span class="visually-hidden">unread messages</span>
      </button>
      <button type="button" class="btn btn-success">
        Keuangan <span class="badge bg-secondary">1</span>
        <span class="visually-hidden">unread messages</span>
      </button>
      <button type="button" class="btn btn-danger">
        Fakultas <span class="badge bg-secondary">5</span>
        <span class="visually-hidden">unread messages</span>
      </button>
      <button type="button" class="btn btn-warning">
        Pengumuman <span class="badge bg-secondary">10</span>
        <span class="visually-hidden">unread messages</span>
      </button>
    </div>
  </div>

<br>

<!-- <div class="container">
  <div class="row">
    <div class="col-10">
    <p>Web ini berfungsi untuk mencetak Kartu Hasil Studi Online</p>
    </div>
  </div>
</div> -->

<div class="card-group">
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkMlCr100zJ32XivQg-OzsPhA9AHe5cqql_A&usqp=CAU" height="200"class="card-img-top" alt="Keuangan">
    <div class="card-body">
      <h5 class="card-title">KONSULTASI</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
      <div class="d-grid gap-1 col-12 mx-auto">
        <button class="btn btn-primary" type="button">more</button>
      </div>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRw6oiDBTXNryR8lbZDFuRDOftYJ_oWx2qxMw&usqp=CAU" height="200" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">UNIVERSITAS NUSA PUTRA</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <div class="d-grid gap-1 col-12 mx-auto">
        <button class="btn btn-primary" type="button">more</button>
      </div>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://www.mastertindo.com/images/news/sias.jpg" height="200" class="card-img-top" alt="Sistem Informasi Akademik">
    <div class="card-body">
      <h5 class="card-title">AKADEMIK</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
      <div class="d-grid gap-1 col-12 mx-auto">
        <button class="btn btn-primary" type="button">more</button>
      </div>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>


<br>

<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <form action="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <p class="pt-2"><strong>Sign up for our newsletter</strong></p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 col-12 mb-4 mb-md-0">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form5Example2" class="form-control" />
            <label class="form-label" for="form5Example2">Email address</label>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-auto mb-4 mb-md-0">
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary mb-4">Subscribe</button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
@endsection
