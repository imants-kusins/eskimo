<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url() }}"><img src="{{ url() }}/images/logo.jpg" alt="Logo"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="menu-navbar-link" href="{{ url() }}">Home</a></li>
                    <li><a class="menu-navbar-link" href="#">About</a></li>
                    <li><a class="menu-navbar-link" href="#">Pricing</a></li>
                    <li><a class="menu-navbar-link" href="#">Coaches</a></li>
                    <li><a class="menu-navbar-link" href="#">Parents</a></li>
                    <li><a class="menu-navbar-link" href="#">Schools</a></li>
                    <li><a class="menu-navbar-link" href="#">Blog</a></li>
                    <li><a class="menu-navbar-link" href="#">Contact</a></li>
                    <li><a class="menu-navbar-link" href="#">Buy Now</a></li>
                    @if (Auth::user())
                        <li><a class="menu-navbar-link logout" href="{{ url('/auth/logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>