<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title','ONX')</title>

  {{-- Bootstrap RTL --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

  {{-- Bootstrap Icons (مهم لــ bi-telephone / bi-whatsapp ...) --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  {{-- Font Awesome (إنستغرام/يوتيوب) --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  {{-- Font --}}
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;800&display=swap" rel="stylesheet">

  {{-- Your CSS --}}
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  

  @yield('styles')
</head>

<body>

{{-- =========================================================
  NAVBAR (LTR layout)
  - Logo يسار | Links وسط | Button يمين
========================================================= --}}
<nav class="navbar navbar-expand-lg navbar-dark onx-nav" dir="ltr">
  <div class="container d-flex align-items-center justify-content-between gap-3">

    {{-- Logo --}}
    <a class="navbar-brand fw-bold" href="/">
      <span class="onx-logo">ONX<span class="onx-dot"></span></span>
    </a>

    {{-- Mobile toggler --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Links --}}
    <div class="collapse navbar-collapse justify-content-center" id="nav">
      <ul class="navbar-nav gap-lg-4 align-items-lg-center">
        <li class="nav-item"><a class="nav-link onx-link {{ request()->is('/') ? 'active':'' }}" href="/">Accueil</a></li>
        <li class="nav-item"><a class="nav-link onx-link {{ request()->is('services*') ? 'active':'' }}" href="/services">Services</a></li>
        <li class="nav-item"><a class="nav-link onx-link {{ request()->is('portfolio*') ? 'active':'' }}" href="/portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link onx-link {{ request()->is('blog*') ? 'active':'' }}" href="/blog">Blog</a></li>
      </ul>
    </div>

    {{-- Right button --}}
    <div class="d-none d-lg-flex">
      <a class="btn onx-cta-btn" href="/booking">Commencer</a>
    </div>

  </div>
</nav>

@yield('content')

{{-- =========================================================
  FOOTER
========================================================= --}}
<footer class="onx-footer">
  <div class="container">
    <div class="row g-4 align-items-start">

      <div class="col-md-4">
        <h4 class="fw-bold mb-3">ONX</h4>
        <p class="onx-muted mb-0">إنتاج مرئي احترافي للحفلات والإعلانات بجودة سينمائية.</p>
      </div>

      <div class="col-md-4">
        <h6 class="fw-bold mb-3">الخدمات</h6>
        <ul class="list-unstyled onx-footer-links mb-0">
          <li><a href="/services/events">تصوير الحفلات</a></li>
          <li><a href="/services/marketing">الإعلانات</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h6 class="fw-bold mb-3">تواصل</h6>
        <div class="d-flex gap-3">
          <a class="onx-social" target="_blank" href="https://www.instagram.com/onx.edge/"><i class="fab fa-instagram"></i></a>
          <a class="onx-social" target="_blank" href="https://www.youtube.com/@onxedge"><i class="fab fa-youtube"></i></a>
          <a class="onx-social" target="_blank" href="https://wa.me/213540573518"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

    </div>

    <hr class="mt-4">

    <p class="text-center onx-muted mb-0">© ONX — onx-edge.com</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
@yield('scripts')
</body>
</html>