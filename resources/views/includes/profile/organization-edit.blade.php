<div class="widget-container">
  <div class="widget-content">
    <div class="task-widget">
      <div class="widget-task-list recent-users-list">

        @if ($isYours)

        <div class="dropdown">
          <button type="button" class="btn dropdown-toggle btn btn-link btn-block btn-loadmore"  data-toggle="collapse" data-target="#collapseorg" aria-expanded="false" aria-controls="collapseorg">Edit Organization</button>

          <div class="collapse" id="collapseorg">
            <ul>
                <li><a href="#" id="legal" class="editable" >Edit Legal</a></li>
                <li><a href="#" id="funding" class="editable" >Edit Funding</a></li>
                <li><a href="#" id="advisors" class="editable" >Edit Advisors</a></li>
                <li><a href="#" id="partnerships" class="editable" >Edit Partnerships</a></li>

            </ul>
          </div>
        </div>

        @endif

      </div>
    </div>
  </div>
</div>

@section('scripts')
@parent




    <script id="legal-add-to-form" type="text/template">
        <input type="hidden" name="type" value="legal">
        <input type="hidden" id="resource_id" name="resource_id" value="">

       <div class="unit">
            <label class="label">Legal Status</label>
            
            <div style="padding-left:0px; padding-right: 5px;" class="col-md-2">
              <label class="radio">
                <input type="radio" name="legal-status" value="0" onclick="$('.select-labels').addClass('disabled-view'); $('.select-disabled').attr('disabled', 'disabled');"> <i></i>None
              </label>
            </div>
             <div style="padding-left:0px; padding-right: 5px;" class="col-md-2">
              <label class="radio">
                <input type="radio" name="legal-status" value="1" onclick="$('.select-labels').removeClass('disabled-view'); $('.select-disabled').removeAttr('disabled');"> <i></i>Legal:
              </label>
            </div>       
 
        
            <div style="padding-left:0px; padding-right: 5px;" class="col-md-4" >
                <label class="input select select-labels disabled-view">
                    <select disabled name="legal-status-state" class="select-disabled form-control">
                        <option value="none" selected="" disabled="">Select state</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                    </select>
                    <i></i>
                </label>
            </div>
            <div style="padding-left:5px; padding-right: 0px;" class="col-md-4">
                <label class="input select select-labels disabled-view">
                    <select disabled name="legal-status-type" class="select-disabled form-control">
                        <option value="none" selected="" disabled="">Select type</option>
                        <option value="LLC">LLC</option>
                        <option value="C Corp">C Corp</option>
                        <option value="S Corp">S Corp</option>
                        <option value="Non-profit">Non-profit</option>
                    </select>
                    <i></i>
                </label>
            </div>
        </div><br/>
       <div class="unit">
            <label class="label">Lawyers</label>
            <div class="input">
                <input class="form-control" type="text" name="lawyers" placeholder=""/> 
            </div>
        </div>
    
    </script>

    <script id="funding-add-to-form" type="text/template">
        <input type="hidden" name="type" value="funding">
        <input type="hidden" id="resource_id" name="resource_id" value="">

       <div class="unit">
            <label class="label">Equity Split</label>
            <label class="radio">
                <input type="radio" name="equity-split" value="Agreed" > <i></i>Agreed
            </label>
            <label class="radio">
                <input type="radio" name="equity-split" value="Not Agreed" > <i></i>Not Agreed
            </label>
        </div>
        
        <div class="unit">
            <label class="label">Outside Investors</label>
            <label class="radio">
                <input type="radio" name="outside-investors" value="Yes" > <i></i>Yes
            </label>
            <label class="radio">
                <input type="radio" name="outside-investors" value="No" > <i></i>No
            </label>
        </div>
        
       <div class="unit">
            <label class="label">Funding Round</label>
            <label class="radio">
                <input type="radio" name="funding-round" value="None" > <i></i>None
            </label>
            <label class="radio">
                <input type="radio" name="funding-round" value="Family & Friends" > <i></i>Family & Friends
            </label>
            <label class="radio">
                <input type="radio" name="funding-round" value="Angels" > <i></i>Angels
            </label>
            <label class="radio">
                <input type="radio" name="funding-round" value="Seed Round" > <i></i>Seed
            </label>
            <label class="radio">
                <input type="radio" name="funding-round" value="Series A Round" > <i></i>Series A
            </label>
        </div>
    
        <div class="unit">
            <label class="label">Debt Equity</label>
            <label class="radio">
                <input type="radio" name="debt-equity" value="Yes" > <i></i>Yes
            </label>
            <label class="radio">
                <input type="radio" name="debt-equity" value="No" > <i></i>No
            </label>
        </div>
    </script>

    <script id="advisors-add-to-form" type="text/template">
        <input type="hidden" name="type" value="advisor">

       <div class="unit">
            <label class="label">Add an advisor</label>

            <div class="input">
                <input class="form-control" type="text" name="advisor" placeholder="Name"/> 
            </div>
        </div>
    
    </script>

    <script id="partnerships-add-to-form" type="text/template">
        <input type="hidden" name="type" value="partner">

       <div class="unit">
            <label class="label">Add a partnership</label>
            <div class="input">
                <input class="form-control" type="text" name="partnership" placeholder="Partner"/> 
            </div>
        </div>
    </script>

@stop