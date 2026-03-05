@extends('layouts.front')
@section('title','Events')

@section('content')

{{-- =========================================================
  HERO
  - عنوان + وصف + أزرار (Scroll للباقات + واتساب)
========================================================= --}}
<section class="onx-hero-events">
  <div class="onx-hero-overlay"></div>

  <div class="container text-center">
    

    <h1 class="fw-bold mb-3">باقات تصوير الحفلات</h1>

    <p class="onx-muted mb-4">
      نوثّق لحظاتكم بأفضل جودة سينمائية. اختر الباقة المناسبة واترك الباقي علينا.
    </p>

    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="#packages" class="btn btn-onx">مشاهدة الباقات</a>

      <a href="https://wa.me/213540573518?text=سلام%20ONX%20حاب%20نستفسر%20على%20باقات%20تصوير%20الحفلات"
         target="_blank" class="btn btn-onx-ghost">
        <i class="bi bi-whatsapp"></i> واتساب
      </a>
    </div>
  </div>
</section>


{{-- =========================================================
  PACKAGES
  - Grid + Featured + زر الحجز
========================================================= --}}
<section id="packages" class="onx-section">
  <div class="container">

    <div class="text-center mb-5">
      <h2 class="fw-bold mb-2">الباقات</h2>
      <p class="onx-muted mb-0">اختر الباقة المناسبة — رسوم إضافية للتنقل خارج الولاية.</p>
    </div>

    <div class="packages-grid">
      @forelse($packages as $p)
        <div class="plan-item {{ $p->is_featured ? 'is-featured' : '' }}">
          <div class="onx-card onx-plan text-center {{ $p->is_featured ? 'onx-plan-featured' : '' }}">

            <div class="onx-badge mx-auto mb-3 {{ $p->is_featured ? 'badge-featured' : '' }}">
              {{ $p->subtitle ?: ($p->is_featured ? 'الأكثر طلبًا' : 'Package') }}
            </div>

            <h3 class="fw-bold mb-2">{{ $p->name }}</h3>

            <p class="onx-muted mb-3">
              {{ $p->description ?: 'باقة مناسبة لتوثيق حفلتكم بجودة سينمائية.' }}
            </p>

            {{-- Features list (LTR) --}}
            <div class="features-wrap">
              <ul class="onx-muted mb-0 onx-list package-features-ltr features-list collapsed" dir="ltr">
                @foreach(($p->features ?? []) as $f)
                  <li>
                    <span class="feat-dot"></span>
                    <span class="feat-text">{{ $f }}</span>
                  </li>
                @endforeach
              </ul>

              @if(count($p->features ?? []) > 6)
                <button type="button" class="btn btn-link onx-more-btn p-0 mt-2" onclick="toggleFeatures(this)">
                  عرض المزيد
                </button>
              @endif
            </div>

            <div class="mt-4">
              <div class="onx-price mb-3">
                <span class="fw-bold">{{ number_format($p->price) }}</span>
                <span class="onx-muted">DA</span>
              </div>

              <a href="{{ route('booking') }}" class="btn btn-onx-book w-100">
                احجز الآن
              </a>
            </div>

          </div>
        </div>
      @empty
        <div class="onx-card p-4 text-center" style="grid-column:1/-1;">
          <h4 class="fw-bold mb-2">لا توجد باقات بعد</h4>
          <p class="onx-muted mb-0">أضف الباقات من لوحة التحكم (Admin).</p>
        </div>
      @endforelse
    </div>

    @if(!empty($travelNote))
      <div class="text-center onx-muted mt-4">{{ $travelNote }}</div>
    @endif

  </div>
</section>


{{-- =========================================================
  “HERE” / INFO SECTION (بعد الباقات)
  - صورة ضبابية + نصوص تقنع + CTA
========================================================= --}}
<section class="onx-section pt-0">
  <div class="container">

    {{-- كيف نشتغل --}}
    <div class="text-center mb-4">
      <h2 class="fw-bold mb-2">كيف نشتغل؟</h2>
      <p class="onx-muted mb-0">خطوات بسيطة من الطلب إلى التسليم.</p>
    </div>

    <div class="row g-3 mb-5">
      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">1</div>
          <h5 class="fw-bold mb-1">اختيار الباقة</h5>
          <p class="onx-muted mb-0">حدد الباقة وموعد الحفل.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">2</div>
          <h5 class="fw-bold mb-1">تأكيد الحجز</h5>
          <p class="onx-muted mb-0">نأكد المكان والتفاصيل معك.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="onx-feature text-center">
          <div class="icon">3</div>
          <h5 class="fw-bold mb-1">التسليم</h5>
          <p class="onx-muted mb-0">مونتاج وتسليم حسب الباقة.</p>
        </div>
      </div>
    </div>

    {{-- 2x2: الشروط + لماذا ONX --}}
    <div class="row g-4 align-items-stretch">
      {{-- الشروط --}}
      <div class="col-lg-6">
        <div class="onx-panel h-100">
          <h3 class="fw-bold mb-3">الشروط</h3>

          <div class="onx-qa">
            <div class="onx-qa-item">
              <div class="q">التنقل خارج الولاية</div>
              <div class="a">خارج سيدي بلعباس: تُضاف رسوم تنقل حسب الولاية.</div>
            </div>

            <div class="onx-qa-item">
              <div class="q">تأكيد الحجز</div>
              <div class="a">يتم تأكيد الحجز بعد تحديد التاريخ والمكان.</div>
            </div>

            <div class="onx-qa-item">
              <div class="q">مدة التسليم</div>
              <div class="a">تختلف حسب الباقة (مذكورة داخل كل باقة).</div>
            </div>

            <div class="onx-qa-item">
              <div class="q">إضافات اختيارية</div>
              <div class="a">Drone / Reels ممكنة حسب توفر المكان.</div>
            </div>
          </div>
        </div>
      </div>

      {{-- لماذا ONX --}}
      <div class="col-lg-6">
        <div class="onx-panel h-100">
          <h3 class="fw-bold mb-3">لماذا ONX؟</h3>

          <div class="onx-qa">
            <div class="onx-qa-item">
              <div class="q">🎬 جودة سينمائية</div>
              <div class="a">إضاءة وصوت ومعدات تعطي لقطة “فيلم”.</div>
            </div>

            <div class="onx-qa-item">
              <div class="q">⚡ تنظيم واحتراف</div>
              <div class="a">نشتغل بخطة واضحة قبل الحفل وأثناءه.</div>
            </div>

            <div class="onx-qa-item">
              <div class="q">✨ مونتاج نظيف</div>
              <div class="a">تلوين خفيف + إيقاع مناسب للحفل.</div>
            </div>

            <div class="onx-qa-item">
              <div class="q">🤝 تواصل واضح</div>
              <div class="a">نرد بسرعة ونبقى معك حتى بعد التسليم.</div>
            </div>
          </div>
        </div>
      </div>
    {{-- CTA --}}
    <div class="onx-cta mt-4">
      <div class="row align-items-center g-3">
        <div class="col-lg-8">
          <h3 class="fw-bold mb-1">جاهز نحجز لك الموعد؟</h3>
          <p class="onx-muted mb-0">تواصل معنا الآن، ونقترح لك الباقة الأنسب.</p>
        </div>

        <div class="col-lg-4 text-lg-start text-center">
          <div class="d-flex gap-2 justify-content-lg-start justify-content-center flex-wrap">
            <a class="btn btn-onx-ghost" href="tel:+213540573518">
              <i class="bi bi-telephone"></i> اتصال
            </a>

            <a class="btn btn-onx-ghost" target="_blank"
               href="https://wa.me/213540573518?text=سلام%20ONX%20حاب%20نحجز%20تصوير%20حفلة">
              <i class="bi bi-whatsapp"></i> واتساب
            </a>

            <a class="btn btn-onx" href="{{ route('booking') }}">Booking</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection


@push('scripts')
<script>
function toggleFeatures(btn){
  const wrap = btn.closest('.features-wrap');
  const list = wrap.querySelector('.features-list');
  const isOpen = list.classList.contains('expanded');

  if(isOpen){
    list.classList.remove('expanded');
    list.classList.add('collapsed');
    btn.textContent = 'عرض المزيد';
  }else{
    list.classList.remove('collapsed');
    list.classList.add('expanded');
    btn.textContent = 'إخفاء';
  }
}
</script>
@endpush