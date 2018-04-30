@extends('layouts.masterLayout')

@section('content')
<main role="main">
  <div class="container">
      <div class="row">
        <form method="post" action="{{ route('businesses.store') }}">
      {{ csrf_field() }}
    <h1>Create your business</h1>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputBusiness">Your Business Name</label>
        <input type="business_name" class="form-control" id="business_name" required name="business_name" placeholder="business name">
      </div>
      <div class="form-group col-md-6">
        <label for="inputStreet">Street</label>
        <input type="street" class="form-control" id="street" placeholder="Street" required name="street">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputCity">City</label>
        <input type="city" class="form-control" id="city" required name="city">
      </div>
      <div class="form-group col-md-3">
        <label for="inputZip">Zip</label>
        <input type="zip" class="form-control" id="zip" required name="zip">
      </div>
      <div class="form-group col-md-6">
        <label for="inputUrl">Url:(https:)</label>
        <input type="url" class="form-control" id="url" placeholder="Ex: https://www.site.com">
      </div>
    </div>
        <input type="submit" class="btn-primary" value="Submit"/>
        </form>
  </div>
  </div>
</main>
@endsection