@extends('layouts.masterLayout')

@section('content')
  <main role="main">
    <div class="container">
      <div class="row">
        @foreach($business->specials as $special)
        <form method="post" action="{{ route('specials.update',[$special->id]) }}">
              {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">

                  <div class="form-group">
                    <label for="specials-name">Monday<span class="required">*</span></label>
                    <input placeholder="Enter a Special" id="monday" required name="monday" spellcheck="false" class="form-control" value="{{ $special->monday }}"/>
                  </div>
                  <div class="form-group">
                    <label placeholder="Enter a Special" for="specials-name">Tuesday<span class="required">*</span></label>
                    <input id="tuesday" required name="tuesday" spellcheck="false" class="form-control" value="{{ $special->tuesday }}"/>
                  </div>
                   <div class="form-group">
                    <label placeholder="Enter a Special" for="specials-name">Wednesday<span class="required">*</span></label>
                    <input id="wednesday" required name="wednesday" spellcheck="false" class="form-control" value="{{ $special->wednesday }}"/>
                  </div>
                   <div class="form-group">
                    <label placeholder="Enter a Special" for="specials-name">Thursday<span class="required">*</span></label>
                    <input id="thursday" required name="thursday" spellcheck="false" class="form-control" value="{{ $special->thursday }}"/>
                  </div>
                   <div class="form-group">
                    <label placeholder="Enter a Special" for="specials-name">Friday<span class="required">*</span></label>
                    <input id="friday" required name="friday" spellcheck="false" class="form-control" value="{{ $special->friday }}"/>
                  </div>
                   <div class="form-group">
                    <label placeholder="Enter a Special" for="specials-name">Saturday<span class="required">*</span></label>
                    <input id="saturday" required name="saturday" spellcheck="false" class="form-control" value="{{ $special->saturday }}"/>
                  </div>
                   <div class="form-group">
                    <label placeholder="Enter a Special" for="specials-name">Sunday<span class="required">*</span></label>
                    <input id="sunday" required name="sunday" spellcheck="false" class="form-control" value="{{ $special->sunday }}"/>
                  </div>
                  <input type="submit" class="btn-primary" value="Submit"/>
             </div>
        </form>
        @endforeach
    <section class="jumbotron-second text-center">
      <a href="/business/{{ $business->id }}" class="btn btn-info my-2"> Back to {{ $business->business_name }}</a>
    </section> 
  </main>
@endsection
