@extends('client.common.layout')

@section('hero')

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <div class="icon">
                    <a href="index.html" class="logo">
                        <span class="flaticon-flower"></span>
                        <h1>Pretty</h1>
                    </a>
                </div>
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Details</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Details</span></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<!-- SINGLE-BLOG SECTION -->
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ftco-animate">
                @foreach($posts as $post)
                <img src="/storage/{{$post->image}}" class="img-fluid thumbnail-image">
                <h2 class="mb-3">{{$post->title}}</h2>
                <div class="meta d-flex pb-3">
                    <a href="#" class="pe-4"><span class="icon-calendar text-danger"></span> {{$post->created_at->format('M m, Y')}}</a> |
                    <a href="#" class="pe-4"><span class="icon-person text-danger ps-3"></span> {{$post->author}}</a> |
                    <a href="#"><span class="icon-chat text-danger ps-3"></span> {{count($comment)}}</a>
                </div>
                <div>
                    <p>
                        {{$post->content}}
                    </p>
                    <p>
                    <h4>Treaments</h4>
                    {{$post->content}}
                    </p>
                    <p>
                    <h4>MakeOver</h4>
                    {{$post->content}}
                    </p>
                    <p>
                    <h4>Cosmetics</h4>
                    {{$post->content}}
                    </p>
                    <p>
                    <h4>HairCare</h4>
                    {{$post->content}}
                    </p>
                    <p>
                    <h4>SkinCare</h4>
                    {{$post->content}}
                    </p>
                </div>
                @endforeach
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">beauty</a>
                        <a href="#" class="tag-cloud-link">cosmetics</a>
                        <a href="#" class="tag-cloud-link">product</a>
                        <a href="#" class="tag-cloud-link">care</a>
                    </div>
                </div>

                <div class="about-author d-flex p-5 bg-light">
                    @foreach($posts as $post)
                    <div class="desc align-self-md-center">
                        <h3>{{$post->author}}</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                    @endforeach
                </div>


                <div class="pt-5 mt-5">
                    <h3 class="mb-5">{{count($comment)}} Comments</h3>
                    <ul class="comment-list">
                        @foreach($comment as $comment)
                        <li class="comment">
                            <div class="comment-body">
                                <h3>{{$comment->name}}</h3>
                                <div class="meta"><span class="icon-calendar"></span> {{$comment->created_at->format('M m, Y')}}</div>
                                <p><span class="icon-chat "></span> {{$comment->message}}</p>
                                <p><a href="#" class="reply">Reply</a></p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form method="POST" action="{{route('comment.store')}}" class="p-5 bg-light">
                            @csrf
                            <div class="col-md-4">
                                <input type="hidden" name="post_id" value="{{ $post->id }}"><br>
                            </div>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" cols="30" rows="10" class="form-control" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">Post Comment</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div> <!-- .col-md-8 -->
            <div class="col-md-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        @foreach($categories as $category)
                        <li class="d-flex"> <img src="/storage/{{$category->image}}" class="img-fluid " height="70px" width="70px"><a href="#">{{$category->name}}</a></li>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blogs</h3>
                    @foreach($posts as $post)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4"><img src="/storage/{{$post->image}}" class="img-fluid thumbnail-image"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">{{$post->title}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> {{$post->created_at->format('M m, Y')}}</a></div>
                                <div><a href="#"><span class="icon-person"></span> {{$post->author}}</a></div>
                                <div><a href="#"><span class="icon-chat"></span> </a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        @foreach($tag as $tag)
                        <a href="#" class="tag-cloud-link">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Paragraph</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection