
<div style="padding-top: 30px;" class="details">

  <h4>Team Members</h4><br>

  <div class="row">
    <div class="col-xs-12  col-sm-10 col-sm-offset-1">

      @foreach ($idea->team->users as $member)
        <div class="form-line form-labels">
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <label><strong>Name</strong></label>
            </div>
            <div class="col-sm-8 col-xs-12">
              <p>{{ $member->name }}</p>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <label><strong>Email</strong></label>
            </div>
            <div class="col-sm-8 col-xs-12">
              <p>{{ $member->email }}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <label><strong>Role</strong></label>
            </div>
            <div class="col-sm-8 col-xs-12">
              <p>{{ $member->companyRole() }}</p>
            </div>
          </div>
          @if ($member->social)
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <label><strong>Social</strong></label>
            </div>
            <div class="col-sm-8 col-xs-12">
              <p>
                @if ($member->social->linkedin) <a href="{{ $member->social->linkedin}}"><i class="fa fa-linkedin blue"></i></a> @endif
                &nbsp; &nbsp;
                @if ($member->social->facebook) <a href="{{ $member->social->facebook}}"><i class="fa fa-facebook blue"></i></a> @endif
                &nbsp; &nbsp;
                @if ($member->social->twitter) <a href="{{ $member->social->twitter}}"><i class="fa fa-twitter blue"></i></a> @endif

              </p>
            </div>
          </div>
          @endif

        </div>

      @endforeach




    </div>
  </div>
</div>

