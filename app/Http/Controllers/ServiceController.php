<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = [
            [
                'title' => 'تصوير الحفلات',
                'desc'  => 'باقات ثابتة لتوثيق حفلاتكم بجودة سينمائية.',
                'route' => route('services.events'),
            ],
            [
                'title' => 'الإعلانات',
                'desc'  => 'إعلانات احترافية + اشتراكات شهرية للمشاريع.',
                'route' => route('services.ads'),
            ],
        ];

        return view('services.index', compact('services'));
    }

    public function events(): View
    {
        $packages = [
            [
                'name' => 'العادية',
                'price' => 20000,
                'features' => ['مصور واحد', 'فيديو كامل', 'مونتاج بسيط', 'تسليم خلال 7 أيام'],
                'featured' => false,
            ],
            [
                'name' => 'المميزة',
                'price' => 30000,
                'features' => ['مصورين', 'فيديو كامل + Teaser', 'مونتاج احترافي', 'تسليم خلال 5 أيام'],
                'featured' => true,
            ],
            [
                'name' => 'البريميوم',
                'price' => 50000,
                'features' => ['فريق تصوير', 'فيديو كامل + Teaser + Reels', 'مونتاج سينمائي', 'تسليم خلال 3-5 أيام'],
                'featured' => false,
            ],
        ];

        $travelNote = 'خارج ولاية سيدي بلعباس: تُضاف رسوم تنقل حسب الولاية.';

        return view('services.events', compact('packages', 'travelNote'));
    }

    public function ads(): View
    {
        $oneTime = [
            [
                'name' => 'إعلان مرة واحدة',
                'price_note' => 'حسب الطلب',
                'features' => ['تصوير احترافي', 'مونتاج', 'مناسب للمنتجات والخدمات'],
            ],
        ];

        $monthly = [
            [
                'name' => 'اشتراك شهري Starter',
                'price' => 25000,
                'features' => ['عدد فيديوهات شهري', 'جلسة تصوير', 'تعديلات محدودة'],
                'featured' => true,
            ],
            [
                'name' => 'اشتراك شهري Pro',
                'price' => 40000,
                'features' => ['عدد أكبر من الفيديوهات', 'أولوية في التسليم', 'تعديلات أكثر'],
                'featured' => false,
            ],
        ];

        return view('services.ads', compact('oneTime', 'monthly'));
    }
}