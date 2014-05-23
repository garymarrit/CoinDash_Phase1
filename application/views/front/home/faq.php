<style>
.faq_page_main h2
{
	margin-bottom: 10px !important;
    text-align: left !important;
}

.faq_page_main p {
    line-height: 32px !important;
}

.for_faq_title
{
	font-size: 34px;
    padding-bottom: 40px;
    text-align: center;
}

</style>    
 
<!-- About Section -->
<section id="about">
  <div class="container mark_signin">
    <div class="row pad40 mark_signin">
      <div class="col-md-12"> 
        <!-- <h1>Forgot password?</h1>-->
        <div class="content">
        <form method="post" action="index.html" class="form-vertical login-form" novalidate>
          <h3 class="form-title for_faq_title">FAQ</h3>
          <div class="faq_page_main">           
            <h2>What is Bitcoin?</h2>
            <p>To find out more about the world of bitcoin, we recommend a visit to We Use Coins.</p><br/>
            <h2>Leveraged Trading</h2>
            <p>You are only required to deposit a small percentage of the overall value of each position.<br/>
              
              For each position opened, Coindash will execute an open market order at over x10 the value of your deposit.<br/>
              
              We use leverage to provide maximum market exposure with a small deposit. Using leverage gives you the potential to multiply your profits. This is done without the need to maintain a complex margin balance in different currencies while managing margin calls. It is important to remember that losses can also be multiplied however losses will never exceed your deposit.</p><br/><br/>
            <h2>Payouts</h2>
            <p>Profits are calculated upon the successful liquidation of a trade. The final payout will not be directly proportional to the trade size * pip movement. This is because of the price appreciation or depreciation in the value of BTC while the trade is open. Profits calculated in fiat will be directly proportional to trade size.<br/>
              
              <strong>Payout Long (BTC) = (Open - ((Open^2) / Close)) x Bet per Point</strong><br/>
              <strong>Payout Short (BTC) = (Open - ((Open^2) / Close)) x -Bet per Point</strong><br/></p><br/>
              <h2>
              Trade Deposit</h2>
              
              <p>Leveraged trading at Coindash requires a deposit for each position opened. This is kept to cover any potential losses should the market move against you and acts as collateral.<br/>
              
              When a position is liquidated, the deposit will be returned to you in full if the market moves in your favour. If a position is closed with a loss, the amount will be deducted from your deposit.<br/>
              
              <strong>Deposit = Size * Price * Volatility</strong><br/>
              
              The volatility percentage added to the deposit is used to protect against large market swings. During volatile markets this may increase.<br/>
              
              Force liquidation orders may be placed when a position approaches the required stop. This prevents losses from exceeding deposit amounts.</p><br/>
            <h2>Trade Examples</h2>
            <p>
            <strong>Scenario 1</strong>
            
            You spot a bullish trend in the market and want to enter a long position.<br/>
            
            You have 2 BTC available to bet and execute a long trade. The price then rises in your favour by US$8. (1000 point required stop)<br/>
            Bet size: 0.002 BTC/pt (deposit of 2 BTC required)<br/>
            
            Buy Price: US$120 = 12000 points<br/>
            Close price on liquidation: US$128 = 12800 points<br/>
            
            Profit = (12000 - ((12000^2) / 12800)) * 0.002<br/>
            <strong>Profit = 1.5 BTC</strong><br/>
            
            <strong>Scenario 2</strong><br/>
            
            Recent negative press has struck panic among many bitcoin investors. You speculate that the price will drop fast and want to take advantage of the news.<br/>
            
            You have 5 BTC available to bet and execute a short trade. Over the following two days, the price dives by US$53. (1000 point required stop)<br/>
            Short position entered at 0.005 BTC / pt (deposit of 5 BTC required)<br/>
            
            Sell Price: US$188 = 18800 points<br/>
            Close price on liquidation: $135 = 13500 points<br/>
            
            Profit = (18800 - ((18800^2)/13500)) * 0.005<br/>
            Trade profit = 36.90 BTC<br/>
            
            Funding = 2.35 BTC per day (x 1 day)<br/>
           <strong> Profit = 34.55 BTC</strong></p><br/>
          <h2>Open Price</h2>
          <p>The ticket price displayed may differ from actual execution price. In a liquid market, execution prices will beat offer prices however at times of rapid movement and low liquidity, they may also be worse.</p><br/>
          <h2> Stop Price</h2>
          <p>Stop prices are calculated after order execution prices are returned.</p><br/>
          <h2>Liquidation</h2>
          <p>On liquidation, a close order is placed. Client deposits are returned and profits are paid after the position has been reconciled. This process may take up to two minutes after a liquidation order is recieved.</p><br/>
          <h2> Force Liquidation (Stops)</h2>
          <p> Coindash reserves the right to force liquidate any position that hits its stop price. Fills at that exact stop price are not guaranteed as this is dependent on market liquidity at the moment the position hits the stop. This is done to limit losses in volatile market conditions.</p><br/>
          <h2>Trade Execution</h2>
          <p> Coindash operates on a live order execution basis. Positions are only marked as open when the margin position placed on your behalf has been executed.
            
            Trades are executed on an at best price and are final and irreversible.
            
            Execution times may vary due to market liquidity and broker performance. The majority of our orders fill within 5 seconds. At times of high order lag, Coindash may temporarily suspend the opening of new trades.</p><br/>
          <h2> Execution Spread</h2>
          <p> During normal trading conditions the execution price will often outperform the display price.
            
            At times of high volatility or low liquidity, execution prices may gap away from respective display prices. Placing two or more smaller trades instead of one larger trade will lead to a reduced execution spread.</p><br/>
          <h2> Gearing (Leverage)</h2>
          <p> Orders are placed out to market leveraged. The effective size of the position that Coindash places is stated in the trading box. Effective leverage is based upon deposit amounts held for each position and equates to ~1:10.</p><br/>
          <h2> Daily Funding</h2>
          <p> Daily funding is <strong>free</strong> for the first 24 hours. Subsequent 24 hour periods are charged at the specified daily funding rate. This will periodically change based on demand and starts from 0.1% per day of borrowed funds.
            
            Funding costs are charged to the account balance. When the account balance is lower then the daily funding cost and the position is left open, it will be subject to automatic liquidation after the corresponding 24 hour period is over. In order to keep positions open please ensure the account balance is sufficiently funded.</p><br/>
          <h2> Trade Engine</h2>
          <p> Our proprietary trading engine has been developed in-house. All algorithms and trade execution formulas are copyright Coindash.
            Security
            
            All client funds are held offline.
            
            This server holds no private keys and no hot wallet.
            
            For email address changes. Please email support@Coindash from your existing email address with your new email address.</p><br/>
          <h2> Withdrawals</h2>
          <p>Our servers do not run any hot wallets, as a result withdrawals are processed from offline wallets. They are processed once a day after daily trade reconciliations have been performed. The minimum withdrawal amount is 0.001 BTC.</p><br/>
          <h2> Trade Limitations</h2>
          <p> Trade sizes are limited by market liquidity and the availability of funds.
            
            A current maximum of 8 positions may be opened in either direction.</p><br/>
          </div>
        </form>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  </div>
</section>
