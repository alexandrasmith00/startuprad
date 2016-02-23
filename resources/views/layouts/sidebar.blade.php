<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    
    <div id="sidebar-container" class="sidebar-container">

        @include('includes.sidebar')
			
        <div class="st-pusher">

            <div class="all-content">
                <div class="push-content-down">

                    @include('includes.header')
                    
                    <div class="page-content">
                        @yield('content')
                    </div>

                    @include('includes.footer')

                </div>
            </div>
            
        </div>
        
    </div>
        
    @include('includes.scripts')
    <script src="js/classie.js"></script>
    <script src="js/sidebarEffects.js"></script>
    
</body>



    