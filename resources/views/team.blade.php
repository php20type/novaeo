@extends('layouts.app')

@section('content')
<!-- Banner Section Start -->
<section class="banner-sec">
    <div class="container-fluid">
        <div class="banner-con-inner">
            <div class="banner-con-block">
                <img src="{{ asset('assets/front/img/our-team-bg-img.png')}}" />
                <div class="banner-content">
                    <h2>Our Team</h2>
                    <div class="banner-menu-block">
                        <ul>
                            <li>
                                <a href="javascript:void(0)"> Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Our Team</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<!-- Our Team Section Start -->
<section class="team-sec-main">
    <div class="container">
        <div class="team-inner">
            <div class="team-con-box-block">
                <div class="custom-title">
                    <h2>Meet Our Team</h2>
                    <!-- <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Praesent at urna vitae justo bibendum tempus nec ac nisl.
                Vivamus venenatis nunc eu nunc viverra, at pellentesque ipsum
                dignissim.
              </p> -->
                </div>
                <div class="team-box-block">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-1.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Brandon Middleton</h3>
                                    <p>Chief Executive Officer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-2.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Derrek Wiedeman</h3>
                                    <p>Chief Operations Officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-con-box-block">
                <div class="custom-title">
                    <h2>Supply Chain</h2>
                </div>
                <div class="team-box-block">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-44.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Brice Day </h3>
                                    <p>Warehouse Operations Managers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-3.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Daniel Blancarte</h3>
                                    <p>Supply Chain Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-4.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Chris Fortes</h3>
                                    <p>Sourcing & Procurement Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-5.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Marvin Sanchez</h3>
                                    <p>Inventory Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-7.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Archer Talisic</h3>
                                    <p>Warehouse Operations Optimization Specialist</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-43.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Jesus Del Campo Salva </h3>
                                    <p>eCommerce Public Marketplace Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-con-box-block">
                <div class="custom-title">
                    <h2>Product Development</h2>
                </div>
                <div class="team-box-block">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-8.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Andie Engelbertson</h3>
                                    <p>Product Development Lead</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="team-box">
                                <div class="team-box-img">
                                    <div class="team-member-img">
                                        <img src="{{ asset('assets/front/img/team-img-9.png')}}" />
                                    </div>

                                </div>
                                <div class="team-box-content">
                                    <h3>Micah Fusin</h3>
                                    <p>Product Development Project Coordinator</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Amazon & Pmps</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-12.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Sunil Kumar</h3>
                                <p>Amazon PPC Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-13.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Anisha Jalan</h3>
                                <p>Amazon Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-14.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Darrell Francisco</h3>
                                <p>Amazon Strategist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-15.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Flint Reyes</h3>
                                <p>Amazon Strategist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-10.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Jupiter Isidro</h3>
                                <p>Amazon PPC Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-46.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Craig Galo</h3>
                                <p>Amazon PPC Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-47.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Paul Francisco</h3>
                                <p>Amazon PPC Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/carlo.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Carlo</h3>
                                <p>Amazon Generalist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Creatives</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-16.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Margeri Abordo</h3>
                                <p>Content QA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-17.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Lydia Leyland</h3>
                                <p>Creative Lead</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Content & Copy</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <!-- <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-18.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Nina Batara</h3>
                                <p>Copywriter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-19.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Suzanne Perante</h3>
                                <p>Copywriter</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-20.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Raneya Astillero</h3>
                                <p>Copywriter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-45.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Lan Amaranto</h3>
                                <p>Copywriter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Graphic Designer</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-22.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Stara Alfafara</h3>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-23.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Rodrigo Rosales</h3>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-24.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Jason Batindaan</h3>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-25.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Mas Luyas</h3>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-21.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Rico Teñido</h3>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Web & Tech</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-26.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Carll Lopez</h3>
                                <p>Web & Tech Lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-27.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Akash Asodariya</h3>
                                <p>Full Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Social Media & Outreach</h2>
            </div>
            <div class="team-box-block">
                <div class="team-slider">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-28.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Jessica Hipolito</h3>
                                <p>Social Media & Outreach Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-30.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Sharmaine Fuentes</h3>
                                <p>Social Media & Outreach Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Customer Engagement</h2>
            </div>
            <div class="team-box-block">
                <div class="team-block-slider">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-31.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Faith Kuizon</h3>
                                <p>Customer Engagement Leader</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-32.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Eujame Sanchez</h3>
                                <p>Customer Engagement Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-33.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Bong Santos</h3>
                                <p>Customer Engagement Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="team-con-box-block">
            <div class="custom-title">
                <h2>B2B</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-34.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Fe Fababier</h3>
                                <p>B2B Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>India Team</h2>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-35.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Abhi Singh</h3>
                                <p>India Team Lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/aprajita.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Aprajita</h3>
                                <p>HR Operations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="custom-title">
                <h2>Internal Operations</h2>
            </div>
            <div class="team-custom-title">
                <h3>HR</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-36.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>LJ Madulara</h3>
                                <p>HR/Internal Operations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-37.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Tifanny Parcon</h3>
                                <p>HR Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-38.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Loli Batarlo</h3>
                                <p>HR Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Finance</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-39.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Blez Reillo</h3>
                                <p>Finance & Accounting Lead</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-40.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Reina Acuesta</h3>
                                <p>Bookkeeper</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-con-box-block">
            <div class="team-custom-title">
                <h3>Legal & Admin</h3>
            </div>
            <div class="team-box-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-41.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Marc Castro</h3>
                                <p>Legal and Compliance Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-box">
                            <div class="team-box-img">
                                <div class="team-member-img">
                                    <img src="{{ asset('assets/front/img/team-img-42.png')}}" />
                                </div>

                            </div>
                            <div class="team-box-content">
                                <h3>Aj Macalalad</h3>
                                <p>Project Coordinator</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Our Team Section End -->
@endsection