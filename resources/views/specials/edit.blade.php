@extends('layouts.masterLayout')

@section('content')
    <main role="main">
     

    <div class="container">
      <div class="row">
      
        <form method="post" action="{{ route('specials.update',[$businesses->id]) }}">
              {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">

                  <div class="form-group">
                  <label for="specials-name">Monday<span class="required">*</span></label>

                    <input placeholder="Enter a Special" id="monday" required name="monday" spellcheck="false" class="form-control" value="{{ $businesses->business_name }}"/>
                  </div>

                  <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Tuesday<span class="required">*</span></label>
                    <input id="tuesday" required name="tuesday" spellcheck="false" class="form-control" value="{{ $businesses->business_name }}"/>
                  </div>

                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Wednesday<span class="required">*</span></label>
                    <input id="wednesday" required name="wednesday" spellcheck="false" class="form-control" value="{{ $businesses->business_name }}"/>
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Thursday<span class="required">*</span></label>
                    <input id="thursday" required name="thursday" spellcheck="false" class="form-control" value="{{ $businesses->business_name }}"/>
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Friday<span class="required">*</span></label>
                    <input id="friday" required name="friday" spellcheck="false" class="form-control" value="{{ $businesses->business_name }}"/>
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Saturday<span class="required">*</span></label>
                    <input id="saturday" required name="saturday" spellcheck="false" class="form-control" value="{{ $businesses->business_name }}"/>
                  </div>


                   <div class="form-group">
                  <label placeholder="Enter a Special" for="specials-name">Sunday<span class="required">*</span></label>
                    <input id="sunday" required name="sunday" spellcheck="false" class="form-control" value="{{ $businesses->business_name }}"/>
                  </div>

                  <input type="submit" class="btn-primary" value="Submit"/>

             </div>
      </form>

      <aside class="col-md-2 blog-sidebar pull-right">
          <div class="p-3">
            <h4 class="font-italic">Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/businesses/{{ $businesses->id }}">Back to {{ $businesses->business_name }}</a></li>
              <li><a href="/businesses">All Businesses</a></li>
              <!-- <li><a href="#">Delete</a></li>
              <li><a href="#">Add New user</a></li> -->
            </ol>
          </div>

         <!--  <div class="p-3">
            <h4 class="font-italic">Members</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              
            </ol>
          </div> -->
        </aside>
    </div>
      </div>   

    </main>


@endsection
