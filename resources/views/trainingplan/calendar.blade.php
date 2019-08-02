  <div class="container">

    <div class="row">
      <div class="col"></div>
      <div class="col border-top border-bottom border-left">
        Sunday
      </div>
      <div class="col border-top border-bottom">
        Monday
      </div>
      <div class="col border-top border-bottom">
        Tuesday
      </div>
      <div class="col border-top border-bottom">
        Wednesday
      </div>
      <div class="col border-top border-bottom">
        Thursday
      </div>
      <div class="col border-top border-bottom">
        Friday
      </div>
      <div class="col border-top border-bottom border-right">
        Saturday
      </div>
    </div>

      @for ($i = Carbon\Carbon::parse($startdate)->day;
              $i <= Carbon\Carbon::parse($startdate)->daysInMonth;
            ) {{-- $i for loop --}}
        <div class="border row">
          <div class="border border-primary col">
            Week View
          </div>

          @for ($j = 0; $j <= 6; $j++, $i++) {{-- $j for loop --}}

            @if ($i === Carbon\Carbon::parse($startdate)->day) {{-- To fill in empty space at the beginning of the calendar --}}
              @for ($k = 0; $k < Carbon\Carbon::parse($startdate)->dayOfWeek; $k++, $j++)
                <div class="border col">

                </div>
              @endfor
            @endif

            @if (($i <= Carbon\Carbon::parse($startdate)->daysInMonth)
                  || ($i <= Carbon\Carbon::parse(Carbon\Carbon::parse($trainingPlan->startdate)->addWeeks($trainingPlan->weeks))->day )
                ) {{-- To fill in the days then the empty space at the end of the calendar --}}
              <div class="border col">
               {{ $i }} {{ $startdate }}
               <a href="{{
                 route('day.show', [
                   'trainingplan_id' => $trainingPlan->id,
                   'month' => Carbon\Carbon::parse($startdate)->month,
                   'date' => Carbon\Carbon::parse($startdate)->day($i)
                 ])
               }}" class="btn btn-sm btn-dark">
                 View
               </a>
              </div>
            @else
              <div class="border col">

              </div>
            @endif

          @endfor {{-- $j for loop --}}

        </div>
      @endfor {{-- $i for loop --}}

  </div>
