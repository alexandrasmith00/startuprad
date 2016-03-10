<div class="row">
    <div class="col-sm-2">
        <div class="profile-fieldname">{{ $fieldname }}</div>
    </div>  
    <div class="col-sm-10">
        @if ($fieldbody)
            {{ $fieldbody }}
        @else
            <i>{{ $project->name }} has not thought about their <span style="text-transform:lowercase;">{{ $fieldname }}</span> yet. </i>
        @endif
    </div>
</div>