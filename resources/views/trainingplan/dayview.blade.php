@extends('layouts.app')

@section('content')
  <div>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">
            {{ Carbon\Carbon::parse($day->date)->toFormattedDateString() }}
          </h4>
          <p>Runs: {{ $day->runs }}
            @include('trainingplan.addrunmodal')
          </p>
          <button
            type="button"
            class="btn btn-dark mb-3"
            data-toggle="modal"
            data-target="#addrunmodal"
          >
            Add a run
          </button>
          <div>
            Display runs here
          </div>
          <p>Mileage: {{ $day->mileage }}</p>
          <button type="button" class="btn btn-dark">Edit</button>
        </div>
      </div>
    </div>
  </div>
@endsection
