<div class="widget-wrap stats-widget">
    <img class="img-responsive img-center" src="{{{ $project->logo != "" ? $project->logo : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'  }}}">
    <h3 class="profile-username text-center">{{ $project->name }}</h3>
    <p class="text-muted text-center">{{ $project->tagline }} </p>
    <p class="text-muted text-center"><a href="http://{{ $project->site }}">{{ $project->site }} </a></p>
</div>

@include('includes.profile.team')

@include('includes.profile.social')
