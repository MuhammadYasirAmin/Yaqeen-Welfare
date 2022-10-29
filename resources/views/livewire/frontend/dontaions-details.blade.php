@section('activeDClass', 'active')
@section('activeDonationDetail', 'active')

<div class="page-title-area title-bg-three">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Donation Details</h2>
                    <ul>
                        <li>
                            <a href="{{ route('frontend.index') }}">Home</a>
                        </li>
                        <li>
                            <span>Donation Details</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="donation-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="details-item">
                    <div class="details-img">
                        <img src="{{ asset('assets/img/donation/donation-details1.jpg') }}" alt="Details">
                        <h2>Treatment help donation for Alia Jesni who is in serious case of cancer</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less</p>
                        <blockquote>
                            <i class="icofont-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do this eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veiam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea codo consequat. Duis aute irure dolor.
                        </blockquote>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.</p>
                    </div>
                    <div class="details-share">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="left">
                                    <ul>
                                        <li>
                                            <span>Share:</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" target="_blank">
                                                <i class="icofont-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" target="_blank">
                                                <i class="icofont-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" target="_blank">
                                                <i class="icofont-youtube-play"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" target="_blank">
                                                <i class="icofont-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="right">
                                    <ul>
                                        <li>
                                            <span>Tags:</span>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">#Donation</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">#Food</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">#Help</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="details-payment">
                        <h3>Select payment method</h3>
                        <form>
                            <div class="form-radio-area">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Paypal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Debit Card</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">Credit Card</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio4" value="option4">
                                    <label class="form-check-label" for="inlineRadio4">Other</label>
                                </div>
                            </div>
                            <div class="form-input-area">
                                <div class="form-group">
                                    <label>
                                        <i class="icofont-user-alt-3"></i>
                                    </label>
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <i class="icofont-user-alt-3"></i>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <i class="icofont-ui-email"></i>
                                    </label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <i class="icofont-ui-call"></i>
                                    </label>
                                    <input type="text" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <i class="icofont-dollar"></i>
                                    </label>
                                    <input type="text" class="form-control" placeholder="$100.00">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn common-btn">Donate Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget-area">
                    <div class="search widget-item">
                        <form>
                            <input type="text" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn">
                                <i class="icofont-search-1"></i>
                            </button>
                        </form>
                    </div>
                    <div class="post widget-item">
                        <h3>Popular Post</h3>
                        <div class="post-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="{{ asset('assets/img/blog/blog-details1.jpg') }}" alt="Details">
                                </li>
                                <li>
                                    <h4>
                                        <a href="javascript:void(0);">Donate for nutrition less poor people</a>
                                    </h4>
                                    <p>By - <a href="javascript:void(0);">Admin</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="post-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="{{ asset('assets/img/blog/blog-details2.jpg') }}" alt="Details">
                                </li>
                                <li>
                                    <h4>
                                        <a href="javascript:void(0);">Charity meetup in Berlin next year</a>
                                    </h4>
                                    <p>By - <a href="javascript:void(0);">Admin</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="post-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="{{ asset('assets/img/blog/blog-details3.jpg') }}" alt="Details">
                                </li>
                                <li>
                                    <h4>
                                        <a href="javascript:void(0);">Donate for poor people for food & water</a>
                                    </h4>
                                    <p>By - <a href="javascript:void(0);">Admin</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="post-inner">
                            <ul class="align-items-center">
                                <li>
                                    <img src="{{ asset('assets/img/blog/blog-details4.jpg') }}" alt="Details">
                                </li>
                                <li>
                                    <h4>
                                        <a href="javascript:void(0);">Little Sanjana joined in a charity to help
                                            people</a>
                                    </h4>
                                    <p>By - <a href="javascript:void(0);">Admin</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-right-content widget-item">
                        <h3>Archives</h3>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">January 2020</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">May 2020</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">April 2020</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">June 2020</a>
                            </li>
                        </ul>
                    </div>
                    <div class="common-right-content widget-item">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Education (10)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Medical (25)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Food & Water (14)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">National Charity (2)</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Cloth (4)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="instagram widget-item">
                        <h3>Instagram post</h3>
                        <div class="row m-0">
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="{{ asset('assets/img/blog/instagram1.jpg') }}" alt="Instagram">
                                    <a href="javascript:void(0);">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="{{ asset('assets/img/blog/instagram2.jpg') }}" alt="Instagram">
                                    <a href="javascript:void(0);">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="{{ asset('assets/img/blog/instagram3.jpg') }}" alt="Instagram">
                                    <a href="javascript:void(0);">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="{{ asset('assets/img/blog/instagram4.jpg') }}" alt="Instagram">
                                    <a href="javascript:void(0);">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="{{ asset('assets/img/blog/instagram5.jpg') }}" alt="Instagram">
                                    <a href="javascript:void(0);">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-4 col-sm-3 col-lg-4 p-0">
                                <div class="instagram-item">
                                    <img src="{{ asset('assets/img/blog/instagram6.jpg') }}" alt="Instagram">
                                    <a href="javascript:void(0);">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
