<!DOCTYPE html>
<html lang="en">
   <head>
      @include('adminpages.css')
   </head>
   <body class="dashboard dashboard_1" style="height:auto">
      <div class="full_container">
         <div class="inner_container">
            @include('adminpages.sidebar')
           
             <div id="content">
               @include('adminpages.navbar')
                <div class="midde_cont">
                  @include('adminpages.dashboard')
                  </div>

  <div class="container-fluid" style="margin-top:30%">
   <div class="footer">
      <p>Copyright © 2024 Designed by Logix. All rights reserved.<br><br>
         Distributed By: <a>Logix</a>
      </p>
   </div>
</div>
                  
               </div>
             
            </div>
         </div>
      </div>
       @include('adminpages.js')
       @include('ajax')
   </body>
</html>