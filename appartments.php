<!-- header starts here -->
<?php include 'header.php';?>
<!-- header ends here -->

<!-- conntent sec -->

<!-- search FORM AREA START -->
<div class="ltn__car-dealer-form-area  pb-115--- form_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__car-dealer-form-tab buy_form">

                    <div class="tab-content bg-transparent position-relative pb-10">
                        <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                            <div class="car-dealer-form-inner">
                                <form action="#" class="ltn__car-dealer-form-box row">
                                    <!-- <div class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-car---- col-lg-3 col-md-6">
                                            <select class="nice-select">
                                                <option>Choose Area</option>
                                                <option>chicago</option>
                                                <option>London</option>
                                                <option>Los Angeles</option>
                                                <option>New York</option>
                                                <option>New Jersey</option>
                                            </select>
                                        </div>  -->
                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>All Property Types</option>
                                            <option>Apartments</option>
                                            <option>Penthouses</option>
                                            <option>Townhouses</option>
                                            <option>Villas</option>
                                            <option>Buildings</option>
                                            <option>Land Plots</option>
                                            <option>Mansions</option>
                                        </select>
                                    </div>
                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-calendar---- col-lg-6 col-md-6">
                                        <div class="search">
                                            <i class="fa fa-search"></i>
                                            <input type="text" class="form-control"
                                                placeholder="Location, Community, City...">
                                            <!-- <button class="btn btn-primary">Search</button> -->
                                        </div>
                                    </div>


                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                        <div class="btn-wrapper  mt-0">
                                            <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                            <a href="#" class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                                style="padding: 17px 75px;width:100%;"><i
                                                    class="fa-solid fa-magnifying-glass"></i>
                                                Search</a>
                                        </div>
                                    </div>

                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-2 col-md-6">
                                        <select class="nice-select">
                                            <option>All Developers</option>
                                            <option>AHS Properties</option>
                                            <option>Ahad Group</option>
                                            <option>Ajmal Makan</option>
                                            <option>Al Ain Properties</option>
                                        </select>
                                    </div>

                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-2 col-md-6">
                                        <select class="nice-select">
                                            <option>All Areas</option>
                                            <option>Al Ain Road</option>
                                            <option>Al Barari</option>
                                            <option>Al Barsha South</option>
                                            <option>Al Furjan</option>
                                        </select>
                                    </div>

                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-2 col-md-6">
                                        <select class="nice-select">
                                            <option>All Lifestyle Types</option>
                                            <option>Beachfront Living</option>
                                            <option>Green Nature Living</option>
                                            <option>Near Golf Course</option>
                                            <option>Waterfront Living</option>
                                        </select>
                                    </div>

                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Min. Price</option>
                                            <option>AED 200,000</option>
                                            <option>AED 300,000</option>
                                            <option>AED 400,000</option>
                                            <option>AED 500,000</option>
                                        </select>
                                    </div>
                                    <div
                                        class="ltn__car-dealer-form-item ltn__custom-icon---- ltn__icon-meter---- col-lg-3 col-md-6">
                                        <select class="nice-select">
                                            <option>Max Price</option>
                                            <option>AED 200,000</option>
                                            <option>AED 300,000</option>
                                            <option>AED 400,000</option>
                                            <option>AED 500,000</option>
                                        </select>
                                    </div>



                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- form display  on mobile -->

        <!-- view in mobile view -->

        <div class="mobile_form_sec d-lg-none pb-3">
            <div class="container">
                <div class="row">
                    <form action="#">
                        <div class="col-lg-12">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="City / Community / Building"
                                    aria-label="City / Community / Building" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn " type="button" id="button-addon2">
                                        <i class="fa fa-search"></i> &nbsp;Search</button>
                                </div>
                            </div>

                            <div class="show_form " style="display:none" id="collapse1">
                                <div class="nice-select w-100 mb-2" tabindex="0"><span class="current">sale
                                    </span>
                                    <ul class="list">
                                        <li data-value="Min. Price" class="option selected"> sale
                                        </li>
                                        <li data-value="AED 200,000" class="option">AED 200,000
                                        </li>
                                        <li data-value="AED 300,000" class="option">AED 300,000
                                        </li>
                                        <li data-value="AED 400,000" class="option">AED 400,000
                                        </li>
                                        <li data-value="AED 500,000" class="option">AED 500,000
                                        </li>
                                    </ul>
                                </div>
                                <div class="nice-select w-100 mb-2" tabindex="0"><span class="current">
                                        Property Type</span>
                                    <ul class="list">
                                        <li data-value="Min. Price" class="option selected">Property
                                            Type
                                        </li>
                                        <li data-value="AED 200,000" class="option">AED 200,000
                                        </li>
                                        <li data-value="AED 300,000" class="option">AED 300,000
                                        </li>
                                        <li data-value="AED 400,000" class="option">AED 400,000
                                        </li>
                                        <li data-value="AED 500,000" class="option">AED 500,000
                                        </li>
                                    </ul>
                                </div>

                                <div class="nice-select w-100 mb-2" tabindex="0"><span class="current">sale
                                    </span>
                                    <ul class="list">
                                        <li data-value="Min. Price" class="option selected"> sale
                                        </li>
                                        <li data-value="AED 200,000" class="option">AED 200,000
                                        </li>
                                        <li data-value="AED 300,000" class="option">AED 300,000
                                        </li>
                                        <li data-value="AED 400,000" class="option">AED 400,000
                                        </li>
                                        <li data-value="AED 500,000" class="option">AED 500,000
                                        </li>
                                    </ul>
                                </div>
                                <div class="nice-select w-100 mb-2" tabindex="0"><span class="current">
                                        Property Type</span>
                                    <ul class="list">
                                        <li data-value="Min. Price" class="option selected">Property
                                            Type
                                        </li>
                                        <li data-value="AED 200,000" class="option">AED 200,000
                                        </li>
                                        <li data-value="AED 300,000" class="option">AED 300,000
                                        </li>
                                        <li data-value="AED 400,000" class="option">AED 400,000
                                        </li>
                                        <li data-value="AED 500,000" class="option">AED 500,000
                                        </li>
                                    </ul>
                                </div>

                            </div>


                            <section class="round-border">
                                <div>
                                    <button href="#collapse1" class="nav-toggle bg-transparent float-end border-0">
                                        <i class="fa fa-search "></i> &nbsp; Advance Search
                                    </button>
                                </div>
                                <div id="collapse1" style="display:none">

                                </div>
                            </section>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- form display  on mobile -->





    </div>
</div>
<!-- search  FORM AREA END -->




<!-- Buying Property in Dubai AREA START -->
<div class=" ltn__product-gutter pt-30 pb-90 listing_pages fadeInUp wow" data-wow-delay="0.4s"
    style="visibility: visible;animation-delay: 0.4s;animation-name: fadeInUp;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-title-area ltn__section-title-2--- ">

                    <!-- <div class="ltn__breadcrumb-list mb-3">
                        <ul>
                            <li><a href="index.php"><span class="ltn__secondary-color"><i
                                            class="fas fa-home text-dark"></i></span> Home</a></li>
                            <li class="text-dark">  Apartment for Sale in Dubai</li>
                        </ul>
                    </div> -->
                    <!-- <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Properties</h6> -->
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-8 col-6 ">
                            <h1 class="section-title">Apartment for Sale in Palm</h1>

                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-4 text-lg-end col-6">

                            <div class="btn-wrapper animated mt-0">
                                <a href="#" class="theme-btn-1 btn btn-effect-1" tabindex="0">Show All Properties</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__shop-options">
                    <ul class="justify-content-start">
                        <li>
                            <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a data-bs-toggle="tab" href="#liton_product_grid" class=""><i
                                            class="fas fa-th-large"></i></a>
                                    <a class="show active" data-bs-toggle="tab" href="#liton_product_list"><i
                                            class="fas fa-list"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="d-none">
                            <div class="showing-product-number text-right">
                                <span>Showing 1–12 of 18 results</span>
                            </div>
                        </li>
                        <li>
                            <div class="short-by text-center">
                                <select class="nice-select" style="display: none;">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Default Sorting</span>
                                    <ul class="list">
                                        <li data-value="Default Sorting" class="option selected">Default Sorting</li>
                                        <li data-value="Sort by popularity" class="option">Sort by popularity</li>
                                        <li data-value="Sort by new arrivals" class="option">Sort by new arrivals</li>
                                        <li data-value="Sort by price: low to high" class="option">Sort by price: low to
                                            high</li>
                                        <li data-value="Sort by price: high to low" class="option">Sort by price: high
                                            to low</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="short-by text-center">
                                <select class="nice-select" style="display: none;">
                                    <option>Per Page: 12</option>
                                    <option>Per Page: 20</option>
                                    <option>Per Page: 30</option>
                                    <option>Per Page: 50</option>
                                    <option>Per Page: 100</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Per Page: 12</span>
                                    <ul class="list">
                                        <li data-value="Per Page: 12" class="option selected">Per Page: 12</li>
                                        <li data-value="Per Page: 20" class="option">Per Page: 20</li>
                                        <li data-value="Per Page: 30" class="option">Per Page: 30</li>
                                        <li data-value="Per Page: 50" class="option">Per Page: 50</li>
                                        <li data-value="Per Page: 100" class="option">Per Page: 100</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">

                                <!-- ltn__product-item  grid -->
                                <div class="col-xl-6 col-sm-6 col-12">
                                    <div
                                        class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/1.jpg" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badg">For Rent</li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="flaticon-pin"></i> Belmont Gardens,
                                                            Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 </span>
                                                    <i class="flaticon-bed"></i>
                                                </li>
                                                <li><span>2 </span>
                                                    <i class="flaticon-clean"></i>
                                                </li>
                                                <li><span>3450 </span>
                                                    Square Ft
                                                </li>
                                            </ul>
                                            <div class="">
                                                <ul class="list-unstyled call_action list-inline ">
                                                    <li class="list-inline-item">
                                                        <a href="tel:+0123-456789"> <i class="fa fa-phone"> </i> &nbsp;
                                                            Call</a>

                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a href="mailto: info@giproperties.ae"> <i
                                                                class="icon-mail text-dark"> </i> Email</a>

                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="product-price">
                                                <span>$34,900<label>/Month</label></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6 col-12">
                                    <div
                                        class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/2.jpg" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badg">For Rent</li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="flaticon-pin"></i> Belmont Gardens,
                                                            Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 </span>
                                                    <i class="flaticon-bed"></i>
                                                </li>
                                                <li><span>2 </span>
                                                    <i class="flaticon-clean"></i>
                                                </li>
                                                <li><span>3450 </span>
                                                    Square Ft
                                                </li>
                                            </ul>
                                            <div class="">
                                                <ul class="list-unstyled call_action list-inline ">
                                                    <li class="list-inline-item">
                                                        <a href="tel:+0123-456789"> <i class="fa fa-phone"> </i> &nbsp;
                                                            Call</a>

                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a href="mailto: info@giproperties.ae"> <i
                                                                class="icon-mail text-dark"> </i> Email</a>

                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="product-price">
                                                <span>$34,900<label>/Month</label></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6 col-12">
                                    <div
                                        class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/3.jpg" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badg">For Rent</li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="flaticon-pin"></i> Belmont Gardens,
                                                            Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 </span>
                                                    <i class="flaticon-bed"></i>
                                                </li>
                                                <li><span>2 </span>
                                                    <i class="flaticon-clean"></i>
                                                </li>
                                                <li><span>3450 </span>
                                                    Square Ft
                                                </li>
                                            </ul>
                                            <div class="">
                                                <ul class="list-unstyled call_action list-inline ">
                                                    <li class="list-inline-item">
                                                        <a href="tel:+0123-456789"> <i class="fa fa-phone"> </i> &nbsp;
                                                            Call</a>

                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a href="mailto: info@giproperties.ae"> <i
                                                                class="icon-mail text-dark"> </i> Email</a>

                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="product-price">
                                                <span>$34,900<label>/Month</label></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-6 col-12">
                                    <div
                                        class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/4.jpg" alt="#"></a>
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badg">For Rent</li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="flaticon-pin"></i> Belmont Gardens,
                                                            Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 </span>
                                                    <i class="flaticon-bed"></i>
                                                </li>
                                                <li><span>2 </span>
                                                    <i class="flaticon-clean"></i>
                                                </li>
                                                <li><span>3450 </span>
                                                    Square Ft
                                                </li>
                                            </ul>
                                            <div class="">
                                                <ul class="list-unstyled call_action list-inline ">
                                                    <li class="list-inline-item">
                                                        <a href="tel:+0123-456789"> <i class="fa fa-phone"> </i> &nbsp;
                                                            Call</a>

                                                    </li>

                                                    <li class="list-inline-item">
                                                        <a href="mailto: info@giproperties.ae"> <i
                                                                class="icon-mail text-dark"> </i> Email</a>

                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="product-price">
                                                <span>$34,900<label>/Month</label></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ltn__product-item  grid ends -->

                            </div>
                        </div>
                    </div>

                    <!-- ltn__product-item list starts -->
                    <div class="tab-pane fade active show" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">

                                <!-- ltn__product-item -->
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/5.jpg" alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge-price">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                            Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 Bed</span>

                                                </li>
                                                <li><span>2 Bath </span>

                                                </li>
                                                <li><span>3450 Square Ft</span>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                                <div class="agent-brief">
                                                    <h6><a href="team-details.php">William Seklo</a></h6>
                                                    <small>Estate Agents</small>
                                                </div>


                                            </div>

                                            <ul class="list-inline wapp_icon mt-4">
                                                <li class="list-inline-item"><a href="tel:+0123-456789"><img
                                                            src="img/call.png" alt="phone" class="w-75"></a></li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/mail.png" class="w-75" alt="mail"></a>
                                                </li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/waap.png" class="w-75" alt="waap" srcset=""></a>
                                                </li>

                                            </ul>


                                        </div>
                                    </div>
                                </div>

                                <!-- ltn__product-item -->
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/2.jpg" alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge-price">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                            Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 Bed</span>

                                                </li>
                                                <li><span>2 Bath </span>

                                                </li>
                                                <li><span>3450 Square Ft</span>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                                <div class="agent-brief">
                                                    <h6><a href="team-details.php">William Seklo</a></h6>
                                                    <small>Estate Agents</small>
                                                </div>


                                            </div>

                                            <ul class="list-inline wapp_icon mt-4">
                                                <li class="list-inline-item"><a href="tel:+0123-456789"><img
                                                            src="img/call.png" alt="phone" class="w-75"></a></li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/mail.png" class="w-75" alt="mail"></a>
                                                </li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/waap.png" class="w-75" alt="waap" srcset=""></a>
                                                </li>

                                            </ul>


                                        </div>
                                    </div>
                                </div>

                                <!-- ltn__product-item -->
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/1.jpg" alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge-price">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                            Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 Bed</span>

                                                </li>
                                                <li><span>2 Bath </span>

                                                </li>
                                                <li><span>3450 Square Ft</span>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                                <div class="agent-brief">
                                                    <h6><a href="team-details.php">William Seklo</a></h6>
                                                    <small>Estate Agents</small>
                                                </div>


                                            </div>

                                            <ul class="list-inline wapp_icon mt-4">
                                                <li class="list-inline-item"><a href="tel:+0123-456789"><img
                                                            src="img/call.png" alt="phone" class="w-75"></a></li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/mail.png" class="w-75" alt="mail"></a>
                                                </li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/waap.png" class="w-75" alt="waap" srcset=""></a>
                                                </li>

                                            </ul>


                                        </div>
                                    </div>
                                </div>

                                <!-- ltn__product-item -->
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/4.jpg" alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge-price">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                            Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 Bed</span>

                                                </li>
                                                <li><span>2 Bath </span>

                                                </li>
                                                <li><span>3450 Square Ft</span>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                                <div class="agent-brief">
                                                    <h6><a href="team-details.php">William Seklo</a></h6>
                                                    <small>Estate Agents</small>
                                                </div>


                                            </div>

                                            <ul class="list-inline wapp_icon mt-4">
                                                <li class="list-inline-item"><a href="tel:+0123-456789"><img
                                                            src="img/call.png" alt="phone" class="w-75"></a></li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/mail.png" class="w-75" alt="mail"></a>
                                                </li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/waap.png" class="w-75" alt="waap" srcset=""></a>
                                                </li>

                                            </ul>


                                        </div>
                                    </div>
                                </div>

                                <!-- ltn__product-item -->
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5">
                                        <div class="product-img">
                                            <a href="product-details.php"><img src="img/product-3/5.jpg" alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-badge-price">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">For Rent</li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <span>$34,900<label>/Month</label></span>
                                                </div>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.php">New Apartment Nice
                                                    View</a></h2>
                                            <div class="product-img-location">
                                                <ul>
                                                    <li>
                                                        <a href="locations.html"><i class="flaticon-pin"></i> Belmont
                                                            Gardens, Chicago</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                <li><span>3 Bed</span>

                                                </li>
                                                <li><span>2 Bath </span>

                                                </li>
                                                <li><span>3450 Square Ft</span>

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-info-bottom">
                                            <div class="real-estate-agent">
                                                <div class="agent-img">
                                                    <a href="team-details.php"><img src="img/blog/author.jpg"
                                                            alt="#"></a>
                                                </div>
                                                <div class="agent-brief">
                                                    <h6><a href="team-details.php">William Seklo</a></h6>
                                                    <small>Estate Agents</small>
                                                </div>


                                            </div>

                                            <ul class="list-inline wapp_icon mt-4">
                                                <li class="list-inline-item"><a href="tel:+0123-456789"><img
                                                            src="img/call.png" alt="phone" class="w-75"></a></li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/mail.png" class="w-75" alt="mail"></a>
                                                </li>
                                                <li class="list-inline-item"><a href="mailto: info@giproperties.ae"><img
                                                            src="img/waap.png" class="w-75" alt="waap" srcset=""></a>
                                                </li>

                                            </ul>


                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <!-- list ends -->
                </div>
                <div class="ltn__pagination-area text-center mt-20">
                    <div class="ltn__pagination">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                    <!-- <h3 class="mb-10 animated fadeIn">Advance Information</h3>
                    <label class="mb-30"><small>About 9,620 results (0.62 seconds) </small></label> -->
                    <div class="form-body">
                        <div class="row">
                            <div class="form-holder">
                                <div class="form-content">
                                    <div class="form-items">

                                        <form class="requires-validation registrer_form mb-10" novalidate>
                                            <h3 class="text-center text-white pt-3">REGISTER YOUR INTEREST</h3>
                                            <p class="text-center text-white mb-2">*Non-UAE Residents are eligible for
                                                complimentary
                                                round-trip flights to Dubai</p>

                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Full Name" required>

                                            </div>

                                            <div class="col-md-12">
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="E-mail Address" required>
                                            </div>

                                            <div class="col-md-12">
                                                <input type="tel" name="Mobile" id="mobile-number" minlength="7"
                                                    placeholder="e.g. +1 702 123 4567">
                                            </div>

                                            <div class="col-md-12">
                                                <div class="input-item">
                                                    <select class="nice-select" style="display: none;">
                                                        <option>Select Service Type</option>
                                                        <option>Property Management </option>
                                                        <option>Mortgage Service </option>
                                                        <option>Consulting Service</option>
                                                        <option>Home Buying</option>
                                                        <option>Home Selling</option>
                                                        <option>Escrow Services</option>
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">Are you
                                                            looking for</span>
                                                        <ul class="list">
                                                            <li data-value="Select Service Type"
                                                                class="option selected focus">Invest</li>
                                                            <li data-value="Property Management" class="option">Buy a
                                                                home </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="input-item">
                                                    <select class="nice-select" style="display: none;">
                                                        <option>Select Service Type</option>
                                                        <option>Property Management </option>
                                                        <option>Mortgage Service </option>
                                                        <option>Consulting Service</option>
                                                        <option>Home Buying</option>
                                                        <option>Home Selling</option>
                                                        <option>Escrow Services</option>
                                                    </select>
                                                    <div class="nice-select" tabindex="0"><span class="current">When do
                                                            you plan to buy ?</span>
                                                        <ul class="list">
                                                            <li data-value="Select Service Type"
                                                                class="option selected focus">Within 30 days</li>
                                                            <li data-value="Property Management" class="option">Within
                                                                90 days </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-12">


                                                <ul class="list-unstyled">
                                                    <li>
                                                        <a href="#">
                                                            <label class="checkbox-item text-white">I have read and
                                                                agree to the
                                                                Privacy Policy
                                                                <input type="checkbox" checked="checked">
                                                                <span class="checkmark"></span>
                                                            </label>

                                                        </a>
                                                    </li>

                                                </ul>


                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-button mt-3 ">
                                                    <div class="btn-wrapper animated mt-0">
                                                        <a href="#" class="theme-btn-3 btn btn-effect-3 text-white"
                                                            tabindex="0">Enquire Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Advance Information widget -->
                    <div class="widget ltn__menu-widget property_type_hide">
                        <h4 class="ltn__widget-title">Property Type</h4>
                        <ul>
                            <li>
                                <a href="shop-right-sidebar.html">
                                    <label class="checkbox-item">House
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="categorey-no">3,924</span>
                                </a>
                            </li>
                            <li>
                                <label class="checkbox-item">Single Family
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">3,610</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Apartment
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">2,912</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Office Villa
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">2,687</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Luxary Home
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">1,853</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Studio
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">893</span>
                            </li>
                        </ul>
                        <hr>
                        <h4 class="ltn__widget-title">Amenities</h4>
                        <ul>
                            <li>
                                <label class="checkbox-item">Dishwasher
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">3,924</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Floor Coverings
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">3,610</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Internet
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">2,912</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Build Wardrobes
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">2,687</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Supermarket
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">1,853</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Kids Zone
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">893</span>
                            </li>
                        </ul>
                        <hr>
                        <h4 class="ltn__widget-title">Price Renge</h4>
                        <ul>
                            <li>
                                <label class="checkbox-item">Low Budget
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">$5,000 - $10,000</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Medium
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">$10,000 - $30,000</span>
                            </li>
                            <li>
                                <label class="checkbox-item">High Budget
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">$30,000 Up</span>
                            </li>
                        </ul>
                        <hr>
                        <!-- Price Filter Widget -->
                        <div class="widget--- ltn__price-filter-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border---">Filter by price</h4>
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit" value="Your range:">
                                    <input type="text" class="amount" name="price" placeholder="Add Your Price">
                                </div>
                                <div
                                    class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"
                                        style="left: 0%; width: 29.2929%;"></div><span
                                        class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                        style="left: 0%;"></span><span
                                        class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                        style="left: 29.2929%;"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="ltn__widget-title">Bed/bath</h4>
                        <ul>
                            <li>
                                <label class="checkbox-item">Single
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">3,924</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Double
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">3,610</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Up To 3
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">2,912</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Up To 5
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">2,687</span>
                            </li>
                        </ul>
                        <hr>
                        <h4 class="ltn__widget-title">Catagory</h4>
                        <ul>
                            <li>
                                <label class="checkbox-item">Buying
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">3,924</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Renting
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">3,610</span>
                            </li>
                            <li>
                                <label class="checkbox-item">Selling
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="categorey-no">2,912</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                        <ul>
                            <li><a href="#">Body <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Interior <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Lights <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Parts <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Tires <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                            <li><a href="#">Uncategorized <span><i class="fas fa-long-arrow-alt-right"></i></span></a>
                            </li>
                            <li><a href="#">Wheel <span><i class="fas fa-long-arrow-alt-right"></i></span></a></li>
                        </ul>
                    </div>
                    <!-- Price Filter Widget -->
                    <div class="widget ltn__price-filter-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Filter by price</h4>
                        <div class="price_filter">
                            <div class="price_slider_amount">
                                <input type="submit" value="Your range:">
                                <input type="text" class="amount" name="price" placeholder="Add Your Price">
                            </div>
                            <div
                                class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all"
                                    style="left: 0%; width: 29.2929%;"></div><span
                                    class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 0%;"></span><span
                                    class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                    style="left: 29.2929%;"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Top Rated Product Widget -->
                    <div class="widget ltn__top-rated-product-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                        <ul>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.php"><img src="img/product/1.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.php">Mixel Solid Seat Cover</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.php"><img src="img/product/2.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.php">3 Rooms Manhattan</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.php"><img src="img/product/3.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.php">Coil Spring Conversion</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Search Widget -->
                    <div class="widget ltn__search-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Tagcloud Widget -->
                    <div class="widget ltn__tagcloud-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Popular Tags</h4>
                        <ul>
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">desgin</a></li>
                            <li><a href="#">ux</a></li>
                            <li><a href="#">usability</a></li>
                            <li><a href="#">develop</a></li>
                            <li><a href="#">icon</a></li>
                            <li><a href="#">Car</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Repairs</a></li>
                            <li><a href="#">Auto Parts</a></li>
                            <li><a href="#">Oil</a></li>
                            <li><a href="#">Dealer</a></li>
                            <li><a href="#">Oil Change</a></li>
                            <li><a href="#">Body Color</a></li>
                        </ul>
                    </div>
                    <!-- Size Widget -->
                    <div class="widget ltn__tagcloud-widget ltn__size-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product Size</h4>
                        <ul>
                            <li><a href="#">S</a></li>
                            <li><a href="#">M</a></li>
                            <li><a href="#">L</a></li>
                            <li><a href="#">XL</a></li>
                            <li><a href="#">XXL</a></li>
                        </ul>
                    </div>
                    <!-- Color Widget -->
                    <div class="widget ltn__color-widget d-none">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product Color</h4>
                        <ul>
                            <li class="black"><a href="#"></a></li>
                            <li class="white"><a href="#"></a></li>
                            <li class="red"><a href="#"></a></li>
                            <li class="silver"><a href="#"></a></li>
                            <li class="gray"><a href="#"></a></li>
                            <li class="maroon"><a href="#"></a></li>
                            <li class="yellow"><a href="#"></a></li>
                            <li class="olive"><a href="#"></a></li>
                            <li class="lime"><a href="#"></a></li>
                            <li class="green"><a href="#"></a></li>
                            <li class="aqua"><a href="#"></a></li>
                            <li class="teal"><a href="#"></a></li>
                            <li class="blue"><a href="#"></a></li>
                            <li class="navy"><a href="#"></a></li>
                            <li class="fuchsia"><a href="#"></a></li>
                            <li class="purple"><a href="#"></a></li>
                            <li class="pink"><a href="#"></a></li>
                            <li class="nude"><a href="#"></a></li>
                            <li class="orange"><a href="#"></a></li>

                            <li><a href="#" class="orange"></a></li>
                            <li><a href="#" class="orange"></a></li>
                        </ul>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget d-none">
                        <a href="shop.html"><img src="img/banner/banner-2.jpg" alt="#"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- Buying Property in Dubai END -->

<!-- ends -->




<!-- footer  starts here -->
<?php include 'footer.php';?>
<!-- footer ends here -->