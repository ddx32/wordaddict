{{--
  Template Name: Donate Page
  Template Post Type: page
--}}

@extends('layouts.general')

@section('content')
  @include('partials.issue-header-logo')
  <div class="donate-page-content">
    @while(have_posts()) @php(the_post())
      @php(the_content())
    @endwhile
  </div>
@endsection
