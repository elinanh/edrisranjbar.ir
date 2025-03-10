@extends('layouts.admin')

@section('title', 'لیست دوره‌ها')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-3 fw-normal text-right">لیست دوره‌های آموزشی</h1>
    <div class="d-flex flex-wrap mb-2">
        <a class="btn btn-w-icon btn-primary mb-2 me-2" href="{{ route('tutorials.create') }}">
            <i class="fa-solid fa-fw fa-plus me-1"></i>
            افزودن دوره جدید
        </a>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="w-100 bg-white rounded shadow-sm table-responsive border">
        <table class="table table-striped table-clickable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان</th>
                    <th scope="col">قیمت</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col">وضعیت</th>
                    <th scope="col">عملیات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tutorials as $tutorial)
                <tr>
                    <th class="align-middle py-2" scope="row">
                        <a href="{{ route('tutorials.edit', $tutorial) }}">
                            {{ $loop->iteration }}
                        </a>
                    </th>
                    <td class="align-middle py-2">
                        <a href="{{ route('tutorials.edit', $tutorial) }}">{{ $tutorial->title }}</a>
                    </td>
                    <td class="align-middle py-2">{{ $tutorial->price }}</td>
                    <td class="align-middle py-2">{{ $tutorial->description }}</td>
                    <td class="align-middle py-2">{{ $tutorial->status_label }}</td>
                    <td class="align-middle py-2">
                        <a href="{{ url('tutorials/' . $tutorial->slug) }}"
                            class="btn btn-w-icon btn-outline-primary btn-sm float-left mr-2">
                            <i class="fa fa-eye ml-1"></i>نمایش
                        </a>
                        <a href="{{ route('tutorials.edit', $tutorial->id) }}"
                            class="btn btn-w-icon btn-outline-secondary btn-sm float-left mr-2">
                            <i class="fa fa-edit ml-1"></i>ویرایش
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-3">نتیجه ای یافت نشد</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection