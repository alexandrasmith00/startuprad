<?php echo $__env->make('includes.profile.organization-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div  class="widget-wrap">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="mentors_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Mentors', 'fields' => ['Name' => ['Paul Graham', 'Sam Altman'] ] ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="partnerships_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Partnerships', 'fields' => ['Partner' => ['Nike'] ] ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div role="tabpanel" class="tab-pane" id="funding_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Funding', 'fields' => ['Equity Split' => ['Agreed'], 'Funding Round' => ['Seed Round'], 'Outside Investors' => ['Yes'], 'Debt Equity' => ['No']] ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <div role="tabpanel" class="tab-pane active" id="legal_tab">
        <?php echo $__env->make('includes.profile.organization-pane', ['organization_title' => 'Legal', 'fields' => ['Legal Status' => ['Delaware C-Corp'], 'Lawyers' => ['Ropes & Gray'] ] ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
    
    
    <?php echo $__env->make('includes.profile.organization-edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    
</div>


