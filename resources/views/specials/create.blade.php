@extends('layouts.masterLayout')

@section('content')
  <main role="main">
    <div class="container">
      <h1 class="text-center">Create your Special for the week.</h1>
      <div class="row">
        <div class="col-md-12">
          {!! BootForm::open(['route' => ['specials.store']]) !!}

<!--           {!! BootForm::textarea('description') !!}
 -->
          {!! BootForm::date('start_date') !!}

          {!! BootForm::date('end_date') !!}

          {!! BootForm::select('business_id', 'Business', $businessesArray, isset($selected) ? $selected : null) !!}

          {!! BootForm::text('monday', 'Monday', old('monday', isset($special) ? $special->monday : ''), ['required' => 'required']) !!}

          {!! BootForm::text('tuesday', 'Tuesday', old('tuesday', isset($special) ? $special->tuesday : ''), ['required' => 'required']) !!}

          {!! BootForm::text('wednesday', 'Wednesday', old('wednesday', isset($special) ? $special->wednesday : ''), ['required' => 'required']) !!}

          {!! BootForm::text('thursday', 'Thursday', old('thursday', isset($special) ? $special->thursday : ''), ['required' => 'thursday']) !!}

          {!! BootForm::text('friday', 'Friday', old('friday', isset($special) ? $special->friday : ''), ['required' => 'friday']) !!}

          {!! BootForm::text('saturday', 'Saturday', old('saturday', isset($special) ? $special->saturday : ''), ['required' => 'saturday']) !!}

          {!! BootForm::text('sunday', 'Sunday*',   old('sunday',  isset($special) ? $special->sunday  :  ''), ['required' => 'sunday']) !!}

          {!! BootForm::submit('Save', ['id' => 'custom-button', 'class' => 'btn btn-primary  center-block']) !!}
          <br>
          <br>
          {!! BootForm::close() !!}
        </div>
      </div>
    </div>
  </main>
@endsection

