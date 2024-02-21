@extends('layouts.admin')

@section('content')
<div class="container p-5">
    <div class="row">
            @foreach ($projects as $project)

                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card_content">
                            <img src="{{ $project->image ? $project->image : 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1' }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $project->title }}</h5>
                          <p class="card-text">{{ $project->description }}</p>
                          <a href="{{ route('admin.projects.show', ['project' => $project->id])}}" class="btn btn-primary">View More</a>
                        </div>
                      </div>
                        </div>
                        
                </div>
            @endforeach
        
    </div>
</div>
    

@endsection
