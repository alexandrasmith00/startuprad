<?php echo $__env->make('includes.profile.organization-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div  class="widget-wrap">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="mentors_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Advisors', 'fields' =>
            $this_profile->advisors != null ? ['Name' => $this_profile->advisors] : ['No Advisors' => ['']]
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="partnerships_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Partnerships', 'fields' =>
            $this_profile->partners != null ? ['Partner' => $this_profile->partners] : ['No Partnerships' => ['']]
        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="funding_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Funding', 'fields' => array_merge(
            ($this_profile->equitysplit != "" ? ['Equity Split' => [$this_profile->equitysplit->value]] : ["Legal Status hasn't been updated" => ['']]), 
            ($this_profile->outsideinvestors != "" ? ['Outside Investors' => [$this_profile->outsideinvestors->value]] : ["Outside Investors  haven't been updated" => ['']]), 
            ($this_profile->fundinground != "" ? ['Funding Round' => [$this_profile->fundinground->value]] : ["Funding Round  hasn't been updated" => ['']]), 
            ($this_profile->debtequity != "" ? ['Debt Equity' => [$this_profile->debtequity->value]] : ["Debt Equity hasn't been updated" => ['']])
        )], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div role="tabpanel" class="tab-pane active" id="legal_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Legal', 'fields' => array_merge(
            ($this_profile->legalstatus != "" ? ['Legal Status' => [$this_profile->legalstatus->value]] : ['Legal status has not been set' => ['']]), 
            ($this_profile->lawyers != "" ? ['Lawyers' => [$this_profile->lawyers->value]] : ["Lawyers have not yet been updated" => ['']])
        )], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
  </div>
    
  <?php echo $__env->make('includes.profile.organization-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
</div>


