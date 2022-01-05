@extends('layouts/app')
@section('content')
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    @foreach ($post as $item)
                            <!-- Post preview-->
                        <div class="post-preview">
                            <a href="/post/{{ $item->id }}">
                                <h2 class="post-title">{{ $item->title }}</h2>
                            </a>
                            <a>
                                <h3 class="post-subtitle">{{ $item->perex }}</h3>
                            </a>
                            <p class="post-meta">
                                <!-- Posted by -->Vytvořeno: 
                                {{ $item->created_at }} <br>
                                @if ($item->updated_at != $item->created_at)
                                Naposledy upraveno: {{ $item->updated_at }} <br>
                                @endif

                                @if (Auth::user())
                                <div class="row">
                                    <div class="col-2">
                                <button onclick="document.location='/post/{{ $item->id }}/edit'" class="btn btn-warning">Edituj</button>
                                    </div>
                                    <div class="col-2">
                                    <form action="post/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" value="Smazat" class="btn btn-danger" onclick="return confirm('Opravdu chcet příspěvek smazat?')">
                                            Smazat
                                        </button>
                                    </form>
                                    </div>
                                </div>
                                @endif
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />
                    @endforeach
                    <!-- Pager-->
                    @if (Auth::user())
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="/post/create">Vytvořit nový post →</a></div>
                    @endif

                    <span class="d-flex justify-content-center">
                        {{ $post->links() }}
                    </span>

                </div>
            </div>
        </div>
@endsection