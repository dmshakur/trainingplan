@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="py-3 text-center">{{ $trainingPlan->title }}</h1>
  <h1 class="h1 text-center">{{Carbon\Carbon::parse(Carbon\Carbon::parse($trainingPlan->startdate)->addMonths(intval(substr(Request::fullUrl(), -1)) - 1))->englishMonth}}</h1>

  <ul class="nav nav-tabs justify-content-center">
    @for ($i = 0; $i <= $trainingPlan->month_count; $i++)
      <li class="nav-item">
        <a class="nav-link" href="{{
            route('overview.trainingplan', ['trainingplan_id' => $trainingPlan->id, 'month_count' => $i + 1])
          }}">
          {{ $i + 1 }}
        </a>
      </li>
    @endfor
  </ul>
  {{Carbon\Carbon::parse($trainingPlan->startdate)->addMonth(1)->day(1)}}
    @for ($i = 0; $i < $trainingPlan->month_count; $i++)
      @if (intval(substr(Request::fullUrl(), -1)) === $i)
        @include('trainingplan.calendar', [
          'startdate' => function() {
            if (substr(Request::fullUrl(), -1) === "1") {
              return Carbon\Carbon::parse($trainingPlan->startdate)->addMonth(1)->day(1);
            } else {
              return $trainingPlan->startdate;
            }
          }
        ])
      @endif
    @endfor

</div>
@endsection
