{{-- <div>
    <h1>Contact</h1>

    <x-button />
    <x-forms.button />
    <x-input-field />
</div> --}}

@extends('layouts.master2')

@section('content')
    <div class="row">
        @foreach ($posts as $post)
            {{-- <x-post.index :post="$post" /> --}}
            <x-post.index>
                <x-slot name="title">
                    {{ $post->title }}
                </x-slot>

                <x-slot name="description">
                    {{ $post->description }}
                </x-slot>
            </x-post.index>
        @endforeach
    </div>

    {{-- <x-button /> --}}


    {{-- <x-button>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae in cum porro ab quidem? Vero mollitia, ex nihil tempore veniam reiciendis unde, repudiandae blanditiis odio ad, minus sapiente laboriosam incidunt.</p>
    </x-button> --}}

@endsection
