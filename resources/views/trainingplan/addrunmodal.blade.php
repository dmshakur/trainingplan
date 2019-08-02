<div class="modal fade" id="addrunmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addrunmodal">Add a run</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('run.store') }}" method="post">
          {{ method_field('POST') }}
            @csrf

            <div class="form-group row">
                <label for="duration_hours" class="col-md-4 col-form-label text-md-right">Duration:</label>

                <div class="col-md-3">
                    <input id="duration_hours" type="number" class="form-control @error('duration_hours') is-invalid @enderror" name="duration_hours" value="{{ old('duration_hours') }}" required autocomplete="on" autofocus>

                    @error('duration_hours')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="duration_minutes" class="col-form-label text-md-right">:</label>
                <div class="col-md-3">
                    <input id="duration_minutes" max="59" type="number" class="form-control @error('duration_minutes') is-invalid @enderror" name="duration_minutes" value="{{ old('duration_minutes') }}" required autocomplete="on" autofocus>

                    @error('duration_minutes')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="miles" class="col-md-4 col-form-label text-md-right">Miles:</label>

                <div class="col-md-6">
                    <input id="miles" type="number" class="form-control @error('miles') is-invalid @enderror" name="miles" value="{{ old('miles') }}" required autocomplete="on" autofocus>

                    @error('miles')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="average_pace_minutes" class="col-md-4 col-form-label text-md-right">Average Pace:</label>

                <div class="col-md-3">
                    <input id="average_pace_minutes" max="59" type="number" class="form-control @error('average_pace_minutes') is-invalid @enderror" name="average_pace_minutes" value="{{ old('average_pace_minutes') }}" required autocomplete="on" autofocus>

                    @error('average_pace_minutes')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <label for="average_pace_seconds" class="col-form-label text-md-right">:</label>
                <div class="col-md-3">
                    <input id="average_pace_seconds" max="59" type="number" class="form-control @error('average_pace_seconds') is-invalid @enderror" name="average_pace_seconds" value="{{ old('average_pace_seconds') }}" required autocomplete="on" autofocus>

                    @error('average_pace_seconds')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
              <label for="location" class="col-md-4 col-form-label text-md-right">Location:</label>

              <div class="col-md-6">
                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="on" autofocus>

                  @error('location')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

            <div class="form-group row">
                <label for="prerun_nutrition" class="col-md-4 col-form-label text-md-right">Pre-Run Nutrition:</label>

                <div class="col-md-6">
                    <input id="prerun_nutrition" type="text" class="form-control @error('prerun_nutrition') is-invalid @enderror" name="prerun_nutrition" value="{{ old('prerun_nutrition') }}" required autocomplete="on" autofocus>

                    @error('prerun_nutrition')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="run_nutrition" class="col-md-4 col-form-label text-md-right">Run Nutrition:</label>

                <div class="col-md-6">
                    <input id="run_nutrition" type="text" class="form-control @error('run_nutrition') is-invalid @enderror" name="run_nutrition" value="{{ old('run_nutrition') }}" required autocomplete="on" autofocus>

                    @error('run_nutrition')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="postrun_nutrition" class="col-md-4 col-form-label text-md-right">Post-Run Nutrition:</label>

                <div class="col-md-6">
                    <input id="postrun_nutrition" type="text" class="form-control @error('postrun_nutrition') is-invalid @enderror" name="postrun_nutrition" value="{{ old('postrun_nutrition') }}" required autocomplete="on" autofocus>

                    @error('postrun_nutrition')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="start_time" class="col-md-4 col-form-label text-md-right">Start Time:</label>

                <div class="col-md-6">
                    <input id="start_time" type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time') }}" required autocomplete="on" autofocus>

                    @error('start_time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="details" class="col-md-4 col-form-label text-md-right">Details:</label>

                <div class="col-md-6">
                    <textarea id="details" type="text" rows="2" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') }}" required autocomplete="on" autofocus></textarea>

                    @error('details')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="day_id" value="{{ $day->id }}">
          <button type="submit" class="float-right btn btn-dark">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
