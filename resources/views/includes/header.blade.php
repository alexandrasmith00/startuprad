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
        <div class="collapse navbar-collapse" id="navbar">
            
            <ul class="nav navbar-nav">
                @if ( ! Auth::guest())
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>  
                @endif
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if ( ! Auth::guest())
            
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->first }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
     
                            
                              <li class="dropdown-header">Your Project</li>
                              <div id="sidebar-trigger" class="column">
    <button data-effect="st-effect-2">Slide in on top</button>
</div>
                              <li class="dropdown-header">Your RAD</li>
                            

                                
                                
                              <li><a href="{{ url('/project') }}">View All</a></li>

                              <li class="dropdown-header">Your Account</li>
                              <li><a href=" {{ url('/account/show').'/'. Auth::user()->id }}">Account</a></li>                         
                              <li><a href="{{ url('/logout') }}">Settings</a></li>
                              <li><a href="{{ url('/logout') }}">Logout</a></li>

                            
                        
                        </ul>
                    </li>
                @endif
            </ul>
            
        </div>  
    </div>
</nav>


