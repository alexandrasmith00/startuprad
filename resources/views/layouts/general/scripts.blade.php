<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/lib/bootstrap.js')}}"></script>
<!--<script src="{{ asset('/js/bootstrap-table.min.js') }}"></script>-->
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
