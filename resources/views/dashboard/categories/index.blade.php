@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td class="gx-3">
                    <!-- <a href="/dashboard/categories/{{ $category->slug }}">
                        <span data-feather="eye" class="badge bg-info"></span>
                    </a> -->
                    <a href="/dashboard/categories/{{ $category->slug }}/edit" class="text-decoration-none">
                        <span data-feather="edit" class="badge bg-warning"></span>
                    </a>
                    <form action='/dashboard/categories/{{ $category->slug }}' method='post' class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-transparent border-0" onclick="return confirm('Are you sure?')">
                            <span data-feather="x-circle" class="badge bg-danger"></span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection