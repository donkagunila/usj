@extends('layouts.app')

@section('title', 'Enrolment feeds')

@section('content')

<div class="container">
    <div class="row">

    	@include('inc.app.sidebar')
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Openings List</div>
                <div class="card-body">
                    
                    <div>
                        @foreach($openings as $opening)
                            <div>
                                <a href="">
                                    {{ $opening->title }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
