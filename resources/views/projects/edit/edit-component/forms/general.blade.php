
<div style="padding-top: 30px;" class="details">

  <h4>Edit General Information</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Name</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input data-parsley-required type="text" class="form-control input-one" name="name" value="{{ $idea->name }}" placeholder="Name">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Logo</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <p> <a href="{{ route('edit-logo') }}"> Change logo  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Tagline</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input type="text" class="form-control input-one" name="tagline" value="{{ $idea->tagline() }}" placeholder="Tagline">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Description</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <textarea type="text" class="form-control input-one" name="description" value="{{ $idea->description() }}" placeholder="Description">{{ $idea->description() }}</textarea>
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>URL</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input type="url" class="form-control input-one" name="url" value="{{ $idea->url() }}" placeholder="URL">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Location</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input type="text" class="form-control input-one" name="location" value="{{ $idea->location() }}" placeholder="Location">
          </div>
        </div>
      </div>

      <div class="form-line form-labels">
        <div class="row">
          <div class="col-sm-2 col-xs-12">
            <label>Video</label>
          </div>
          <div class="col-sm-10 col-xs-12">
            <input type="url" class="form-control input-one" name="video" value="{{ $idea->video() }}" placeholder="Video">
          </div>
        </div>
      </div>



    </div>
  </div>
</div>
