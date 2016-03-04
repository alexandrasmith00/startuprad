@extends('layouts.app')


@section('content')



       
<div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Startup RAD Projects</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-hover">
                    <tbody>
                        
                                                
                      @foreach (Auth::user()->cohorts as $cohort)

                        @foreach ($cohort->ideas as $project)
                        
                          <tr>
                              <td>{{ $project->name }} </td>  
                  
                          </tr>
                      
                        @endforeach
                      @endforeach
                            

                    </tbody>
                  </table>
                    
                    
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                  
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

@stop
