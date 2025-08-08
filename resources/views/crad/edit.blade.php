@extends('layouts.app')

@section('content')
<div class="container">
    <h2>تعديل المنتج</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label>الاسم</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="form-group mb-3">
            <label>كلمة المرور اتركه فارغ</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label>الوصف</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <button class="btn btn-success">تحديث</button>
    </form>
</div>
@endsection
