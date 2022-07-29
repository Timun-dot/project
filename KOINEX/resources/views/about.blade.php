
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="icon" href="{{ asset('assets/images/default.png') }}" type="image/icon type">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap');
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
        font-family: 'Montserrat', sans-serif;
      }
      li{
        text-align: center;
        color: white;
      }
      
      .column {
        width: 30%;
        margin-bottom: 15px;
        align-self: center;
        padding-left: 100px;
      }

      .card {
        box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2);
        margin: 6px;
      }

      .about-section {
        align-self: center;
        padding-left: 60px;
        padding-right: 40px;
        text-align: center;
        background-color: #474e5d;
        color: white;
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

      <section style="align-content: center">
        <div style="height: auto; width: auto">          
          <div style="text-align: center; color: white; background-color:rgba(0, 0, 0, 0.5)">
            <h3>About Us</h3>
            <p style="font-size: 18px">The KOINEX is a Malaysia-based company. It is engaged in the business of providing consulting services and education for distributed ledger technologies for the building of technological infrastructure and enterprise blockchain technology solutions.</p>
            <p style="font-size: 18px">Some text about who we are and what we do.</p>
            <p style="font-size: 18px">We are the new team that have passion to create cryptocurrency as main currency. Also bring the new response to the community about cryptocurrency.</p>
          </div>

          <br><br>
          <div class="left-image-post" style="color:white">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img style="padding-left: 10px; width:40rem ; height:20rem;" src="{{ asset('assets/images/tech.jpg') }}" alt=""/> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4>Our Vision</h4>
                  <p>
                    Expand and explore more about blockchains. Become the most realible website for cryptocurrency in terms of listing wesbite.
                  </p>
                  <p>
                    To accelerate the world's transition to sustainable energy. 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="right-image-post" style="color: white">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h4>Our Mision</h4>
                  <p>
                    We are focus more to cryptocurrency rather than other blockchains technology. We want to explore more in the blockchains and develop somethings that give benefit to other people.
                  </p>
                  <p>
                    KOINEX works to enhance the dignity and quality of individuals by strengthening knowlegde, eliminating barriers from scared to technology, and helping people in need reach their full potential through learning and the power of cryptocurrency.
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img style="padding-right: 10px; width:40rem ; height:20rem; " src="{{ asset('assets/images/crypto1.jpg') }}" alt=""/> 
                </div>
              </div>
            </div>
          </div>

          <div style="height: 90px;">
          </div>

          <h2 style="text-align:center; color:white;">Our Team</h2>
          <div class="row">
            <div class="column">
              <div class="card">
                <div class="container">
                  <h2>Muhd Iqmal</h2>
                  <p class="title">Founder and Developer</p>
                  <p>"Word hard until reach your limit."</p>
                  <p>m.iqmal3005@gmail.com</p>
                  <p>Feel free to contact us with your comment or question.</p>
                  <p><a href="{{ route('contact-us') }}"><button class="button">Contact</button></a></p>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <div class="container">
                  <h2>Isabelle</h2>
                  <p class="title">Project Manager and Designer</p>
                  <p>"Build your own dreams or someone else will hire you."</p>
                  <p>Isabelle123@gmail.com</p>
                  <p>Feel free to contact us with your comment or question.</p>
                  <p><a href="{{ route('contact-us') }}"><button class="button">Contact</button></a></p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <div class="container">
                  <h2>Umar Arif</h2>
                  <p class="title">Designer</p>
                  <p>"Manage your time or time will manage you."</p>
                  <p>UmarArif@gmail.com</p>
                  <p>Feel free to contact us with your comment or question.</p>
                  <p><a href="{{ route('contact-us') }}"><button class="button">Contact</button></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          
      <footer class="footer nt-auto py-3 bg-dark">
        <div class="container text-center">
           <span class="text-muted">@Cryptocurrency(2022)</span>
        </div>
    </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>