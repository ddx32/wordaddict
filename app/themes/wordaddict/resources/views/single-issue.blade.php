{{--
  Template Name: Single Issue
  Template Post Type: issue
--}}

@extends('layouts.issue')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-single-issue')
    @include('partials.issue-gallery')
  @endwhile
@endsection
