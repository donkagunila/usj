@extends('layouts.app')

@section('title', 'Become a vendor')

@section('content')
<section class="main-section">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill in the form to become a Vendor</div>
                <div class="card-body">
                	<form action="{{ route('vendor.store')}}" method="POST">
                		@csrf
						
                           <div>
                           	<input type="text" name="name" placeholder="Fullname">
                           </div>

                           <div>
                           	<div>
                           		Category
                           	</div>
                           	<select name="category" id="cat">
                           		@foreach($categories as $category)
									<option value="{{ $category->id }}">{{$category->title}}</option>
                           		@endforeach
                           	</select>
                           </div>

                           <div>
                           	<p>Sub Category</p>
                           	<input type="text" name="subcat" placeholder="Subcategory">
                           </div>

                           <div>
                           	<button type="submit">
                           		Request
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
