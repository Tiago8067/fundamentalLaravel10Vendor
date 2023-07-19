@extends('layouts.master')

@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{ $category->title }}</h4>
                            <p>{{ $category->description }}</p>
                            <p class="btn-sm btn-success">{{ $category->category->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
