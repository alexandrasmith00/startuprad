<div class="topbar-right pull-right">
    <div class="clearfix">
        <!--Mobile View Leftbar Toggle-->
        <ul class="left-bar-switch pull-left">
            <li><span class="left-toggle-switch"><i class="zmdi zmdi-menu"></i></span></li>
        </ul>
        <ul class="pull-right top-right-icons">
            <li><a href="#" class="wrench"><i class="zmdi zmdi-wrench"></i></a></li>
        </ul>
    </div>
</div>

@section('scripts')
@parent

<script>
    
$('.wrench').on('click', function (e) {
    e.preventDefault();
    showBugReport();
    autosize($('textarea'));
 });

// Custom Html Forms
function showBugReport() {
    bootbox.dialog({
        title: "Report a bug",
        message: '<div class="row">  ' +
            '<div id="report-form" class="col-md-12"> ' +
            "Please help me out by reporting any bugs you might see right here. I will handle them as they come in, in order of significance.  Thanks!<br/><br/>" +
            '<form id="bug-form" action="/bugreport" class="form-horizontal"> ' +
            '<div class="form-group"> ' +
            '<div class="col-md-12"> ' +
            '<textarea  spellcheck="false" style="resize: none; " name="bug" class="form-control" placeholder="Explain the bug..."></textarea>' +
            '</div><br><br><br> ' +
            '<div class="form-group"> ' +
            '<label class="col-md-6 control-label" for="importance">How important is this for usability?</label> ' +
            '<div class="col-md-6"> <div class="radio"> <label for="importance-0"> ' +
            '<input type="radio" name="importance" id="importance-0" value="2" checked="checked"> ' +
            'Incredibly important</label> ' +
            '</div><div class="radio"> <label for="importance-1"> ' +
            '<input type="radio" name="importance" id="importance-1" value="1">Somewhat important</label> ' +
            '</div><div class="radio"> <label for="importance-2"> ' +
            '<input type="radio" name="importance" id="importance-2" value="0">Not that important</label> ' +
            '</div> ' +
            '</div> </div>' +
            '</form> </div>  </div>',
        buttons: {
            success: {
                label: "Report",
                className: "btn-primary",
                callback: function () {
                    var data = $('#bug-form').serialize();
                    // Build POST data and make AJAX request
                    $.post('/bugreport', data).success(function () {
                           
                    });
                }
            }
        }
    });
}

  
    
</script>

@stop