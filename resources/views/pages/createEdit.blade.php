@extends("layouts.default")

@section('content')
    <div class="container text-white mt-5">
        <h3 class="text-center text-warning">Create a Blog Post</h3>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if($stub == 'create')
        <form action="{{ route('store') }}" class="mt-5 form-background" method="POST">
        @else
        <form action="{{ route('update', $post->id) }}" class="mt-5" method="POST">
        @endif
            @csrf
            <h5>Title</h5>
            <input type="text" name="title" class="form-control" value="@if($stub == 'update'){{$post->title}}@endif">
            <h5 class="mt-3">Content</h5>
            <textarea name="content" id="" cols="30" rows="10" class="form-control">@if($stub == 'update'){{$post->content}}@endif</textarea>

            @if($stub == 'update')
                <input type="hidden" name="_method" value="PUT">
                <button type="submit" class="btn btn-warning mt-3 btn-lg">Update</button>
            @else
                <button type="submit" class="btn btn-warning mt-3 btn-lg">Create</button>
            @endif
        </form>
    </div>
@endSection