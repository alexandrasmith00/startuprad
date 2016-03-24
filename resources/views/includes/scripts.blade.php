<script src="{{asset('js/lib/jquery.js')}}"></script>
<script src="{{asset('js/lib/jquery-migrate.js')}}"></script>
<script src="{{asset('js/lib/bootstrap.js')}}"></script>
<script src="{{asset('js/lib/jquery.ui.js')}}"></script>
<script src="{{asset('js/lib/jRespond.js')}}"></script>
<script src="{{asset('js/lib/nav.accordion.js')}}"></script>
<script src="{{asset('js/lib/hover.intent.js')}}"></script>
<script src="{{asset('js/lib/hammerjs.js')}}"></script>
<script src="{{asset('js/lib/jquery.hammer.js')}}"></script>
<script src="{{asset('js/lib/jquery.fitvids.js')}}"></script>
<script src="{{asset('js/lib/scrollup.js')}}"></script>
<script src="{{asset('js/lib/smoothscroll.js')}}"></script>
<script src="{{asset('js/lib/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/lib/jquery.syntaxhighlighter.js')}}"></script>
<script src="{{asset('js/lib/velocity.js')}}"></script>
<script src="{{asset('js/lib/smart-resize.js')}}"></script>
<script src="{{asset('js/lib/autosize.min.js')}}"></script>

<script src="{{asset('js/lib/icheck.js')}}"></script>
<script src="{{asset('js/lib/jquery.switch.button.js')}}"></script>

<script src="{{asset('js/lib/bootbox.js')}}"></script>
<script src="{{asset('js/lib/sweetalert.js')}}"></script>
<script src="{{asset('js/lib/select2.full.js')}}"></script>

<!--Forms-->
<script src="{{asset('js/lib/jquery.maskedinput.js')}}"></script>
<script src="{{asset('js/lib/jquery.validate.js')}}"></script>
<script src="{{asset('js/lib/jquery.form.js')}}"></script>
<script src="{{asset('js/lib/j-forms.js')}}"></script>
<script src="{{asset('js/lib/jquery.loadmask.js')}}"></script>
<script src="{{asset('js/apps.js')}}"></script>


<script>
    
    // FOR POSTING COMMENTS
    autosize($('textarea'));
    
    $('#comment-box textarea').keydown(function(e) {
        if (e.keyCode == 13) {
            this.form.submit();
        }
    });
    
    $('.reply-link').click(function() { 
        $('[id*="reply-"]').hide();

        var reply_to = $(this).attr("id");
        var found = "reply-" + reply_to;
        $('#' + found).show();
    });


</script>

@yield('scripts')

