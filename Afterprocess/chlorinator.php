<?php session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- fontgoogle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <title>AfterProcess</title>
</head>

<body style="background-color:#fff ; overflow: auto;  ">

    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxs-cube'></i>
                <div class="logo_name">AnSell Thailand</div>
            </div>
            <!-- <i class='bx bx-menu' id="button"></i> -->
        </div>
        <ul class="nav list">
        <li>
                <a href="homeafter.php">
                    <i class='bx bx-home-heart'></i>
                    <span class="links_name">Home</span>
                </a>

            </li>

            <li>

                <a href="chlorinator.php">

                    <i class='bx bxs-id-card'></i>
                    <span class="links_name">Chlorinator</span>
                </a>
            </li>

            

            <li>
                <a href="reportafterprocess.php">
                    <i class='bx bxs-file-doc'></i>
                    <span class="links_name">Chlorinator Report </span>
                </a>

            </li>





        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="pic/users.png" alt="">
                    <div class="name_job">
                        <div class="name">
                            <span><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></span>
                        </div>
                        <div class="job">
                            <span><?php echo $_SESSION['department'];?></span>
                        </div>
                    </div>
                </div>
                <a href="../logout.php">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>

            </div>
        </div>
    </div>

    <!-- NAVBAR -->

    
    <div class="container " id="crudApp">
        <div class=" home_content ">

            <div class="col-12" align="center">


                <div class="col-md-4">

                    <h1 class="mt-3" Style="border: 1px solid #000; border-radius: 30px; background-color:#DDDDDD;">Chlorinator&Dryer</h1>

                </div>





                <div class=" form-group mb-3 col-lg-8 mt-4 ">
                    <input type="search" class="form-control form-control-md " placeholder="Search Here"
                        v-model="filtering">
                </div>

                <div class="col-12 mb-3" align="right">
                    <input type="button" class="btn btn-success btn-xs " data-bs-toggle="modal"
                        data-bs-target="#myModal" @click="openModal" value="Add AfterProcess">
                </div>


                <hr>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-striped table-sm">
                        <tr>
                            <th>#</th>
                            <th>BinNo.</th>
                            <th>Product Code</th>
                            <th>Product Lot</th>
                            <th>Size</th>
                            <th>Run No.</th>
                            <th>STARTDate&Time</th>
                            <th>SHIFT</th>
                            <th>FINISHEDDate&Time</th>
                            <th>SHIFT</th>
                            <th>Operator</th>
                            <th>After process</th>
                            <th>Action</th>
                        </tr>
                        <tr v-for="(row,index) in filteredRows " :key="row.Productionlot">
                            <td>{{index+1}}</td>
                            <td>{{row.Binno}}</td>
                            <td>{{row.Productcode}}</td>
                            <td>{{row.Productionlot}}</td>
                            <td>{{row.SizeHand}}</td>
                            <td>{{row.MachineRunNo}}</td>
                            <td>{{row.StartAfter}}</td>
                            <td>{{row.StartShift}}</td>
                            <td>{{row.FinishedAfter}}</td>
                            <td>{{row.FinishedShift}}</td>
                            <td>{{row.Operator}}</td>
                            <td>{{row.afterprocess}}</td>
                  


                            <td>
                                <button type="button" name="edit" class="btn btn-primary btn-sm
                    edit" data-bs-toggle="modal" @click="fetchData(row.Productionlot)"
                                    data-bs-target="#myModal">ADD</button>
                                <button type="button" name="delete" class="btn btn-danger btn-sm
                        delete" data-bs-toggle="modal" @click="deleteData(row.Productionlot)"
                                    data-bs-target="#myModal">Delete</button>
                            </td>

                        </tr>
                    </table>

                </div>

                <div v-if="myModal" class="modal fade" id="myModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">{{ dynamicTitle }}</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    @click="myModal=false"></button>
                            </div>

                            <div class="modal-body row g-3">

                                <div class="col-sm-12">
                                    <label for="Product Lot">Product Lot</label><br>
                                    <input type="text" v-model="product_lot" class="form-control form-control-sm "
                                        style="border-radius: 30px;" :disabled="actionButton =='Update'">
                                    
                                </div>
                                <br>

                                <div class="col-sm-6">
                                    <label for="start">StartDate&Time</label><br>
                                    <input type="datetime-local" class="form-control form-control-sm"
                                        style="border-radius: 30px;" id="birthdaytime" name="birthdaytime"
                                        v-model="start_ex" :value="start_ex" :disabled="actionButton =='Insert'">
                                </div>
                                <br>





                                <div class="col-sm-6">
                                    <label for="Shift">Shift.</label><br>
                                    <select v-model="bin_shift" class="form-select form-select-sm"
                                        style="border-radius: 30px;" :disabled="actionButton =='Insert'">
                                        <option v-for="times in time" :key="times.timeshift" :value="times.timeshift">
                                            {{times.timeshift}}</option>

                                    </select>
                                </div>
                                <br>

                                <div class="col-sm-6">
                                    <label for="finished">FinishedDate&Time</label><br>
                                    <input type="datetime-local" class="form-control form-control-sm"
                                        style="border-radius: 30px;" id="birthdaytime" name="birthdaytime"
                                        v-model="finish_ex" :value="finish_ex" :disabled="actionButton =='Insert'">
                                </div>
                                <br>



                                <div class="col-sm-6">
                                    <label for="Shift">Shift.</label><br>
                                    <select v-model="bin_fhshift" class="form-select form-select-sm"
                                        style="border-radius: 30px;" :disabled="actionButton =='Insert'">
                                        
                                        <option v-for="times in time" :key="times.timeshift" :value="times.timeshift">
                                            {{times.timeshift}}</option>

                                    </select>
                                </div>
                                <br>

                                <!-- <div class="col-sm-6">
                                    <label for="AfterProcess">AfterProcess</label><br>
                                    <select v-model="check_after" class="form-select form-select-sm"
                                        style="border-radius: 30px;" :disabled="actionButton =='Insert'">
                                        <option value="">Choose AfterProcess</option>
                                        <option v-for="afters in after" :key="afters.statusafter"
                                            :value="afters.statusafter">
                                            {{afters.statusafter}}</option>
                                    </select>
                                </div>
                                <br> -->

                                <div class="col-sm-12">
                                    <label for="operator">Operator</label><br>
                                    <input type="text" v-model="opera_ex" style="border-radius: 30px;" class="form-control form-control-sm"
                                        :disabled="actionButton =='Insert'">
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <input type="hidden" v-model="hiddenId">
                                    <input type="button" v-model="actionButton" @click="submitData"
                                        class="btn btn-success btn-xs">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../js/addafterprocess.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>