{{--
  Template Name: Single Issue
  Template Post Type: issue
--}}

@extends('layouts.issue')

@section('content')
  We have a single issue here.
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
