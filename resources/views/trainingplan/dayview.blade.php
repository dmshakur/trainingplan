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

          <div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Time</th>
                  <th scope="col">Miles</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Location</th>
                  <th scope="col">Average Pace</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($runs as $run)
                  <tr>
                    <td>{{ $run->start_time }}</td>
                    <td>{{ $run->miles }}</td>
                    <td>{{ $run->duration_hours }}:{{ $run->duration_minutes }}</td>
                    <td>{{ $run->location }}</td>
                    <td>{{ $run->average_pace_minutes }}:{{ $run->average_pace_seconds }}</td>
                  </tr>
                @endforeach
                <tr>
                  <td>
                    <button
                    type="button"
                    class="btn btn-dark mb-3"
                    data-toggle="modal"
                    data-target="#addrunmodal"
                    >
                    Add a run
                  </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Time</th>
                  <th scope="col">Protein</th>
                  <th scope="col">Calories</th>
                  <th scope="col">Carbs</th>
                  <th scope="col">Sugar</th>
                  <th scope="col">Electrolytes</th>
                  <th scope="col">H20</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>

          <p>Mileage: {{ $day->mileage }}</p>
          <button type="button" class="btn btn-dark">Edit</button>
        </div>
      </div>
    </div>
  </div>
@endsection
