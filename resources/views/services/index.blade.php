@extends('layouts.front')
@section('title','خدماتنا')

@section('content')

{{-- =========================================================
  HERO
========================================================= --}}
<section class="onx-hero-services">
  <div class="onx-hero-overlay"></div>

  <div class="container text-center">
    <span class="onx-badge mb-3"> ONX • Services</span>

    <h1 class="fw-bold mb-3">خدمات الإنتاج الإبداعي</h1>

    <p class="onx-muted mb-4">
      حفلات وإعلانات بجودة سينمائية — من سيدي بلعباس إلى كل الولايات.
    </p>

    <div class="d-flex justify-content-center gap-2 flex-wrap">
      <a class="btn btn-onx-ghost" href="/services/events">
        <i class="bi bi-calendar2-event"></i> تصوير الحفلات
      </a>

      <a class="btn btn-onx-ghost" href="/services/ads">
        <i class="bi bi-megaphone"></i> الإعلانات
      </a>
    </div>
  </div>
</section>


{{-- =========================================================
  SERVICES CARDS
========================================================= --}}
<section class="onx-section">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold mb-2">خدماتنا</h2>
      <p class="onx-muted mb-0">اختر الخدمة المناسبة وابدأ معنا بسهولة</p>
    </div>

    <div class="row g-4 justify-content-center">

      {{-- Events --}}
      <div class="col-lg-6">
        <div class="onx-card onx-service-card">
          <img src="{{ asset('img/events.jpg') }}" class="onx-img" alt="events">

          <div class="p-4 text-center">
            <h3 class="fw-bold mb-2">تصوير الحفلات</h3>
            <p class="onx-muted mb-4">باقات ثابتة لتوثيق حفلاتكم بجودة سينمائية.</p>

            <a href="/services/events" class="btn btn-onx-ghost">
              شاهد الباقات <i class="bi bi-arrow-left-short"></i>
            </a>
          </div>
        </div>
      </div>

      {{-- Ads --}}
      <div class="col-lg-6">
        <div class="onx-card onx-service-card">
          <img src="{{ asset('img/marketing.jpg') }}" class="onx-img" alt="marketing">

          <div class="p-4 text-center">
            <h3 class="fw-bold mb-2">الإعلانات</h3>
            <p class="onx-muted mb-4">إعلانات حسب الطلب + اشتراك شهري بسعر ثابت.</p>

            <a href="/services/ads" class="btn btn-onx-ghost">
              اطلب عرض سعر <i class="bi bi-arrow-left-short"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


{{-- =========================================================
  WHY ONX
========================================================= --}}
<section class="onx-section pt-0">
  <div class="container">

    <div class="text-center mb-4">
      <h2 class="fw-bold mb-2">
        لماذا <span class="onx-orange">ONX</span>؟
      </h2>
      <p class="onx-muted mb-0">أشياء بسيطة تفرق في النتيجة النهائية.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">🎬</div>
          <h5 class="fw-bold mb-1">جودة سينمائية</h5>
          <p class="onx-muted mb-0">معدات وإضاءة ولقطات محسوبة تعطيك “Cinema Look”.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">⚡</div>
          <h5 class="fw-bold mb-1">تسليم سريع</h5>
          <p class="onx-muted mb-0">تسليم في الوقت المتفق عليه حسب نوع الخدمة.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">🤝</div>
          <h5 class="fw-bold mb-1">تواصل واضح</h5>
          <p class="onx-muted mb-0">نبقى معك خطوة بخطوة حتى تكون راضي 100%.</p>
        </div>
      </div>
    </div>

  </div>
</section>


{{-- =========================================================
  CTA
========================================================= --}}
<section class="onx-section pt-0">
  <div class="container">

    <div class="onx-cta text-center">
      <h2 class="fw-bold mb-2">جاهز تبدأ مشروعك؟</h2>
      <p class="onx-muted mb-4">تواصل معنا الآن وسنساعدك في اختيار الخدمة المناسبة.</p>

      <div class="d-flex justify-content-center gap-2 flex-wrap">
        <a class="btn btn-onx-ghost" target="_blank" href="https://wa.me/213540573518">
          <i class="bi bi-whatsapp"></i> واتساب
        </a>

        <a class="btn btn-onx-ghost" href="tel:+213540573518">
          <i class="bi bi-telephone"></i> اتصال
        </a>

        <a class="btn btn-onx-ghost" href="/booking">
          <i class="bi bi-calendar-check"></i> Booking
        </a>
      </div>
    </div>

  </div>
</section>

@endsection