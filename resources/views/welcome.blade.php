@extends('layouts.front')
@section('title','ONX — Accueil')

@section('content')

{{-- HERO --}}
<section class="onx-hero">
  <div class="container text-center py-5">
    <h1 class="display-4 fw-bold">Donnez vie à vos moments les plus importants<span style="color:var(--orange)">.</span></h1>
    <p class="lead mt-3 onx-muted">
      Mariages, événements et publicités — جودة سينمائية من سيدي بلعباس إلى كل الولايات.
    </p>

    <div class="d-flex justify-content-center gap-2 mt-4 flex-wrap">
      <a class="btn btn-onx-ghost" href="/services/events">تصوير الحفلات</a>
      <a class="btn btn-onx-ghost" href="/services/ads">الإعلانات</a>
      <a class="btn btn-onx-ghost" href="/services">كل الخدمات</a>
    </div>
  </div>
</section>

{{-- QUICK FEATURES --}}
<section class="onx-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">🎥</div>
          <h5 class="fw-bold mb-2">تصوير احترافي</h5>
          <div class="onx-muted">لقطات سينمائية وإضاءة نظيفة</div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">✂️</div>
          <h5 class="fw-bold mb-2">مونتاج وتلوين</h5>
          <div class="onx-muted">إيقاع جميل + لمسة فنية</div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">⚡</div>
          <h5 class="fw-bold mb-2">تسليم حسب الباقة</h5>
          <div class="onx-muted">نلتزم بالوقت المتفق عليه</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SERVICES PREVIEW --}}
<section class="onx-section pt-0">
  <div class="container">
    <div class="d-flex align-items-end justify-content-between flex-wrap gap-2 mb-4">
      <div>
        <h2 class="fw-bold mb-1">الخدمات</h2>
        <div class="onx-muted">ابدأ بالخدمة التي تحتاجها</div>
      </div>
      <a class="btn btn-onx-ghost" href="/services">عرض كل الخدمات</a>
    </div>

    <div class="row g-4">
      <div class="col-lg-6">
        <div class="onx-card">
          <img src="{{ asset('img/events.jpg') }}" class="onx-img" alt="events">
          <div class="p-4 text-center">
            <h3 class="fw-bold mb-2">تصوير الحفلات</h3>
            <p class="onx-muted mb-4">باقات ثابتة + رسوم تنقل خارج الولاية</p>
            <a href="/services/events" class="btn btn-onx-ghost">شاهد الباقات</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="onx-card">
          {{-- غيّر الاسم حسب صورتك --}}
          <img src="{{ asset('img/commercial.jpg') }}" class="onx-img" alt="commercial">
          <div class="p-4 text-center">
            <h3 class="fw-bold mb-2">الإعلانات</h3>
            <p class="onx-muted mb-4">حسب الطلب أو اشتراك شهري ثابت</p>
            <a href="/services/ads" class="btn btn-onx-ghost">اطلب عرض سعر</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- CTA --}}
<section class="onx-section pt-0" id="contact">
  <div class="container">
    <div class="onx-cta text-center">
      <h2 class="fw-bold mb-2">جاهز تبدأ؟</h2>
      <div class="onx-muted mb-4">اتصل بنا وسنقترح أفضل باقة حسب احتياجك</div>

      <div class="d-flex justify-content-center gap-2 flex-wrap">
        <a class="btn btn-onx-ghost" href="https://wa.me/213000000000">واتساب</a>
        <a class="btn btn-onx-ghost" href="tel:+213000000000">اتصال</a>
      </div>
    </div>
  </div>
</section>

@endsection