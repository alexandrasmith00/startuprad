@extends('layouts.app')

@section('content')


<!--Page Container Start Here-->
<section class="main-container">
<div class="container">
<div class="page-header filled light">
    <div class="row">
        <div class="col-md-7 col-sm-7">
        </div>
        <div class="col-md-5 col-sm-5">
            

  
                        <form class="form-horizontal">
         
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tags</label>
                            <div class="col-md-8">
                                <select id="multiple" class="form-control select2-multiple" multiple>
                                    <option value="AK">RAD NOW</option>

                                    <optgroup label="Profile Fields">
                                        <option value="name">Name</option>
                                        <option value="tagline">Tagline</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

            
            
       
        </div>

    </div>
</div>

<div class="row">

<div class="col-md-12">
<div class="widget-wrap">
    <div class="widget-header block-header margin-bottom-0 clearfix">
        <div class="pull-left">
            <h3>Recent Comments</h3>
            <p>All comments are posted by users</p>
        </div>
        <div class="pull-right w-action">
            <ul class="widget-action-bar">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
                    <ul class="dropdown-menu">
                        <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh-alt"></i></a></li>
                        <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                        <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                        <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="widget-container margin-top-0">
        <div class="widget-content">
            <div class="recent-comments-list">
                <div class="recent-comments">
                    <div class="recent-comment-meta">
                        <div class="comment-user-thumb">
                            <a href="#"><img src="images/avatar/oykun.jpg" alt="user"></a>
                        </div>
                        <div class="comment-user-info">
                            <ul>
                                <li class="u-name"><a href="#">Allen V. Ellingsworth</a></li>
                                <li class="p-time"><i class="zmdi zmdi-time"></i> 30 Min Ago</li>
                            </ul>
                        </div>
                        <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                    </div>
                    <div class="comment-text">
                        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
                    </div>
                </div>
                <div class="recent-comments">
                    <div class="recent-comment-meta">
                        <div class="comment-user-thumb">
                            <a href="#"><img src="images/avatar/mikeluby.jpg" alt="user"></a>
                        </div>
                        <div class="comment-user-info">
                            <ul>
                                <li class="u-name"><a href="#">John J. Markham</a></li>
                                <li class="p-time"><i class="zmdi zmdi-time"></i> 1 Hour Ago</li>
                            </ul>
                        </div>
                        <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                    </div>
                    <div class="comment-text">
                        <p>Lastly we see him an old man, weak and ailing. The rungs of the ladder have all been climbed, and only a black abyss yawns before his faltering foot.</p>
                    </div>
                </div>
                <div class="recent-comments">
                    <div class="recent-comment-meta">
                        <div class="comment-user-thumb">
                            <a href="#"><img src="images/avatar/mds.jpg" alt="user"></a>
                        </div>
                        <div class="comment-user-info">
                            <ul>
                                <li class="u-name"><a href="#">Ronald S. Hawkins</a></li>
                                <li class="p-time"><i class="zmdi zmdi-time"></i> 2 Hours Ago</li>
                            </ul>
                        </div>
                        <span class="comments-reply"><a href="#"><i class="zmdi zmdi-mail-reply"></i></a></span>
                    </div>
                    <div class="comment-text">
                        <p>A Being, clad in Grey, is speaking. He is speaking of the Life of Man.</p>
                    </div>
                </div>
                <button class="btn btn-link btn-block btn-loadmore">Load More</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-7">
    <div class="widget-wrap">
        <div class="widget-header block-header margin-bottom-0 clearfix">
            <div class="pull-left">
                <h3>Notifications</h3>
                <p>Examples of notifications styles</p>
            </div>
            <div class="pull-right w-action">
                <ul class="widget-action-bar">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
                        <ul class="dropdown-menu">
                            <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh-alt"></i></a></li>
                            <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                            <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                            <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="widget-container">
            <div class="widget-content">
                <div class="alert alert-warning alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-danger alert-dismissible fade in iconic-alert clearfix " role="alert">
                    <div class="alerts-icon">
                        <i class="zmdi zmdi-alert-circle-o"></i>
                    </div>
                    <div class="alert-details">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4>Oh snap! You got an error!</h4>
                        <p>Change this and that and try again. Duis mollis, est non commodo luctus.</p>
                        <button type="button" class="btn btn-default btn-sm">Ok got it</button>
                    </div>
                </div>
                <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                </div>
                <div class="alert alert-info" role="alert">
                    <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                </div>
                <div class="alert alert-warning" role="alert">
                    <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
                </div>
                <div class="alert alert-danger margin-bottom-0" role="alert">
                    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-5">
<div class="widget-wrap">
<div class="widget-header block-header margin-bottom-0 clearfix">
    <div class="pull-left">
        <h3>Todo List</h3>
        <p>A todo list with collapsible details</p>
    </div>
    <div class="pull-right w-action">
        <ul class="widget-action-bar">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
                <ul class="dropdown-menu">
                    <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh-alt"></i></a></li>
                    <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                    <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                    <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="widget-container margin-top-0">
<div class="widget-content">
<div class="task-widget">
<div class="widget-task-list todo-tasklist">
<div class="task-entry">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Check new installed server security issues
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Check wireframe and finalize the design
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <label class="label label-warning">Past Due</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Setup a offloaded mysql server
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-info">low</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Create a full system data backup
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry task-done">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Reply Tickets #LTK986 & #LTK996
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry task-done">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Complete data analysis of new project
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry task-done">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Create a new server for gitlab
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">Low</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry task-done">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Send all author monthly payments
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry task-done">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            New layout design for dashboard
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry task-done">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Fix invoice print version issue
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
<div class="task-entry task-done">
    <div class="task-intro">
        <div class="task-action">
            <input class="task-i-check" type="checkbox">
        </div>
        <div class="task-title">
            Fix mysql security issue
        </div>
    </div>
    <div class="task-details">
        <p>As long as you are reasonably careful about where you step and avoid putting ...</p>
        <label class="label label-danger">High</label>
        <div class="todo-date">
            <div class="todo-due-date">
                <i class="fa fa-clock-o"></i>Due By: Jun 16 at 12:00 PM
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--Footer Start Here -->
<footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <span>© 2015 <a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
<!--Rightbar Start Here-->
<aside class="rightbar">
<div class="rightbar-container">
<div class="aside-chat-box">
    <div class="coversation-toolbar">
        <div class="chat-back">
            <i class="zmdi zmdi-long-arrow-left"></i>
        </div>
        <div class="active-conversation">
            <div class="chat-avatar">
                <img src="images/avatar/amarkdalen.jpg" alt="user">
            </div>
            <div class="chat-user-status">
                <ul>
                    <li>Feeling Blessed</li>
                    <li>Amarkdalen</li>
                </ul>
            </div>
        </div>
        <div class="conversation-action">
            <ul>
                <li><i class="zmdi zmdi-phone-in-talk"></i></li>
                <li class="dropdown">
                    <a href="#" class="btn-more dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="zmdi zmdi-attachment-alt"></i>Attach A File</a></li>
                        <li><a href="#"><i class="zmdi zmdi-mic"></i>Voice</a></li>
                        <li><a href="#"><i class="zmdi zmdi-block"></i>Block User</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="conversation-container">
        <div class="conversation-row even">
            <ul class="conversation-list">
                <li>
                    <p>
                        Hi! this is mike how can I help you?
                    </p>
                </li>
                <li>
                    <p>
                        Hello Sir!
                    </p>
                </li>
            </ul>
        </div>
        <div class="conversation-row odd">
            <ul class="conversation-list">
                <li>
                    <p>
                        Hi! Mike I need a support my account is suspended but I don't know why?
                    </p>
                </li>
            </ul>
        </div>
        <div class="conversation-row even">
            <ul class="conversation-list">
                <li>
                    <p>
                        Ok Sir! Let me check this issue please wait a min
                    </p>
                </li>
            </ul>
        </div>
        <div class="conversation-row odd">
            <ul class="conversation-list">
                <li>
                    <p>
                        Ok sure :)
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <div class="chat-text-input">
        <input type="text" class="form-control">
    </div>
</div>
<ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
    <li class="active"><a href="#chat" aria-controls="message" role="tab" data-toggle="tab">Chat</a></li>
    <li><a href="#activities" aria-controls="notifications" role="tab" data-toggle="tab">Activities</a></li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="chat">
    <div class="chat-user-toolbar clearfix">
        <div class="chat-user-search pull-left">
            <span class="addon-icon"><i class="zmdi zmdi-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <div class="add-chat-list pull-right">
            <i class="zmdi zmdi-accounts-add"></i>
        </div>
    </div>
    <div class="chat-user-container">
        <h3 class="clearfix"><span class="pull-left">Members</span><span class="pull-right online-counter">3 Online</span></h3>
        <ul class="chat-user-list">
            <li>
                <div data-trigger="hover" title="Robertoortiz" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/robertoortiz.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Admin</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left"><span class="chat-avatar"><img src="images/avatar/robertoortiz.jpg" alt="Avatar"></span><span class="chat-u-info">Adellecharles<cite>New York</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-online">
                <div data-trigger="hover" title="Kurafire" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/kurafire.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left"><span class="chat-avatar"><img src="images/avatar/kurafire.jpg" alt="Avatar"></span><span class="chat-u-info">Kurafire<cite>New York</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-away">
                <div data-trigger="hover" title="Mikeluby" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/mikeluby.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left">
                    <span class="chat-avatar"><img src="images/avatar/mikeluby.jpg" alt="Avatar"></span><span class="chat-u-info">Bobbyjkane<cite>London City</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-busy">
                <div data-trigger="hover" title="Joostvanderree" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/joostvanderree.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left">
                    <span class="chat-avatar"><img src="images/avatar/joostvanderree.jpg" alt="Avatar"></span><span class="chat-u-info">Joostvanderree<cite>New York</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
        </ul>
        <h3 class="clearfix"><span class="pull-left">Guests</span><span class="pull-right online-counter">1 Online</span></h3>
        <ul class="chat-user-list">
            <li>
                <div data-trigger="hover" title="Kevinthompson" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/Kevinthompson.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left">
                    <span class="chat-avatar"><img src="images/avatar/kevinthompson.jpg" alt="Avatar"></span><span class="chat-u-info">Kevinthompson<cite>Scotland</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li class="chat-u-online">
                <div data-trigger="hover" title="Mds" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/mds.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left">
                    <span class="chat-avatar"><img src="images/avatar/mds.jpg" alt="Avatar"></span><span class="chat-u-info">Mds<cite>South West, England</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li>
                <div data-trigger="hover" title="Mko" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/mko.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left">
                    <span class="chat-avatar"><img src="images/avatar/mko.jpg" alt="Avatar"></span><span class="chat-u-info">Mko<cite>New York</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li>
                <div data-trigger="hover" title="Coreyweb" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/coreyweb.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left">
                    <span class="chat-avatar"><img src="images/avatar/coreyweb.jpg" alt="Avatar"></span><span class="chat-u-info">Coreyweb<cite>Northern Ireland</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
            <li>
                <div data-trigger="hover" title="Amarkdalen" data-content="<div class='chat-user-info'>
                                        <div class='chat-user-avatar'>
                                        <img src='images/avatar/amarkdalen.jpg' alt='Avatar'>
                                        </div>
                                        <div class='chat-user-details'>
                                        <ul>
                                        <li>Status: <span>Online</span></li>
                                        <li>Type: <span>Moderator</span></li>
                                        <li>Last Login: <span>3 hours Ago</span></li>
                                        <li></li>
                                        </ul>
                                        </div>
                                        </div>
                                        " data-placement="left">
                    <span class="chat-avatar"><img src="images/avatar/amarkdalen.jpg" alt="Avatar"></span><span class="chat-u-info">Oykun<cite>New York</cite></span>
                </div>
                <span class="chat-u-status"><i class="fa fa-circle"></i></span>
            </li>
        </ul>
    </div>
</div>
<div role="tabpanel" class="tab-pane" id="activities">
    <div class="activities-timeline">
        <h3 class="tab-pane-header">Recent Activities</h3>
        <ul class="activities-list">
            <li>
                <div class="activities-badge">
                    <span class="w_bg_amber"><i class="zmdi zmdi-ticket-star"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Resolved Tickets #LTK7865</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> 30 min ago
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_cyan"><i class="zmdi zmdi-file-plus"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Files Uploaded</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> 1 hour ago
                    </div>
                    <div class="activities-post">
                        <ul class="new-file-lists">
                            <li><a href="#"><i class="fa fa-file-text"></i> change-log.txt</a></li>
                            <li><a href="#"><i class="fa fa-file-audio-o"></i> skype-conversation.mp3</a></li>
                            <li><a href="#"><i class="fa fa-file-powerpoint-o"></i> presentation.ppt</a></li>
                            <li><a href="#"><i class="fa fa-file-video-o"></i> howtouse.avi</a></li>
                            <li><a href="#"><i class="fa fa-file-image-o"></i> screenshot.jpg</a></li>
                            <li><a href="#"><i class="fa fa-file-word-o"></i> nda.doc</a></li>
                            <li><a href="#"><i class="fa fa-file-pdf-o"></i> resume.pdf</a></li>
                            <li><a href="#"><i class="fa fa-file-archive-o"></i> all-files.zip</a></li>
                            <li><a href="#"><i class="fa fa-file-excel-o"></i> bill.xls</a></li>
                            <li><a href="#">+10</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_light_blue"><i class="zmdi zmdi-image"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Images Uploaded</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-image-lists">
                            <li><a href="#"><img src="images/img-1-thumb.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/img-2-thumb.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/img-3-thumb.jpg" alt="image"></a></li>
                            <li><a href="#" class="more-list"><i class="zmdi zmdi-more-horiz"></i></a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_green"><i class="zmdi zmdi-accounts-alt"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Users Approved</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-user-lists">
                            <li><a href="#"><img src="images/avatar/oykun.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/avatar/mds.jpg" alt="image"></a></li>
                            <li><a href="#"><img src="images/avatar/robertoortiz.jpg" alt="image"></a></li>
                            <li><a href="#" class="more-list"><i class="zmdi zmdi-more-horiz"></i></a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_deep_purple"><i class="zmdi zmdi-file-text"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Post New Article</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-post-lists">
                            <li><a href="#">Man in the Verde Valley</a></li>
                            <li><a href="#">Sinagua Pueblo Life</a></li>
                            <li><a href="#">Montezuma Well</a></li>
                            <li><a href="#">The Natural Scene</a></li>
                            <li><a href="#">+6</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="activities-badge">
                    <span class="w_bg_teal"><i class="zmdi zmdi-comments"></i></span>
                </div>
                <div class="activities-details">
                    <h3 class="activities-header"><a href="#">Comments Replied</a></h3>
                    <div class="activities-meta">
                        <i class="fa fa-clock-o"></i> July 22 at 1:12pm
                    </div>
                    <div class="activities-post">
                        <ul class="new-comments-lists">
                            <li><a href="#">As long as you are reasonably careful about where you step and avoid putting ...</a></li>
                            <li><a href="#">Montezuma Castle is 5 miles north of Camp Verde, 60 miles south...</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</aside>

@stop

@section('scripts')
<script>
    $('.logout-alert').on('click', function (e) {
    
        swal({   
            title: "Are you sure?",   
            text: "You will be logged out.",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Log me out",   
            closeOnConfirm: false 
        }, function(){   
                window.location.href = 'logout';
        });
    });
</Script>
@stop



