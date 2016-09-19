
<div style="padding-top: 30px;" class="details">

  <h4>Edit Overview</h4><br>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">

      @include('projects.includes.form', ['formTitle' => 'Name'])
      @include('projects.includes.form', ['formTitle' => 'Logo'])
      @include('projects.includes.form', ['formTitle' => 'Tagline'])
      @include('projects.includes.form', ['formTitle' => 'Description'])
      @include('projects.includes.form', ['formTitle' => 'URL'])
      @include('projects.includes.form', ['formTitle' => 'Location'])
      @include('projects.includes.form', ['formTitle' => 'Video'])

    </div>
  </div>
</div>
