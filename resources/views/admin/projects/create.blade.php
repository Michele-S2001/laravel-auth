@extends('layouts.app')

@section('page-title', 'Add project')

@section('content')

<section class="section add-project py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="" method="POST">

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title of the project">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">URL image</label>
                        <input type="text" class="form-control" id="image" placeholder="URL of the project image">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea placeholder="Description of the project" class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3 d-flex justify-content-between">
                        <input class="btn btn-primary" type="submit" value="Add">
                        <a class="btn btn-secondary" href="{{route('admin.projects.index')}}">Undo</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
