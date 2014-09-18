@extends('layouts.standard')


@section('content')
<?php

if(isset($data['lead']))
{
    ?>
    <h1>Welcome <?php echo $data['lead'][0]->NAME; ?></h1>

<?php
}
?>

<section class="section-default">
    <div class="container">
        <h1>Video</h1>
    </div>
</section>

<a id="about"></a>
<section class="section-green">
    <div class="container">
        <h2 class="section-title scrollpoint sp-effect3 active animated fadeInDown" style="color:#292b33;">Who are we?</h2>
    </div>
</section>

<a id="portfolio"></a>
<section class="section-default">
    <div class="container">
        <div class="col-md-12">
            <h2 class="section-title scrollpoint sp-effect3 active animated fadeInDown" style="color:#292b33;">Portfolio Snapshot</h2>
            <ul class="grid cs-style-4">
                <li>
                    <figure class="scrollpoint sp-effect1 active animated fadeInLeft">
                        <div><img src="/images/1_ab_beerCooler/slides/feature.png" alt="img04"></div>
                        <figcaption>
                            <h3>Lorem ipsum</h3>
                            <a href="">Show me</a>
                        </figcaption>
                    </figure>
                </li>

                <li>
                    <figure class="scrollpoint sp-effect3 active animated fadeInDown">
                        <div><img src="/images/1_loreal_vba/slides/feature.png" alt="img04"></div>
                        <figcaption>
                            <h3>Lorem ipsum</h3>
                            <a href="">Show me</a>
                        </figcaption>
                    </figure>
                </li>

                <li>
                    <figure class="scrollpoint sp-effect2 active animated fadeInRight">
                        <div><img src="/images/ref1.png" alt="img04"></div>
                        <figcaption>
                            <h3>Lorem ipsum</h3>
                            <a href="">Show me</a>
                        </figcaption>
                    </figure>
                </li>

                <li>
                    <figure class="scrollpoint sp-effect1 active animated fadeInLeft">
                        <div><img src="/images/ref1.png" alt="img04"></div>
                        <figcaption>
                            <h3>Lorem ipsum</h3>
                            <a href="">Show me</a>
                        </figcaption>
                    </figure>
                </li>

                <li>
                    <figure class="scrollpoint sp-effect3 active animated fadeInDown">
                        <div><img src="/images/ref1.png" alt="img04"></div>
                        <figcaption>
                            <h3>Lorem ipsum</h3>
                            <a href="">Show me</a>
                        </figcaption>
                    </figure>
                </li>

                <li>
                    <figure class="scrollpoint sp-effect2 active animated fadeInRight">
                        <div><img src="/images/ref1.png" alt="img04"></div>
                        <figcaption>
                            <h3>Lorem ipsum</h3>
                            <a href="">Show me</a>
                        </figcaption>
                    </figure>
                </li>

            </ul>
            <div style="text-align: center; padding-bottom: 45px;">
                <a href="/work"><button class="btn btn-success">See More!</button></a>
            </div>
        </div>
    </div>

</section>

<a id="contact"></a>
<section class="section-gray">
    <div class="container">
        <h2 class="section-title scrollpoint sp-effect3 active animated fadeInDown">Contact us</h2>
        <br/>
        <div class="row">
            <!-- PRICING TABLE FIRST - start -->
            <div class="col-sm-12">
                <div class="macbook-inner active">
                    <div class="row scrollpoint sp-effect4 active animated fadeIn">
                        <div class="col-sm-8">
                            <h3 class="hidden-xs">Leave a message</h3>
                            <form>
                                <fieldset>
                                    <div class="form-group">
                                        <label for="firstname" class="sr-only">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" id="firstname">
                                    </div>

                                    <div class="form-group">
                                        <label for="lastname" class="sr-only">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" id="lastname">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="message" class="sr-only">Message</label>
                                        <textarea class="form-control" placeholder="Message" id="message"></textarea>
                                    </div>

                                    <button class="btn btn-primary">Send message</button>

                                </fieldset>
                            </form>
                        </div>
                        <div class="col-sm-4" style="padding-top: 50px;">
                            <div class="contact-info">
                                <p>Project Sidecar</p>
                                <p>info@projectsidecar.com</p>
                                <p>123-456-7890</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@stop