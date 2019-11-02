@extends('layout.web.web')
@section('title','Pricing')
@section('content')
	
    <main class="bg_color_1">
        <section class="hero_single general">
            <div class="wrapper">
                <div class="container">
                    <h1>ReviewStore Pricing Plans</h1>
                    <p>ReviewStore helps grow your business using customer reviews</p>
                </div>
            </div>
        </section>
        <!-- /hero_single -->

        <div class="container margin_tabs">
            <div id="tabs" class="tabs">
                <nav>
                    <ul>
                        <li><a href="#section-1"><i class="pe-7s-paper-plane"></i>Standard</a></li>
                        <li><a href="#section-2"><i class="pe-7s-plane"></i>Extended</a></li>
                        <li><a href="#section-3"><i class="pe-7s-rocket"></i>Premium</a></li>
                    </ul>
                </nav>
                <div class="content">

                    
                    <section id="section-1">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>1 Month</h4>
                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>15<em>/mo</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <div class="ribbon">
                                        <span class="top_selling">Top selling</span>
                                    </div>
                                    <h4>6 Months</h4>
                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>95<em>/6 months</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>12 Months</h4>
                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>130<em>/year</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </section>


                    <section id="section-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>1 Month</h4>
                                    <p>Diam timeam iracundia eu per, vide error id nec, est veniam equidem nonumes in. Has offendit oportere ea. Errem denique corpora ut vis, veniam fierent recteque vim no, in oblique forensibus accommodare cum.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>45<em>/mo</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>6 Months</h4>
                                    <p>Diam timeam iracundia eu per, vide error id nec, est veniam equidem nonumes in. Has offendit oportere ea. Errem denique corpora ut vis, veniam fierent recteque vim no, in oblique forensibus accommodare cum.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>125<em>/6 months</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box_pricing">
									<div class="ribbon">
                                        <span class="top_selling">Top selling</span>
                                    </div>
                                    <h4>12 Months</h4>
                                    <p>Diam timeam iracundia eu per, vide error id nec, est veniam equidem nonumes in. Has offendit oportere ea. Errem denique corpora ut vis, veniam fierent recteque vim no, in oblique forensibus accommodare cum.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>140<em>/year</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </section>
                    <section id="section-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="box_pricing">
									<div class="ribbon">
                                        <span class="top_selling">Top selling</span>
                                    </div>
                                    <h4>1 Month</h4>
                                    <p>Iriure nostrud dignissim id vix, et velit soluta mei. Velit labore intellegat ad mel, ullum nobis quo in, rebum nihil malorum vix ex.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>45<em>/mo</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>6 Months</h4>
                                    <p>Iriure nostrud dignissim id vix, et velit soluta mei. Velit labore intellegat ad mel, ullum nobis quo in, rebum nihil malorum vix ex.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>140<em>/6 months</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="box_pricing">
                                    <h4>12 Months</h4>
                                    <p>Iriure nostrud dignissim id vix, et velit soluta mei. Velit labore intellegat ad mel, ullum nobis quo in, rebum nihil malorum vix ex.</p>
                                    <ul>
                                        <li><strong>Lorem</strong> consulatu qui ne</li>
                                        <li><strong>Erat legere</strong> fabulas has ut</li>
                                        <li><strong>Constituto</strong> deterruisset</li>
                                        <li><strong>Omnis</strong> justo gloriatur</li>
                                    </ul>
                                    <hr>
                                    <div class="price">
                                        <sup>$</sup>210<em>/year</em>
                                    </div>
                                    <a href="{{ url('company/register') }}">Create Account</a>
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                    </section>
                </div>
                <!-- /content -->
            </div>
            <!-- /tabs -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

@push('extra-js')
     <script src="{{ asset('asset/front/js/tabs.js') }}"></script>
    <script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
@endpush
@endsection
	