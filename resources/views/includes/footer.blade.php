<!--Footer-->
<footer class="page-footer stylish-color-dark navbar-default">

    <!--Footer Links-->
    <div class="container">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!--First column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">{{ env('APP_NAME') }}</h6>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Partner</h6>

            </div>
            <!--/.Second column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Useful links</h6>

            </div>
            <!--/.Third column-->

            <hr class="w-100 clearfix d-md-none">

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Contact</h6>
                <p><i class="fa fa-envelope mr-3"></i> email </p>
            </div>
            <!--/.Fourth column-->

        </div>
        <!-- Footer links -->

        <hr>

        <div class="row py-3 d-flex align-items-center">

            <!--Grid column-->
            <div class="col-md-8 col-lg-9">

                <!--Copyright-->
                <p class="text-center text-md-left grey-text">©{{ \Carbon\Carbon::now()->format('Y') }} Copyright: {{ env('APP_NAME') }}</p>
                <!--/.Copyright-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 col-lg-3 ml-lg-0">

                <!--Social buttons-->
            {{--<div class="social-section text-center text-md-left">--}}
            {{--<ul>--}}
            {{--<li><a class="btn-floating btn-sm rgba-white-slight mr-xl-4"><i class="fa fa-facebook"></i></a></li>--}}
            {{--<li><a class="btn-floating btn-sm rgba-white-slight mr-xl-4"><i class="fa fa-twitter"></i></a></li>--}}
            {{--<li><a class="btn-floating btn-sm rgba-white-slight mr-xl-4"><i class="fa fa-google-plus"></i></a></li>--}}
            {{--<li><a class="btn-floating btn-sm rgba-white-slight mr-xl-4"><i class="fa fa-linkedin"></i></a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            <!--/.Social buttons-->

            </div>
            <!--Grid column-->

        </div>

    </div>

</footer>
<!--/.Footer-->