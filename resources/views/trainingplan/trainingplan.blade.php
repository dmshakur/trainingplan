@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="align-center">{{ $trainingPlan->title }}</h1>
  <div class="row">
    {{-- {{
      Carbon\Carbon::parse($trainingPlan->startdate)->day
      Carbon\Carbon::parse($trainingPlan->startdate)->dayOfWeek This is when to start, the day of the begining of the training not the first of the month
      Carbon\Carbon::parse($trainingPlan->startdate)->englishMonth This is the month
      Carbon\Carbon::parse($trainingPlan->startdate)->daysInMonth This is the number of days in a month
    }} --}}
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
      </div>
      <div class="col">
        Sunday
      </div>
      <div class="col">
        Monday
      </div>
      <div class="col">
        Tuesday
      </div>
      <div class="col">
        Wednesday
      </div>
      <div class="col">
        Thursday
      </div>
      <div class="col">
        Friday
      </div>
      <div class="col">
        Saturday
      </div>
    </div>
    <div>
      @for ($fill = 0, $i = Carbon\Carbon::parse($trainingPlan->startdate)->day; $i <= Carbon\Carbon::parse($trainingPlan->startdate)->daysInMonth; $i++, $fill++)
        @if (Carbon\Carbon::parse($trainingPlan->startdate)->dayOfWeek > $fill)
          <div style="border: 1px solid black, background-color: grey,width: 50px, height: 50px">
            X
          </div>
        @else
          <div style="border: 1px solid black,width: 50px, height: 50px">
            Day {{ $i }}
          </div>
        @endif
      @endfor
    </div>
  </div>

</div>
@endsection
