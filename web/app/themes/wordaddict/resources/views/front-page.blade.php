@extends('layouts.app')

@section('content')
  
  @include('partials.current-issue')
  @include('partials.past-issues')
  
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    
  @endwhile
@endsection
