<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style/dashboard2.css">
</head>

<body>
    <nav>
        <div class="nav-header">
            <div>
                <h5>Waste Management System</h5>
            </div>
            <div class="d-flex">
                <div class="language">
                    <select name="" id="">
                        <option value="">English</option>
                    </select>

                </div>
                <div class="language-clear">
                    <button>X</button>
                </div>

            </div>
        </div>

    </nav>
    <div class="container-fluid ">
        <div class="row mt-2">
            <div class="col-2">
                <div class="card sideCardClock ">


                </div>

                <div class="card sideCardVeh   d-flex justify-content-center">
                    <p class="text-center mt-2 text-light">Total Vehicle Status</p>

                </div>
                <div class="card sideCard  d-flex justify-content-center ">
                    <p class="text-center mt-2">Total Compressor</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <img src="img/Picture1.png" alt="" width="100px">
                        <h1 style="color: #E3A837;">244</h1>
                    </div>

                </div>
                <div class="card sideCard  d-flex justify-content-center ">
                    <p class="text-center mt-2">Total Road cleaner</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <img src="img/Picture1.png" alt="" width="100px">
                        <h1 style="color: #E3A837;">35</h1>
                    </div>

                </div>
                <div class="card sideCard  d-flex justify-content-center ">
                    <p class="text-center mt-2">Total Container washer</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <img src="img/Picture1.png" alt="" width="100px">
                        <h1 style="color: #E3A837;">24</h1>
                    </div>

                </div>




            </div>
            <div class="col-10">


                <div class="row mt-2">
                    <div class="col-4">

                        <div class="card rightMiddle2 ">
                            <div class="text-center p-4">
                                <p>Total Compressor</p>
                            </div>
                            <div class="w-100 chart-container" id="chart4"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle2 ">
                            <div class="text-center p-4">
                                <p>Total Road cleaner</p>
                            </div>

                            <div class="w-100 chart-container col-10" id="chart5"></div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle2">
                            <div class="text-center p-4">
                                <p>Total Container washer</p>
                            </div>
                            <div class="w-100 chart-container" id="chart6"></div>

                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <div class="card rightMiddle2 ">
                            <div class="text-center p-4">
                                <p>Bin Collection according to plan by Day</p>
                            </div>
                            <div class="w-100 chart-container" id="chart1"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle2 ">
                        <div class="text-center p-4">
                                <p>Road Cleaned according to plan by Day</p>
                            </div>
                            <div class="w-100 chart-container" id="chart2"></div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle2">
                        <div class="text-center p-4">
                                <p>Bin Washed according to plan by Quaterly</p>
                            </div>
                            <div class="w-100 chart-container" id="chart3"></div>

                        </div>
                    </div>
                </div>






                <!-- <div class="row forth">

                    <div class="col pe-0 d-flex justify-content-between">

                        <div class="card rightMiddle2 ">

                        </div>
                        <div class="card rightMiddle2">

                        </div>


                    </div>

                    <div class="col-3">
                        <div class="card rightMiddle2">

                        </div>
                    </div>

                </div> -->

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/dashboard2.js"></script>
</body>

</html>