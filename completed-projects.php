<?php include('header.php'); ?>

<style>
    .w-55 {
        width: 55%;
    }

    svg {
        height: auto;
        max-height: 450px;
        transform: scaleX(-1.265);
        position:absolute;
        right:-180px;
        top: 70px;
        width: 100%;
    }

    @keyframes anchorDown {

        0%,
        100% {
            transform: translate(0, -0.002864px)
        }

        50% {
            transform: translate(0px, 56.207136px)
        }
    }

    @keyframes logoDown {
        0% {
            transform: matrix(0.415671 0 0 0.415671 -157.189 -21.5882)
        }

        100% {
            transform: matrix(0.415671, 0, 0, 0.415671, -157.189, 34.4147);
        }
    }

    @keyframes hasteAnimation {

        0%,
        100% {
            d: path("M95.932905,31.215779v9.1")
        }

        50% {
            d: path("M95.932905,31.215779v66.1")
        }
    }

    @keyframes truckByeBye {

        to {
            transform: translateX(800px);
            /* Move off-screen to the left */
        }
    }

    #haste {
        animation: hasteAnimation 8s 1 linear;
        /* IE 10+, Fx 29+ */


    }

    /*anchors*/
    #ewWf8lsoQjL62 {
        animation: anchorDown 8s linear;
        /* IE 10+, Fx 29+ */

    }

    #ewWf8lsoQjL11 {
        animation: anchorDown 8s linear;
        /* IE 10+, Fx 29+ */

    }

    /*logo*/
    #logo {

        animation: logoDown 4s linear;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;
    }

    #truck {

        animation: truckByeBye 10s linear;
        animation-delay: 5s;
        animation-fill-mode: forwards;
        animation-iteration-count: 1;

    }
    .about-projects{
        min-height:540px;
    }
</style>

<main class="">

    <?php include('slider.php'); ?>


    <section class="about-projects py-5">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row position-relative">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="pro_stat_content">
                                <h1 class="pro_heading">Lorem ipsum</h1>
                                <p class="pro-stat-text my-2 pt-3">
                                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">

                        </div>
                        <svg cache-id="048ed52b3c694cac989b3795a7940b39" id="ewWf8lsoQjL1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 210 137" shape-rendering="geometricPrecision"
                            text-rendering="geometricPrecision">
                            <g>
                                <g>
                                    <path
                                        d="M170.03683,104.42407c0,0-12.99335-13.911689-17.20192-13.271056-4.20857.641097-18.1165,13.271056-18.1165,13.271056Z"
                                        fill="#f2f2f2" stroke-width="0.329939" />
                                    <path
                                        d="M181.40998,107.67602c0,0-12.99335-13.911694-17.20192-13.271061-4.20857.641097-18.1165,13.271061-18.1165,13.271061Z"
                                        fill="#d3d3d3" stroke-width="0.329939" />
                                    <g transform="matrix(.470705 0 0 0.470705-35.3824-37.8476)">
                                        <path
                                            d="M230.718,296.404c0,0-24.529-19.63-40.09-19.63-16.201.001-40.088,19.63-40.088,19.63Z"
                                            fill="#f2f2f2" stroke-width="0.700946" />
                                    </g>
                                    <path
                                        d="M77.534286,105.35681c0,0-12.993344-13.911692-17.201914-13.271059-4.208575.641097-18.116501,13.271059-18.116501,13.271059Z"
                                        fill="#d3d3d3" stroke-width="0.329939" />
                                    <g transform="matrix(.470705 0 0 0.470705 49.1608-24.154)">
                                        <path
                                            d="M305.938,309.303c0,0-16.119-12.898-26.344-12.898-10.646.001-26.342,12.898-26.342,12.898Z"
                                            fill="#d3d3d3" stroke-width="0.700946" />
                                    </g>
                                </g>
                                <path id="ewWf8lsoQjL11"
                                    d="M95.932905,40.722864c2.907711,0,5.264875,2.357167,5.264875,5.264878s-2.357164,5.264874-5.264875,5.264874-5.264878-2.357163-5.264878-5.264874"
                                    paint-order="markers stroke fill" fill="none" stroke="#3b3535"
                                    stroke-width="1.64969" stroke-linecap="round" stroke-linejoin="bevel" />
                                <g id="truck">
                                    <g id="logo" transform="matrix(.415671 0 0 0.415671-157.189-21.5882)">
                                        <g transform="matrix(.199793 0 0-.199793 593.923 189.457)">
                                            <path
                                                d="M0,0c-10.529,0-19.065-8.536-19.065-19.065c0-10.533,8.536-19.066,19.065-19.066c10.532,0,19.065,8.533,19.065,19.066C19.065,-8.536,10.532,0,0,0"
                                                fill="#ab2723" stroke-width="3.97285" />
                                        </g>
                                        <g transform="matrix(.199793 0 0-.199793 607.045 180.755)">
                                            <path
                                                d="M0,0c-4.305,4.4-10.294,7.149-16.898,7.149h-51.264c-13.023,0-18.553-9.342-12.284-20.759l36.957-28.707l29.51-37.76c11.418-6.271,20.76-.742,20.76,12.288l.004,51.252C6.785,-10.117,4.187,-4.278,0,0"
                                                fill="#ab2723" stroke-width="3.97285" />
                                        </g>
                                        <g transform="matrix(.199793 0 0-.199793 626.478 165.449)">
                                            <path
                                                d="M0,0C10.529,0,19.065,8.536,19.065,19.065s-8.536,19.069-19.065,19.069-19.062-8.54-19.062-19.069s8.533-19.065,19.062-19.065"
                                                fill="#728428" stroke-width="3.97285" />
                                        </g>
                                        <g transform="matrix(.199793 0 0-.199793 621.984 165.782)">
                                            <path
                                                d="M0,0L-29.207,37.453c-11.417,6.273-20.759.739-20.759-12.284l.003-51.26c0-6.648,2.785-12.667,7.233-16.978c4.27-4.139,10.07-6.705,16.45-6.705l51.271-.003c13.026,0,18.553,9.339,12.28,20.759Z"
                                                fill="#728428" stroke-width="3.97285" />
                                        </g>
                                        <g transform="matrix(.199793 0 0-.199793 626.388 189.457)">
                                            <path
                                                d="M0,0c-10.529,0-19.065-8.533-19.065-19.065c0-10.53,8.536-19.066,19.065-19.066s19.065,8.536,19.065,19.066C19.065,-8.533,10.529,0,0,0"
                                                fill="#ed7004" stroke-width="3.97285" />
                                        </g>
                                        <g transform="matrix(.199793 0 0-.199793 627.316 179.327)">
                                            <path
                                                d="M0,0h-51.246c-6.705,0-12.769-2.839-17.087-7.356-4.073-4.26-6.596-10.011-6.596-16.331v-51.251c0-13.024,9.339-18.559,20.76-12.289l28.556,36.813l37.897,29.655C18.554,-9.342,13.026,0,0,0"
                                                fill="#ed7004" stroke-width="3.97285" />
                                        </g>
                                        <g transform="matrix(.199793 0 0-.199793 594.358 165.449)">
                                            <path
                                                d="M0,0C10.529,0,19.065,8.533,19.065,19.065c0,10.529-8.536,19.066-19.065,19.066s-19.065-8.537-19.065-19.066C-19.065,8.533,-10.529,0,0,0"
                                                fill="#025f9f" stroke-width="3.97285" />
                                        </g>
                                        <g transform="matrix(.199793 0 0-.199793 608.4 160.753)">
                                            <path
                                                d="M0,0c0,13.029-9.342,18.557-20.756,12.284L-51.03,-26.242l-36.193-27.945c-6.27-11.424-.743-20.767,12.284-20.759h51.256c6.22.001,11.883,2.449,16.122,6.406c4.637,4.331,7.564,10.471,7.564,17.28Z"
                                                fill="#025f9f" stroke-width="3.97285" />
                                        </g>
                                    </g>

                                    <g transform="matrix(.083048 0 0-.083048 117.311 124.471)">
                                        <path
                                            d="M0,0c-8.5,0-15.39,6.89-15.39,15.39c0,8.499,6.89,15.389,15.39,15.389s15.39-6.89,15.39-15.389C15.39,6.89,8.5,0,0,0M0,56.823c-22.883,0-41.434-18.55-41.434-41.433c0-22.884,18.551-41.435,41.434-41.435s41.434,18.551,41.434,41.435C41.434,38.273,22.883,56.823,0,56.823"
                                            fill="#3b3535" stroke-width="3.97285" />
                                    </g>
                                    <g transform="matrix(.083048 0 0-.083048 121.95 112.958)">
                                        <path
                                            d="M0,0c0-4.082-3.31-7.392-7.392-7.392h-113.824c-4.082,0-7.391,3.31-7.391,7.392v109.882c0,4.082,3.309,7.391,7.391,7.391h60.283c2.231,0,4.343-1.007,5.746-2.742L-1.645,48.352C-0.581,47.036,0,45.395,0,43.703ZM44.498,40.793L-41.258,146.792c-2.248,2.778-5.63,4.392-9.203,4.392h-96.555c-6.538,0-11.838-5.3-11.838-11.838v-217.822h-129.606c15.578-8.123,26.433-24.058,27.343-42.618h154.411c1.124,27.12,23.456,48.764,50.851,48.764c27.396,0,49.727-21.644,50.851-48.764h42.779c5.147,0,9.358,4.211,9.358,9.359v11.157v12.745v121.18c0,2.71-.93,5.339-2.635,7.446"
                                            fill="#3b3535" stroke-width="3.97285" />
                                    </g>
                                    <g transform="matrix(.083048 0 0-.083048 94.0909 119.475)">
                                        <path
                                            d="M0,0h-86.515c-5.147,0-9.358-4.211-9.358-9.357v-23.903c0-5.147,4.211-9.358,9.358-9.358h59.171C-26.433,-24.059,-15.578,-8.123,0,0"
                                            fill="#3b3535" stroke-width="3.97285" />
                                    </g>
                                    <g transform="matrix(.083048 0 0-.083048 96.0423 124.503)">
                                        <path
                                            d="M0,0c-8.5,0-15.39,6.89-15.39,15.39c0,8.499,6.89,15.389,15.39,15.389s15.39-6.89,15.39-15.389C15.39,6.89,8.5,0,0,0M0,56.823c-22.883,0-41.434-18.551-41.434-41.433c0-22.884,18.551-41.435,41.434-41.435s41.434,18.551,41.434,41.435C41.434,38.272,22.883,56.823,0,56.823"
                                            fill="#3b3535" stroke-width="3.97285" />
                                    </g>
                                </g>
                                <g>
                                    <g transform="matrix(.415671 0 0 0.415671-157.189 35.0672)">
                                        <g transform="matrix(1 0 0-1 369.571 151.201)">
                                            <path
                                                d="M47.739368,150.04522h71.382452c1.4066,0,2.53899,1.13239,2.53899,2.539v2.94824c0,.76511.001,2.51636.001,2.51636s-1.89882.0226-2.54031.0226h-71.382132c-.71466,0-2.537992-.0202-2.537992-.0202s-.001-1.82681-.001-2.51875v-2.94824c0-1.40661,1.132392-2.539,2.538997-2.539Z"
                                                paint-order="markers stroke fill" fill="#3b3535" stroke-width="0.79375"
                                                stroke-linecap="square" stroke-linejoin="bevel" />
                                            <rect width="58.7484" height="21.0327" rx="0" ry="2.722755"
                                                transform="translate(55.1907 131.363)" paint-order="markers stroke fill"
                                                fill="#3b3535" stroke-width="0.79375" stroke-linecap="square"
                                                stroke-linejoin="bevel" />
                                        </g>
                                        <g transform="translate(369.571 62.0831)">
                                            <path
                                                d="M47.739368,150.04522h71.382452c1.4066,0,2.53899,1.13239,2.53899,2.539v2.94824c0,.76511.001,2.51636.001,2.51636s-1.89882.0226-2.54031.0226h-71.382132c-.71466,0-2.537992-.0202-2.537992-.0202s-.001-1.82681-.001-2.51875v-2.94824c0-1.40661,1.132392-2.539,2.538997-2.539Z"
                                                paint-order="markers stroke fill" fill="#3b3535" stroke-width="0.79375"
                                                stroke-linecap="square" stroke-linejoin="bevel" />
                                            <rect width="58.7484" height="21.0327" rx="0" ry="2.722755"
                                                transform="translate(55.1907 131.363)" paint-order="markers stroke fill"
                                                fill="#3b3535" stroke-width="0.79375" stroke-linecap="square"
                                                stroke-linejoin="bevel" />
                                        </g>
                                        <path
                                            d="M436.57723,22.230246v27.942997v6.192387v27.942996v27.342514v27.943v26.83454v27.94299h35.05471v-34.13538-27.943-26.83453-27.943-21.15013-6.192387-27.942997Zm6.94118,6.995438h16.93644L443.51841,45.971432Zm19.99,4.198194v16.745747h-16.93644Zm-19.99,23.744803h16.93644L443.51841,73.914429Zm19.99,4.198194v16.148885h-16.33286Zm-19.99,23.144323h16.93644L443.51841,101.25694Zm19.99,4.198195v16.745747h-16.93644Zm-19.99,23.744807h16.93644l-16.93644,16.74574Zm19.99,4.19819v15.6409h-15.81919Zm-19.99,22.94175h16.62741l-16.62741,16.44034Zm19.99,3.89279v16.74574h-16.93644Zm-19.99,23.7448h16.93644l-16.93644,16.74575Zm19.99,4.19819v16.74575h-16.93644Z"
                                            paint-order="markers stroke fill" fill="#3b3535" stroke-width="0.79375"
                                            stroke-linecap="square" stroke-linejoin="bevel" />
                                        <g transform="translate(369.571 62.0831)">
                                            <path
                                                d="M262.0229,-93.250919v0h-3.48385-20.89434-.86351-20.89433-.39533-20.89433-21.75732-20.89434-.86299-20.89485v27.294975h20.89485h5.6844h20.89434.86299h20.89433h21.75785h20.89433.39532h16.07293h5.6844h20.89433l-.15248-3.571105M138.28127,-87.84608h12.80129v12.947013Zm21.75733,0h12.176v12.313976Zm20.89433,0h12.80129v12.946497Zm21.75733,0h12.176v12.314494Zm21.29017,0h12.64316v12.786815Zm21.75733,0h12.176v12.314494Zm-110.72554,2.377634l13.039,13.187306h-13.039Zm43.51207.869714l12.17859,12.317592h-12.17859Zm85.69916,0l12.17859,12.317592h-12.17859Zm-43.04698.000516l12.17858,12.317076h-12.17858Zm-21.75475.0026l12.17549,12.314491h-12.17549Zm43.0475,0l12.17549,12.314491h-12.17549Zm-85.69915.000516l12.17548,12.313975h-12.17548Z"
                                                paint-order="markers stroke fill" fill="#3b3535" stroke-width="0.79375"
                                                stroke-linecap="square" stroke-linejoin="bevel" />
                                            <path
                                                d="M44.73964,-93.250934v0h3.48385h20.89434.86351h20.894329.39533h20.894341l-4.82141,27.294975h-21.757858-20.894332-.39532-16.07293-5.6844-20.89433l.15248-3.571105m91.23109-18.319031v12.946497Zm-8.95604,0h-12.176011v12.314494Zm-21.290178,0h-12.643162v12.786815Zm-21.757332,0h-12.176v12.314494Zm-18.48569,3.247348L30.3605,-72.281155h12.17859Zm43.046982.000516L73.40749,-72.281155h12.178582Zm21.754758.0026L95.165329,-72.28114h12.175501Zm-43.04751,0L52.11783,-72.28114h12.17549Z"
                                                paint-order="markers stroke fill" fill="#3b3535" stroke-width="0.79375"
                                                stroke-linecap="square" stroke-linejoin="bevel" />
                                            <path
                                                d="M65.382876,-93.250919v27.294975h20.894843h5.68441h20.894331.863h20.89433h21.75785h20.89433.39532h16.07292h5.68441h20.89433l-2.13767-27.294975h-18.75666-5.68441-20.89433-.86351-20.89433-.39533-20.89433-21.75733-20.894331-.863Zm8.093562,5.404839h12.801281v12.947013Zm21.757331,0h12.176001v12.313976Zm20.894331,0h12.80128v12.946497Zm21.75733,0h12.176v12.314494Zm21.29017,0h12.64316v12.786815Zm21.75733,0h12.176v12.314494Zm20.89433,0h13.039v13.18731ZM70.207387,-85.468446L83.246379,-72.28114h-13.038992Zm43.512073.869714l12.17859,12.317592h-12.17859Zm85.69916,0l12.17859,12.317592h-12.17859Zm-43.04698.000529l12.17858,12.317077h-12.17858Zm-21.75475.0026l12.17549,12.314491h-12.17549Zm43.0475,0l12.17549,12.314491h-12.17549Zm-85.699161.000529l12.175491,12.313976h-12.175491Z"
                                                paint-order="markers stroke fill" fill="#3b3535" stroke-width="0.79375"
                                                stroke-linecap="square" stroke-linejoin="bevel" />
                                        </g>
                                        <path
                                            d="M423.081,17.48727h62.04631c1.22262,0,2.20691,1.13235,2.20691,2.53894v2.94817c0,.76509.00087,2.51629.00087,2.51629s-1.65049.0226-2.20808.0226h-62.04601c-.62119,0-2.20604-.0202-2.20604-.0202s-.00087-1.82676-.00087-2.51869v-2.94817c0-1.40659.98428-2.53894,2.20692-2.53894Z"
                                            paint-order="markers stroke fill" fill="#3b3535" stroke-width="0.79375"
                                            stroke-linecap="square" stroke-linejoin="bevel" />
                                    </g>
                                    <path d="M15.26087,22.775868L32.121015,5.018072L97.098787,23.243061" fill="none"
                                        stroke="#3b3535" stroke-width="1.5" />
                                    <path d="M32.121015,5.018072v18.281454h.368222" fill="none" stroke="#3b3535"
                                        stroke-width="1.5" />
                                </g>
                                <path id="haste" d="M95.932905,31.215779v9.1" fill="none" stroke="#3b3535"
                                    stroke-width="1.64969" />
                                <path id="ewWf8lsoQjL62"
                                    d="M95.932905,40.722864c2.907711,0,5.264875,2.357167,5.264875,5.264878m-5.264875,5.264874c-2.907711,0-5.264878-2.357163-5.264878-5.264874"
                                    paint-order="markers stroke fill" fill="none" stroke="#3b3535"
                                    stroke-width="1.64969" stroke-linecap="round" stroke-linejoin="bevel" />
                                <g>
                                    <g transform="matrix(.470705 0 0 0.470705-26.1241-15.9128)">
                                        <path
                                            d="M167.212,280.419l-9.877,29.172c0,2.23,23.693,2.263,23.691,0l-9.879-29.172c-.636-1.882-3.296-1.882-3.935,0Z"
                                            fill="#ed7004" stroke-width="0.700946" />
                                        <path
                                            d="M164.595,288.149l-1.988,5.869c4.387.268,8.76.268,13.146,0l-1.988-5.869c-3.059.138-6.112.138-9.17,0Z"
                                            fill="#f7f7f7" stroke-width="0.700946" />
                                        <path
                                            d="M160.974,298.839l-1.969,5.818c6.803.642,13.549.642,20.35,0l-1.969-5.818c-5.485.443-10.928.443-16.412,0Z"
                                            fill="#f7f7f7" stroke-width="0.700946" />
                                        <path
                                            d="M184.677,311.548h-30.992v0c0-1.256,1.018-2.274,2.275-2.274h26.441c1.256-.001,2.276,1.018,2.276,2.274Z"
                                            fill="#ed7004" stroke-width="0.700946" />
                                    </g>
                                    <g transform="matrix(.415671 0 0 0.415671-301.574 53.1946)">
                                        <rect width="4.54997" height="71.3852" rx="0" ry="0"
                                            transform="translate(752.448 125.964)" fill="#3b3535"
                                            stroke-width="0.79375" />
                                        <g transform="matrix(1.1324 0 0 1.1324 538.151-145.6)">
                                            <path
                                                d="M172.825,227.964c-1.893-1.894-1.893-4.965,0-6.857l14.996-14.995c1.893-1.894,4.965-1.894,6.857,0l14.994,14.995c1.895,1.893,1.895,4.964,0,6.857l-14.994,14.995c-1.893,1.894-4.965,1.894-6.857,0Z"
                                                fill="#ed7004" stroke-width="0.700946" />
                                            <g>
                                                <path
                                                    d="M191.251,241.671c-1.236,0-2.398-.481-3.273-1.355l-12.508-12.51c-1.805-1.803-1.805-4.739,0-6.542l12.508-12.509c.875-.874,2.037-1.355,3.271-1.355c1.236,0,2.398.481,3.271,1.355l12.51,12.509c.873.874,1.355,2.035,1.355,3.271s-.482,2.397-1.355,3.271l-12.51,12.51c-.873.873-2.035,1.355-3.269,1.355Zm-.002-33.108c-.924,0-1.793.36-2.449,1.015l-12.508,12.508c-1.35,1.351-1.35,3.548,0,4.897L188.8,239.492c.656.654,1.525,1.015,2.451,1.015.924,0,1.795-.36,2.447-1.015l12.508-12.509c.654-.653,1.016-1.523,1.016-2.448s-.361-1.795-1.016-2.448l-12.508-12.509c-.654-.654-1.523-1.015-2.449-1.015Z"
                                                    fill="#fff" stroke-width="0.700946" />
                                            </g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M185.013,222.339c-.822-.821-1.025-2.026-.609-3.037l2.16,2.161l1.527-1.526-2.162-2.162c1.012-.414,2.217-.211,3.037.611.842.84,1.033,2.084.58,3.109l8.607,8.606c.391.393.391,1.03,0,1.423v0c-.395.393-1.031.393-1.424,0l-8.607-8.606c-1.025.454-2.268.262-3.109-.579Z"
                                                        fill="#fff" stroke-width="0.700946" />
                                                </g>
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M184.349,231.524v0c-.393-.393-.393-1.029,0-1.423l10.594-10.594l1.422,1.422-10.594,10.595c-.393.393-1.03.393-1.422,0Z"
                                                            fill="#fff" stroke-width="0.700946" />
                                                    </g>
                                                    <g>
                                                        <polygon
                                                            points="194.679,217.251 198.149,220.723 196.976,223.824 192.54,219.388"
                                                            fill="#fff" stroke-width="0.700946" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g transform="matrix(.470705 0 0 0.470705 60.0031-15.4852)">
                                        <path
                                            d="M167.212,280.419l-9.877,29.172c0,2.23,23.693,2.263,23.691,0l-9.879-29.172c-.636-1.882-3.296-1.882-3.935,0Z"
                                            fill="#ed7004" stroke-width="0.700946" />
                                        <path
                                            d="M164.595,288.149l-1.988,5.869c4.387.268,8.76.268,13.146,0l-1.988-5.869c-3.059.138-6.112.138-9.17,0Z"
                                            fill="#f7f7f7" stroke-width="0.700946" />
                                        <path
                                            d="M160.974,298.839l-1.969,5.818c6.803.642,13.549.642,20.35,0l-1.969-5.818c-5.485.443-10.928.443-16.412,0Z"
                                            fill="#f7f7f7" stroke-width="0.700946" />
                                        <path
                                            d="M184.677,311.548h-30.992v0c0-1.256,1.018-2.274,2.275-2.274h26.441c1.256-.001,2.276,1.018,2.276,2.274Z"
                                            fill="#ed7004" stroke-width="0.700946" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="pro_grid pt-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <h2 class="pro_subheading mt-5">Completed projects</h2>
                    <p class="pro_subtext my-4 pb-1 w-55">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud </p>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="row mb-0">
                                <div class="col-lg-4 pe-0 py-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/ashoka-school.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 px-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/building.png"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 ps-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/innerbuilding.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-lg-4 pe-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/pro4.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-4 px-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/pro5.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 ps-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/pro6.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 pe-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/pro6.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 px-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/pro7.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 ps-0">
                                    <div class="card pro-stat-card rounded-0 border-0">
                                        <div class="pro-banner layout1 animation2">
                                            <a href="" class="rt-banner-link">
                                                <img src="images/ongoing_projects/pro7.jpg"
                                                    class="img-fluid object-fit-cover" alt="">
                                            </a>
                                            <figcaption>
                                                <div class="banner-content"></div>
                                            </figcaption>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>