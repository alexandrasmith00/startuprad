<aside class="rightbar">
  <div class="rightbar-container">
    
    @include('includes.sidebar-right.chat')

    <ul class="nav nav-tabs material-tabs rightbar-tab" role="tablist">
        <li style="width:50%; text-align: center;" class="active"><a href="#chat" aria-controls="message" role="tab" data-toggle="tab">Chat</a></li>
        <li style="width:50%; text-align: center;" ><a href="#activities" aria-controls="notifications" role="tab" data-toggle="tab">Activities</a></li>
    </ul>
    
    <div class="tab-content">
        @include('includes.sidebar-right.chat-pane')
        @include('includes.sidebar-right.activity-pane')
    </div>
  </div>
</aside>