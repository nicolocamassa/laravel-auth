@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="post" class="mx-auto p-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="text" name="title">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>          
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="image">
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <select class="form-select" name="language">
                <option selected>Language</option>
                <option value="1">Italiano</option>
                <option value="2">Inglese</option>
                <option value="3">Spagnolo</option>
              </select>
          </div>
          <div class="mb-3">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status">
                    <option selected>Project status</option>
                    <option value="1">Iniziale</option>
                    <option value="2">In corso</option>
                    <option value="3">Completato</option>
                  </select>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
@endsection
