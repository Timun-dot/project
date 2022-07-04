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

        body, html {
            height: 100%;
            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #777;
        }

        .bgimg-1, .bgimg-2, .bgimg-3 {
            position: relative;
            opacity: 0.95;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .bgimg-1 {
            background-image: url('{{ asset('assets/images/background2.jpg')  }}');
            min-height: 100%;
        }

        .bgimg-2 {
            background-image: url('{{ asset('assets/images/background3.jpg')  }}');
            min-height: 100%;
        }

        .bgimg-3 {
            background-image: url('{{ asset('assets/images/background4.jpg')  }}');
            min-height: 100%;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;
        }

        h3 {
            letter-spacing: 5px;
            text-transform: uppercase;
            font: 20px "Lato", sans-serif;
            color: #111;
        }

        </style>
    <body>
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
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div class="bgimg-1">
            <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">The Idea for Cryptocurrency</span>
            </div>
          </div>
          
        <div style="color: #ddd;background-color: #282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>The idea for cryptocurrency first began in the late 1980s, the idea was for a currency that could be sent untraceably and in a manner that did not require centralized entities (i.e. Banks). In 1995, American cryptographer David Chaum implemented an anonymous cryptographic electronic money called Digicash. It was an early form of cryptographic electronic payments which required user software to withdraw from a bank and required specific encrypted keys before it could be sent to a recipient.</p>
            <p>Bit Gold, often called a direct precursor to Bitcoin, was designed in 1998 by Nick Szabo. It required a participant to dedicate computer power to solving cryptographic puzzles, and those who solved the puzzle received the reward. If you put Chaum’s and Szabo’s concepts together, then you have something that resembles Bitcoin.</p>
          </div>

        <div class="bgimg-2">
            <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">The Beginning (2008-2010)</span>
            </div>
        </div>

        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>On October 31, 2008, Satoshi Nakamoto published the white paper called Bitcoin – A Peer to Peer Electronic Cash System, describing the functionality of the Bitcoin blockchain network. Satoshi formally began work on the bitcoin project on August 18th, 2008, when they purchased Bitcoin.org. The history of Bitcoin was now underway. Satoshi Nakamoto mined the first block of the Bitcoin network on January 3, 2009.</p>
            <p>This first block of 50 Bitcoins is now referred to as the Genesis Block. Bitcoin had almost no value for the first few months of their existence. Six months after they started trading in April 2010, the value of one Bitcoin was less than 14 cents. In May the pizza was bought, and by early November it surged to 36 cents before settling in at around 29 cents.</p>
            </div>
        </div>

        <div class="bgimg-3">
            <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">The Market Begins to Form (2010-2014)</span>
            </div>
        </div>
        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>In February 2011 it rose to $1.06 before coming back down to 87 cents or so. In the spring, in part due to a Forbes story on the new “crypto currency,” the price took off. From early April to the end of May, the cost for a Bitcoin rose from 86 cents to $8.89. On June 1, after Gawker published a story about the currency’s appeal in the online drug dealing community, the price more than tripled in a week to about $27.</p>
            <p>The market value of bitcoins in circulation was nearly $130 million. By the time September 2011 came around though, the value had dropped back down to around $4.77. In October 2011, Litecoin appeared, as had other spin-off conceptualizations of Bitcoin, often referred to as altcoins.</p>
            <p>In 2012, Bitcoin prices grew steadily, and in September of that year the Bitcoin Foundation was founded to promote Bitcoin’s development and uptake.  On 19 November 2013 its price reached $755 just to crash down to $378 the same day, and by November 30 it was all the way up to $1,163 again. This was the beginning of another long-term crash that ended with Bitcoin dropping back down to $152 by January 2015. </p>
            </div>
          </div>
          
          <div class="bgimg-1">
            <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Scams Dominate Headlines (2014-2016)</span>
            </div>
          </div>

          <div style="color: #ddd;background-color: #282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>Though intentional, anonymity and lack of centralized control make digital currency a lucrative venture and opportunity for criminals. In January 2014, Mt.Gox, the world’s largest bitcoin exchange at the time, collapsed and declared bankruptcy, having lost 850,000 bitcoin. While it’s not known exactly what happened, it is likely that the bitcoin were actually stolen slowly over time, beginning in 2011.</p>
            <p>While the hack was not a singular event, it has served as a cautionary tale, and security on exchanges is much improved. Though <a href="https://www.cryptovantage.com/news/five-stories-that-rocked-cryptocurrency-in-2019/" target="blank">7 major cryptocurrency exchanges were hacked in 2019</a>, exchanges now provide more guarantees on their reserve holdings in case of hacks, such as Secure Asset Fund for Users on Binance, which is an emergency insurance fund.</p>
            <p>Crypto traders are advised to use a hardware or software wallet to safely store their cryptocurrency rather than storing them on an exchange. Wallets such as these were not as easily accessible during this period in the history of cryptocurrency.</p>
        </div>

          <div class="bgimg-2">
            <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Bitcoin Ascends to Worldwide Phenomenon (2016-2018)</span>
            </div>
        </div>

        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
            <p>Bitcoin prices rose steadily year over year, going from $434 in January 2016, to $998 in January 2017. In July 2017, a software upgrade to Bitcoin was approved intending to support the Lightning Network as well as improve scalability. A week after the upgrade was activated in August, Bitcoin was trading at around $2700, and by December 17, 2017, Bitcoin reached an astronomical all time high of just under $20,000.</p>
            <p>During this same time, a new blockchain project called Ethereum was making noise in the cryptocurrency sphere and was the number two cryptocurrency on the market. It brought smart contracts to cryptocurrency, opening a wide array of potential use cases and generating over 200,000 different projects and counting.</p>
            <p>All these projects have their own cryptocurrencies with their own purposes and goals which are often different from Bitcoin’s. There are now also other blockchains trying to compete with Ethereum, such as Cardano, or Tezos, and the cryptocurrency world continues to expand and grow in market cap.</p>
            </div>
        </div>

        <div class="bgimg-3">
          <div class="caption">
          <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Bust and Eventual Recovery (2018-Present)</span>
          </div>
      </div>
      <div style="position:relative;">
          <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
          <p>Bitcoin was not able to sustain its all-time, and Ethereum, which reached its own all time high in January 2018 at around $1,400, was also not able to sustain. And by the end of 2018 Bitcoin had dropped down to around $3700. Prices did not stay down however, and since the end of 2018, Bitcoin, along with most other cryptocurrencies, Ethereum included, have rebounded in the present.</p>
          <p>While the volatility of cryptocurrencies is both attractive and potentially devastating, the underlying technology behind them all, blockchain, has the power to change many sectors of our society, securing your own funds so that no one but you can access them, or providing accurate data for your insurance quote, blockchain technology can be used in almost any area of our everyday life.</p>
          <p>As the market becomes more stable with increased knowledge, and with the introduction of concepts such as stablecoins and decentralized finance, it is easy to be excited about investment and technological potential, whether its Bitcoin or another blockchain project you think is interesting.</p>
          </div>
        </div>

        <div class="bgimg-1">
          <div class="caption">
          <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">COOL!</span>
          </div>
        </div>

        
    <footer class="footer nt-auto py-3 bg-dark">
        <div class="container text-center">
           <span class="text-muted">@Cryptocurrency(2022)</span>
        </div>
    </footer>
    
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/auth/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/auth/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/auth/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/auth/js/datatables-simple-demo.js') }}}"></script>
    
    </body>
    </head>