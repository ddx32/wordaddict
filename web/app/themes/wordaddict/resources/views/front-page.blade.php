@extends('layouts.app')

@section('content')
  
  @include('partials.latest-issue')
  
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    
  @endwhile
@endsection
