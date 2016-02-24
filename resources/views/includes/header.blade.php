<nav class="navbar navbar-home navbar-fixed-top">
   

    <div class="container">
        

        <div class="navbar-header">


            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                @include('includes.brand')
            </a>
        </div>
        

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            
            <ul class="nav navbar-nav navbar-left">
                @if ( ! Auth::guest())
                
                    <li><a><i class="fa fa-home"></i></a></li>
                    <li id="sidebar-trigger" data-effect="st-effect-2"><a href="/" >RAD</a></li>
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>  

                @endif
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                @if ( ! Auth::guest())
            
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->first }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                              <li><a href=" {{ url('/account/show').'/'. Auth::user()->id }}">Account</a></li>                         
                              <li><a href="{{ url('/account/settings').'/'. Auth::user()->id  }}">Settings</a></li>
                              <li><a href="{{ url('/logout') }}">Log Out</a></li>

                            
                        
                        </ul>
                    </li>
                @endif
            </ul>
            
        </div>  
    </div>
</nav>


