<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1 maximum-scale=1"
    />
    <title>Kickzcaviar - Home</title>
    <!-- ==== Favicon ==== -->
    <link rel="icon" href="{{asset('frontend/images/kickzcaviar-logo.jpg')}}" type="image/png" />

    @include('frontend.partials.style')



</head>

<body>
{{--Navbar--}}
@include('frontend.partials.navbar')

{{--@yield('content')--}}
<main>
    <!-- hero section starts -->
    <section
        class="sm-hero-section-wrapper"
        style="
          background-image: linear-gradient(#00000079, #00000089),
            url('frontend/images/home-background-stone.jpg');
        "
    >
        <div class="container">
            <div class="sm-hero-wrapper">
                <div data-aos="fade-up"
                     data-aos-duration="1000" class="text-container">
                    <h1>
                        Ready to Sell Your Sneakers?<br />
                        <span>We Make It Simple!</span>
                    </h1>
                    <div class="hero-sell-today-btn-container">
                        <a href="checkout.html">Sell today</a>
                    </div>
                </div>
                <div class="hero-image-container">
                    <img data-aos="zoom-in"
                         data-aos-duration="1000" src="{{asset('frontend/images/home-banner-shoe.png')}}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- hero section ends -->

    <!-- brands section starts -->
    <section class="sm-brands-section-wrapper">
        <div data-aos="fade-up"
             data-aos-duration="1500" class="container">
            <h3>Brands</h3>
            <div  class="sm-brands-wrapper">
                <div  class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
                <div class="brand-box">
                    <h4>Nike</h4>
                </div>
            </div>
            <div></div>
        </div>
    </section>
    <!-- brands section ends -->

    <!-- trending sneakers section starts -->
    <section class="sm-trending-sneakers-section-wrapper">
        <div class="container">
            <div class="trending-sneakers-wrapper">
                <div data-aos="fade-up"
                     data-aos-duration="1000" class="trending-title-wrapper">
                    <h3>Trending Sneakers</h3>
                    <div class="view-all-btn-container">
                        <a href="#">View All</a>
                    </div>
                </div>
                <div data-aos="fade-up"
                     data-aos-duration="1000" class="sm-trending-sneakers-wrapper">
                    <!-- item 1 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div>
                                <div class="size-and-price-containerr">
                                    <div class="size-and-price-title-container">
                                        <h4>Size</h4>
                                        <div class="price-wrapper">
                          <span>
                            <svg
                                class="client-svg-edit-icon"
                                xmlns="http://www.w3.org/2000/svg"
                                width="19"
                                height="19"
                                viewBox="0 0 19 19"
                                fill="none"
                            >
                              <path
                                  d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                  fill="#1D1D1D"
                              />
                              <path
                                  d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                  fill="#1D1D1D"
                              />
                            </svg>
                            <div><h4>Price</h4></div></span
                          >
                                        </div>
                                    </div>
                                    <!-- sellect all and edit manually wrapper -->
                                    <div class="sellect-all-and-edit-manually-wrapper">
                                        <!-- edit manually container -->
                                        <div class="edit-manually-btn-wrapper">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="11"
                                                height="10"
                                                viewBox="0 0 11 10"
                                                fill="none"
                                            >
                                                <g clip-path="url(#clip0_4932_1412)">
                                                    <path
                                                        d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                        fill="#808080"
                                                    />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4932_1412">
                                                        <rect
                                                            width="10"
                                                            height="10"
                                                            fill="white"
                                                            transform="translate(0.5)"
                                                        />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                            <span>Edit Manually</span>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- row  -->
                                        <div class="client-size-and-price-row">
                                            <div class="checkbox-input">
                                                <input type="checkbox" name="" id="" />
                                            </div>
                                            <div class="size-input">
                                                <input
                                                    readonly
                                                    value="40"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <input
                                                        readonly
                                                        value="130.00"
                                                        type="number"
                                                        name=""
                                                        id=""
                                                    />
                                                </div>
                                                <div class="stockx-price-and-svg-container">
                                                    <div class="stockx-price-container">
                                                        <span> €135.00 </span>
                                                    </div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="9"
                                                        height="14"
                                                        viewBox="0 0 9 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                            fill="#36B37E"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row  -->
                                        <div class="client-size-and-price-row">
                                            <div class="checkbox-input">
                                                <input type="checkbox" name="" id="" />
                                            </div>
                                            <div class="size-input">
                                                <input
                                                    readonly
                                                    value="40"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <input
                                                        readonly
                                                        value="130.00"
                                                        type="number"
                                                        name=""
                                                        id=""
                                                    />
                                                </div>
                                                <div class="stockx-price-and-svg-container">
                                                    <div class="stockx-price-container">
                                                        <span> €135.00 </span>
                                                    </div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="9"
                                                        height="14"
                                                        viewBox="0 0 9 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                            fill="#FF5630"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row  -->
                                        <div class="client-size-and-price-row">
                                            <div class="checkbox-input">
                                                <input type="checkbox" name="" id="" />
                                            </div>
                                            <div class="size-input">
                                                <input
                                                    readonly
                                                    value="40"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <input
                                                        readonly
                                                        value="130.00"
                                                        type="number"
                                                        name=""
                                                        id=""
                                                    />
                                                </div>
                                                <div class="stockx-price-and-svg-container">
                                                    <div class="stockx-price-container">
                                                        <span> €135.00 </span>
                                                    </div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="9"
                                                        height="14"
                                                        viewBox="0 0 9 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                            fill="#36B37E"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row  -->
                                        <div class="client-size-and-price-row">
                                            <div class="checkbox-input">
                                                <input type="checkbox" name="" id="" />
                                            </div>
                                            <div class="size-input">
                                                <input
                                                    readonly
                                                    value="40"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <input
                                                        readonly
                                                        value="130.00"
                                                        type="number"
                                                        name=""
                                                        id=""
                                                    />
                                                </div>
                                                <div class="stockx-price-and-svg-container">
                                                    <div class="stockx-price-container">
                                                        <span> €135.00 </span>
                                                    </div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="9"
                                                        height="14"
                                                        viewBox="0 0 9 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                            fill="#36B37E"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row  -->
                                        <div class="client-size-and-price-row">
                                            <div class="checkbox-input">
                                                <input type="checkbox" name="" id="" />
                                            </div>
                                            <div class="size-input">
                                                <input
                                                    readonly
                                                    value="40"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <input
                                                        readonly
                                                        value="130.00"
                                                        type="number"
                                                        name=""
                                                        id=""
                                                    />
                                                </div>
                                                <div class="stockx-price-and-svg-container">
                                                    <div class="stockx-price-container">
                                                        <span> €135.00 </span>
                                                    </div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="9"
                                                        height="14"
                                                        viewBox="0 0 9 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                            fill="#FF5630"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row  -->
                                        <div class="client-size-and-price-row">
                                            <div class="checkbox-input">
                                                <input type="checkbox" name="" id="" />
                                            </div>
                                            <div class="size-input">
                                                <input
                                                    readonly
                                                    value="40"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <input
                                                        readonly
                                                        value="130.00"
                                                        type="number"
                                                        name=""
                                                        id=""
                                                    />
                                                </div>
                                                <div class="stockx-price-and-svg-container">
                                                    <div class="stockx-price-container">
                                                        <span> €135.00 </span>
                                                    </div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="9"
                                                        height="14"
                                                        viewBox="0 0 9 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                            fill="#36B37E"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- row  -->
                                        <div class="client-size-and-price-row">
                                            <div class="checkbox-input">
                                                <input type="checkbox" name="" id="" />
                                            </div>
                                            <div class="size-input">
                                                <input
                                                    readonly
                                                    value="40"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="price-input-container">
                                                <div class="price-input">
                                                    <input
                                                        readonly
                                                        value="130.00"
                                                        type="number"
                                                        name=""
                                                        id=""
                                                    />
                                                </div>
                                                <div class="stockx-price-and-svg-container">
                                                    <div class="stockx-price-container">
                                                        <span> €135.00 </span>
                                                    </div>
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="9"
                                                        height="14"
                                                        viewBox="0 0 9 14"
                                                        fill="none"
                                                    >
                                                        <path
                                                            d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                            fill="#36B37E"
                                                        />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sell-btn-container">
                                    <a href="checkout.html">Sell</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 5 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 6 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 7 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 8 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 9 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                    <!-- item 10 -->
                    <div class="sneakers-box">
                        <div class="image-container">
                            <img src="{{asset('frontend/images/trending-sneakers1.png')}}" alt="" />
                        </div>
                        <div class="text-container">
                            <h4 class="sneakers-title-text">
                                Jordan 4 retro vivid silver (Men’s)
                            </h4>
                            <p>FZCx154854</p>
                            <div class="size-and-price-containerr">
                                <div class="size-and-price-title-container">
                                    <h4>Size</h4>
                                    <div class="price-wrapper">
                        <span>
                          <svg
                              class="client-svg-edit-icon"
                              xmlns="http://www.w3.org/2000/svg"
                              width="19"
                              height="19"
                              viewBox="0 0 19 19"
                              fill="none"
                          >
                            <path
                                d="M8.75232 7.8612L8.03532 10.0129C7.99348 10.1449 7.98872 10.2858 8.02154 10.4203C8.05436 10.5547 8.1235 10.6776 8.22142 10.7754C8.31933 10.8733 8.44226 10.9423 8.57675 10.975C8.71125 11.0078 8.85215 11.0029 8.98407 10.9609L11.1358 10.2439C11.2459 10.207 11.346 10.1451 11.4283 10.0632L16.4803 5.0112C16.8109 4.68017 16.9966 4.23144 16.9966 3.76357C16.9966 3.29571 16.8109 2.84698 16.4803 2.51595C16.1491 2.18592 15.7006 2.00061 15.2331 2.00061C14.7655 2.00061 14.317 2.18592 13.9858 2.51595L8.93382 7.5687C8.85146 7.65081 8.78932 7.75095 8.75232 7.8612Z"
                                fill="#1D1D1D"
                            />
                            <path
                                d="M16.25 7.25C16.0511 7.25 15.8603 7.32902 15.7197 7.46967C15.579 7.61032 15.5 7.80109 15.5 8V13.25C15.5 13.8467 15.2629 14.419 14.841 14.841C14.419 15.2629 13.8467 15.5 13.25 15.5H5.75C5.15326 15.5 4.58097 15.2629 4.15901 14.841C3.73705 14.419 3.5 13.8467 3.5 13.25V5.75C3.5 5.15326 3.73705 4.58097 4.15901 4.15901C4.58097 3.73705 5.15326 3.5 5.75 3.5H11C11.1989 3.5 11.3897 3.42098 11.5303 3.28033C11.671 3.13968 11.75 2.94891 11.75 2.75C11.75 2.55109 11.671 2.36032 11.5303 2.21967C11.3897 2.07902 11.1989 2 11 2H5.75C4.7558 2.00119 3.80267 2.39666 3.09966 3.09966C2.39666 3.80267 2.00119 4.7558 2 5.75V13.25C2.00119 14.2442 2.39666 15.1973 3.09966 15.9003C3.80267 16.6033 4.7558 16.9988 5.75 17H13.25C14.2442 16.9988 15.1973 16.6033 15.9003 15.9003C16.6033 15.1973 16.9988 14.2442 17 13.25V8C17 7.80109 16.921 7.61032 16.7803 7.46967C16.6397 7.32902 16.4489 7.25 16.25 7.25Z"
                                fill="#1D1D1D"
                            />
                          </svg>
                          <div><h4>Price</h4></div></span
                        >
                                    </div>
                                </div>
                                <!-- sellect all and edit manually wrapper -->
                                <div class="sellect-all-and-edit-manually-wrapper">
                                    <!-- edit manually container -->
                                    <div class="edit-manually-btn-wrapper">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="11"
                                            height="10"
                                            viewBox="0 0 11 10"
                                            fill="none"
                                        >
                                            <g clip-path="url(#clip0_4932_1412)">
                                                <path
                                                    d="M10.2021 6.09584L9.28296 5.37709C9.29462 5.26625 9.30462 5.13668 9.30462 4.99959C9.30462 4.8625 9.29503 4.73293 9.28296 4.62209L10.203 3.90293C10.3738 3.76793 10.4205 3.52834 10.3117 3.32877L9.35587 1.675C9.25378 1.48834 9.03003 1.3925 8.80296 1.47625L7.71837 1.91166C7.51046 1.76166 7.29253 1.635 7.06712 1.53375L6.90212 0.38334C6.87503 0.165 6.68503 0 6.46046 0H4.5438C4.31921 0 4.12964 0.165 4.10296 0.38L3.93755 1.53459C3.71921 1.63293 3.50464 1.75793 3.28755 1.9125L2.20005 1.47584C1.99628 1.39709 1.75253 1.48541 1.65128 1.67125L0.694214 3.32709C0.581303 3.51793 0.627964 3.76584 0.802553 3.90418L1.72171 4.62293C1.70712 4.76334 1.70005 4.88543 1.70005 5.00002C1.70005 5.11461 1.70714 5.23668 1.72171 5.37752L0.801714 6.09668C0.630874 6.23209 0.584624 6.47168 0.693374 6.67084L1.64921 8.32459C1.7513 8.51084 1.97296 8.6075 2.20212 8.52334L3.28671 8.08793C3.49421 8.23752 3.71212 8.36418 3.93755 8.46584L4.10255 9.61584C4.12962 9.835 4.31921 10 4.54421 10H6.46087C6.68546 10 6.87546 9.835 6.90212 9.62L7.06753 8.46584C7.28587 8.36709 7.50003 8.2425 7.71753 8.0875L8.80503 8.52416C8.85708 8.54455 8.91248 8.55501 8.96837 8.555C9.13003 8.555 9.27878 8.46666 9.35378 8.32916L10.3138 6.66666C10.4205 6.47166 10.3738 6.23209 10.2021 6.09584ZM5.50212 6.66666C4.58296 6.66666 3.83546 5.91916 3.83546 5C3.83546 4.08084 4.58296 3.33334 5.50212 3.33334C6.42128 3.33334 7.16878 4.08084 7.16878 5C7.16878 5.91916 6.42128 6.66666 5.50212 6.66666Z"
                                                    fill="#808080"
                                                />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4932_1412">
                                                    <rect
                                                        width="10"
                                                        height="10"
                                                        fill="white"
                                                        transform="translate(0.5)"
                                                    />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Edit Manually</span>
                                    </div>
                                </div>
                                <div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.81549 13.0124L8.78405 9.04381C8.84317 8.98186 8.88301 8.90407 8.89874 8.81989C8.91446 8.73571 8.90539 8.64878 8.87262 8.56967C8.83985 8.49055 8.7848 8.42266 8.71416 8.37425C8.64353 8.32585 8.56035 8.29901 8.47474 8.297L6.69367 8.297L6.69368 1.297C6.69368 1.18096 6.64758 1.06968 6.56553 0.987638C6.48349 0.905591 6.37221 0.859497 6.25618 0.859497L2.75617 0.859497C2.64014 0.859497 2.52886 0.90559 2.44681 0.987638C2.36477 1.06968 2.31867 1.18096 2.31867 1.297L2.31867 8.297L0.537612 8.297C0.252362 8.3495 0.106528 8.49533 0.100112 8.7345C0.1001 8.79195 0.111416 8.84884 0.133411 8.90192C0.155407 8.95499 0.187651 9.00321 0.228299 9.04381L4.19686 13.0124C4.2789 13.0944 4.39016 13.1405 4.50617 13.1405C4.62218 13.1405 4.73344 13.0944 4.81549 13.0124Z"
                                                        fill="#FF5630"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row  -->
                                    <div class="client-size-and-price-row">
                                        <div class="checkbox-input">
                                            <input type="checkbox" name="" id="" />
                                        </div>
                                        <div class="size-input">
                                            <input
                                                readonly
                                                value="40"
                                                type="number"
                                                name=""
                                                id=""
                                            />
                                        </div>
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <input
                                                    readonly
                                                    value="130.00"
                                                    type="number"
                                                    name=""
                                                    id=""
                                                />
                                            </div>
                                            <div class="stockx-price-and-svg-container">
                                                <div class="stockx-price-container">
                                                    <span> €135.00 </span>
                                                </div>
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="9"
                                                    height="14"
                                                    viewBox="0 0 9 14"
                                                    fill="none"
                                                >
                                                    <path
                                                        d="M4.18451 0.987627L0.215949 4.95619C0.156831 5.01814 0.116987 5.09593 0.101263 5.18011C0.0855391 5.26429 0.0946127 5.35122 0.12738 5.43033C0.160148 5.50945 0.215198 5.57734 0.285835 5.62575C0.356472 5.67415 0.439653 5.70099 0.525262 5.703L2.30632 5.703L2.30632 12.703C2.30632 12.819 2.35242 12.9303 2.43447 13.0124C2.51651 13.0944 2.62779 13.1405 2.74382 13.1405L6.24383 13.1405C6.35986 13.1405 6.47114 13.0944 6.55319 13.0124C6.63523 12.9303 6.68133 12.819 6.68133 12.703L6.68133 5.703L8.46239 5.703C8.74764 5.6505 8.89347 5.50467 8.89989 5.2655C8.8999 5.20805 8.88858 5.15116 8.86659 5.09808C8.84459 5.04501 8.81235 4.99679 8.7717 4.95619L4.80314 0.987627C4.72109 0.905608 4.60983 0.859533 4.49382 0.859533C4.37782 0.859533 4.26656 0.905608 4.18451 0.987627Z"
                                                        fill="#36B37E"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sell-btn-container">
                                <a href="checkout.html">Sell</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- trending sneakers section ends -->

    <!-- join discord banner section starts -->

    <section class="sm-join-discord-banner-section-wrapper">
        <div class="container">
            <div
                data-aos="fade-up"
                data-aos-duration="1000"
                class="sm-join-discord-banner-wrapper"
                style="
              background-image: linear-gradient(
                  to left,
                  #000000 10%,
                  #c9c5c500 90%
                ),
                url('frontend/images/home-banner1.jpg');
            "
            >
                <div  class="text-container">
                    <h3>
                        <span  class="color-text">Connect</span> with Fellow Sneaker
                        <br />
                        Sellers on <span class="color-text">Discord!</span>
                    </h3>
                    <span>Chat, Share, and Sell!</span>
                    <div class="join-discord-btn">
                        <a href="#">Join Discord Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- join discord banner section ends -->
</main>

{{--footer--}}
@include('frontend.partials.footer')

{{--Notification--}}
@include('frontend.partials.notification')


{{--scripts--}}
@include('frontend.partials.scripts')

</body>
</html>

