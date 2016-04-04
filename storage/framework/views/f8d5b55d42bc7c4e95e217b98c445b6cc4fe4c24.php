<div class="widget-container">
  <div class="widget-content">
    <div class="task-widget">
      <div class="widget-task-list recent-users-list">

        <?php if($isYours): ?>

        <div class="dropdown">
          <button type="button" class="btn dropdown-toggle btn btn-link btn-block btn-loadmore"  data-toggle="collapse" data-target="#collapseorg" aria-expanded="false" aria-controls="collapseorg">Edit Organization</button>

          <div class="collapse" id="collapseorg">
            <ul>
                <li><a href="#" id="legal" class="editable" >Edit Legal</a></li>
                <li><a href="#" id="funding" class="editable" >Edit Funding</a></li>
                <li><a href="#" id="mentors" class="editable" >Edit Mentors</a></li>
                <li><a href="#" id="partnerships" class="editable" >Edit Partnerships</a></li>

            </ul>
          </div>
        </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

<?php $__env->startSection('scripts'); ?>
@parent




    <script id="legal-add-to-form" type="text/template">
        <input type="hidden" name="type" value="legal">
        <input type="hidden" id="resource_id" name="resource_id" value="">

       <div class="unit">
            <label class="label">Legal Status</label>
 
        
            <div style="padding-left:0px; padding-right: 5px;" class="col-md-6">
                <label class="input select">
                    <select name="legal-status-state" class="form-control">
                        <option value="none" selected="" disabled="">Select state</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                    </select>
                    <i></i>
                </label>
            </div>
            <div style="padding-left:5px; padding-right: 0px;" class="col-md-6">
                <label class="input select">
                    <select name="legal-status-type" class="form-control">
                        <option value="none" selected="" disabled="">Select type</option>
                        <option value="Australia">LLC</option>
                        <option value="Austria">C-Corp</option>
                        <option value="Brazil">S-corp</option>
                        <option value="Brazil">Non-profit</option>
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
                <input type="radio" name="funding-round" value="Family and Friends" > <i></i>Family & Friends
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

    <script id="mentors-add-to-form" type="text/template">
        <input type="hidden" name="type" value="mentor">

       <div class="unit">
            <label class="label">Add a mentor</label>
            <div class="input">
                <input class="form-control" type="text" name="mentor" placeholder=""/> 
            </div>
        </div>
    
    </script>

    <script id="partners-add-to-form" type="text/template">
        <input type="hidden" name="type" value="partner">

       <div class="unit">
            <label class="label">Add a partnership</label>
            <div class="input">
                <input class="form-control" type="text" name="partner" placeholder=""/> 
            </div>
        </div>
    
    </script>

<?php $__env->stopSection(); ?>