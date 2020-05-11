@extends('layouts.app')

@section('content')

{{-- Featured Post --}}
<section class="featured-post-section">
  <div class="container featured-post-wrapper">

    <div class="row featured-post-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Featured post</h2>
      </div>
    </div>

    <div class="row featured-post-content-wrapper">
      <div class="post-image-wrapper">
        <div class="post-image">
          {{-- background image --}}
        </div>
      </div>
      <div onclick="location.href='{{ url('/blog-post') }}';" class="post-info-wrapper">
        <div class="post-category">Technology</div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12&nbsp; &#8226; &nbsp;5 MIN READ
        </div>
      </div>
    </div>

  </div>
</section>

{{-- Posts List Section --}}
<section class="posts-section">
  <div class="container posts-wrapper">

    <div class="row posts-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Recently added posts</h2>
      </div>
    </div>

    <div class="row posts-content-wrapper">

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig1.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig2.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig3.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig1.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-8 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig2.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig3.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig1.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig2.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-8 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig3.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

      <div onclick="location.href='{{ url('/blog-post') }}';" class="col-md-6 col-lg-4 post-wrapper">
        <div class="post-image">
          <img src="/img/articlebig1.png" alt="article">
          <div class="post-category">Technology</div>
        </div>
        <div class="post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="post-time">
          FEB 12 &#8226; 5 MIN READ
        </div>
      </div>

    </div>

  </div>
</section>

{{-- Pagination Section --}}
<section class="pagination-section">
  <div class="container pagination-wrapper">

    <div class="arrow-prev">
      <img src="/svg/arrow-prev.svg" alt="Previous Page">
      <p>PREVIOUS PAGE</p>
    </div>

    <div class="pagination-pages">
      <div class="pagination-number active-page">01</div>
      <div class="pagination-number">02</div>
      <div class="pagination-number">03</div>
      <div class="pagination-number">04</div>
      <div class="pagination-number">05</div>
      <div class="pagination-number">06</div>
    </div>

    <div class="arrow-next">
      <p>NEXT PAGE</p>
      <img src="/svg/arrow-next.svg" alt="Next Page">
    </div>

  </div>
</section>

{{-- Blog Categories Section --}}
@include('layouts.partials.blog-categories')

{{-- Get Estimate Section --}}
@include('layouts.partials.contactus')

@endsection
