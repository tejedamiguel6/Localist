@extends('layouts.masterLayout')

@section('content')
    <main role="main">
     

    <div class="container">
      <div class="row">
<div class="container">
<h1>Create a new Special</h1>

</div>

   <form method="post" action="{{ route('specials.store') }}">
      {{ csrf_field() }}

                  <div class="form-group">
                  <label for="specials-name">Monday<span class="required">*</span></label>

                    <input placeholder="Enter a Special" id="monday" required name="monday" spellcheck="false" class="form-control" />
                  </div>

                  <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Tuesday<span class="required">*</span></label>
                    <input id="tuesday" required name="tuesday" spellcheck="false" class="form-control" />
                  </div>

                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Wednesday<span class="required">*</span></label>
                    <input id="wednesday" required name="wednesday" spellcheck="false" class="form-control" />
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Thursday<span class="required">*</span></label>
                    <input id="thursday" required name="thursday" spellcheck="false" class="form-control" />
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Friday<span class="required">*</span></label>
                    <input id="friday" required name="friday" spellcheck="false" class="form-control" />
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Saturday<span class="required">*</span></label>
                    <input id="saturday" required name="saturday" spellcheck="false" class="form-control" />
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Sunday<span class="required">*</span></label>
                    <input id="sunday" required name="sunday" spellcheck="false" class="form-control" />
                  </div>

                  <input type="submit" class="btn-primary" value="Submit"/>


   <div class="form-group col-md-2">
        <input type="hidden" name="$business_id" value="{{ $business_id }}" class="form-control">
    </div> 
 

    
    </form>



    </main>


@endsection