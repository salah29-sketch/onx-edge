<h1>خدمة الإعلانات</h1>

<h2>إعلان مرة واحدة</h2>
@foreach($oneTime as $o)
    <div style="border:1px solid #ccc; padding:15px; margin-bottom:15px;">
        <h3>{{ $o['name'] }} - {{ $o['price_note'] }}</h3>
        <ul>
            @foreach($o['features'] as $f)
                <li>{{ $f }}</li>
            @endforeach
        </ul>
        <button>اطلب عرض سعر</button>
    </div>
@endforeach

<h2>الاشتراكات الشهرية</h2>
@foreach($monthly as $m)
    <div style="border:1px solid #ccc; padding:15px; margin-bottom:15px;">
        <h3>{{ $m['name'] }} - {{ number_format($m['price']) }} دج / شهر</h3>
        <ul>
            @foreach($m['features'] as $f)
                <li>{{ $f }}</li>
            @endforeach
        </ul>
        <button>اشترك</button>
    </div>
@endforeach