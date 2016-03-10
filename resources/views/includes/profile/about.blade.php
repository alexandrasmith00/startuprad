<div class="box box-primary">
  <div class="box-body box-profile">

    <img class="img-responsive img-center" src="{{{ $project->logo != "" ? $project->logo : 'http://static1.squarespace.com/static/54fe5d59e4b038fd96c9a7c5/550a1fa1e4b0fca40dc6f6b1/550a1fa1e4b03c7ec206969d/1426726818023/Placeholder+Logo.png'  }}}">
    <h3 class="profile-username text-center">{{ $project->name }}</h3>
    <p class="text-muted text-center">{{ $project->tagline }} </p>
    <p class="text-muted text-center"><a href="http://{{ $project->site }}">{{ $project->site }} </a></p>

    <ul class="list-group list-group-unbordered">
      @foreach ($project->team->users as $member)
        <li class="list-group-item">
          <b>{{ $member->name }}</b> <span class="pull-right">Co-founder</span>
        </li>
      @endforeach
    </ul>

    <div class="row">
        <div class="col-xs-2 col-xs-offset-1"><a><i class="fa fa-globe"></i></a></div>
        <div class="col-xs-2"><a><i class="fa fa-envelope-square"></i></a></div>
        <div class="col-xs-2"><a><i class="fa fa-facebook-square"></i></a></div>
        <div class="col-xs-2"><a><i class="fa fa-linkedin-square"></i></a></div>
        <div class="col-xs-2"><a><i class="fa fa-twitter-square"></i></a></div>
    </div>

    <br/>
    <a href="#profile" data-toggle="tab" onClick="makeActive()" class="btn btn-primary btn-block"><b>See more</b></a>

  </div>
</div>