@extends('layouts.front')
@section('title','marketing')

@section('content')

{{-- HERO --}}
<section class="onx-hero-events" style="background-image:url('/img/hero-marketing.jpg')">
  <div class="onx-hero-overlay"></div>
  <div class="container text-center">
    <span class="onx-badge mb-3">📣 ONX EDGE</span>
    <h1 class="fw-bold mb-3">إنتاج الإعلانات</h1>
    <p class="onx-muted mb-4">اشتراك شهري للمحتوى + إعلان حسب الطلب حسب مشروعك.</p>

    <div class="d-flex justify-content-center gap-2 flex-wrap">
      <a href="#monthly" class="btn btn-onx">الباقات الشهرية</a>
      <a href="#custom" class="btn btn-onx-ghost">حسب الطلب</a>
    </div>
  </div>
</section>

{{-- MONTHLY --}}
<section id="monthly" class="onx-section">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold mb-2">الباقات الشهرية</h2>
      <p class="onx-muted mb-0">مناسبة للمتاجر والشركات لصناعة محتوى ثابت.</p>
    </div>

    <div class="packages-grid">
      @forelse($monthly as $p)
        <div class="plan-item">
          <div class="onx-card onx-plan text-center {{ $p->is_featured ? 'onx-plan-featured' : '' }}">
            <div class="onx-badge mx-auto mb-3"
                 style="{{ $p->is_featured ? 'border-color:rgba(255,106,0,.45);color:rgba(255,255,255,.9);' : '' }}">
              {{ $p->subtitle ?: ($p->is_featured ? 'الأكثر طلبًا' : 'Monthly') }}
            </div>

            <h3 class="fw-bold mb-2">{{ $p->name }}</h3>
            <p class="onx-muted mb-3">{{ $p->description }}</p>

           

            <div class="mt-auto">
              <div class="onx-price mb-3">
                <span class="fw-bold">{{ $p->price ? number_format($p->price) : '' }}</span>
                <span class="onx-muted">{{ $p->price ? 'DA / شهر' : $p->price_note }}</span>
              </div>

              <a href="https://wa.me/213540573518?text=سلام%20ONX%20حاب%20اشتراك%20شهري:%20{{ urlencode($p->name) }}"
                 class="btn btn-onx-book w-100" target="_blank">
                ابدأ الاشتراك
              </a>
            </div>
          </div>
        </div>
      @empty
        <div class="onx-card p-4 text-center" style="grid-column:1/-1;">
          <h4 class="fw-bold mb-2">لا توجد باقات شهرية بعد</h4>
          <p class="onx-muted mb-0">أضفها من لوحة التحكم.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

{{-- CUSTOM --}}
<section id="custom" class="onx-section pt-0">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold mb-2">إعلان حسب الطلب</h2>
      <p class="onx-muted mb-0">نحسب السعر حسب الفكرة، مدة الفيديو، أيام التصوير…</p>
    </div>

    <div class="packages-grid" style="grid-template-columns: repeat(2, minmax(0, 420px));">
      @forelse($custom as $p)
        <div class="plan-item">
          <div class="onx-card onx-plan text-center {{ $p->is_featured ? 'onx-plan-featured' : '' }}">
            <div class="onx-badge mx-auto mb-3">
              {{ $p->subtitle ?: 'Custom' }}
            </div>

            <h3 class="fw-bold mb-2">{{ $p->name }}</h3>
            <p class="onx-muted mb-3">{{ $p->description }}</p>

            <ul class="onx-muted mb-3 onx-list package-features-ltr" dir="ltr">
@foreach((array)($p->features ?? []) as $f)
    <li>
        <span class="feat-dot"></span>
        <span class="feat-text">{{ $f }}</span>
    </li>
@endforeach
</ul>

            <div class="mt-auto">
              <div class="onx-price mb-3">
                <span class="fw-bold">{{ $p->price_note ?: 'حسب الطلب' }}</span>
              </div>

              <a href="https://wa.me/213540573518?text=سلام%20ONX%20حاب%20عرض%20سعر%20إعلان:%20{{ urlencode($p->name) }}"
                 class="btn btn-onx-book w-100" target="_blank">
                اطلب عرض سعر
              </a>
            </div>
          </div>
        </div>
      @empty
        <div class="onx-card p-4 text-center" style="grid-column:1/-1;">
          <h4 class="fw-bold mb-2">لا توجد عروض حسب الطلب بعد</h4>
          <p class="onx-muted mb-0">أضفها من لوحة التحكم.</p>
        </div>
      @endforelse
    </div>

    {{-- CTA صغير --}}
    <div class="onx-cta mt-5">
      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <h3 class="fw-bold mb-1">حاب إعلان احترافي يبيع؟</h3>
          <p class="onx-muted mb-0">أرسل الفكرة ونقترح عليك السيناريو والمدة الأنسب.</p>
        </div>
        <div class="col-lg-4 text-center text-lg-start">
          <div class="d-flex gap-2 justify-content-center justify-content-lg-start flex-wrap">
            <a class="btn btn-onx-ghost" href="tel:+213540573518"><i class="bi bi-telephone"></i> اتصال</a>
            <a class="btn btn-onx" target="_blank" href="https://wa.me/213540573518">واتساب</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection