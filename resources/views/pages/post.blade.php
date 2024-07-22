@extends("layouts.default")

@section('content')
<div class="container pt-5 text-white">
    <div class="d-flex align-items-center">
        <h1>{{ $post->title }}</h1>
        <div class="ms-3">
            <a href="{{ route('edit', $post->id) }}" class="btn btn-warning btn-sm ">Edit</a>
            <button data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger btn-sm ms-2">Delete</button>
        </div>
    </div>
    <p class="mt-3">{{ $post->content }}</p>

    <!-- Delete Modal -->
    <div class="modal fade text-dark" tabindex="-1" role="modal" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-body p-4 text-center">
                    <h3 class="mb-0 text-danger fw-bold">Delete the post?</h3>
                    <p class="mb-0 text-muted">This action is irreversible!!!</p>
                </div>
                <div class="modal-footer flex-nowrap p-0">
                    <form action="{{ route('destroy', $post->id) }}" class="col-6 m-0" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-lg btn-danger btn-block w-100 fs-6 text-decoration-none rounded-0 border-right"><strong>Yes, Delete</strong></button>
                    </form>
                    <button type="button" class="btn btn-lg fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">No thanks</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endSection