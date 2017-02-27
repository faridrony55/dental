<?php include "header.php"; ?>
    <!--************************-->

    <section class="banner">
        <div class="banner-img"><img src="assets/images/doctor.png" class="img-responsive" alt=""></div>
        <div class="container banner-content">
            <div class="row">
                <div class="banner-">
                    <h1>Appointment From</h1>
                    <ul class="list-inline">
                        <li>You Are Here: </li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages   </a></li>
                        <li class="active"><a href="#">Appointment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="apointement-section section-padding-top">
        <div class="container-fluid">
            <div class="row">

                <!--_______-->
                <!--_______-->
                <div class="col-sm-9 col-center">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="assets/images/appointemen.jpg" alt="shutterstock_90532873" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <div class="appointemen-form dental-form">

                                <h2>Book an Appointment</h2>

                                <form class="form">
                                        <div class="col-sm-6">
                                    <div class="form-group">
                                            <select id="disabledSelect" class="form-control">
                                                <option>Department</option>
                                                <option>Department</option>
                                                <option>Department</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                    <div class="form-group">
                                            <select id="disabledSelect" class="form-control">
                                                <option>Doctor name</option>
                                                <option>Doctor name</option>
                                                <option>Doctor name</option>
                                            </select>
                                        </div>
                                    </div>

                                        <div class="col-sm-6">
                                    <div class="form-group ">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="name" placeholder="Your name:"  aria-describedby="inputGroupSuccess4Status">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                    <div class="form-group ">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="phonenumber" placeholder="Phone number:" aria-describedby="inputGroupSuccess4Status">
                                                <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                    <div class="form-group ">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="date" placeholder="Date" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
                                                <span class="input-group-addon"><i  class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-6">
                                    <div class="form-group ">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
                                                <span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-12">
                                    <div class="form-group ">
                                            <div class="input-group s">
                                                <textarea class="form-control" rows="6" placeholder="Your message:"></textarea>
                                                <!-- <span class="input-group-addon"><i  class="fa fa-envelope"  aria-hidden="true"></i></span> -->
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-sm-12">
                                    <div class="form-group">
                                            <div class="load-more">
                                                <button type="submit" class="btn btn-custom  hvr-effect">send message</button>
                                            </div>

                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!--_______-->
                <!--_______-->

            </div>
        </div>

    </section>

    <!--************************-->
    <?php include "footer.php"; ?>