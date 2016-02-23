this is the project profile that displays everywhere. <br/>
<br/><br/>

<a id="name" class="project-name">{{ $project->name }}</a><br/><button name="name" class="btn btn-primary editable">Edit Name</button>
<br/><br/>

<a id="tagline" class="project-tagline">{{ $project->tagline }}</a><br/><button name="tagline" class="btn btn-primary editable">Edit Tagline</button>
<br/><br/>


<a id="website" class="project-website">{{ $project->website }}</a><br/><button name="website" class="btn btn-primary editable">Edit Website</button>
<br/><br/>


<a id="logo" class="project-logo">{{ $project->logo }}</a><br/><button name="logo" class="btn btn-primary editable">Edit Logo</button>


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="edit-modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label id="update-label" for="edit-field"></label>
            <input class="form-control" id="edit-field">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary update-field">Update</button>
      </div>
    </div>
  </div>
</div>