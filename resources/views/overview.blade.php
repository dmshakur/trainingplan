@section('title')
  Overview
@endsection

@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Training Plans</h1>
    <a class="btn btn-dark" href="{{ route('newplan.get') }}">Add a new plan</a>
    <div class="py-2 d-flex justify-content-around">
      @foreach (Auth::user()->trainingPlans as $trainingPlan)
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $trainingPlan->title }}</h5>
            <h6>{{ $trainingPlan->weeks }} Weeks</h6>
            <p>{{ $trainingPlan->description }}</p>
            <a class="btn btn-dark" href="{{ route('overview.trainingplan', ['trainingPlan_id' => $trainingPlan->id]) }}">View</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
