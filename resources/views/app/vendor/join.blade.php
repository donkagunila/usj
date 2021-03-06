@extends('layouts.app')

@section('title', 'Become a vendor')

@section('content')


<section class="main-section">
  <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
      <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
              <!--Begin:: App Aside Mobile Toggle-->
            <button class="kt-app__aside-close" id="kt_profile_aside_close">
                <i class="la la-close"></i>
            </button>
          <!--End:: App Aside Mobile Toggle-->

          
      </div>
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill in the form to become a Vendor</div>
                <div class="card-body">
                	<form action="{{ route('vendor.store')}}" method="POST">
                		@csrf

                    <div>
                      <h2>
                        Profile details {{ $status }}
                      </h2>
                    </div>
						
                           <div>
                           	<input type="text" name="name" class="form-control" placeholder="Vendor register name">
                           </div>

                           <div>
                           	<div>
                           		Category
                           	</div>
                           	<select name="category" id="cat" class="form-control">
                           		@foreach($categories as $category)
              									<option value="{{ $category->id }}">{{$category->title}}</option>
                           		@endforeach
                           	</select>
                           </div>

                           <div>
                           	<p>Sub Category</p>
                           	<input type="text" name="subcat" class="form-control" placeholder="Subcategory">
                           </div>

                            <div class="form-group">
                             <input type="text" class="form-control" placeholder="about" name="about">
                           </div>

                          

                           <div>
                             <h2>
                               Location details
                             </h2>
                           </div>

                           <div class="form-group">
                             <input type="text" class="form-control" placeholder="Location" name="location">
                           </div>

                           <div class="form-group">
                             <input type="text" name="ward" class="form-control" placeholder="Ward">
                           </div>

                            <div class="form-group">
                             <input type="text" name="district"  class="form-control"placeholder="district">
                           </div>

                            <div class="form-group">
                             <input type="text" name="region"  class="form-control"placeholder="region">
                           </div>

                           <div class="form-group">
                             <input type="text" name="country" class="form-control" placeholder="country">
                           </div>

                            <div class="form-group">
                             <input type="text" name="phone" class="form-control" placeholder="phone">
                           </div>

                           <div class="form-group">
                             <input type="text" name="email"  class="form-control"placeholder="email">
                           </div>

                            <div class="form-group">
                             <input type="text" name="address" class="form-control" placeholder="address">
                           </div>

                            <div class="form-group">
                             <input type="text" name="website" class="form-control" placeholder="website">
                           </div>



                           <div>
                           	<button type="submit" class="btn btn-primary">
                           		Submit request
                           	</button>
                           </div>

                	</form>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
@endsection
