@extends('pages.layouts.app')
@section('content')


    @include('pages.layouts.header')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 heading" style="padding: 0px; position: relative; height: 150px; background:#336699; ">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1" style="margin-top: 40px;">
                    <div class="section-heading text-center">
                        <h3 class="title text-center">Risk <span style="color: #336699;"> Disclosure Notice</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="container-fluid">
        <div class="about  row" >
            <div class="container">
                <!--<div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <div class="section-heading text-center">
                      <h3 class="title text_white">
                          Trade on two <span style="color:#E3AF15;">world class platforms</span>
                      </h3>
                      <p class="subtext text_white"></p>
                    </div>
                  </div>
                </div>-->
                <div class="row">

                    <!--<div class="col-sm-12 control-sides" style=" padding: 10px; position: relative;">

                             <div class="row">
                                 <div class="col-md-6 col-md-offset-3 text-center">
                                  <a href="javascript:;" onClick="selectThisTradePlat(this)" style="font-size: 18px" class="theOrange text_white 4x-dat"><strong>4x-DAT</strong></a>&nbsp;&nbsp;<span class="text_white">|</span>&nbsp;&nbsp;
                                  <a href="javascript:;" onClick="selectThisTradePlat(this)" style="font-size: 18px" class="mt4 text_white"><strong>MT4</strong></a>
                              </div>
                             </div>

                    </div>-->



                    <div class="col-sm-12 control-sides" style="padding: 10px; background: white;">

                        <div class="row">
                            <h6 class="col-md-10 col-md-offset-1 text-left">
                                RISK WARNING ON CONTRACTS FOR DIFFERENCE (CFDS) AND SHARES (EQUITIES)
                            </h6>
                            <p class="col-md-10 col-md-offset-1" style="margin-top: 15px;">
                                This Notice is provided by <strong>Internacional Trust Bank</strong> trading as <strong>Internacional Trust Bank</strong> (“we”)
                            </p>
                            <p class="col-md-10 col-md-offset-1" style="margin-top: 20px; font-family: Gotham, Helvetica Neue, Helvetica, Arial,' sans-serif' ">
                                This Notice provides you with information about the nature and risk of certain investment types. It does not explain all the risks
                                or how the risks relate to your personal circumstances. If you have any doubt whether or not our products are appropriate for you,
                                you should seek professional advice before trading.
                            </p>


                            <div class="col-md-10 col-md-offset-1 subtext showLines " style="text-align: left; padding-top: 2px;">
                                We provide the opportunity for investment and dealing in the following products:
                            </div>

                            <div class="col-md-10 col-md-offset-1 subtext showLines " style="text-align: left; padding-top: 2px;">
                                <li style="margin-left: 15px;">
                                    Shares (“equities”) ;
                                </li>
                                <li style="margin-left: 15px;">
                                    Contracts for differences on shares, bonds and other securities, on indices, exchange traded funds on commodities, on futures and on currencies (“CFDs”).
                                    <br>
                                    By investing in or dealing in any of the above you are risking your capital and you may not get back as much as you originally invested.
                                </li>
                            </div>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">Contracts for Difference (CFDs)</h6>
                            <p class="col-md-10 col-md-offset-1">
                                CFDs are financial instruments that are traded on margin, enabling investors and traders to participate in the movement of
                                shares and index prices without having the ownership of the underlying asset. CFDs are a complex financial product and are not suitable for all investors. If you are unsure of the risks or of whether you have sufficient financial resources or experience to trade these products, you should not begin trading with us. "CFDs" are highly risky due to the speculative and volatile markets in these products and the leverage (margin) involved. Trading these products may result in loss of funds greater than you deposited in the account. <em><strong>You must carefully consider your financial circumstances and risk tolerance before trading CFDs. CFD trading is an activity that carries a high risk to your capital. Don’t use money you can’t afford to lose.</strong></em>
                            </p>


                            <div class="col-md-10 col-md-offset-1 subtext showLines " style="text-align: left; padding-top: 2px;">
                                You should only consider trading in CFDs if:
                            </div>

                            <div class="col-md-10 col-md-offset-1 subtext showLines " style="text-align: left; padding-top: 2px;">
                                <li style="margin-left: 15px;">
                                    you have extensive experience of trading in volatile markets,
                                </li>
                                <li style="margin-left: 15px;">
                                    you fully understand how they operate, including all the risks and costs involved,
                                </li>
                                <li style="margin-left: 15px;">
                                    you are aware that the greater the leverage, the greater the risk,
                                </li>
                                <li style="margin-left: 15px;">
                                    you understand that your position can be closed whether or not you agree with our decision to close your position,
                                </li>
                                <li style="margin-left: 15px;">
                                    you have high risk tolerance and the capability to absorb losses if they occur,
                                </li>
                                <li style="margin-left: 15px;">
                                    you have sufficient time to manage your investment on an active basis.
                                </li>
                            </div>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Shares</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Shares represent a part ownership in a company. As such, the owner of a share participates in the fortune of the company. If the company does well, the shares are likely to rise in price, but if the company does badly, the share price is likely to fall.
                            </p>

                            <div class="col-md-10 col-md-offset-1 subtext showLines " style="text-align: left; padding-top: 2px;">
                                <li style="margin-left: 15px;">
                                    Insolvency Holders of ordinary shares are the last to be paid in the event of a company becoming insolvent. However, ordinary shareholders also have the potential for good returns provided the company does well and is perceived to be continuing to do well. In extreme cases a company can fold up and become insolvent and you loss all you investment.
                                </li>
                                <li style="margin-left: 15px;">
                                    Perception Risk Share price is based on demand which depends on investors perception of the companies’ future prospects, and general sentiments, if others are pessimistic about a company, the share price will fall, if you sell at that point or if price does not recover, you get back less than you put in.
                                </li>
                            </div>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Execution Only</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                We shall not offer you any advice or recommendation regarding the suitability of any investments with us, and nothing we send or tell you should be interpreted as such. We do not provide investment, tax or trading advice. Our service is "execution only", meaning we will not advise you on any transaction, nor will we monitor your trading decisions to determine if they are appropriate for you or to help you avoid losses. You should obtain your own financial, legal, taxation and other professional advice as to whether CFDs or Shares are an appropriate investment for you. We may provide you with factual information in relation to our products, their potential risks, or about the financial markets in general; in doing so we shall not have assessed your individual circumstances.

                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Leverage</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Our products offer various levels of leverage. Before trading, we shall ask you to make an initial deposit. Each product we offer has a margin requirement. Based on this requirement and your initial deposit, you shall be able to trade a contract value in excess of your funds. For example, a margin requirement of 5% would enable you to trade contracts 20 times as large as your deposit. Fluctuations in asset prices will therefore be magnified many times. A small price movement against you may result in a larger loss. Using leverage or margin means that you may lose more than you have actually deposited in your account if the price of the CFD moves significantly against you.


                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Settlement</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                In many market places (for example shares traded on the European Stock Exchange) settlement takes place by the
                                counterparties simultaneously matching shares traded with cash being given. In other market places
                                (for example those where CFDs are traded), you, on making an initial investment, puts up a sum of cash
                                (the margin) which represents a percentage of the value of the investment. If the price of the investment subsequently
                                fluctuates, you may be called upon to put up extra cash (a margin call).
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Margin Rates</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                We reserve the right to adjust margin requirements for each of our products.
                                Trading Companies has the right to change or increase its Margin Requirements at any time:
                                In order to protect the firm and all of our clients, Trading Companies may modify Margin Requirements
                                for any or all clients for any open or new positions at any time, in Trading's sole discretion.
                                If we increase our margin requirements, it may prevent you from adding positions or hedging existing positions
                                if you have insufficient equity. If margin requirements increase on your existing CFDs, you will have to deposit additional
                                equity in advance or your positions may be liquidated. This may result in your margin requirement increasing. You may therefore
                                be required to deposit additional funds to maintain existing positions.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Position Monitoring</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                It is your responsibility to monitor your account. Internacional Trust Bank has the right to liquidate your positions without notice
                                in the event of a margin deficiency.
                            </p>


                            <p class="col-md-10 col-md-offset-1">
                                You must monitor your account so that at all times the account contains sufficient equity to meet Internacional Trust Bank Margin Requirements. <br />
                                Internacional Trust Bank does not have to notify you of any failure to meet Margin Requirements prior to Trading Companies exercising its rights under
                                its Agreement with you, including but not limited to its right to liquidate positions in your account(s).
                            </p>



                            <p class="col-md-10 col-md-offset-1">
                                Should the net value of the account (cash plus running profits minus running losses) fall below the margin required,
                                we may close some or all of your trades at the current market price. This should not however be taken as a guarantee,
                                and it is your responsibility to ensure that sufficient funds are on your account at all times.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Market Risk</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                CFD trading relies on the price movement of underlying financial products. You are therefore exposed to similar, but magnified,
                                risks to holding the underlying assets.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Volatility risk</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Markets for CFDs and Shares can be highly volatile. The prices of CFDs and their Underlying Products (shares or indices)
                                may fluctuate rapidly and over wide ranges. The prices of CFDs will be influenced by, among other things, the market price
                                of the underlying product of the CFD, the earnings and performance of the company or companies whose shares comprise the underlying
                                product or a related index, the performance of the economy as a whole, the changing supply and demand relationships for the underlying product
                                or related instruments and indices, governmental, commercial and trade programs and policies, interest rates, national and
                                international political and economic events and the prevailing psychological characteristics of the relevant marketplace.
                            </p>


                            <p class="col-md-10 col-md-offset-1">
                                Also sharp, sudden and unexpected movements in the underlying product’s price, may result in substantial and magnified profit or loss to you.
                                Markets may not move in a smooth fashion, and price ‘gaps’ may occur with consecutive quotations far apart. There may not always be an
                                opportunity for you to place an order or for our platform to execute an order at the price level which you have selected. One of the effects
                                of this may be that stop loss orders are executed at unfavourable prices, either higher or lower than you may have anticipated, depending on
                                the direction of your trade.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Crypto Currencies Risk</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                When trading bitcoin and other crypto currencies with Trading Companies you will not own any physical bitcoin and no wallets but speculating on
                                the volatility of the price movements in bitcoin and other crypto currencies via a CFD. Trading bitcoin derivative products can be subject
                                to extreme volatility, much more than traditional currencies and when trading bitcoin and other crypto currencies, it is possible to lose or
                                gain substantial amounts in short periods of time. Trading derivative products can result in loss of your entire deposits.

                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Currency risk</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Where you are trading a product denominated in a currency different from that in which you hold your account, fluctuations in
                                the exchange rate affect your profit and loss.
                            </p>

                            <p class="col-md-10 col-md-offset-1">
                                When you deal in a CFD or Shares that is denominated in a currency other than the base currency or currency you have on deposit in your
                                Trading Companies account, all margins, profits, losses and financing credits and debits in relation to that CFD are calculated using
                                the currency in which the CFD is denominated. Thus, your profits or losses will be further affected by fluctuations in the exchange
                                rates between the account currency and the currency in which the CFD is denominated. Trading Companies applies a margin "haircut" to
                                reflect this risk, and so the Margin Requirement on the CFD will effectively increase.
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Interest Rate Fluctuation Risk</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Interest rates fluctuate, which will affect the financing charges (or rebates) you will pay (or may receive) on
                                your long (or short) CFD positions. This will also affect your total profits or losses.
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Regulatory and Taxation Changes Risk</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Changes in taxation and other laws, government, fiscal, monetary and regulatory policies may have an adverse effect on the value of your
                                CFDs or Shares, the tax you pay on your CFDs or Shares, and the total return on the products.
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Liquidity Risk</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Under certain circumstances, it may not be possible to close a part of or a whole position at the current price or at all.
                                Trading Companies is not obligated to provide quotes for any CFD at any time, and Trading Companies does not guarantee the
                                continuous availability of quotations or trading for any CFD. Trading Companies may in its sole discretion cease quoting CFDs
                                and/or cease entering new CFD or Shares transactions at any time based on lack of market data, halts or suspensions or errors or
                                illiquidity or volatility in the market for the Underlying product, or Trading's own risk or profit parameters, technical errors,
                                communication problems, market or political or economic or governmental events, Acts of God or Nature, or for other reasons.

                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Counterparty Risk (in relation to CFDs)</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                In relation to CFDs, we are counterparty to all your trades. None of our CFD products are listed on an exchange,
                                nor can any rights, benefits or obligations be transferred to anyone else. While we undertake our obligation to
                                provide you with best execution and to act reasonably and in accordance with our published terms and condition seriously,
                                CFDs opened on your account with us must be closed with us, based on our prices and conditions. CFDs are contracts with
                                Trading Companies as your counterparty, and are not traded on a regulated exchange and are not cleared on a central clearinghouse.
                                Thus, exchange and clearinghouse rules and protections do not apply to trading CFDs with Trading Companies.
                            </p>



                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Counterparty Credit Risk On CFD Trades</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Since Trading Companies is the counterparty to your CFD trades, you are exposed to the financial and business risks, including credit risk,
                                associated with dealing with Trading Companies That is, in the unlikely event that Trading Companies were to become insolvent,
                                it may be unable to meet its obligations to you. Please note, however that Trading Companies is a participant in the Financial
                                Services Compensation Scheme ("FSCS"). You may be entitled to compensation from the FSCS in the event we cannot meet our obligations.
                                Eligible clients have assets protected by the Financial Services Compensation Scheme up to €50000. Trading clients funds are covered by the
                                Investors Compensation Fund and in the unlikely event of default, you may have recourse to this fund.
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>CFDs Do Not Give You Any Rights In The Underlying Product</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                A CFD is to secure a profit or avoid a loss by reference to fluctuations in the price of the Underlying Product,rather than by taking delivery of any
                                Underlying Product. No CFD transaction shall confer on you any right, voting right, title or interest in any Underlying Product or entitle or oblige
                                you to acquire, receive, hold, vote, deliver, dispose of or participate directly in any corporate action of any Underlying Product.
                                Trading Companies has rights to adjust, modify and/or Close-Out CFD transactions in the event Of a corporate action affecting the Underlying Product
                            </p>

                            <p class="col-md-10 col-md-offset-1">
                                In the event of a Corporate Action affecting the Underlying Product of a CFD (e.g. splits, spin-offs, rights offerings, mergers and
                                acquisitions, etc.): i) Trading Companies in its sole discretion will determine the appropriate adjustment or modification
                                or action to take, if any, and when, with respect to the CFD to preserve the economic equivalent of the rights and obligations
                                of the parties; ii) As an addition or alternative to the foregoing, Trading Companies reserves the right in its sole discretion to
                                close out your open CFD position in the Underlying Product prior to the Corporate Action.
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Risk Of Disruption Or Interruption Of Access To Trading Electronic Systems And Services</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Trading Companies relies on computer software, hardware and telecommunications infrastructure and networking to provide its services
                                to Clients, and without these systems Trading Companies cannot provide the services. These computer-based systems and services
                                such as those used by Trading Companies are inherently vulnerable to disruption, delay or failure, which may cause you to lose access
                                to the Trading Companies trading platform or may cause Trading Companies not to be able to provide CFDor Shares quotations or trading,
                                or may negatively affect any or all aspects of Trading services. Under any Trading Companies - Trading Agreement, you accept the
                                Trading Company systems and services "Capecity Bank" and our liability to you is limited.
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Segregated Accounts</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                In accordance with the FCA (Trading) and FSC (Trading) regulations, all our client funds are held in segregated trust accounts.
                                While we monitor the creditworthiness of our banks closely and select them on the basis of robustness and solidity, using only major
                                international banks, this does not mean that they are risk-free. We can provide you with details of which banks we use, on request.
                            </p>


                            <h5 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Further Risk warnings concerning Shares</strong>
                            </h5>
                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Dividend payment not guaranteed</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Some shares pay a dividend, either semi-annually or quarterly. A dividend is an amount of money, determined by the company’s Board of Directors,
                                which is a distribution of the company’s profits. Established, profitable companies tend to pay dividends and have a good record of providing a
                                steady stream of dividend payments. Periods of economic difficulty may, however, interrupt such dividend payment for even the most established shares.
                                Younger, less established companies that are building a business tend to retain their profits for re-investment. These are called “growth” companies as
                                their business strategy is to grow their business rapidly.
                            </p>


                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Dealing/administrative costs</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Commissions and Charges levied by ourselves or third parties will reduce potential profit you can make or increase the level of loss. Before you begin
                                to trade, you should understand all commissions and other charges for which you will be liable.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Shares deposited as Collateral</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                If you deposit collateral as security with us, the way in which it will be treated will vary according to the type of transaction and where it is traded.
                                There could be significant differences in the treatment of your collateral depending on where or how you are trading. Deposited collateral may
                                lose its identity as your property once dealings on your behalf are undertaken and even if your dealings should ultimately prove profitable,
                                you may not get back the same assets which you deposited, and may have to accept payment in cash. You should ascertain from us how your
                                collateral will be dealt with.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Market gapping</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                This is a sudden shift in the price of an instrument or its underlying from one level to another. It can happen at any time, but occurs
                                most frequently when the market closes at one level but reopens at another. This can cause unexpected losses.

                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Non-readily realisable investments. </strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                We may arrange or enter into transactions in non-readily realisable investments. These are investments in which the market is limited or
                                could become so. You may have difficulty selling such an investment at a reasonable price and, in some circumstances.
                                It may be difficult to sell it at any price. Do not invest in such investments unless you have carefully thought about whether they are suitable for you.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Past performance</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                IYou should be aware that the price of the financial instruments that you are dealing with depends on fluctuations in the financial markets outside
                                of our control and that past performance is no indicator of future performance.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Dealing in securities which may be subject to stabilisation</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                We, and/or our representatives, may from time to time carry out transactions on your behalf in securities subject to stabilisation.
                                Stabilisation enables the market price of a security to be maintained artificially during the period when a new issue of securities
                                is sold to the public. Stabilisation may affect not only the price of the new issue but also the price of other securities relating to it.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Liquidity risk in shares</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Shares are available in companies of different sizes, Cero sectors, geographical locations, and on different stock markets.
                                Liquidity is an important risk factor when investing in individual equities and is generally driven by the market capitalisation
                                (total value of issued shares) of the company and current market conditions. Liquidity levels can change rapidly and lack of
                                liquidity often restricts trading in equities with smaller market capitalisations (known as mid cap and small cap).
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Information on overseas investments</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Information on overseas investments is not as readily available to the public as for companies and the financial pages of the
                                national press give little coverage of the subject. Different time zones also mean that you will not always be able to get a real time
                                price for overseas stocks during the trading day. When investing in overseas markets, currency fluctuations need to be taken into account.
                                A gain or loss made on the performance of a stock can easily be offset by a movement in the currency exchange rate. Alternatively a gain or
                                loss on a stock could be compounded to make an even larger one. Liquidity considerations are similar to  shares.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Price volatility</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                The price of individual shares can fluctuate considerably and can appreciate or decline rapidly.
                                Shares can also remain in decline over long time periods. Share prices rise and fall according to the
                                health of the company and general economic and market conditions. Individual share price rises and falls
                                can be significant. Stock market investments tend to be more volatile than investments in most bonds.
                            </p>

                            <h6 class="col-md-10 col-md-offset-1" style="margin-top: 50px;">
                                <strong>Penny Shares</strong>
                            </h6>
                            <p class="col-md-10 col-md-offset-1">
                                Shares purchased on the Alternative Investment Market (AIM) (especially those known as ‘penny shares’) carry a higher degree of
                                risk of losing money than other shares. This is because the requirements on companies that are listed on AIM are less stringent
                                than those for companies with a full market listing. There is also usually a wider spread between the buying price and the selling
                                price of these shares and if they have to be sold immediately, you may get back less than you paid for them due to a lack of liquidity.
                                The price of these shares may change quickly and they may go down as well as up. It may also be difficult to obtain reliable information
                                about their value or the extent of the risks to which they are exposed.
                            </p>
                            </p>
                            <p class="col-md-10 col-md-offset-1">

                            </p>
                            </p>
                            <p class="col-md-10 col-md-offset-1">

                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">

            <div class="holdBottom hidden-md hidden-sm hidden-lg">
                <div class="down_button1 text-center">
                    <a href="contact-us.php" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%;"><i class="fa fa-envelope text_white"></i>&nbsp; Contact Us</a>
                </div>
                <div class="up_button text-center"><a style="width: 100%; height: 100%;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">LOG IN</a></div>
                <div class="down_button2 text-center"><a style="width: 100%; height: 100%;" class="no_color_on_hover text_white no_text_deco" target="_blank" href="register.php">OPEN ACCOUNT</a></div>
            </div>


            <div class="control-side hidden hidden-xs">
                <div class="down_button1 text-center" style="width: 100%; background-color: #98C838;" >
                    <a style="width: 100%; height: 100%; line-height:70px;" class="text_white no_text_deco no_color_on_hover" href="login.php" onClick="callSignInModal()">
                        <i class="fa fa-user text_white"></i>&nbsp;Login
                    </a>
                </div>
                <div class="upp_button text-center" style="background: #39A0ED; ">
                    <a target="_blank" href="register.php" class="text_white text-center no_text_deco no_color_on_hover" style=" width: 100%; height: 100%; line-height:70px;">
                        <i class="fa fa-check-circle-o text_white"></i>&nbsp; Open Account</a>
                </div>
            </div>


            <div id="regModal" class="my_modal hideModal rubberBand wow " style="background: url( images/bg_reg.jpg); background-repeat: no-repeat; background-size: cover;">
                <span class="hanle-closer text-center" onClick="hideRegModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

                <div class="row theModalBody">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center control-mouse" >
                        <img src="images/slider/theMouse.png" class="img-responsive">
                    </div>
                    <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif !important;" >
                        Hello
                    </h3>
                    <div class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center" style="font-size:16px; font-family: 'Lato-Light';">
                        Let's jump straight in!
                    </div>

                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">


                        <div class="form-group">
                            <input type="text" id="fullName" onKeyUp="onkeyup_check(this); validate_alpha(this)" onBlur="validate_alpha_onBlur(this)" class="form-control theForm" placeholder="Full Name">
                        </div>

                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                        <div class="form-group">
                            <input type="email" id="email" onKeyUp="onkeyup_check(this); checkEmail(this)" onBlur="theEmailValidatorOblur(this)" class="form-control theForm" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                        <div class="input-group">
                            <span class="input-group-addon theForm" id="basic-addon1"></span>
                            <input type="text" id="phone" onKeyUp="onkeyup_check(this); onkeyup_num(this); getVal(this)" onBlur="numValidatorOnblur(this)" class="form-control theForm" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <small class="text_white text-center"><i class="fa fa-shield"></i>&nbsp;&nbsp;The Information you share with us goes through 256bit encryption</small>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <a href="register.php" id="tradeControl" onClick="loadNext()" class="button button-4x covered_but round_but no_color_on_hover" >Enroll</a>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <small class="text_white text-center"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;Trading Carries Sizeable Risks</small>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12 text-center" style="margin-top: 10px;">
                        <small class="text_white text-center">or sign in with &nbsp;&nbsp;</small>
                        <ul style="display: inline-block;" style="margin-top: 10px;">
                            <li style="display: inline;" class="text-center">
                                <a href="#" class="holdSocial text-center">
                                    <i class="fa fa-facebook" style="color:white;"></i>
                                </a>
                            </li>&nbsp;
                            <li style="display: inline;" class="text-center">
                                <a href="#" class="holdSocial text-center">
                                    <i class="fa fa-google-plus" style="color: white;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>


            </div>




            <div id="signInModal" class="my_modal2 hideModal " style="background: url(images/slider/mobile_slider.png); background-repeat: no-repeat; background-size: cover;">
                <span class="hanle-closer text-center" onClick="hideSignInModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

                <div class="row">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-2 col-xs-offset-5 text-center control-mouse1" >
                        <img src="images/slider/lock-open.png" class="img-responsive">
                    </div>
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                        <div class="modal-body">
                            <div class="section-heading text-center text_white">
                                <h5 class="title"><b>SECURITY TIPS</b></h5>
                                <div class="modal-thumb">
                                    <img src="images/modal/internet-banking.gif" class="img-responsive" alt="">
                                </div>
                                <p class="subtext">Your Account <b>User ID</b> and <b>Password</b> are confidential. Do not disclose to anyone. <br>If you suspect fraud, call us using the number on the back of your bank card.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <a target="_blank" href="login.php" class="button button-4x covered_but round_but no_color_on_hover" >LOGIN</a>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center text_white" style="margin-top: 10px;">
                        Not Yet Registered?<br><a href="register.php" onClick="callRegModal()" class="no_color_on_hover" style="text-decoration: underline;"  >Enroll Now!</a>
                    </div>

                </div>


            </div>

            <div id="forGetPass" class="my_modal2 hideModal " style="background: url(images/slider/mobile_slider.png); background-repeat: no-repeat; background-size: cover;">
                <span class="hanle-closer text-center" onClick="hideForgetModal();"><a href="javascript:;"><i class="fa fa-times fa-2x text_white"></i></a></span>

                <div class="row">
                    <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-2 col-xs-offset-5 text-center control-mouse1" >
                        <img src="images/slider/frgtPass.png" class="img-responsive">
                    </div>
                    <h3 class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center control-text" style="margin-top:20px !important; font-family: quot, Comic Sans MS, quot, cursive !important;" >
                        Forgot Password
                    </h3>
                    <div class="col-md-12 col-sm-12 col-xs-12 text_white text-uppercase text-center" style="font-size:16px; font-family: 'Lato-Light';">
                        Please Enter Your Email
                    </div>


                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="margin-top: 20px;">
                        <div class="form-group">
                            <input type="email" class="form-control theForm" placeholder="E-mail">
                        </div>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <a href="#" class="button button-4x covered_but round_but no_color_on_hover" >Send Mail</a>
                    </div>

                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" style="margin-top: 10px;">
                        <a href="login.php" onClick="callSignInModal()" class="no_color_on_hover" >Login</a>
                    </div>


                </div>


            </div>


        </div>
    </div>

@endsection
