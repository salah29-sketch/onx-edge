@extends('layouts.admin')

@section('content')
<div class="db-page-head">
    <div>
        <h1 class="db-page-title">إضافة عميل</h1>
        <div class="db-page-subtitle">إضافة عميل جديد إلى قاعدة البيانات.</div>
    </div>

    <a href="{{ route('admin.clients.index') }}" class="db-btn-secondary">
        <i class="fas fa-arrow-right"></i>
        رجوع
    </a>
</div>

<div class="card db-card">
    <div class="db-card-header">بيانات العميل</div>

    <div class="card-body db-card-body">
        <form method="POST" action="{{ route('admin.clients.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="db-label required" for="name">الاسم</label>
                    <input
                        class="form-control db-input {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name', '') }}"
                    >
                    @if($errors->has('name'))
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="col-md-6 mb-3">
                    <label class="db-label" for="phone">الهاتف</label>
                    <input
                        class="form-control db-input {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                        type="text"
                        name="phone"
                        id="phone"
                        value="{{ old('phone', '') }}"
                    >
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                    @endif
                </div>

                <div class="col-md-12 mb-3">
                    <label class="db-label" for="email">البريد الإلكتروني</label>
                    <input
                        class="form-control db-input {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email', '') }}"
                    >
                    @if($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>
            </div>

            <div class="db-form-actions">
                <button class="db-btn-success" type="submit">
                    <i class="fas fa-save"></i>
                    حفظ العميل
                </button>

                <a href="{{ route('admin.clients.index') }}" class="db-btn-secondary">
                    <i class="fas fa-times"></i>
                    إلغاء
                </a>
            </div>
        </form>
    </div>
</div>
@endsection