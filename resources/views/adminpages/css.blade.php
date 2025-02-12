<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- Site Metas -->
  <title>Admin</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- Site Icon -->
  <link rel="icon" href="{{asset('logix.png')}}" type="image/png" />
  
  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('adminboard/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('adminboard/style.css')}}" />
  <link rel="stylesheet" href="{{asset('adminboard/css/responsive.css')}}" />
  <link rel="stylesheet" href="{{asset('adminboard/css/bootstrap-select.css')}}" />
  <link rel="stylesheet" href="{{asset('adminboard/css/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{asset('adminboard/css/custom.css')}}" />
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chokokutai&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  
  <style>
    body {
      background-color: hsl(0, 0%, 10%);
      font-family: 'Open Sans', sans-serif;
    }
    
    .chokokutai-regular {
      font-family: "Chokokutai", system-ui;
      font-weight: 400;
      font-style: normal;
    }

    body {
      margin: 0;
      height: 100vh;
      overflow: hidden;  
      font-family: 'Open Sans', sans-serif;
    }
    
    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.85);  
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .circle {
      position: absolute;
      border: 3px solid transparent;
      border-top-color: hsl(83, 82%, 53%);
      border-radius: 50%;
      animation: rotate linear infinite;
    }

    .circle.one {
      height: 50px;
      width: 50px;
      animation-duration: 0.85s;
    }

    .circle.two {
      height: 75px;
      width: 75px;
      animation-duration: 0.95s;
    }

    .circle.three {
      height: 100px;
      width: 100px;
      animation-duration: 1.05s;
    }

    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }
  </style>
