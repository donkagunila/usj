@extends('layouts.admin')

@section('title', 'Dashboard | Admin')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			 <div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary card-header-icon">
					 <div class="card-icon">
	                    <i class="material-icons">people</i>
	                  </div>
	                  <h4 class="card-title">All Categories</h4>
					</div>



					{{-- card body --}}

					<div class="card-body">
						<div class="toolbar">
							
						</div>

						<div class="material-datatables">
							<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
								 <thead>
			                        <tr>
			                          <th>Name</th>
			                          <th>Description</th>
			                          <th>Status</th>
			                          <th>Date Created</th>
			                          
			                        </tr>
			                      </thead>
			                      <tfoot>
			                        <tr>
			                           <th>Name</th>
			                          <th>Description</th>
			                          <th>Status</th>
			                          <th>Date Created</th>
			                          
			                          
			                        </tr>
			                      </tfoot>
			                       <tbody>

			                       	@foreach($categories as $category)
				                        <tr>
				                           	<td>{{ $category->title}}</td>
					                        <td>{{ $category->description}}</td>
					                        <td>{{ \App\Category::status($category->status) }}</td>
				                            <td>{{ $category->created_at->toFormattedDateString()}}</td>
				                        </tr>
				                      @endforeach
				                        
				                    </tbody>
							</table>
						</div>
					</div>
				</div>
				{{-- end of card --}}
			 </div>


			 <div class="col-md-4">
			 	<div class="card">
			 		<div class="card-body">
			 			<form method="POST" class="form mt-4" action="{{ route('admin.category.save') }}">
                            @csrf

                             
                            <div class="form-group">
                                <label for="name" >{{ __('Title') }}</label>

                               
                                    <input id="name" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required >

                                    @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    {{ __('description') }}
                                </label>

                               
                                    <textarea name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description') }}</textarea> 
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                              
                            </div>


                          

                            <div class="form-group mb-0">
                                
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                
                            </div>
                        </form>
			 		</div>
			 	</div>
			 </div>
		</div>
	</div>
    
</div>
@endsection
