@extends('frontend.layouts')
@section('title', 'News')
@section('content')
@section('title-page', 'News')
@include('frontend.components.page-header')

    <!-- START BLOG -->
    <section class="blog-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    @foreach ($blogs as $blog)
                    <div class="post-slide-blog">
                        <div class="blog-img">
                            <img src="{{ asset($blog->path) }}" class="img-fluid" alt="{{ $blog->title }}" />
                            <a href="{{ route('detail.blog', $blog->id) }}">{{ $blog->created_at->format('d-m-Y') }}
                            </a>
                        </div>
                        <span><i class="fa-regular fa-user"></i> By admin</span>
                        <h2><a href="{{ route('detail.blog', $blog->id) }}">     {{ $blog->title }}</a></h2>
                        <p>{{ $blog->overview }}</p>
                        <a href="{{ route('detail.blog', $blog->id) }}" class="srex-btn srex-btn--outline">
                            Baca Selengkapnya<i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    @endforeach
                    <!--- START PAGINATION -->
                    <div id="pagination">
                        <nav>
                            {{ $blogs->links('pagination::bootstrap-4') }} <!-- Tampilkan navigasi pagination -->
                        </nav>
                    </div><!--- END PAGINATION -->
                </div><!-- END COL-->
                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <div class="blog_search">
                        <h4 class="blog_sidebar_title">Search</h4>
                        <form action="{{ route('blog.search') }}" method="GET">
                            <input
                                type="text"
                                name="query"
                                class="form-control"
                                placeholder="Type & Press Enter"
                                value="{{ request('query') }}"
                                onkeypress="if(event.key === 'Enter') this.form.submit();"
                            >
                        </form>
                    </div>
                    <div class="categories">
                        <h4 class="blog_sidebar_title">. Category</h4>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="{{ route('blog.category', $category->id) }}"><i class="fa-solid fa-arrow-down"></i> {{ $category->category }}
                            </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="latest_blog wow fadeInRight">
                        <h4 class="blog_sidebar_title">. Blog Terbaru</h4>
                        @foreach ($blogs as $blog)
                        <div class="single_latest_blog">
                            <span><i class="fa-regular fa-calendar-days"></i> {{ $blog->created_at->format('d-m-Y') }}</span>
                            <a href="{{ route('detail.blog', $blog->id) }}">{{ $blog->title }}</a>
                        </div>
                        @endforeach
                    </div>
                </div><!--- END COL -->
            </div><!-- END ROW-->
        </div><!-- END CONTAINER-->
    </section>
    <!-- END BLOG -->
@endsection
