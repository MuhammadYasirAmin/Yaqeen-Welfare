@section('activeContact', 'active')
<div class="page-title-area title-bg-eight">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-item">
                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>Contact</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-info-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-location-pin"></i>
                    <span>Location:</span>
                    <a href="javascript:void(0);">C.2Block C OGDC Society Mustafabad Malir Karachi</a>
                    <!--<a href="javascript:void(0);">6A, North street, Jordan</a>-->
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-ui-call"></i>
                    <span>Phone:</span>
                    <a href="tel:+923336838157">(+92) 333 6838157</a>
                    <a href="tel:+923003516394">(+92) 300 3516394</a>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="contact-info">
                    <i class="icofont-ui-email"></i>
                    <span>Email:</span>
                    <a href="/cdn-cgi/l/email-protection#137b767f7f7c53757a7d777c3d707c7e"><span class="__cf_email__"
                            data-cfemail="7d15181111123d1b14131912531e1210">info@yaqeenwelfare.org</span></a>
                    <a href="/cdn-cgi/l/email-protection#bcd5d2dad3fcdad5d2d8d392dfd3d1"><span class="__cf_email__"
                            data-cfemail="2c45424a436c4a45424843024f4341">ask@yaqeenwelfare.org</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-area pb-70">
    <div class="container">
        <form id="contactForm">
            <h2>Let's talk...!</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, iusto possimus doloremque amet vitae
                facere blanditiis nulla explicabo obcaecati nihil ipsam deleniti nesciunt illo, non iure</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-user-alt-3"></i>
                        </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                            required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-ui-email"></i>
                        </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                            required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-ui-call"></i>
                        </label>
                        <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required
                            data-error="Please enter your number" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>
                            <i class="icofont-notepad"></i>
                        </label>
                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                            placeholder="Subject" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>
                            <i class="icofont-comment"></i>
                        </label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message"
                            required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <div class="form-check agree-label">
                            <input name="gridCheck" value="I agree to the terms and privacy policy."
                                class="form-check-input" type="checkbox" id="gridCheck" required>
                            <label class="form-check-label" for="gridCheck">
                                Accept <a href="terms-condition.html">Terms & Conditions</a> And <a
                                    href="privacy-policy.html">Privacy Policy.</a>
                            </label>
                            <div class="help-block with-errors gridCheck-error"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn common-btn">
                        Send Message
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="map-area">
    <iframe id="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779285!2d62.17507173408571!3d23.728204508550363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1603558902714!5m2!1sen!2sbd"
        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
