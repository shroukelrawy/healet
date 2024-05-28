@extends('layouts.main')

<!-- header section strats -->
<header class="header_section innerpage_header">
@include('includes.header')
</header>
<!-- end header section -->

@section('content')

  <!-- blog section -->
  <section class="blog_section layout_padding">
    @include('includes.blog')
  </section>
  <!-- end blog section -->

@endsection