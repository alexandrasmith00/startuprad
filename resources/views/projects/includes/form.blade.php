<div class="form-line form-labels">
  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <label>
        @if ($formTitle == 'Facebook')
          <label><i class="fa fa-facebook blue"></i></label>
        @elseif ($formTitle == 'Twitter')
          <label><i class="fa fa-twitter blue"></i></label>
        @elseif ($formTitle == 'LinkedIn')
          <label><i class="fa fa-linkedin blue"></i></label>
        @else
          {{ $formTitle }}
        @endif
      </label>
    </div>
    <div class="col-sm-9 col-xs-12">


      <!--* * * * * * * * * -->
      <!--  Overview Inputs -->
      <!--* * * * * * * * * -->
      @if($formTitle == 'Name')
        <input data-parsley-required type="text" class="form-control input-one" name="name" value="{{ $idea->name }}" placeholder="Name">
      @endif
      @if ($formTitle == 'Logo')
        <p><a href="{{ route('edit-logo') }}"> Change logo  &nbsp;<i class="fa fa-angle-right blue"></i> </a></p>
      @endif
      @if ($formTitle == 'Tagline')
        <input type="text" class="form-control input-one" name="tagline" value="{{ $idea->tagline() }}" placeholder="Tagline">
      @endif
      @if ($formTitle == 'Description')
        <textarea type="text" class="form-control input-one" name="description" value="{{ $idea->description() }}" placeholder="Description">{{ $idea->description() }}</textarea>
      @endif
      @if ($formTitle == 'URL')
        <input type="url" class="form-control input-one" name="url" value="{{ $idea->url() }}" placeholder="URL">
      @endif
      @if ($formTitle == 'Location')
        <input type="text" class="form-control input-one" name="location" value="{{ $idea->location() }}" placeholder="Location">
      @endif
      @if ($formTitle == 'Video')
        <input type="url" class="form-control input-one" name="video" value="{{ $idea->video() }}" placeholder="Video">
      @endif

      <!--* * * * * * * * * -->
      <!--Social Media Inputs-->
      <!--* * * * * * * * * -->
      @if ($formTitle == 'Facebook')
        <input type="url" class="form-control input-one" name="facebook" value="{{ $idea->facebook() }}" placeholder="Facebook Profile Link">
      @endif
      @if ($formTitle == 'Twitter')
        <input type="url" class="form-control input-one" name="twitter" value="{{ $idea->twitter() }}" placeholder="Twitter Profile Link">
      @endif
      @if ($formTitle == 'LinkedIn')
        <input type="text" class="form-control input-one" name="linkedIn" value="{{ $idea->linkedIn() }}" placeholder="LinkedIn Profile Link">
      @endif


      <!--* * * * * * * * * -->
      <!--Value Chain Inputs-->
      <!--* * * * * * * * * -->
      @if ($formTitle == 'Customer')
        <textarea type="text" class="form-control input-one" name="customer" value="{{ $idea->customer() }}" placeholder="Customer Description">{{ $idea->customer() }}</textarea>
      @endif
      @if ($formTitle == 'Demands')
        <textarea type="text" class="form-control input-one" name="demands" value="{{ $idea->demands() }}" placeholder="Demands">{{ $idea->demands() }}</textarea>
      @endif
      @if ($formTitle == 'Product')
        <textarea type="text" class="form-control input-one" name="product" value="{{ $idea->product() }}" placeholder="Product">{{ $idea->product() }}</textarea>
      @endif
      @if ($formTitle == 'Value')
        <textarea type="text" class="form-control input-one" name="value" value="{{ $idea->value() }}" placeholder="Value">{{ $idea->value() }}</textarea>
      @endif
      @if ($formTitle == 'Use Case')
        <textarea type="text" class="form-control input-one" name="useCase" value="{{ $idea->useCase() }}" placeholder="Use Case">{{ $idea->useCase() }}</textarea>
      @endif


      <!--* * * * * * * * * -->
      <!-- Strategy Inputs  -->
      <!--* * * * * * * * * -->
      @if ($formTitle == 'Market')
        <textarea type="text" class="form-control input-one" name="market" value="{{ $idea->market() }}" placeholder="Market Description">{{ $idea->market() }}</textarea>
      @endif
      @if ($formTitle == 'Competition')
        <textarea type="text" class="form-control input-one" name="competition" value="{{ $idea->competition() }}" placeholder="Competition">{{ $idea->competition() }}</textarea>
      @endif
      @if ($formTitle == 'Marketing')
        <textarea type="text" class="form-control input-one" name="marketing" value="{{ $idea->marketing() }}" placeholder="Marketing">{{ $idea->marketing() }}</textarea>
      @endif
      @if ($formTitle == 'Business Model')
        <textarea type="text" class="form-control input-one" name="businessModel" value="{{ $idea->businessModel() }}" placeholder="Business Model">{{ $idea->businessModel() }}</textarea>
      @endif



    </div>
  </div>
</div>
