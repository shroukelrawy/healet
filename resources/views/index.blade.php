@extends('layouts.main')

<!-- header section strats -->
<header class="header_section">
@include('includes.header')
</header>
<!-- end header section -->

@section('content')

 
  <!-- slider section -->
  @include('includes.slider')
  <!-- end slider section -->

  <!-- shop section -->
  @include('includes.shop')
  <!-- end shop section -->

  <!-- about section -->
  <section class="about_section  ">
  @include('includes.about')
  </section>
  <!-- end about section -->

  <!-- offer section -->
  @include('includes.offer')
  <!-- end offer section -->

  <!-- blog section -->
  <section class="blog_section ">
  @include('includes.blog')
  </section>
  <!-- end blog section -->

  <!-- client section -->
  @include('includes.client')
  <!-- end client section -->

  

@endsection