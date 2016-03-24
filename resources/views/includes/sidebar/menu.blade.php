<ul class="list-accordion tree-style">
    <li class="list-title">Startups</li>

        @foreach (Auth::user()->cohorts as $cohort)
        <li>
            <a href="#"><i class="zmdi zmdi-view-dashboard"></i><span class="list-label">{{ $cohort->name }}</span></a>
            <ul>
               <li><a href="/project">View All</a></li>
                @foreach ($cohort->ideas as $project)
                    <li><a href="/project/{{ $project->id }}">{{ $project->name }}</a></li>
                @endforeach
            </ul>
        </li>
        @endforeach
    
</ul>