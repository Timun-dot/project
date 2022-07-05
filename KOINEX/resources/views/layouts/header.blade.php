<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('assets/auth/css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
      header{
        background-image: url('{{ asset('assets/images/background.jpg')  }}');
        position: relative;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: auto;
        height: 100vh;
                
                }
      body {
        background-image: url('{{ asset('assets/images/background2.jpg')  }}');
        position: relative;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: auto;
        height: 100vh;
      }
      div.banner{
        background-image: url('{{ asset('assets/images/banner.jpg') }}');
        background-position: top;
        width: 100%;
      }
      li{
        text-align: center;
        color: white;
      }
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        background-color: rgba(68, 68, 68, 0.60);
        width: 100%;
      }

      td, th {
        border-bottom: 1px solid #ddd;
        color: #e9e9e9;
        text-align: left;
        margin: 2px;
        padding: 6px;
      }

      tr:hover {background-color: #e9e9e9;} {
        border-bottom: 1px solid #ddd;
        background-color: #aaaaaa;
        text-align: left;
        padding: 8px;
      }
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: rgba(136, 30, 185, 0.644);
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }

      #myBtn:hover {
        background-color: #555;
      }
      /* width */
      ::-webkit-scrollbar {
        width: 10px;
      }

      /* Track */
      ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 0px;
        background-color: rgba(68, 68, 68, 0.5);
        border-radius: 8px;
      }

      /* Handle */
      ::-webkit-scrollbar-thumb {
      background: rgba(114, 0, 180, 0.774);
      border-radius: 8px;
      }
      </style>
</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top" ><i class="fa-thin fa-arrow-up"></i>UP</button>
<!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">KOINEX</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('cdashboard') }}">Crypto Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
      