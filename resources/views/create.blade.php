@extends('layouts/app')
@section('content')
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <form action="/post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="image" class="form-label">Vyber obrázek</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Nadpis</label>
                        <input type="text" name="title" placeholder="NADPIS" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="perex" class="form-label">Perex</label>
                        <input type="text" name="perex" placeholder="PEREX" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Text</label>
                        <textarea type="text" name="text" placeholder="TEXT" class="form-control" style="height: 250px" required></textarea>
                    </div>
                    <button type="submit" class="my-3 btn btn-primary">
                        Odeslat
                    </button>

                </form>
                <div class="col-md-10 col-lg-8 col-xl-7">
                </div>
            </div>
        </div>
@endsection