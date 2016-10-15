
<div style="padding-top: 30px;" class="details">

  @if ($edit)
    <h4><a class="edit-section" href="{{ route('edit-general') }}">Edit Overview &nbsp; <i class="fa fa-angle-right"></i></a></h4><br>
  @else
    <h4>Overview</h4><br>
  @endif

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Name</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>{{ $idea->name }}</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Logo</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>
              @if ( $idea->logo() )
              <img width="100%;" src="{{ $idea->logo() }}">
              @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No logo @endif
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Tagline</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->tagline()) {{ $idea->tagline() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Tagline @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Description</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->description()) {{ $idea->description() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Description @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>URL</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->url()) <a href="{{ linkout($idea->url()) }}">{{ linkout($idea->url()) }}</a> @else <strong>No Website</strong> @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Location</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>@if ($idea->location()) {{ $idea->location() }} @else <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Location @endif</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <label><strong>Video</strong></label>
          </div>
          <div class="col-sm-8 col-xs-12">
            <p>
              @if ($idea->video())
              <a href="{{ linkout($idea->video()) }}">{{ linkout($idea->video()) }}</a>
              @else
              <i class="blue fa fa-exclamation-circle"></i> &nbsp; No Video
              @endif
            </p>
          </div>
        </div>


      </div>



    </div>
  </div>
</div>

