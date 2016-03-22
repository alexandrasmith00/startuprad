<div class="admin-bar">
    <ul>
        <button href="/logout" id="logout-link" style="display: none;"></button>
        <li><a href="#" class="logout-alert"><i class="zmdi zmdi-power"></i>
        </a>
        </li>
        <li><a href="#"><i class="zmdi zmdi-account"></i>
        </a>
        </li>
        <li><a href="#"><i class="zmdi zmdi-key"></i>
        </a>
        </li>
        <li><a href="#"><i class="zmdi zmdi-settings"></i>
        </a>
        </li>
    </ul>
</div>

@section('scripts')
<script>
    $('.logout-alert').on('click', function (e) {
    
        swal({   
            title: "Are you sure?",   
            text: "You will be logged out.",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Log me out",   
            closeOnConfirm: false 
        }, function(){   
                window.location.href = '/logout';
        });
    });
</script>
@stop