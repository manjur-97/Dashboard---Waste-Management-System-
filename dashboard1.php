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
                    <select name="" id="languageSelector">
                        <option value="en">English</option>
                        <option value="ar">Arabic</option>
                    </select>

                </div>
                <div class="language-clear">
                    <button>X</button>
                </div>

            </div>
        </div>

    </nav>
    <div>
        <div class="row p-0 m-0">
            <div class="col-3 p-0 m-0 ps-2">

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
                <div class="card sideCard3 d-flex justify-content-center align-items-center" style="background-color: #F2E29B;">

                    <div class="d-flex">
                        <p class="me-3">Containers <br> Containers percentage</p>
                        <h1 style="color: #1B6176;"> 100.0%</h1>

                    </div>

                </div>
                <div class=" sideCard4">

                    <div class=" d-flex justify-content-between">

                        <div class="card sqrbox me-1 mb-2">
                            <p class="text-center mt-2">Total Collected Bins</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <i style="color: #006A67;" class="fa-solid fa-circle-check me-2"></i>
                                <h4 style="color: #006A67;" class="mb-0">10,132</h3>
                            </div>
                        </div>

                        <div class="card sqrbox ms-1 mb-2">
                            <p class="text-center mt-2">Total Not Collected Bins</p>

                            <div class="d-flex justify-content-center align-items-center">
                                <i style="color: #EF6A6A;" class="fa-solid fa-circle-xmark me-2"></i>
                                <h4 style="color: #EF6A6A;" class="mb-0">8,323</h3>
                            </div>


                        </div>
                    </div>
                    <div class="  d-flex justify-content-between">

                        <div class="card  sqrbox  me-1 mb-2">

                            <p class="text-center p-0 m-0 mt-2">Percentange of Unload</p>

                            <div class="d-flex justify-content-center align-items-center percentange_of_unload" id="percentange_of_unload">


                            </div>

                        </div>
                        <div class="card sqrbox  ms-1 mb-2">

                            <p class="text-center p-0 m-0 mt-2">Percentange of Unload</p>
                            <div class=" percentange_of_unload2" id="percentange_of_unload2">

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-9 p-0 m-0">

                <div class="row second p-0 m-0 mb-2">
                    <div class="d-flex">

                        <div class=" col-3 p-0 m-0">
                            <div class="card rightMiddle p-0 m-0">
                                <div>Dischange According Condition</div>
                                <div id="chart1" class="rightMiddle">

                                </div>

                            </div>
                        </div>

                        <div class=" col-4">
                            <div class="ms-2">
                                <div class="card  rightMiddle p-0 m-0" id="chart2">
                                    <div>Dischange Status(Operation plans)</div>
                                    <div class="rightMiddle" id="chart2">

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-5 ">
                            <div class="ms-2 ">
                                <div class="card rightMiddle p-0 m-0 " id="chart3">
                                    <div>Dischange Status(Contract)</div>
                                    <div class="rightMiddle" id="chart3">

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row third p-0 m-0">
                    <div class="d-flex justify-content-between">

                        <div class="col-6 ">
                            <div class="card m-0 me-1 ">
                                <div class="text-center mt-2">
                                    Emptied and Unempited containers by day
                                </div>
                                <div class="rightMiddle2 " id="chart4">

                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class=" card m-0 ms-1 ">
                                <div class="text-center mt-2">
                                    Percentange of emptied containers(Operation plan)
                                </div>
                                <div class="rightMiddle2" id="chart5">

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/dashboard1.js"></script>


    <script>
     

        var languageSelector = document.getElementById('languageSelector');
        languageSelector.addEventListener('change', function() {
            var selectedLanguage = this.value;
            
            changeLanguage(selectedLanguage);
        });
    </script>

</body>

</html>