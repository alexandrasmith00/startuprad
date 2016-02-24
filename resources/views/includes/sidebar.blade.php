<nav class="sidebar-menu st-effect-2" id="menu-2">
    <h4><span class="brand">RADs</span></h4>
    <ul>
        
                                    
        @foreach (Auth::user()->cohorts as $cohort)
            <li><a class="cohort">{{ $cohort->name }}</a></li>
        
            @foreach ($cohort->ideas as $project)
                <li><a href="/project/{{ $project->id }}">{{ $project->name }}</a></li>
            @endforeach
        
        @endforeach
       

    </ul>
    
</nav>