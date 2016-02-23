this is the project profile that displays everywhere. <br/>
<br/><br/>

<a id="name" class="project-name">{{ $project->name }}</a> 
    @if ($isYours)
        <a name="name" class="editable" ><i class="fa fa-pencil"></i></a>
    @endif
<br/><a id="tagline" class="project-tagline">{{ $project->tagline }}</a> 
    @if ($isYours)
        <a name="tagline" class="editable" ><i class="fa fa-pencil"></i></a>
    @endif
<br/><a id="website" class="project-website">{{ $project->website }}</a> 
    @if ($isYours)
        <a name="website" class="editable" ><i class="fa fa-pencil"></i></a>
    @endif
<br/><a id="logo" class="project-logo">{{ $project->logo }}</a> 
    @if ($isYours)
        <a name="logo" class="editable" ><i class="fa fa-pencil"></i></a>
    @endif

