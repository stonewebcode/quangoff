<!-- call the main.blade.php file in the layouts directory within the view dir from which this page is being called-->
@extends('layouts.main')

        <!-- this defines the content section which gets displayed with the yield in the calling  main.blade.php file -->
@section('content')

    <body>

    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="container">

            <header class="major">
                <h2>Glass Bottle Range</h2>

                <p>25cl and 75cl</p>
            </header>

            <!-- the div wrapper with row class enables float left within sections of 33% width-->
            <div class="row 100%">
                <section class="6u 12u$(small)">
                    <div class="marginTop2em"><img src="images/Restaurantbottlepic2_cut.png" alt=""/></div>
                </section>
                <section class="6u 12u$(small)">
                    <div>
                        <p class="font1_2em">Quangoff lead the UK industry in Environmental technologies- patented advances, supplying only glass bottles, <br><br>
                            non use of plastic bottles - carbon reduction deliveries and operating only in the South West from two stock locations in Cornwall and Wiltshire<br><br>
                            Minimising the Environmental impact on supplying Natural Spring Water is core to our business ethos.
                        </p>
                    </div>
                </section>
            </div>
            <div class="row 100%">
                <section class="6u 12u$(small)">
                    <p class="font1_2em">Quangoff glass only (75cl - 25cl) branding has been designed (Lilac - Sparkling & Sage - Still) to be both subtle and elegant.<br><br>
                    The very finest quality of purity and mineral content gives a unique soft, delicate and pure refreshing taste. </p>

                    <ul class="analysis">
                        <li>Analysis (mg/l)</li>
                        <li>pH -7.0</li>
                        <li>Calcium -12</li>
                        <li>Magnesium - 5.6</li>
                        <li>Sodium - 9.6</li>
                        <li>Potassium - 0.9</li>
                        <li>Nitrate - 5.6</li>
                        <li>Dry Residue (TDS) - 97</li>
                    </ul>
                </section>
                <section class="6u 12u$(small)">
                    <div class="marginTop2em"><img src="images/restaurant_quangoff_640x490.png" alt=""/></div>
                </section>
            </div>


        </div>
    </section>

    @endsection <!-- end of section called 'content'-->
