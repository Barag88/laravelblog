@extends('layouts/app')
@section('content')
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h3 class="d-flex justify-content-center">Editace</h3>
                    <form action="/post/{{ $post->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title" class="form-label">Nadpis:</label>
                            <input type="text" name="title" value="{{ $post->title }}" class="form-control" required>
                        </div>
                        <div>
                            <label for="perex">Perex:</label>
                            <input type="text" name="perex" value="{{ $post->perex }}" class="form-control" required>
                        </div>
                        <div>
                            <label for="text">Text:</label>
                            <textarea type="text" name="text" value="{{ $post->text }}" class="form-control" style="height: 250px" required>{{ $post->text }}</textarea>
                        </div>
                        <div>
                        <button type="submit" class="my-3 btn btn-primary">
                            Odeslat
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection