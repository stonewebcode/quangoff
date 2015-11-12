<!-- call the main.blade.php file in the layouts directory within the view dir from which this page is being called-->
@extends('layouts.main')

        <!-- this defines the content section which gets displayed with the yield in the calling  main.blade.php file -->
@section('content')

    <body>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">
            <header class="major">
                <h2>The Dispenser</h2>
                <p>Environmentally friendly </p>
            </header>
            <div class="row 100%">
                <section class="4u 12u$(small)">
                    <div class="marginTop2em"><img src="images/dispenser_400pxWide.png" alt="environmentally friendly dispenser"/></div>
                 </section>
                <section class="4u 12u$(small)">
                    <div>
                      <p class="font1_2em">The QUANGOFF unique Dispenser (Developed & Fully Patented by Quangoff-Stanwell Technic) in 2009 is the most environmentally friendly way to serve chilled Still and Sparkling Natural Spring Water.</p>
                      <p class="font1_2em"> It requires no plumbing in only a 13amp socket for operation reducing the required energy of producing, storing and serving Natural Spring Water by 80%.  </p>
                      <p class="font1_2em">When the Environmental Authorities seriously start considering regulating - legislating against excess bottle waste packaging - The QUANGOFF Dispenser is in the lead position to revolutionise the industry for the future of our environment. </p>

                    </div>
                 </section>
                <section class="4u 12u$(small)">
                    <div class="marginTop2em"><img src="images/ladyGlassSquare_150pct.png" alt="glass bottle only" /></div>
                    <p class="font1_0_25em">Serves straight into the glass from a 20 litre bag in box reservoir. Not be confused with a 'Tap Water Filter System' the QUANGOFF Dispenser serves only 'Natural Spring Water' proving the most environmentally positive product in the industry.</p>
                </section>
            </div>
            <div id="ethics_copyright">
                <div id="intellectual_property">
                    <p id="paraIntellectual"><span class="left"><img src="images/intellectual_property_100.jpg" alt="intellectual_property" /></span></p>
                </div>
                <div id="coast">
                    <p id="paraCoast"><span class="right"><img src="images/COAST_logo_50pct.png" alt="coast sustainable tourism project member" /></span></p>
                </div>
            </div>
        </div>

    </section>

    @endsection <!-- end of section called 'content'-->