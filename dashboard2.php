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
    <div class="container-fluid ">
        <div class="row mt-2">
            <div class="col-3">
                <div class="card sideCard">
                    <select name="" id="" class="SelectSideCard">
                        <option value="">Choose a period</option>
                    </select>

                </div>
                <div class="card sideCard">

                    <p class="text-center mt-2 ">Unloaded Containers of Plan(yesterday)</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <h3 style="color: #006A67;">1.3%</h3>
                        <h1 style="color: #E3A837;">244</h1>
                    </div>

                </div>
                <div class="card sideCard">

                    <p class="text-center mt-2">Brooms are off the Plan(yesterday)</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <h3 style="color: #006A67;">70.2%</h3>
                        <h1 style="color: #E3A837;">40</h1>
                    </div>

                </div>
                <div class="card sideCard">
                    <p class="text-center mt-2">Brooms According to Plan(yesterday)</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <h3 style="color: #006A67;">50.9%</h3>
                        <h1 style="color: #E3A837;">29</h1>
                    </div>

                </div>
                <div class="card sideCard">

                    <p class="text-center mt-2">Laundry Containers of Plan(yesterday)</p>
                    <div class="d-flex justify-content-around align-items-center">
                        <h3 style="color: #006A67;">0.0%</h3>
                        <h1 style="color: #E3A837;">0</h1>
                    </div>

                </div>


            </div>
            <div class="col-9">
                <div class="row ">
                    <div class="col first">
                        <div class="card rightCard d-flex align-items-end justify-content-center">
                            <h6 class="me-3">Last 60 Days</h6>
                        </div>
                        <div class="card rightCard d-flex align-items-end justify-content-center">
                            <h6 class="me-3">Something</h6>
                        </div>
                        <div class="card rightCard d-flex align-items-end justify-content-center">
                            <h6 class="me-3">Quarterty</h6>
                        </div>
                        <div class="card rightCard d-flex align-items-end justify-content-center">
                            <h6 class="me-3">Something</h6>
                        </div>
                        <div class="card rightCard d-flex align-items-end justify-content-center">
                            <h6 class="me-3">Something</h6>
                        </div>
                    </div>

                </div>


                <div class="row mt-2">
                    <div class="col-4">
                        <div class="card rightMiddle ">

                            <p class="text-center mt-2 ">Unloaded Containers of Plan(yesterday)</p>
                            <div class="d-flex justify-content-around align-items-center mt-4">
                                <div><img src="img/Picture1.png" alt="" width="60px"></div>
                                <h3 style="color: #006A67;">25.0%</h3>
                                <h1 style="color: #E3A837;">40</h1>
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle">

                            <p class="text-center mt-2 ">Unloaded Containers of Plan(yesterday)</p>
                            <div class="d-flex justify-content-around align-items-center mt-4">
                                <div><img src="img/Picture2.png" alt="" width="60px"></div>
                                <h3 style="color: #006A67;">35.1%</h3>
                                <h1 style="color: #E3A837;">20</h1>
                            </div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle">

                            <p class="text-center mt-2 ">Unloaded Containers of Plan(yesterday)</p>
                            <div class="d-flex justify-content-around align-items-center mt-4">
                                <div><img src="img/Picture1.png" alt="" width="60px"></div>
                                <h3 style="color: #006A67;">35.1%</h3>
                                <h1 style="color: #E3A837;">20</h1>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <div class="card rightMiddle2 ">
                            <div class="w-100 chart-container" id="chart1"></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle2 ">
                            <div class="w-100 chart-container" id="chart2"></div>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card rightMiddle2">
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