@extends('layouts.masterLayout')

@section('content')
    <main role="main">
     

    <div class="container">
      <div class="row">


   <form method="post" action="{{ route('businesses.store') }}">
      {{ csrf_field() }}


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Business Name</label>
        <input type="business_name" class="form-control" id="business_name" required name="business_name" placeholder="business name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Street</label>
        <input type="street" class="form-control" id="street" placeholder="Street" required name="street">
      </div>
    </div>
   
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="city" class="form-control" id="city" required name="city">
      </div>
<!--       <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div> -->
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="zip" class="form-control" id="zip">
      </div>
    </div>
    
                  <input type="submit" class="btn-primary" value="Submit"/>

    
    </form>



    <!-- Adding the specials of that business -->

   <!-- <form method="post" action="{{ route('specials.store') }}">
    <input type="hidden" name="_method" value="put">

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

             </div>

                 <button type="submit" class="btn btn-primary">Submit</button>

</form>

 -->

      <!-- 
        <form method="post" action="{{ route('businesses.create') }}">
              {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">

                  <div class="form-group">
                  <label for="specials-name">Business Name<span class="required">*</span></label>

                    <input placeholder="Enter Business Name" id="monday" required name="business_name" spellcheck="false" class="form-control" />
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

                  <div calss="form-group">
                  <input type="submit" class="btn-primary" value="Submit"/>

                  </div>
             </div>
      </form>

      <aside class="col-md-2 blog-sidebar pull-right">
          <div class="p-3">
            <h4 class="font-italic">Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/businesses">All Businesses</a></li> -->
              <!-- <li><a href="#">Delete</a></li>
              <li><a href="#">Add New user</a></li> -->
<!--             </ol>
          </div> -->

         <!--  <div class="p-3">
            <h4 class="font-italic">Members</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              
            </ol>
          </div> -->
<!--         </aside>
    </div>
      </div>    -->

    </main>


@endsection
