<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <p class="bold text-right">Call us now +255 763 901 262</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container navigation">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo2.png') }}" alt="" width="150" height="40" />
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#doctor">Team</a></li>
                <li><a href="#facilities">Resources</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#partner">Partiners</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}">Home form</a></li>
                        <li><a href="#">Home video</a></li>
                        <li><a href="#">Home CTA</a></li>
                        <li><a href="#">Download</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
