@extends('dashboard.layouts.main')

@section('container')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts, {{ auth()->user()->name }}</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endsession


    <div class="table-responsive small col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mt-3">Create new post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                    <th>
                        <a href=""></a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            {{-- View --}}
                            <a href="/dashboard/posts/{{ $post->slug }}"
                                class="badge bg-info d-flex justify-content-center align-items-center p-1 mx-1">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                        {{-- Edit --}}
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                class="badge bg-warning d-flex justify-content-center align-items-center p-1 mx-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        {{-- Delete --}}
                        <td>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-circle"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
