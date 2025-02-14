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
          <li><a href="/admin/add-banner-details"><i class="fa fa-comment white_color"></i><span>Add Banner</span></a></li>
          <li><a href="/admin/add-highlight"><i class="fa fa-comment white_color"></i><span>Add Highlight</span></a></li>

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