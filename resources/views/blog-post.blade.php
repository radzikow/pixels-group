@extends('layouts.app')

@section('content')

{{-- Blog Post Section --}}
<section class="blog-post-section">
  <div class="container blog-post-wrapper">

    <div class="row blog-post-header-wrapper">
      <div class="blog-post-image-wrapper">
        <div class="blog-post-image">
          {{-- background image --}}
        </div>
      </div>
      <div class="blog-post-info-wrapper">
        <div class="blog-post-category">Technology</div>
        <div class="blog-post-title">Lorem ipsum dolor sit amet dolore magna</div>
        <div class="blog-post-time">
          FEB 12&nbsp; &#8226; &nbsp;5 MIN READ
        </div>
      </div>
    </div>

    <div class="row blog-post-content-wrapper">
      <div class="col-lg-9 blog-post-content">
        {{-- Here goes article --}}

        <p>Two years ago I attended Wroclove.rb, my first big conference. I was thrilled: so many interesting topics,
          patterns, designs, methodologies, libraries – a massive amount of knowledge. The most interesting thing was
          that I could immediately use them in my daily work. This is what I like in language or framework-specific
          conferences.<br>

          The concepts that stole my heart at that time were DDD (Domain Driven Design) and EDA (Event Driven
          Architecture).
        </p>

        <h2>What is DDD</h2>

        <p>In general, DDD is a methodology for creating complex software from a technical perspective.<br>

          DDD gives us a bunch of building blocks for correct implementation of domain business logic. It handles the
          project also from a business perspective (strategic domain driven design). This approach puts stress on
          connecting these two worlds through some particular rules:
        </p>

        <ul>
          <li>Focus on understanding the core domain and domain logic by all parties involved.
          </li>
          <li> Designing a model around the domain.
          </li>
          <li> Ubiquitous Language: a common language used by all team members about the domain and interactions between
            software and the team.
          </li>
          <li> DDD is well suited with some architectural patterns like CQRS, Event Driven Architecture, Event sourcing,
            etc. but they are not required to use DDD.
          </li>
        </ul>

        <h2>How to start using DDD in a new project</h2>

        <p>Luckily, after the conference, we started a new project at Briisk and I knew I’d want to use some of the DDD
          concepts I heard of at <a href="">Wroclove.rb</a>.
        </p>

        <p>The problem was that I only listened to a few presentations and that was it. No one at the company had any
          experience with DDD before. I had to convince my tech lead that this was the only way to go.<br>

          I spent my evenings reading blog posts, watching presentations on YouTube, reading about authorisation or
          persisting data.
        </p>

        <p>These are some of the materials that I explored:
        </p>

        <h3>Command and Query Responsibility Segregation (CQRS)
        </h3>

        <p>The general idea of CQRS is that every method in the system should be a command which executes an action
          (mutates the data) or a query which returns some particular date to the caller (query data).<br>

          It shouldn’t perform both at the same time. When you think of it, it’s natural that asking a question
          shouldn’t change the answer.
        </p>

        <h3>Event Driven Architecture (EDA)
        </h3>

        <p>In simple words, EDA is a software architecture build with communicating over events. An event is defined as
          a significant change in a state. So they are actually mutating the state and this is where the fit with CQRS
          <a href="">pattern and the command</a> object. For example:
        </p>

        <blockquote>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores quidem odit incidunt voluptate iste similique ipsum consectetur maxime labore saepe?
        </blockquote>

        <h2>Summary</h2>

        <p>I think the DDD approach is a very natural way of understanding how the app works.
        </p>

        <h4>Event Driven Architecture</h4>

        <p> It is like a diagram that can be constantly updated after an event storming session. In a common relational
          database and traditional architecture based on resources, the development is easy until the architecture is
          small. But when it becomes bigger, it’s more and more difficult to maintain.
        </p>

        <p> Maybe the most challenging thing that comes with the growth of the application is naming the events.
        </p>

        <p> When it comes to the event store and event driven architecture, the concepts are not very niche or unused in
          the community.
        </p>

      </div>
    </div>

  </div>
</section>

{{-- Related Posts Section --}}
<section class="related-posts-section">
  <div class="container related-posts-wrapper">

    <div class="row related-posts-title-wrapper">
      <div class="col text-center title-wrapper">
        <h2 class="section-title">Related posts</h2>
      </div>
    </div>

    <div class="row related-posts-content-wrapper">

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

    </div>

  </div>
</section>

{{-- Blog Categories Section --}}
@include('layouts.partials.blog-categories')

{{-- Contact Us Section --}}
@include('layouts.partials.contactus')

@endsection
