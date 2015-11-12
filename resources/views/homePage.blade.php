<!-- call the main.blade.php file in the layouts directory within the view dir from which this page is being called-->
@extends('layouts.main')

<!-- this defines the content section which gets displayed with the yield in the calling  main.blade.php file -->
@section('content')

<body class="landing">

<!-- Banner -->
<section id="banner">
    <h2>Quangoff Cornish Spring Water</h2>
    <p>Natural Water of the Highest Quality</p>
    <p id="halfEm">With a positive environmental practice </p>
    <ul class="actions">
        <li>
            <a href="#one" class="button big">Find Out More</a>
        </li>
    </ul>
</section>

<!-- One -->
<section id="one" class="wrapper style1 align-center">
    <div class="container">
        <header>
            <h2>The finest Cornish Spring Water</h2>
            <p>Quangoff is the unique Cornish Natural Spring Water brand of the very finest quality with the best environmental credentials operating the South West from two stock locations in Cornwall and Wiltshire.</p>
        </header>
        <div class="row 200%">
            <section class="4u 12u$(small)">
                <!--	<i class="icon big rounded fa-clock-o"></i>-->

                <a href="glassBottleRange"><img class="imageHoverOver" src="images/restaurant_quangoff_200.png" alt="restaurant quanqoff"></a>
                <p class="SourceSansProFont">Supplying - <br> The finest Restaurants, Bistros , Tea Rooms, Hotels and Catering venues</p>
            </section>
            <section class="4u 12u$(small)">
                <!--	<i class="icon big rounded fa-comments"></i> -->
                <a href="dispenser"> <img class="imageHoverOver" src="images/ladyGlass_200.png" alt="quanqoff dispenser"></a>
                <p class="SourceSansProFont">The Quangoff dispenser , the most environmentally positive technology in the spring water industry</p>
            </section>
            <section class="4u$ 12u$(small)">
                <!--<i class="icon big rounded fa-user"></i> -->
                <img class="imageHoverOver" src="images/Waterfall_200.png" alt="bottled at source" >
                <p class="SourceSansProFont">Sourced and bottled (Glass Only) from the beautiful protected moors of Cornwall with an Environmental Positive Conscience</p>
            </section>
        </div>
    </div>
</section>

@endsection <!-- end of section called 'content'-->

