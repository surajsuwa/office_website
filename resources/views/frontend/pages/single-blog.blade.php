@extends('frontend.master')

@section('content')
<main>
    <header class="page header text-contrast bg-primary">
        <div class="container">
            <h1 class="bold display-md-4 text-contrast">Single Blog </h1>
        </div>
    </header>
    <section class="section blog single">
        <div class="container">
            <div class="row gap-y">
                <div class="col-lg-8 b-r">
                    <div class="blog-post post-content pb-5">
                        <div class="blog-post-nav mb-3"><a href="blog.html"><i
                                    class="fas fa-long-arrow-alt-left"></i></a> <a href="blog.html"><span
                                    class="badge badge-pill badge-light">Category</span></a></div>
                        <div class="media"><img class="me-3 rounded-circle icon-lg"
                                src="assets/images/author/author.jpg" alt="">
                            <div class="media-body small"><span class="author">by <a href="#">Jane Doe</a></span> <span
                                    class="d-block text-secondary">May 5th, 2021</span></div>
                        </div>
                        <hr class="mb-5">
                        <p class="lead text-secondary italic mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Dicta error illo ipsa iste neque, nisi nostrum porro quisquam unde veritatis! Aut
                            error est fugiat laboriosam quam qui quia rem repudiandae!</p>
                        <figure class="shadow rounded mb-5"><img class="img-responsive rounded"
                                src="https://picsum.photos/1200/620" alt=""></figure>
                        <p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipisicing elit</a>. Cumque
                            exercitationem ipsam iusto non nostrum ratione sequi tempore unde? Asperiores aspernatur
                            debitis eius esse iure laudantium numquam optio perspiciatis provident vitae. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Earum incidunt ipsum, modi mollitia nobis odio
                            rem ullam voluptate voluptatem? <a href="#">Aut distinctio error illum numquam</a>
                            perferendis quos saepe similique temporibus velit!</p>
                        <blockquote class="blog-quote text-secondary d-flex mx-auto"><i
                                class="quote fas fa-quote-left"></i>
                            <p>Dashcore is great for anyone who is looking for a great startup template.</p>
                        </blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, perspiciatis, ullam!
                            Alias aperiam aut consequuntur corporis debitis distinctio harum in ipsum labore nesciunt
                            odit, optio porro provident, qui rem sint.</p>
                        <h4 class="bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti dignissimos eaque
                            id itaque minus modi molestias, odit similique tempora. Architecto aut consequuntur ex
                            fugiat quidem quos totam ullam veniam?</p>
                        <p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipisicing elit</a>. Asperiores beatae
                            corporis deserunt eaque fugiat iure labore libero magni mollitia, quaerat rem rerum
                            voluptate. Asperiores expedita modi nam sunt tempora veniam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur atque cum ducimus
                            eligendi ipsam iste, perspiciatis, quas rem repudiandae, <a href="#">rerum suscipit
                                tenetur!</a> Cum doloremque impedit, iusto nihil ratione repellat!</p>
                    </div>
                    <div class="post-author py-5 b-t b-2x">
                        <div class="d-flex align-items-center"><img class="d-flex me-3 rounded-circle shadow"
                                src="assets/images/author/author.jpg" alt="...">
                            <div class="flex-fill">
                                <h5 class="my-0 bold">Jane Doe</h5><span class="text-secondary">VP Sales, Dashcore
                                    Inc.</span>
                                <hr>
                                <p class="small text-secondary mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="post-details py-5 b-t">
                        <ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
                            <li class="me-4"><i class="fas fa-tag text-secondary"></i></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-secondary me-2">app</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-secondary me-2">development</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-secondary me-2">software</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-secondary">startup</a></li>
                        </ul>
                        <ul class="list-unstyled d-flex flex-wrap flex-row align-items-center">
                            <li class="me-4"><i class="fas fa-bookmark text-secondary"></i></li>
                            <li><a href="#" class="btn btn-circle btn-sm btn-secondary me-2"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="btn btn-circle btn-sm btn-secondary me-2"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li><a href="#" class="btn btn-circle btn-sm btn-secondary"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="post-comments b-t p-4">
                        <form action="#" method="post" class="cozy" novalidate="novalidate">
                            <h3 class="mb-4">Leave a comment</h3>
                            <div class="row">
                                <div class="mb-3 col-12 col-md-6"><input class="form-control" type="text"
                                        placeholder="Name"></div>
                                <div class="mb-3 col-12 col-md-6"><input class="form-control" type="text"
                                        placeholder="Email"></div>
                            </div>
                            <div class="mb-3"><textarea class="form-control" placeholder="Your comment"
                                    rows="4"></textarea></div><button class="btn btn-primary" type="submit">Post your
                                comment</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4 class="mb-3 bold">Search</h4>
                    <form class="form search-box" novalidate="novalidate">
                        <div class="input-group"><input type="email" name="Search[q]"
                                class="form-control rounded-circle-left shadow-none" placeholder="Search form..."
                                required=""> <button class="btn rounded-circle-right btn-contrast border-input"
                                type="submit" data-loading-text="Searching ..."><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    <h4 class="mt-5 mb-3 bold">Latest Posts</h4>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center"><a href="blog-post.html" class="d-flex me-3 py-2"><img
                                    class="rounded-circle icon-xl shadow"
                                    src="https://picsum.photos/100/100/?random&amp;gravity=north" alt="..."></a>
                            <div class="flex-fill">
                                <h6 class="semi-bold mt-0 mb-1"><a href="blog-post.html" class="text-dark">New post</a>
                                </h6><span class="small text-muted"><i class="fas fa-calendar"></i> May 21 2021</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-center"><a href="blog-post.html" class="d-flex me-3 py-2"><img
                                    class="rounded-circle icon-xl shadow"
                                    src="https://picsum.photos/100/100/?random&amp;gravity=south" alt="..."></a>
                            <div class="flex-fill">
                                <h6 class="semi-bold mt-0 mb-1"><a href="blog-post.html" class="text-dark">Improved
                                        theme</a></h6><span class="small text-muted"><i class="fas fa-calendar"></i> May
                                    21 2021</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-center"><a href="blog-post.html" class="d-flex me-3 py-2"><img
                                    class="rounded-circle icon-xl shadow"
                                    src="https://picsum.photos/100/100/?random&amp;gravity=east" alt="..."></a>
                            <div class="flex-fill">
                                <h6 class="semi-bold mt-0 mb-1"><a href="blog-post.html" class="text-dark">2021 best
                                        template</a></h6><span class="small text-muted"><i class="fas fa-calendar"></i>
                                    May 21 2021</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-center"><a href="blog-post.html" class="d-flex me-3 py-2"><img
                                    class="rounded-circle icon-xl shadow"
                                    src="https://picsum.photos/100/100/?random&amp;gravity=west" alt="..."></a>
                            <div class="flex-fill">
                                <h6 class="semi-bold mt-0 mb-1"><a href="blog-post.html" class="text-dark">Dashcore now
                                        on Themeforest</a></h6><span class="small text-muted"><i
                                        class="fas fa-calendar"></i> May 21 2021</span>
                            </div>
                        </li>
                    </ul>
                    <h4 class="mt-5 mb-3 bold">Archives</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">September <span class="badge badge-light badge-pill">76</span></a></li>
                        <li><a href="#">August <span class="badge badge-light badge-pill">49</span></a></li>
                        <li><a href="#">July <span class="badge badge-light badge-pill">24</span></a></li>
                        <li><a href="#">June <span class="badge badge-light badge-pill">59</span></a></li>
                        <li><a href="#">May <span class="badge badge-light badge-pill">36</span></a></li>
                        <li><a href="#">April <span class="badge badge-light badge-pill">67</span></a></li>
                    </ul>
                    <h4 class="mt-4 mb-3 bold">Tags</h4>
                    <div class="tags">
                        <ul class="list-unstyled d-flex flex-wrap flex-row">
                            <li><a href="#" class="badge rounded-pill badge-outline-dark me-2">app</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-dark me-2">development</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-dark me-2">software</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-dark me-2">awesome</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-dark me-2">startup</a></li>
                            <li><a href="#" class="badge rounded-pill badge-outline-dark">business</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
