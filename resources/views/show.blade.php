@extends('layouts/app')

@section('content')
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                <div class="post-preview">

                    
                    
                    <a href="/post/{{ $post->id }}">
                        <h2 class="post-title">{{ $post->title }}</h2>
                    </a>
                    <!-- <a>
                        <h3 class="post-subtitle">{{ $post->perex }}</h3>
                    </a> -->
                    @if (empty($post->image_path) || $post->image_path == 0)
                    
                    @else
                    <img src="{{ asset('images/' . $post->image_path) }}" class="img-fluid">
                    @endif
                    
                    <p>
                        {!! $post->text !!}
                    </p>
                    <p class="post-meta">
                        Napsáno: {{ date('d.m.Y G:i:s', strtotime($post->created_at)) }}  <br>
                        @if ($post->updated_at != $post->created_at)
                        Naposledy upraveno: {{ $post->updated_at }}
                        @endif

                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Komentare -->
                <h3 class="mb-3">Komentáře</h3>
                @forelse ($post->postComments as $item)
                    <b>{{ $item['from'] }}</b> napsal(a): {{ $item['comment'] }} <br>
                @empty
                    <p>Žádné komentáře tu nejsou.</p>
                @endforelse
                <hr class="my-4" />
                <div>
                    <h3>Vložit nový komentář</h3>
                <form action="/comment" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}"><br>
                    <div class="form-group mb-3">
                        <input type="text" name="from" placeholder="Od" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <textarea name="comment" placeholder="Komentář" class="form-control" style="height: 200px" required></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">
                        Odeslat
                    </button>

                </form>
            </div>
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"></div>
        </div>
    </div>
</div>
@endsection