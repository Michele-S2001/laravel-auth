@extends('layouts.app')

@section('page-title', 'All my projects')

@section('content')

<section class="section projects py-5">
    <div class="container">
        <h1 class="main-title text-center mb-5">Discover the projects that I made</h1>
        <div class="row row-gap-3">
            @foreach ($projects as $project)

                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="project-card p-3">
                        <div class="project-card__header text-center pb-3">
                            <span class="badge text-dark">Web development</span>
                            <h3 class="title"> {{$project->title}} </h3>
                        </div>
                        <div class="project-card__body text-center">
                            <img class="mx-auto" src="{{$project->image}}" alt="project image">
                            <div class="tools d-flex justify-content-between px-3">
                                <a href="{{route('admin.projects.show', $project->id)}}">more</a>
                                <a href="{{route('admin.projects.edit', $project->id)}}">edit</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

@endsection
