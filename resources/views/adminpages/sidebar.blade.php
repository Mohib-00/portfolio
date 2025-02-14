  <!-- Sidebar  -->
  <nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="/admin"><img class="logo_icon img-responsive admin" src="{{asset('dummy.png')}}" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><a href="/admin"><img class="img-responsive" src="{{asset('dummy.png')}}" alt="#" /></a></div>
             <div class="user_info">
                <a href="/admin"><h6>{{$userName}}</h6></a>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4 class="chokokutai-regular">Logix 199</h4>
       <ul class="list-unstyled components">
           
          <li><a href="/admin/users"><i class="fa fa-users orange_color"></i> <span>Users</span></a></li>
          <li><a href="/admin/messages"><i class="fa fa-comment white_color"></i><span>Messages</span></a></li>
          <li><a href="/admin/add-banner-details"><i class="fa fa-flag green_color"></i><span>Add Banner</span></a></li>
          <li><a href="/admin/add-highlight"><i style="color:grey" class="fa fa-bullhorn"></i><span>Add Highlight</span></a></li>
          <li><a href="/admin/add-overview"><i style="color:brown" class="fa fa-trophy"></i><span>Add Overview</span></a></li>
          <li><a href="/admin/add-Working_Group_Participation"><i style="color:purple" class="fa fa-user-plus"></i><span>Group Member</span></a></li>
          <li><a href="/admin/add-members"><i style="color:blue" class="fa fa-user"></i><span>Add Member</span></a></li>

          <li>
            <a href="#elemen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i style="color:crimson" class="fa fa-globe"></i><span>What We Do</span></a>
            <ul class="collapse list-unstyled" id="elemen">
               <li><a href="/admin/add-workstream"> <span>Workstreams</span></a></li>
               <li><a href="/admin/add-network"> <span>Leveraging Our Networks</span></a></li>
            </ul>
         </li>


          <li>
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog yellow_color"></i><span>Settings</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li><a href="/admin/website-settings"> <span>Website Settings</span></a></li>
                <li class="logout"><a> <span>Logout</span></a></li>
             </ul>
          </li>
        </ul>
    </div>
 </nav>
 <!-- end sidebar -->