@extends('front-end.layouts.app')

@section('main-section')


        <!--=====================================-->
        <!--=      Page Start Banner Start      =-->
        <!--=====================================-->
        <section class="page-start-banner">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('blog.detail') }}" class="active">Blog DETAIL</a></li>
                    </ul>
                </div>
                <div class="heading">
                    <h2>BLOG DETAIL</h2>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=      Blog Detail Area Start    =-->
        <!--=====================================-->
        <section class="blog-detail bg sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="title">Beauty is natural</h2>
                        <div class="tags d-flex">
                            <h6 class="tag-title">Tags:</h6>
                            <div class="blog-detail-tags">
                                <ul class="list-unstyled">
                                    <li><a class="active" href="{{ route('blogs') }}">BEAUTY</a></li>
                                    <li><a href="{{ route('blogs') }}">MAKE UP</a></li>
                                    <li><a href="{{ route('blogs') }}">MASSAGE</a></li>
                                    <li><a href="{{ route('blogs') }}">HAIR CUT</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="author d-flex">
                            <h6>AUTHOR:</h6>
                            <h6 class="auther-name">JULIA ADAM</h6>
                        </div>
                        <p class="content">
                            Stylen Salon provides a variety of beauty services that will help you feel and appear your best. Our services range from hair care products and styling to makeup. Cursus iaculis ornare nunc aliquam suspendisse netus orci est volutpat. Nibh neque curabitur sapien tortor magna facilisi nisl velit nisl. Diam in integer pellentesque ut velit molestie nisi lectus nunc. Eu diam enim egestas tempus consequat.
                            <br> <br>
                            Vulputate pharetra purus ante netus consectetur est. Eget parturient mi vel aliquam pellentesque turpis sapien. Vel magna volutpat phasellus mi lectus vulputate enim. Arcu sit odio et mauris eu porttitor euismod mi volutpat. In aliquet leo suscipit ultrices egestas pharetra nisl. Interdum massa eros facilisi facilisi dictum mauris montes. Neque fringilla sed ante libero.
                            <br> <br>
                            Diam leo arcu vel tortor venenatis fermentum sit. Volutpat volutpat adipiscing dignissim et tempus nibh vitae.
                        </p>
                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-0 offset-lg-3">
                        <img src="{{ asset('media/blogs/b-1.png') }}" alt="">
                    </div>
                </div>
                <h3 class="quote">
                    Aliquam pellentesque at congue eget nullam accumsan. At egestas fusce suspen disse gravida nam nunc. Sit viverra et neque eleifend pellentesque mattis viverra egestas vulputate. Pulvinar lectus non sed interdum turpis
                </h3>
                <p class="content">
                    Aliquam pellentesque at congue eget nullam accumsan. At egestas fusce suspendisse gravida nam nunc. Sit viverra et neque eleifend pellentesque mattis viverra egestas vulputate. Pulvinar lectus non sed interdum turpis. A turpis lectus tortor mollis dolor dui nibh euismod ultricies. Augue amet dui quam congue amet tortor turpis lacinia pulvinar. Dolor consectetur venenatis potenti potenti. Sem cursus turpis justo imperdiet enim erat. In dignissim orci amet netus ut in elit.
                    <br> <br>
                    Vulputate pharetra purus ante netus consectetur est. Eget parturient mi vel aliquam pellentesque turpis sapien. Vel magna volutpat phasellus mi lectus vulputate enim. Arcu sit odio et mauris eu porttitor euismod mi volutpat. In mi arcu donec aliquam tincidunt risus odio eros. In aliquet leo suscipit ultrices egestas pharetra nisl. Interdum massa eros facilisi facilisi dictum mauris montes. Neque fringilla sed ante libero.
                    <br> <br>
                </p>
                <div class="row">
                    <div class="col-xl-7 col-lg-8 offset-xl-0 offset-lg-2 mb-xl-0 mb-3">
                        <img src="{{ asset('media/blogs/blog-detail-2.png') }}" alt="">
                    </div>
                    <div class="col-xl-5">
                        <p class="content">
                            Aliquam pellentesque at congue eget nullam accumsan. At egestas fusce suspendisse gravida nam nunc. Sit viverra et neque eleifend pellentesque mattis viverra egestas vulputate. Pulvinar lectus non sed interdum turpis.
                            <br> <br>
                            A turpis lectus tortor mollis dolor dui nibh euismod ultricies. Augue amet dui quam congue amet tortor turpis lacinia pulvinar. Dolor consectetur venenatis potenti potenti. Sem cursus turpis justo imperdiet enim erat. In dignissim orci amet netus ut in elit.
                            <br> <br>
                            Vulputate pharetra purus ante netus consectetur est. Eget parturient mi vel aliquam pellentesque turpis sapien. Vel magna volutpat phasellus mi lectus vulputate enim. Arcu sit odio et mauris eu porttitor euismod mi volutpat.
                        </p>
                    </div>
                </div>
                <p class="content mt-4">
                    Aliquam pellentesque at congue eget nullam accumsan. At egestas fusce suspendisse gravida nam nunc. Sit viverra et neque eleifend pellentesque mattis viverra egestas vulputate. Pulvinar lectus non sed interdum turpis. A turpis lectus tortor mollis dolor dui nibh euismod ultricies. Augue amet dui quam congue amet tortor turpis lacinia pulvinar. Dolor consectetur venenatis potenti potenti. Sem cursus turpis justo imperdiet enim erat. In dignissim orci amet netus ut in elit. Vulputate pharetra purus ante netus consectetur est. Eget parturient mi vel aliquam pellentesque turpis sapien. Vel magna volutpat phasellus mi lectus vulputate enim. Arcu sit odio et mauris eu porttitor euismod mi volutpat. In mi arcu donec aliquam tincidunt risus odio eros.
                    <br> <br>
                    Vulputate pharetra purus ante netus consectetur est. Eget parturient mi vel aliquam pellentesque turpis sapien. Vel magna volutpat phasellus mi lectus vulputate enim. Arcu sit odio et mauris eu porttitor euismod mi volutpat. In mi arcu donec aliquam tincidunt risus odio eros. In aliquet leo suscipit ultrices egestas pharetra nisl. Interdum massa eros facilisi facilisi dictum mauris montes. Neque fringilla sed ante libero.
                    <br> <br>
                </p>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-12">
                        <p class="content">
                            Aliquam pellentesque at congue eget nullam accumsan. At egestas fusce suspendisse gravida nam nunc. Sit viverra et neque eleifend pellentesque mattis viverra egestas vulputate. Pulvinar lectus non sed interdum turpis.
                            <br> <br>
                            A turpis lectus tortor mollis dolor dui nibh euismod ultricies. Augue amet dui quam congue amet tortor turpis lacinia pulvinar. Dolor consectetur venenatis potenti potenti. Sem cursus turpis justo imperdiet enim erat. In dignissim orci amet netus ut in elit.
                            <br> <br>
                            Vulputate pharetra purus ante netus consectetur est. Eget parturient mi vel aliquam pellentesque turpis sapien. Vel magna volutpat phasellus mi lectus vulputate enim. Arcu sit odio et mauris eu porttitor euismod mi volutpat.
                        </p>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-12 mb-xl-0 mb-3">
                        <img src="{{ asset('media/blogs/blog-detail-3.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=     Related Blogs Area Start      =-->
        <!--=====================================-->
        <section class="blogs sec-mar">
            <div class="container">
                <div class="heading">
                    <h2>RELATED BLOGS</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card mb-xl-0 mb-4">
                            <div class="img-box">
                                <img src="{{ asset('media/blogs/b-1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">Beauty is natural</a>
                                <p>Stylen Salon provides a variety of beauty services that will help you feel and
                                    appear your best. Our services range from hair care products and styling to
                                    makeup.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-1.png') }}" alt="">
                                    <h6 class="name">JULIA ADAM</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card mb-xl-0 mb-4">
                            <div class="img-box">
                                <img src="{{ asset('media/blogs/b-2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="{{ route('blog.detail', ['id' => 2]) }}" class="title">Skin care routine</a>
                                <p>Stylen Salon provides a variety of beauty services that will help you feel and
                                    appear your best. Our services range from hair care products and styling to
                                    makeup.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-2.png') }}" alt="">
                                    <h6 class="name">ALAN ZOE</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 offset-xl-0 offset-lg-3 offset-md-3">
                        <div class="blog-card">
                            <div class="img-box">
                                <img src="{{ asset('media/blogs/b-3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="{{ route('blog.detail') }}" class="title">MAKE UP IS BEAUTY</a>
                                <p>Stylen Salon provides a variety of beauty services that will help you feel and
                                    appear your best. Our services range from hair care products and styling to
                                    makeup.</p>
                                <div class="author">
                                    <img src="{{ asset('media/blogs/user-3.png') }}" alt="">
                                    <h6 class="name">MINA MOON</h6>
                                    <div class="raed-btn text-end">
                                        <a href="{{ route('blog.detail') }}" class="stylen-btn btn-sec">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
