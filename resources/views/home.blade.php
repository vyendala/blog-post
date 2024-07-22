@extends('layouts.default')

@section('content')
<div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="container text-center text-white">
        <div>
            <img src="{{ asset('images/Anatomy-of-the-Perfect-Blog-Post.png') }}" class="img-fluid w-50">
        </div>
        <h1 class="mt-5">The Ultimate Guide to Writing the Perfect Blog Post</h1>
        <h6>Coding Made Easy</h6>
        <p>Creating a blog post that engages readers and ranks well on search engines is both an art and a science. In this guide, we'll break down the key elements of a successful blog post and provide you with actionable tips to enhance your content creation process.</p>
        <a href="{{ route('posts') }}" class="btn btn-warning btn-lg mt-3">Show Blogs <i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>
<!-- @endsection -->
