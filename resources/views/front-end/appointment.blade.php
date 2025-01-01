@extends('front-end.layouts.app')

@section('main-section')


        <!--=====================================-->
        <!--=      Page Start Banner Start      =-->
        <!--=====================================-->
        <section class="page-start-banner">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{ url ('home') }}">Home</a></li>
                        <li><a href="{{url('appointment')}}" class="active"> APPOINTMENT</a></li>
                    </ul>
                </div>
                <div class="heading">
                    <h2>APPOINTMENT</h2>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=      Appointment Area Start       =-->
        <!--=====================================-->
        <section class="appointment background-1 sec-pad-80">
            <div class="container">
                <form method="post" action="appointment-1.html" id="form-wizard" class="submit-form">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#step-1">
                                <div class="num">1</div>
                                <span class="nav-title">APPOINTMENT DETAIL</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#step-2">
                                <span class="num">2</span>
                                <span class="nav-title">DATE</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#step-3">
                                <span class="num">3</span>
                                <span class="nav-title">TIME</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#step-4">
                                <span class="num">4</span>
                                <span class="nav-title">PERSONAL DETAILS</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-control form-group" name="category">
                                        <option value="">SELECT CATEGORY</option>
                                        <option value="body">BODY</option>
                                        <option value="make_up">MAKE UP</option>
                                        <option value="hair">HAIR</option>
                                        <option value="skin_care">SKIN CARE</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-control form-group" name="services">
                                        <option value="">SELECT SERVICES</option>
                                        <option value="body">BODY</option>
                                        <option value="make_up">MAKE UP</option>
                                        <option value="hair">HAIR</option>
                                        <option value="skin_care">SKIN CARE</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <select class="form-control form-group" name="employee">
                                        <option value="">SELECT EMPLOYEE</option>
                                        <option value="1">EMPLOYEE 1</option>
                                        <option value="2">EMPLOYEE 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                            <div id="calendar" class="mb-5 mb-xl-0"></div>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                            <div class="book-time">
                                <div class="available-time" data-toggle="buttons">
                                    <label class="btn"> 10 : 00
                                        <input type="radio" value="10" name="time" class="time">
                                    </label>

                                    <label class="btn"> 11 : 00
                                        <input type="radio" value="11" name="time" class="time">
                                    </label>

                                    <label class="btn"> 12 : 00
                                        <input type="radio" value="12" name="time" class="time">
                                    </label>

                                    <label class="btn active"> 13 : 00
                                        <input type="radio" value="13" name="time" class="time">
                                    </label>

                                    <label class="btn"> 14 : 00
                                        <input type="radio" value="14" name="time" class="time">
                                    </label>

                                    <label class="btn"> 15 : 00
                                        <input type="radio" value="15" name="time" class="time">
                                    </label>

                                    <label class="btn"> 16 : 00
                                        <input type="radio" value="16" name="time" class="time">
                                    </label>

                                    <label class="btn"> 17 : 00
                                        <input type="radio" value="17" name="time" class="time">
                                    </label>

                                    <label class="btn"> 18 : 00
                                        <input type="radio" value="18" name="time" class="time">
                                    </label>

                                    <label class="btn"> 19 : 00
                                        <input type="radio" value="19" name="time" class="time">
                                    </label>

                                    <label class="btn"> 20 : 00
                                        <input type="radio" value="20" name="time" class="time">
                                    </label>
                                </div>
                                <div class="error-time text-center" style="text-align: center;"></div>
                            </div>
                        </div>
                        <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-group" name="first_name"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-group" name="last_name"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-group" name="email"
                                            mailto:placeholder="info@example.com">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-group" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <textarea name="note" class="form-control form-group" id="note" rows="4"
                                    placeholder="ADD A DESCRIPTION"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="stylen-btn btn-primary">BOOK APPOINTMENT</button>
                            </div>
                        </div>

                    </div>

                    <!-- Include optional progressbar HTML -->
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </form>
            </div>
            <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <i class="fas fa-check-circle"></i>
                                <h3>Appointment Booked Successfully!</h3>
                            </div>

                            <table class="table table-striped">
                                <tr>
                                    <th>Date:</th>
                                    <td>22 March 2023</td>
                                </tr>
                                <tr>
                                    <th>Time:</th>
                                    <td>8:00 PM</td>
                                </tr>
                                <tr>
                                    <th>Service</th>
                                    <td>Full Body Message</td>
                                </tr>
                                <tr>
                                    <th>Masseuse</th>
                                    <td>Jqluine Sabrina</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
