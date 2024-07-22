@extends("layouts.default")

@section('content')
<div class="container pt-5">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('index') }}" class="text-warning">Back</a>
        <a href="{{ route('create') }}" class="btn btn-outline-warning"><i class="fas fa-plus"></i> Create Post</a>
    </div>

    @if(session()->get('alert'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session()->get('alert') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(count($posts) > 0)
    <div class="row mt-3 g-2">
        @foreach($posts as $post)
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text">{{ substr($post->content, 0, 100) }}</p>
                    <div class="text-end">
                        <a href="{{ route('show', $post->id) }}" class="btn btn-dark bg-transparent text-danger border-0 p-0 m-0">edit</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="alert alert-warning mt-5">
        <h4 class="alert-heading">No Posts Found!</h4>
        <p>There are no posts to show.</p>
    </div>
    @endif
</div>
@endSection