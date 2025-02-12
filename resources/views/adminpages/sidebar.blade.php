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
           
          <li class="users"><a href="/admin/users"><i class="fa fa-users orange_color"></i> <span>Users</span></a></li>
          <li class="messages"><a><i class="fa fa-comment white_color"></i><span>Messages</span></a></li>
          <li class="profile"><a><i class="fa fa-user purple_color"></i><span>My Profile</span></a></li>
          <li class="servicecccccc"><a><i class="fa fa-star green_color"></i><span>Add Experience</span></a></li>
          <li class="projectsssssss"><a><i class="fa fa-folder red_color"></i><span>Add Projects</span></a></li>
          <li class="feedbackkkkkkkkk"><a><i class="fa fa-comment white_color"></i><span>Add Feedback</span></a></li>
          <li class="bloggggggg"><a><i style="color:black" class="fa fa-globe white_color"></i><span>Add Blog</span></a></li>
          <li class="aboutusservice"><a><i style="color:black" class="fa fa-star orange_color"></i><span>About Us Service</span></a></li>
          <li class="addwebdetails"><a><i style="color:black" class="fa fa-folder white_color"></i><span>Web Details</span></a></li>
          <li class="addgraphicdetails"><a><i style="color:black" class="fa fa-comment red_color"></i><span>Graphic Details</span></a></li>
          <li class="addmarketingdetails"><a><i style="color:black" class="fa fa-star green_color"></i><span>Marketing Details</span></a></li>
          <li class="addposdetails"><a><i style="color:black" class="fa fa-comment grey_color"></i><span>POS Details</span></a></li>
          
          <li class="addroductdetails"><a><i style="color:white" class="fa fa-star grey_color"></i><span>Add Product Details</span></a></li>


          <li>
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog yellow_color"></i><span>Settings</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li class="website"><a> <span>Website Settings</span></a></li>
                <li class="Slider"><a> <span>Slider</span></a></li>
                <li class="logout"><a> <span>Logout</span></a></li>
             </ul>
          </li>
        </ul>
    </div>
 </nav>
 <!-- end sidebar -->