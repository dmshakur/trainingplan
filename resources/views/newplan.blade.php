@extends('layouts.app')

@section('content')
  <div>
    <form method="POST" action="{{ route('newplan.store') }}">
      {{ method_field('POST') }}
        @csrf

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Title:</label>

            <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="on" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Description:</label>

            <div class="col-md-6">
                <textarea rows="3" id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="on" autofocus></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="weeks" class="col-md-4 col-form-label text-md-right">Length in weeks:</label>

            <div class="col-md-6">
                <input id="weeks" type="number" class="form-control @error('weeks') is-invalid @enderror" name="weeks" required>

                @error('weeks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="startdate" class="col-md-4 col-form-label text-md-right">Start date:</label>

            <div class="col-md-6">
                <input id="startdate" type="date" class="form-control @error('startdate') is-invalid @enderror" name="startdate" required>

                @error('startdate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Create
                </button>
            </div>
        </div>
    </form>
  </div>
@endsection
