@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/main.min.css">
@endsection

@section('content')
<div class="db-page-head">
    <div>
        <h1 class="db-page-title">تقويم مراقبة الحجوزات</h1>
        <div class="db-page-subtitle">مراقبة الأيام المحجوزة للحفلات والانتقال مباشرة إلى تفاصيل الحجز.</div>
    </div>

    <a href="{{ route('admin.bookings.index') }}" class="db-btn-secondary">
        <i class="fas fa-list"></i>
        الرجوع إلى الحجوزات
    </a>
</div>

<div class="db-calendar-wrap">
    <div id="bookingsCalendar"></div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/main.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('bookingsCalendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'ar',
        direction: 'rtl',
        height: 720,
        events: @json($calendarItems),
        eventClick: function(info) {
            if (info.event.url) {
                info.jsEvent.preventDefault();
                window.location.href = info.event.url;
            }
        }
    });

    calendar.render();
});
</script>
@endsection