@extends('layout.blog')

@section('content')
    <main class="container max-auto mt-6 flex justify-center">
        <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Blog Post Title</h1>
            <img src="{{ asset('images/test.png') }}" alt="Post Image" class="w-full object-cover shadow-md rounded-lg mb-4" />
            <p class="text-gray-600 mb-4 ">published on <span class="font-semibold"> 2, 2025</span></p>
            <div class="text-gray-800 space-y-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque magni itaque corporis obcaecati libero,
                    earum
                    debitis recusandae aliquam excepturi ten etur commodi reprehenderit accusamus in, placeat animi porro!
                    Nemo,
                    reprehenderit obcaecati!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque magni itaque corporis obcaecati libero,
                    earum
                    debitis recusandae aliquam excepturi tenetur commodi reprehenderit accusamus in, placeat animi porro!
                    Nemo,
                    reprehenderit obcaecati!</p>
            </div>
        </section>

    </main>
@endsection
