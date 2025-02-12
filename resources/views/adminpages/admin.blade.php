<!DOCTYPE html>
<html>
<head>
    @include('adminpages.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 @include('adminpages.navbar')
 @include('adminpages.sidebar')
 

 

  <div class="content-wrapper">
    @include('adminpages.dashboard')
    
  </div>
  @include('adminpages.footer')
  
</div>
@include('adminpages.js')

</body>
</html>
