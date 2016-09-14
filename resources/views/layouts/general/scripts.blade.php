<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="{{asset('js/lib/bootstrap.js')}}"></script>
<!--<script src="{{ asset('/js/bootstrap-table.min.js') }}"></script>-->
<link href="/css/cropper.min.css" rel="stylesheet">
<script src="{{asset('js/cropper.min.js')}}"></script>


<script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/js/infinite.min.js') }}"></script>

<script src="{{ asset('/js/slideout.min.js') }}"></script>
<script src="{{asset('js/parsley.min.js')}}"></script>
<script src="{{asset('js/lib/autosize.min.js')}}"></script>

<!--Needed for tags for some reason-->
<script src="{{asset('js/lib/jRespond.js')}}"></script>
<script src="{{asset('js/lib/hammerjs.js')}}"></script>
<script src="{{asset('js/lib/jquery.hammer.js')}}"></script>
<script src="{{asset('js/lib/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/lib/smart-resize.js')}}"></script>


<!--Forms-->
<script src="{{asset('js/apps.js')}}"></script>


@include('js.comments')

@yield('scripts')
