
<div style="padding-top: 30px;" class="details">

  @if ($edit)
    <h4><a class="edit-section" href="{{ route('edit-organization') }}">Edit Organization &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  @else
    <h4>Organization</h4><br>
  @endif


  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">

        @include('projects.sections.organization.legal')
        <hr>
        @include('projects.sections.organization.funding')
        <hr>
        @include('projects.sections.organization.advisors')
        <hr>
        @include('projects.sections.organization.partnerships')

      </div>

    </div>
  </div>
</div>

