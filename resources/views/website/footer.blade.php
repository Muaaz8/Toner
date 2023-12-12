
        <!-- =========== FOOTER STARTS ==============  -->
        <footer class="footer-section">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget company-intro-widget">
                                <a href="index.html" class="site-logo">
                                    <img src="https://jew.zishstudio.com/wp-content/uploads/2017/11/logo.png"
                                        alt="logo">
                                </a>
                                <p>57 hillhurst cres.</p>
                                <ul class="company-footer-contact-list">
                                    <li></i>Courtice</li>
                                    <li></i>Ontario</li>
                                    <li></i>L1E2A4</li>
                                </ul>
                                <p>(+01)-800-3456-88</p>
                            </div>
                        </div>
                        <!-- widget end -->
                        @php
                            $heads = App\Models\Tbl_Content::get();
                            $perLine = round(count($heads)/2);
                        @endphp
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget course-links-widget">
                                <ul class="courses-link-list">
                                    @foreach ($heads as $key => $item)
                                        @if($perLine > $key)
                                            <li><a href="{{ route('content_pages',['name'=>$item->slug]) }}">{{ $item->name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- widget end -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget latest-news-widget">
                                <ul class="courses-link-list">
                                @foreach ($heads as $key => $item)
                                    @if($perLine <= $key)
                                        <li><a href="{{ route('content_pages',['name'=>$item->slug]) }}">{{ $item->name }}</a></li>
                                    @endif
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- widget end -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget newsletter-widget">
                                <h5 class="widget-title">Newsletter</h5>
                                <div class="footer-newsletter">
                                    <p>Get instant updates about our new products and special promos!</p>
                                    <form class="news-letter-form">
                                        <input type="email" name="news-email" id="news-email"
                                            placeholder="Enter your email here">
                                        <input type="submit" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                        </div><!-- widget end -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 text-sm-left">
                            <span class="copy-right-text">© 2023 – All Right reserved!</span>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <ul class="terms-privacy d-flex justify-content-sm-end justify-content-center flex-wrap">
                                <li><a href="{{ route('content_pages',['name'=>'privacy-policy']) }} ">Privacy Policy</a></li>
                                <li><a href="{{ route('content_pages',['name'=>'terms-and-conditions']) }}">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- footer-bottom end -->
        </footer>

        <!-- =========== FOOTER ENDS ==============  -->
