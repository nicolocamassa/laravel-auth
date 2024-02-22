@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="post" class="mx-auto p-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="text" name="title">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description"></textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="exampleInputPassword1" name="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date">
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="languages" class="form-label">Language</label>
            <select class="form-select @error('languages') is-invalid @enderror" name="languages">
                <option value="">Language</option>
                <option value="Italiano">Italiano</option>
                <option value="Inglese">Inglese</option>
                <option value="Spagnolo">Spagnolo</option>
            </select>
            @error('language')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" name="status">
                    <option value="">Project status</option>
                    <option value="Iniziale">Iniziale</option>
                    <option value="In corso">In corso</option>
                    <option value="Completato">Completato</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
