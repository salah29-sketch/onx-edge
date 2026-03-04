@extends('layouts.front')
@section('title','خدماتنا')

@section('content')

{{-- HERO --}}
<section class="onx-hero">
    <div class="container text-center py-5">

        <h1 class="display-5 fw-bold">خدمات الإنتاج الإبداعي</h1>
        <p class="lead mt-3 onx-muted">
            حفلات وإعلانات بجودة سينمائية — من سيدي بلعباس إلى كل الولايات.
        </p>

        <div class="d-flex justify-content-center gap-2 mt-4 flex-wrap">
            {{-- زر شفاف (ليس برتقالي) --}}
            <a class="btn btn-onx-ghost" href="/services/events">تصوير الحفلات</a>

            {{-- زر شفاف (ليس برتقالي) --}}
            <a class="btn btn-onx-ghost" href="/services/ads">الإعلانات</a>
        </div>

    </div>
</section>


{{-- SERVICES CARDS --}}
<section class="onx-section">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold mb-1">خدماتنا</h2>
            <div class="onx-muted">اختر الخدمة المناسبة وابدأ معنا بسهولة</div>
        </div>

        <div class="row g-4">

            {{-- Events --}}
            <div class="col-lg-6">
                <div class="onx-card">
                    <img src="{{ asset('img/events.jpg') }}" class="onx-img" alt="events">
                    <div class="p-4 text-center">
                        <h3 class="fw-bold mb-2">تصوير الحفلات</h3>
                        <p class="onx-muted mb-4">باقات ثابتة لتوثيق حفلاتكم بجودة سينمائية.</p>
                        <a href="/services/events" class="btn btn-onx-ghost">شاهد الباقات</a>
                    </div>
                </div>
            </div>

            {{-- Ads --}}
            <div class="col-lg-6">
                <div class="onx-card">
                    <img src="{{ asset('img/marketing.jpg') }}" class="onx-img" alt="marketing">
                    <div class="p-4 text-center">
                        <h3 class="fw-bold mb-2">الإعلانات</h3>
                        <p class="onx-muted mb-4">إعلانات حسب الطلب + اشتراك شهري بسعر ثابت.</p>
                        <a href="/services/ads" class="btn btn-onx-ghost">اطلب عرض سعر</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<section class="onx-section pt-0">

<div class="container">

<h2 class="fw-bold text-center mb-5">
لماذا ONX؟
</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="onx-feature text-center">
<div class="icon">🎬</div>
<h5 class="fw-bold">جودة سينمائية</h5>
<p class="onx-muted">
نستخدم معدات احترافية للحصول على لقطات جميلة ومؤثرة.
</p>
</div>
</div>

<div class="col-md-4">
<div class="onx-feature text-center">
<div class="icon">⚡</div>
<h5 class="fw-bold">تسليم سريع</h5>
<p class="onx-muted">
تسليم العمل في الوقت المتفق عليه حسب الباقة.
</p>
</div>
</div>

<div class="col-md-4">
<div class="onx-feature text-center">
<div class="icon">🤝</div>
<h5 class="fw-bold">تواصل واضح</h5>
<p class="onx-muted">
نحافظ على تواصل واضح مع العميل طوال المشروع.
</p>
</div>
</div>

</div>

</div>

</section>
<section class="onx-section pt-0">

<div class="container">

<div class="onx-cta text-center">

<h2 class="fw-bold mb-3">
جاهز تبدأ مشروعك؟
</h2>

<p class="onx-muted mb-4">
تواصل معنا الآن وسنساعدك في اختيار الخدمة المناسبة.
</p>

<div class="d-flex justify-content-center gap-2 flex-wrap mt-4">

<a class="btn btn-onx-ghost" href="https://wa.me/213540573518">
    <i class=" fa-brands fa-whatsapp   "></i>
واتساب
</a>

<a class="btn btn-onx-ghost" href="tel:+213540573518">
 <i class=" fa-solid fa-phone   "></i>   
اتصال
</a>

</div>

</div>

</div>

</section>
@endsection