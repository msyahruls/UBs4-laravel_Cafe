            <section class="features section" style="padding: 50px 100px" id="productTable">
                <h2 class="section-title mt-0 text-center">Product Table</h2>
                <div class="table-responsive" style="margin-top: 15px">
                    <p class="hero-cta is-revealing"><a class="button button-primary button-shadow" href="#">Add</a></p>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="4%">No</th>
                                <th>Name</th>
                                <th width="24%">Category</th>
                                <th width="12%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($items as $value)
                                <tr>
                                    <td width="4%"><?php echo $no++; ?></td>
                                    <td>{{ $value->name }}</td>
                                    <td width="24%">{{ $value->category }}</td>
                                        <td width="12%">
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-info view_modal color" id="view_data" value="{{ $value->id }}" >👁</button>
                                                <button class="btn btn-sm btn-warning edit_modal color" id="edit_data" value="{{ $value->id }}" >✏</button>
                                                <button class="btn btn-sm btn-danger delete color" value="{{ $value->id }}">🗑</button>
                                            </div>
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- <section class="features section text-center">
                <div class="section-square"></div>
                <div class="container">
                    <div class="features-inner section-inner">
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-1-a">
                                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#007DFF" offset="100%"/>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-1-b">
                                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M8 0h24v24a8 8 0 0 1-8 8H0V8a8 8 0 0 1 8-8z" fill="url(#feature-1-a)"/>
                                                <path d="M48 16v24a8 8 0 0 1-8 8H16c0-17.673 14.327-32 32-32z" fill="url(#feature-1-b)"/>
                                            </g>
                                        </svg>
                                    </div>
                                    <h4 class="feature-title h3-mobile">Feature</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-2-a">
                                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#007DFF" offset="100%"/>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-2-b">
                                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M0 0h32v7c0 13.807-11.193 25-25 25H0V0z" fill="url(#feature-2-a)"/>
                                                <path d="M48 16v7c0 13.807-11.193 25-25 25h-7c0-17.673 14.327-32 32-32z" fill="url(#feature-2-b)" transform="matrix(1 0 0 -1 0 64)"/>
                                            </g>
                                        </svg>

                                    </div>
                                    <h4 class="feature-title h3-mobile">Feature</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-3-a">
                                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#007DFF" offset="100%"/>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-3-b">
                                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <circle fill="url(#feature-3-a)" cx="16" cy="16" r="16"/>
                                                <path d="M16 16c17.673 0 32 14.327 32 32H16V16z" fill="url(#feature-3-b)"/>
                                            </g>
                                        </svg>

                                    </div>
                                    <h4 class="feature-title h3-mobile">Feature</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <svg width="48" height="48" xmlns="http://www.w3.org/2000/svg">
                                            <defs>
                                                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="feature-4-a">
                                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                                </linearGradient>
                                                <linearGradient x1="50%" y1="100%" x2="50%" y2="0%" id="feature-4-b">
                                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                                    <stop stop-color="#007DFF" offset="100%"/>
                                                </linearGradient>
                                            </defs>
                                            <g fill="none" fill-rule="evenodd">
                                                <path d="M32 16h16v16c0 8.837-7.163 16-16 16H16V32c0-8.837 7.163-16 16-16z" fill="url(#feature-4-a)"/>
                                                <path d="M16 0h16v16c0 8.837-7.163 16-16 16H0V16C0 7.163 7.163 0 16 0z" fill="url(#feature-4-b)"/>
                                            </g>
                                        </svg>

                                    </div>
                                    <h4 class="feature-title h3-mobile">Feature</h4>
                                    <p class="text-sm">A pseudo-Latin text used in web design, layout, and printing in place of English to emphasise design elements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

<!--             <section class="pricing section">
                <div class="section-square"></div>
                <div class="container">
                    <div class="pricing-inner section-inner has-top-divider">
                        <h2 class="section-title mt-0 text-center">Pricing</h2>
                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header is-revealing">
                                            <div class="pricing-table-title mt-12 mb-8">Starter</div>
                                            <div class="pricing-table-price mb-32 pb-24"><span class="pricing-table-price-currency h4">$</span><span class="pricing-table-price-amount h2">27</span>/mo</div>
                                        </div>
                                        <ul class="pricing-table-features list-reset text-xs mt-24 mb-56">
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta is-revealing">
                                        <a class="button button-primary button-shadow button-block" href="#">Get early access</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-table">
                                <div class="pricing-table-inner">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header is-revealing">
                                            <div class="pricing-table-title mt-12 mb-8">Professional</div>
                                            <div class="pricing-table-price mb-32 pb-24"><span class="pricing-table-price-currency h4">$</span><span class="pricing-table-price-amount h2">97</span>/mo</div>
                                        </div>
                                        <ul class="pricing-table-features list-reset text-xs mt-24 mb-56">
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta is-revealing">
                                        <a class="button button-primary button-shadow button-block" href="#">Get early access</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-table">
                                <div class="pricing-table-inner">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header is-revealing">
                                            <div class="pricing-table-title mt-12 mb-8">Business</div>
                                            <div class="pricing-table-price mb-32 pb-24"><span class="pricing-table-price-currency h4">$</span><span class="pricing-table-price-amount h2">147</span>/mo</div>
                                        </div>
                                        <ul class="pricing-table-features list-reset text-xs mt-24 mb-56">
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                            <li class="is-revealing">
                                                <span class="list-icon">
                                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill="#5FFAD0" fill-rule="nonzero" d="M5.6 8.4L1.6 6 0 7.6 5.6 14 16 3.6 14.4 2z"/>
                                                    </svg>
                                                </span>
                                                <span>Lorem ipsum is common text </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta is-revealing">
                                        <a class="button button-primary button-shadow button-block" href="#">Get early access</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        </main>

        <footer class="site-footer text-light">
            <div class="container">
                <div class="site-footer-inner has-top-divider">
                    <div class="brand footer-brand">
                        <a href="#">
                            <svg width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg">
                                <title>Agnes</title>
                                <defs>
                                    <linearGradient x1="0%" y1="100%" y2="0%" id="logo-footer-a">
                                        <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#007DFF" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="logo-footer-b">
                                        <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#FF4F7A" offset="100%"/>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <rect fill="url(#logo-footer-a)" width="32" height="32" rx="16"/>
                                    <rect fill="url(#logo-footer-b)" x="16" width="32" height="32" rx="16"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFFFFF"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2018 Agnes, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>
</body>
</html>
