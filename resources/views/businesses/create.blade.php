@extends('layouts.masterLayout')

@section('content')
    <main role="main">
     

    <div class="container">
      <div class="row">


   <form method="post" action="{{ route('businesses.store') }}">
      {{ csrf_field() }}


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Your Business Name</label>
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
      <div class="form-group col-md-3">
        <label for="inputZip">Zip</label>
        <input type="zip" class="form-control" id="zip">
      </div>
    </div>


    
      <input type="submit" class="btn-primary" value="Submit"/>

    
    </form>

    </main>


@endsection
