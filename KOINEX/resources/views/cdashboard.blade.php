
@extends('layouts.main')

@section('Content')

<div>
  <br><h1 style="text-align: center; color: white;">KOINEX CRYPTOCURRENCY DASHBOARD</h1><br>
</div>
<div class="container-lg" style="margin: 0 auto;">
  <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
    <div style="height:300px; padding:0px; margin:0px; width: 100%;">
      <iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1521" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe>
    </div>
  </div>
</br>
  <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
    <div style="height:300px; padding:0px; margin:0px; width: 100%;">
      <iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=145&pref_coin_id=1521" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe>
    </div>
  </div>
</div>
<br><br>
<div class="container-lg" style="margin: 0 auto;">
      <table>
        <tr>
          <th>#</th>
          <th>Crypto</th>
          <th>Name</th>
          <th>Price</th>
          <th>1d</th>
          <th>7d</th>
          <th>30d</th>
          <th>Circulating Supply</th>
          <th>Market Cap</th>
          
        </tr>
        @foreach($response as $currency)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><img src={{ $currency['logo_url'] }} style="width: 25px; margin:0.5px auto;"></td>
              <td>{{ $currency['name'] }}</td>
              <td>RM {{ number_format($currency['price'],2) }}</td>
              @if($currency['1d']['price_change_pct']>0)
              <td style="color: rgb(83, 255, 83); font-weight:bold;">{{ number_format($currency['1d']['price_change_pct'],2) }}</td>
              @else
              <td style="color: rgb(255, 58, 58); font-weight:bold;">{{ number_format($currency['1d']['price_change_pct'],2) }}</td>
              @endif
              @if($currency['7d']['price_change_pct']>0)
              <td style="color: rgb(83, 255, 83); font-weight:bold;">{{ number_format($currency['7d']['price_change_pct'],2) }}</td>
              @else
              <td style="color: rgb(255, 58, 58); font-weight:bold;">{{ number_format($currency['7d']['price_change_pct'],2) }}</td>
              @endif
              @if($currency['30d']['price_change_pct']>0)
              <td style="color: rgb(83, 255, 83); font-weight:bold;">{{ number_format($currency['30d']['price_change_pct'],2) }}</td>
              @else
              <td style="color: rgb(255, 58, 58); font-weight:bold;">{{ number_format($currency['30d']['price_change_pct'],2) }}</td>
              @endif
              <td>RM {{ number_format($currency['circulating_supply'],2) }}</td>
              <td>RM {{ number_format($currency['market_cap'],2) }}</td>
              
            </tr>
        @endforeach
      </table>
</div>
<br>
  <br><br>
  <div><h3 style="text-align: center; text-size: 16px; color: white;"> Latest News About Cryptocurrency</h3><rssapp-magazine id="tLheTsZ5209ble4K"></rssapp-magazine></div>
        <div class="w3-container w3-padding-32" style="background-color: rgba(68, 68, 68, 0.5); width: 100%;" id="contact">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16" style="background-color: rgba(68, 68, 68, 0.5); width: 100%;">Contact</h3>
            <p>Lets get in touch and talk about your next project.</p>
            <form action="{{ route('cdashboard') }}">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
              <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
              <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
              <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
              <button class="w3-button w3-black w3-section" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
              </button>
            </form>
          </div>

        </br></br>
</div>


@endsection