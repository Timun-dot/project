
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crypto-Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <style>
      header{
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
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }
      li{
        text-align: center;
        color: white;
      }

      html {
        box-sizing: border-box;
      }

      *, *:before, *:after {
        box-sizing: inherit;
      }

      .column {
        float: left;
        width: 30%;
        margin-bottom: 15px;
        padding: 0 8px;
      }

      .card {
        box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2);
        margin: 6px;
      }

      .about-section {
        padding: 40px;
        text-align: center;
        background-color: #474e5d;
        color: white;
      }

      .container {
        padding: 0 13px;
      }

      .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
      }

      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }

      footer {
          position:relative;
          left: 0;
          bottom: 0;
          width: 100%;
          text-align: center;
        }
      </style>
</head>
<body>

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
                <a class="nav-link" href="{{ route('cdashboard') }}">Crypto Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('about') }}">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 

      <div style="height: 650px">
        <div class="about-section">
          <h1>About Us Page</h1>
          <p>Some text about who we are and what we do.</p>
          <p>Resize the browser window to see that this page is responsive by the way.</p>
        </div>
        
        <h2 style="text-align:center; color:white;">Our Team</h2>
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="{{ asset('assets/images/user.png') }}" alt="Jane" style="width:35%">
              <div class="container">
                <h2>Jane Doe</h2>
                <p class="title">CEO & Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>jane@example.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="{{ asset('assets/images/user.png') }}" alt="Mike" style="width:35%">
              <div class="container">
                <h2>Mike Ross</h2>
                <p class="title">Art Director</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>mike@example.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
        
          <div class="column">
            <div class="card">
              <img src="{{ asset('assets/images/user.png') }}" alt="John" style="width:35%">
              <div class="container">
                <h2>John Doe</h2>
                <p class="title">Designer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>john@example.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
          
  <footer class="footer nt-auto py-3 bg-dark" style="display: flex">
    <div class="container text-center">
        <span class="text-muted">@Cryptocurrency(2022)</span>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>