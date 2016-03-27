<div class="widget-wrap stats-widget">
    <img class="img-responsive img-center" src="{{{ $project->logo != "" ? $project->logo : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'  }}}">
    <h3 class="profile-username text-center">{{ $project->name }}</h3>
    <p class="text-muted text-center">{{ $project->tagline }} </p>
    <p class="text-muted text-center"><a href="http://{{ $project->site }}">{{ $project->site }} </a></p><br>
    
    <div class="row">
        <div class="col-xs-2 col-xs-offset-1"><a><i class="zmdi zmdi-globe zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-email zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-facebook zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-linkedin-box zmdi-hc-lg"></i></a></div>
        <div class="col-xs-2"><a><i class="zmdi zmdi-twitter zmdi-hc-lg"></i></a></div>
    </div>

</div>

@include('includes.profile.team')

