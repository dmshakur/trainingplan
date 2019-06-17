  <div class="container">

    <div class="row">
      <div class="col">

      </div>
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
    {{-- {{dd($startdate)}} --}}
      @for ($i = Carbon\Carbon::parse($startdate)->day; $i <= Carbon\Carbon::parse($startdate)->daysInMonth;)
        <div class="border row">
          <div class="border border-primary col">
            Week View
          </div>


          @for ($j = 0; $j <= 6; $j++, $i++)

            @if ($i === Carbon\Carbon::parse($startdate)->day) {{-- To Fill in empty space at the beginning of the calendar --}}
              @for ($k = 0; $k < Carbon\Carbon::parse($startdate)->dayOfWeek; $k++, $j++)
                <div class="border col">

                </div>
              @endfor
            @endif

            @if ($i <= Carbon\Carbon::parse($startdate)->daysInMonth) {{-- To fill in the days then the empty space at the end of the calendar --}}
              <div class="border col">
                Day {{ $i }}
              </div>
            @else
              <div class="border col">

              </div>
            @endif

          @endfor

        </div>
      @endfor

  </div>
