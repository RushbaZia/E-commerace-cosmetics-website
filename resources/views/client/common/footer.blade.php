<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href=""><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href=""><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href=""><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Blog</h2>
                    @foreach($recentPosts as $post)
                    <div class="block-21 mb-4 d-flex">
                        <a href="{{ route('blog.show', $post->id) }}" class="blog-img mr-4" style="background-image: url('{{ asset('storage/' . $post->image) }}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="{{ route('blog.show', $post->id) }}">{{ \Illuminate\Support\Str::limit($post->title, 50) }}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> {{ $post->created_at->format('d M, Y') }}</a></div>
                                <div><a href="#"><span class="icon-person"></span> {{ $post->author }}</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Question?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Auto Centre 108-Lytton Road, Lahore,Pakistan</span></li>
                            <li><a><span class="icon icon-phone"></span><span class="text">+92 328138185</span></a></li>
                            <li><a><span class="icon icon-envelope"></span><span class="text">pretty@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> | All rights reserved </a>
                </p>
            </div>
        </div>
    </div>
</footer>