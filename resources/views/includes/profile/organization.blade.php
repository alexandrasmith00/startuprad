@include('includes.profile.organization-nav')

<div  class="widget-wrap">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="mentors_tab">
        @include('includes.profile.organization-pane', ['organization_title' => 'Mentors', 'fields' => ['Name' => ['Paul Graham', 'Sam Altman'] ] ])
    </div>
    <div role="tabpanel" class="tab-pane" id="partnerships_tab">
        @include('includes.profile.organization-pane', ['organization_title' => 'Partnerships', 'fields' => ['Partner' => ['Nike'] ] ])
    </div>
    <div role="tabpanel" class="tab-pane" id="funding_tab">
        @include('includes.profile.organization-pane', ['organization_title' => 'Funding', 'fields' => ['Equity Split' => ['Agreed'], 'Funding Round' => ['Seed Round'], 'Outside Investors' => ['Yes'], 'Debt Equity' => ['No']] ])
    </div>
    <div role="tabpanel" class="tab-pane" id="legal_tab">
        @include('includes.profile.organization-pane', ['organization_title' => 'Legal', 'fields' => ['Legal Status' => ['Delaware C-Corp'], 'Lawyers' => ['Ropes & Gray'] ] ])
    </div>
  </div>
</div>
