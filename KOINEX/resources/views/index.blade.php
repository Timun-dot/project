<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Crypto-Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="{{ asset('assets/auth/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap');
                
                *{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Montserrat', sans-serif;
                }
                
                header{
                    background-image: url('{{ asset('assets/images/background2.jpg')  }}');
                    position: relative;
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    width: auto;
                    height: 100vh;
                
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
      
                .logo_img{
                    margin-left: 152px;
                }
                
                .logo_text{
                    display: inline-block;
                    margin-left:197px;
                    position: absolute;
                    bottom: 20px;
                }
                        
                .title{
                    font-size:30px;
                    position: absolute;
                    top: 30%;
                    margin-left:152px;
                    font-size: 32px;
                    font-weight: 200;
                    color: white;
                }
                
                .title_p{
                    font-size: 44px;
                    font-weight: 600;
                }
                .title_p2{
                    margin-bottom: 2px;
                    font-size: 14px;
                    line-height: 22px;
                    position: relative;
                    bottom: 7px;
                    
                }
                
                .button
                {
                    position: relative;
                    top: 7px;
                }
                
                .button_link{
                    text-decoration: none;
                    font-size: 20px;
                    padding:5px 40px;
                    border-radius: 30px;
                    
                    background-image: linear-gradient(to right, #669ce6,#b667dd,#f530c9);
                        color: white
                }
                
                .pic{
                    float: right;
                    position: relative;
                    top: 160px;
                    right: 100px;
                }
                
                .pic {
                    
                    width: 320px;
                    height: 320px;
                    position: absolute;
                    
                    -webkit-animation:spin 4s linear infinite;
                    -moz-animation:spin 4s linear infinite;
                    animation:spin 4s linear infinite;
                }
                
                .container .coin-price{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 8px 10px;
                    border-radius: 3px;
                    box-shadow: 0 0 1px #ccc;
                    margin: 3px;
                }
                
                .container .coin-price .logo{
                    width: 50px;
                    margin-right: 30px;
                }
                .container .coin-price .logo img{
                    width: 55%;
                }
                .container .coin-price div{
                    display: block;
                }
                .container .coin-price div h1{
                    font-size: 10px;
                }
                @-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
                @-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
                @keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }
            </style>
    </head>
    <body>
        <div class="div"><rssapp-ticker id="tLheTsZ5209ble4K"></rssapp-ticker></div>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('home') }}">KOINEX</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('cdashboard') }}">Crypto Dashboard</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                      </li>
                    </ul>
                  </div>
                  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Settings</a></li>
                            <li><a class="dropdown-item" href="{{ route('contact-us') }}">Contact Us</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-divider" href="{{ route('admin') }}">Admin Dashboard</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
              </nav>
              <div class="title">
                <p>Cyber Technology</p>
                <p class="title_p">Technology-ERA</p>
                <small class="title_p2">Best place to adapt your power technology. which  will give 
                <p>you strength.Best place to adapt your power technology.</p>
                <p>which will give you strength</p></small>
            <div class="button"><a href="{{ route('info') }}" class="button_link">Explore</a></div>
        </div>
         
        <img src="{{ asset('assets/images/Gold_Bitcoin_Cryptocurrency_Money_Stickers-removebg-preview.png') }}" class="pic" alt="">
        <hr class="solid">  
    </header>
   
    

    <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
        <div style="height:40px; padding:0px; margin:0px; width: 100%;">
            <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1521&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
        </div>
    </div>
    <footer class="footer nt-auto py-3 bg-dark">
        <div class="container text-center">
           <span class="text-muted">@Cryptocurrency(2022)</span>
        </div>
    </footer>

    <script src="https://widget.rss.app/v1/ticker.js" type="text/javascript" async></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/auth/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/auth/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/auth/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/auth/js/datatables-simple-demo.js') }}}"></script>    
</body>
</html>