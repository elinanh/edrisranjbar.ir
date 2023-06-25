@section('title', 'ایجاد نوشته جدید')
@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-3 fw-normal text-right">ایجاد نوشته جدید</h1>
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <form class="w-100 p-3 bg-white rounded shadow-sm border" action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">عنوان</label>
            <input type="text" name="title" id="title" class="form-control" required>
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">محتوا</label>
            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
            @error('content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">وضعیت</label>
            <select name="status" id="status" class="form-select" required>
                <option value="public">عمومی</option>
                <option value="private">خصوصی</option>
                <option value="draft">پیش‌نویس</option>
            </select>
            @error('status')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumbnail" class="form-label">تصویر بند انگشتی</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
        </div>

        <div class="mb-3">
            <label for="categories" class="form-label">دسته‌بندی‌ها</label>
            <select name="categories[]" id="categories" class="form-select" multiple required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">برچسب‌ها</label>
            <input type="text" name="tags" id="tags" class="form-control" placeholder="برچسب ۱, برچسب ۲, برچسب ۳">
        </div>

        <div class="d-flex flex-wrap mt-2">
            <button type="submit" class="btn btn-w-icon btn-primary mt-2 me-2">
                <i class="fa-solid fa-fw fa-check me-1"></i>
                ثبت
            </button>
            <a class="btn btn-w-icon btn-outline-primary mt-2 me-2">
                <i class="fa-solid fa-fw fa-list-check me-1"></i>
                ثبت و ساخت جدید
            </a>
        </div>
    </form>
</div>
@endsection