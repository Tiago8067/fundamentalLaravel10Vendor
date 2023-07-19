@extends('layouts.master2')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Trashed Posts</h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success" href="">Back</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 10%">Image</th>
                            <th scope="col" style="width: 20%">Title</th>
                            <th scope="col" style="width: 30%">Description</th>
                            <th scope="col" style="width: 10%">Category</th>
                            <th scope="col" style="width: 10%">Publish Date</th>
                            <th scope="col" style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{ $post->id }}</th>
                                <td>
                                    {{-- <img src="{{ asset('storage/'.$post->image) }}" alt="" width="80"> --}}
                                    <img src="{{ asset($post->image) }}" alt="" width="80">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->category2->name }}</td>
                                <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                                <td>
                                    <a class="btn-sm btn-success btn" href="{{ route('posts.restore', $post->id) }}">Restore Post</a>

                                    <form action="{{ route('posts.force_delete', $post->id) }}" method="POST" class="mt-1">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn-sm btn-danger btn">Delete Permanently</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
