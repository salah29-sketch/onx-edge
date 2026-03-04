<h1>باقات تصوير الحفلات</h1>
<p>{{ $travelNote }}</p>

@foreach($packages as $p)
    <div style="border:1px solid #ccc; padding:15px; margin-bottom:15px;">
        <h2>{{ $p['name'] }} - {{ number_format($p['price']) }} دج</h2>
        <ul>
            @foreach($p['features'] as $f)
                <li>{{ $f }}</li>
            @endforeach
        </ul>
        <button>اختر هذه الباقة</button>
    </div>
@endforeach