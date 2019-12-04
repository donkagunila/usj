@extends('layouts.app')

@section('title', 'Become a vendor')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill in the form to become a vevendor</div>
                <div class="card-body">
                	<form action="">
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
@endsection
