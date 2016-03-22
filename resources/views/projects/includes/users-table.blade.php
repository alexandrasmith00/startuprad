<div class="row">
  <div class="col-md-12">
    <div class="widget-wrap material-table-widget">
        <div class="widget-container margin-top-0">


            <div class="widget-content">
                <div class="data-action-bar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget-header">
                                <h3> {{ $cohort->name }} RAD</h3>
                                <p>
                                    Startups
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                @if ($cohort->ideas->count() > 0)
                  <table class="table data-tbl">
                    <thead>
                    <tr>
                        <th> <span style="padding-left: 40px;" >Name</span> </th>
                        <th> Team Members </th>
                        <th> Posts</th>
                        <th> Comments</th>
                        <th> Thanks</th>
                        <th> Profile Completion </th>
                    </tr>
                    </thead>

                    <tbody>
                        
                        @foreach ($cohort->ideas as $project)

                            <tr>
                                <td>
                                    <a href="/project/{{ $project->id }}" class="td-profile-thumb">
                                        <img src="images/avatar/michael-owens.jpg" alt="Logo">
                                    </a>
                                    <a href="/project/{{ $project->id }}">
                                        <span style="padding-left: 10px;" >{{ $project->name }}</span>
                                    </a>
                                </td>
                                <td>
                                  @foreach ($project->team->users as $member)
                                    <a href="#" class="td-profile-thumb"><img src="images/avatar/michael-owens.jpg" alt="user"></a>
                                  @endforeach
                                </td>
                                <td> 51 </td>
                                <td> 61 </td>
                                <td> 73 </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="60"></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    </table>
                @endif

        </div>
        </div>
    </div>
</div>
</div>

@section('scripts')
<script src="js/lib/jquery.dataTables.js"></script>
<script src="js/lib/dataTables.responsive.js"></script>
<script src="js/lib/dataTables.tableTools.js"></script>
<script src="js/lib/dataTables.bootstrap.js"></script>
@stop