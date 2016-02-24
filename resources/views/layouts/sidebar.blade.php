<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>
    
    <div id="sidebar-container" class="sidebar-container">

        @include('includes.sidebar')
			
        <div class="sidebar-pusher">

            <div class="all-content">
                <div class="push-content-down">

                    @include('includes.header')
                    
                    <div class="page-content">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>

                    @include('includes.footer')

                </div>
            </div>
            
        </div>
        
    </div>
        
    @include('includes.scripts')

</body>



    