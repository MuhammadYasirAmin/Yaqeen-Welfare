@section('activeDClass', 'active')
@section('activeAllDonation', 'active')

<div class="page-title-area title-bg-two">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Donations</h2>
                    <ul>
                        <li>
                            <a href="{{ route('frontend.index') }}">Home</a>
                        </li>
                        <li>
                            <span>Donations</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="donations-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="{{ asset('assets/img/donation/donation1.jpg') }}" alt="Donation">
                        <a class="common-btn" href="{{ route('frontend.donationdetails') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="javascript:void(0);">#Medical</a>
                            <h3>
                                <a href="{{ route('frontend.donationdetails') }}">Need help for treatment</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual
                                citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill1 wow fadeInLeftBig">
                                    <span class="skill-count1">85%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,500.00</li>
                                <li>Goal: $7,000.00</li>
                            </ul>
                            <h4>Donated by <span>60 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="{{ asset('assets/img/donation/donation2.jpg') }}" alt="Donation">
                        <a class="common-btn" href="{{ route('frontend.donationdetails') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="javascript:void(0);">#Education</a>
                            <h3>
                                <a href="{{ route('frontend.donationdetails') }}">Education for poor children</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual
                                citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill2 wow fadeInLeftBig">
                                    <span class="skill-count2">95%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $6,500.00</li>
                                <li>Goal: $8,050.00</li>
                            </ul>
                            <h4>Donated by <span>50 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="{{ asset('assets/img/donation/donation3.jpg') }}" alt="Donation">
                        <a class="common-btn" href="{{ route('frontend.donationdetails') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="javascript:void(0);">#Family</a>
                            <h3>
                                <a href="{{ route('frontend.donationdetails') }}">Financial help for poor</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual
                                citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill3 wow fadeInLeftBig">
                                    <span class="skill-count3">90%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,540.00</li>
                                <li>Goal: $6,055.00</li>
                            </ul>
                            <h4>Donated by <span>40 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="{{ asset('assets/img/donation/donation4.jpg') }}" alt="Donation">
                        <a class="common-btn" href="{{ route('frontend.donationdetails') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="javascript:void(0);">#Funding</a>
                            <h3>
                                <a href="{{ route('frontend.donationdetails') }}">Funding for family</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual
                                citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill4 wow fadeInLeftBig">
                                    <span class="skill-count4">80%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,56.00</li>
                                <li>Goal: $6,85.00</li>
                            </ul>
                            <h4>Donated by <span>30 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="{{ asset('assets/img/donation/donation5.jpg') }}" alt="Donation">
                        <a class="common-btn" href="{{ route('frontend.donationdetails') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="javascript:void(0);">#Relief</a>
                            <h3>
                                <a href="{{ route('frontend.donationdetails') }}">Relief for cyclone-affected</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual
                                citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill5 wow fadeInLeftBig">
                                    <span class="skill-count5">75%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $5,5.00</li>
                                <li>Goal: $3,85.00</li>
                            </ul>
                            <h4>Donated by <span>20 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="donation-item">
                    <div class="img">
                        <img src="{{ asset('assets/img/donation/donation6.jpg') }}" alt="Donation">
                        <a class="common-btn" href="{{ route('frontend.donationdetails') }}">Donate Now</a>
                    </div>
                    <div class="inner">
                        <div class="top">
                            <a class="tags" href="javascript:void(0);">#Drought</a>
                            <h3>
                                <a href="{{ route('frontend.donationdetails') }}">Relief for drought-affected</a>
                            </h3>
                            <p>We exist for non-profits, social enterprises, activists. Lorem politicians and individual
                                citizens.</p>
                        </div>
                        <div class="bottom">
                            <div class="skill">
                                <div class="skill-bar skill6 wow fadeInLeftBig">
                                    <span class="skill-count6">70%</span>
                                </div>
                            </div>
                            <ul>
                                <li>Raised: $9,5.00</li>
                                <li>Goal: $3,84.00</li>
                            </ul>
                            <h4>Donated by <span>10 people</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-area">
            <ul>
                <li>
                    <a href="javascript:void(0);">Prev</a>
                </li>
                <li>
                    <a class="active" href="javascript:void(0);">1</a>
                </li>
                <li>
                    <a href="javascript:void(0);">2</a>
                </li>
                <li>
                    <a href="javascript:void(0);">3</a>
                </li>
                <li>
                    <a href="javascript:void(0);">Next</a>
                </li>
            </ul>
        </div>
    </div>
</section>
