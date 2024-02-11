<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/dashboard1.css">
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
        <div class="row">
            <div class="col-3 ">

                <div class="card sideCard2">
                    <p class="text-center mt-3">Total Containers</p>
                    <div class="d-flex justify-content-center mt-3 gap-5">
                        <div>
                            <img src="./img/bin.png" alt="LOGO">
                        </div>
                        <div>
                            <h2 style="color: #1B6176;"> 18,455</h2>

                        </div>
                    </div>

                </div>
                <div class="card sideCard3">

                    <p class="text-center mt-3">Containers Donations</p>
                    <div class="d-flex justify-content-center ">
                        <div>
                            <h2 style="color: #1B6176;">18,455 </h2>

                        </div>
                    </div>

                </div>
                <div class="card sideCard3 d-flex justify-content-center align-items-center ">

                    <div class="d-flex">
                        <p class="me-3">Containers <br> Containers percentage</p>
                        <h1 style="color: #1B6176;"> 100.0%</h1>

                    </div>

                </div>
                <div class=" sideCard4">

                    <div class=" d-flex justify-content-between">

                        <div class="card sqrbox  ">
                            <p class="text-center mt-2">Something</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <i style="color: #006A67;" class="fa-solid fa-circle-check me-2"></i>
                                <h4 style="color: #006A67;" class="mb-0">10,132</h3>
                            </div>
                        </div>

                        <div class="card sqrbox ">
                            <p class="text-center mt-2">Something</p>

                            <div class="d-flex justify-content-center align-items-center">
                                <i style="color: #FDC648;" class="fa-solid fa-circle-xmark me-2"></i>
                                <h4 style="color: #FDC648;" class="mb-0">8,323</h3>
                            </div>


                        </div>
                    </div>
                    <div class="  d-flex justify-content-between">

                        <div class="card  sqrbox  ">

                            <p class="text-center mt-2">Something</p>

                            <div class="d-flex justify-content-center align-items-center">

                                <h3 style="color: #006A67;" class="mb-0">10,48%</h3>
                            </div>

                        </div>
                        <div class="card sqrbox  ">

                            <p class="text-center mt-2">Something</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <i style="color: #006A67;" class="fa-solid fa-down-long me-2"></i>
                                <h3 style="color: #006A67;" class="mb-0">10,132</h3>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-9 ">
                <!-- <div class="row first mt-2">
                    <div class="d-flex justify-content-between  gap-2">
                        <div class=" rightCard d-flex align-items-end justify-content-center">
                            <h6 class="">Last 60 Days</h6>
                        </div>


                        <div class=" rightCard d-flex align-items-end justify-content-center">
                            <h6 class="">Buhi NA</h6>
                        </div>
                        <div class=" rightCard d-flex align-items-end justify-content-center">
                            <h6 class="">Quarterty</h6>
                        </div>
                        <div class=" rightCard d-flex align-items-end justify-content-center">
                            <h6 class="">Buhi NA</h6>
                        </div>
                        <div class=" rightCard d-flex align-items-end justify-content-center">
                            <h6 class="">Buhi NA</h6>
                        </div>
                    </div>

                </div> -->

                <div class="row second">
                    <div class=" d-flex">

                        <div class=" box col-3 ">
                            <div class="card rightMiddle" id="chart1"></div>
                        </div>

                        <div class=" box col-4">
                            <div class="card rightMiddle p-3" id="chart2"></div>

                        </div>

                        <div class=" box col-5">
                            <div class="card rightMiddle" id="chart3"></div>

                        </div>
                    </div>
                </div>

                <div class="row third mt-2">
                    <div class="d-flex justify-content-between">

                        <div class=" col-6">
                            <div class="card rightMiddle2 w-100 h-100" id="chart4"></div>

                        </div>
                        <div class=" col-6">
                            <div class=" card rightMiddle2 w-100 h-100" id="chart5"></div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/dashboard1.js"></script>


</body>

</html>