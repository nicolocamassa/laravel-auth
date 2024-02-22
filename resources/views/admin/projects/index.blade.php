@extends('layouts.admin')

@section('content')
<div class="container py-5 px-0">
    <div class="row">
      
            @foreach ($projects as $project)

                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card_content">
                            <img src="{{ $project->image ? $project->image : 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1' }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $project->title }}</h5>
                          <p class="card-text">{{ $project->description }}</p>

                          <div class="d-flex">

                            <a href="{{ route('admin.projects.show', ['project' => $project->id])}}" class="btn btn-primary me-1">View More</a>
                            <a href="{{ route('admin.projects.edit', ['project' => $project->id])}}" class="btn btn-warning me-1"><i class="fas fa-pencil"></i></a>

                            
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $project->id }}">
                              Launch demo modal
                            </button>
                            
                          </div>
                          
                          
                        </div>
                      </div>
                    </div>
                        
                </div>
                @include('admin.projects.partials.modal')
            @endforeach
            
    </div>
    
</div>


@endsection
