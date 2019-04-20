{{--
  Template Name: Donate Page
  Template Post Type: page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @php(the_title())
    @php(the_content())
  @endwhile
@endsection

