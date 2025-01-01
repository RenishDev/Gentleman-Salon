@extends('admin.layouts.app')


@section('main-section')
<body style="background-color: #ececec">
   
    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid p-4">
            <div class="row">
                <!-- Left Section (Sales and Services) -->
                <div class="col-lg-8">
                    <!-- Sales and Rate Cards -->
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="card p-3 sales-card">
                                <h5>Online Sales</h5>
                                <p>$9,583.99</p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 occupancy-card">
                                <h5>Occupancy Rate</h5>
                                <p>89.97%</p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89.97%;"
                                        aria-valuenow="89.97" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 client-card">
                                <h5>Returning Client Rate</h5>
                                <p>94%</p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar" style="width: 94%;" aria-valuenow="94"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Sales Graph -->
                    <div class="container">
                        <div class="row">
                            <!-- First Map -->
                            <div class="col-md-6 mb-4">
                                <div class="card p-3 shadow-sm">
                                    <h5>Recent Sales</h5>
                                    <div class="chart-placeholder">
                                        <canvas id="salesWaveChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Map -->
                            <div class="col-md-6 mb-4">
                                <div class="card p-3 shadow-sm">
                                    <h5>Top Products</h5>
                                    <div class="chart-placeholder">
                                        <canvas id="salesWaveChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Top Services -->
                    <div class="card p-3 mb-4 bg-light shadow-lg">
                        <h5>Top Services</h5>


                        <!-- Carousel for small screens -->
                        <div id="topServicesCarousel" class="carousel slide d-lg-none" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Hair & Styling Service -->
                                <div class="carousel-item active">
                                    <div class="service position-relative shadow-sm text-center"
                                        style="border: 1px solid #ddd;">
                                        <img src="{{ asset('media/services/sd-1.png') }}" alt="Hair & Styling"
                                            class="img-fluid mb-2 mx-auto d-block"
                                            style="width: auto; height: auto; border-radius: 10px; box-shadow: 8px 6px 16px 0px rgba(0, 0, 0, 0.2);">
                                        <div class="position-absolute top-0 end-0 m-2 bg-white p-2"
                                            style="border-radius: 8px;">
                                            <span class="rating" style="font-size: 0.8rem;">
                                                &#9733; 4.0
                                            </span>
                                        </div>
                                        <h6 class="mt-2">Hair & Styling</h6>
                                        <h6 class="text-muted">Price: <span class="price"> $75.00</span></h6>

                                        </h6>
                                    </div>
                                </div>


                                <!-- Hair Wash Service -->
                                <div class="carousel-item">
                                    <div class="service position-relative shadow-sm text-center"
                                        style="border: 1px solid #ddd;">
                                        <img src="{{ asset('media/services/sd-2.png') }}" alt="Fitness"
                                            class="img-fluid mb-2 mx-auto d-block"
                                            style="width: auto; height: auto; border-radius: 10px; box-shadow: 8px 6px 16px 0px rgba(0, 0, 0, 0.2);">
                                        <div class="position-absolute top-0 end-0 m-2 bg-white p-2 "
                                            style="border-radius: 8px;">
                                            <span class="rating" style="font-size: 0.8rem;">
                                                &#9733; 4.0
                                            </span>
                                        </div>
                                        <h6 class="mt-2">Hair Wash</h6>
                                        <h6 class="text-muted">Price: <span class="price"> $75.00</span></h6>

                                        </h6>
                                    </div>
                                </div>


                                <!-- Color & Dye Service -->
                                <div class="carousel-item">
                                    <div
                                        class="service position-relative shadow-sm text-center"style="border: 1px solid #ddd;">
                                        <img src="{{ asset('media/services/sd-3.png') }}" alt="Medical & Dental"
                                            class="img-fluid mb-2 mx-auto d-block"
                                            style="width: auto; height: auto; border-radius: 10px; box-shadow: 8px 6px 16px 0px rgba(0, 0, 0, 0.2);">
                                        <div class="position-absolute top-0 end-0 m-2 bg-white p-2"
                                            style="border-radius: 8px;">
                                            <span class="rating" style="font-size: 0.8rem;">
                                                &#9733; 4.0
                                            </span>
                                        </div>
                                        <h6 class="mt-2">Color & Dye</h6>
                                        <h6 class="text-muted">Price: <span class="price"> $75.00</span></h6>

                                        </h6>
                                    </div>
                                </div>
                            </div>


                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#topServicesCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#topServicesCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                        <!-- Grid layout for large screens -->
                        <div class="d-none d-lg-flex justify-content-between">
                            <!-- Hair & Styling Service -->
                            <div class="service position-relative shadow-sm text-center"
                                style="border: 1px solid #ddd;">
                                <img src="{{ asset('media/services/sd-1.png') }}" alt="Hair & Styling"
                                    class="img-fluid mb-2"
                                    style="width: auto; height: auto; border-radius: 10px; box-shadow: 8px 6px 16px 0px rgba(0, 0, 0, 0.2);">
                                <div class="position-absolute top-0 end-0 m-2 bg-white p-2"
                                    style="border-radius: 8px;">
                                    <span class="rating" style="font-size: 0.8rem;">
                                        &#9733; 4.0
                                    </span>
                                </div>
                                <h6 class="mt-2">Hair & Styling</h6>
                                <h6 class="text-muted">Price: <span class="price"> $75.00</span></h6>
                            </div>


                            <!-- Hair Wash Service -->
                            <div class="service position-relative shadow-sm text-center"
                                style="border: 1px solid #ddd;">
                                <img src="{{ asset('media/services/sd-2.png') }}" alt="Fitness"
                                    class="img-fluid mb-2"
                                    style="width: auto; height: auto; border-radius: 10px; box-shadow: 8px 6px 16px 0px rgba(0, 0, 0, 0.2);">
                                <div class="position-absolute top-0 end-0 m-2 bg-white p-2"
                                    style="border-radius: 8px;">
                                    <span class="rating" style="font-size: 0.8rem;">
                                        &#9733; 4.0
                                    </span>
                                </div>
                                <h6 class="mt-2">Hair Wash</h6>
                                <h6 class="text-muted">Price: <span class="price"> $75.00</span></h6>
                                </h6>
                            </div>


                            <!-- Color & Dye Service -->
                            <div class="service position-relative shadow-sm text-center"
                                style="border: 1px solid #ddd;">
                                <img src="{{ asset('media/services/sd-3.png') }}" alt="Medical & Dental"
                                    class="img-fluid mb-2"
                                    style="width: auto; height: auto; border-radius: 10px; box-shadow: 8px 6px 16px 0px rgba(0, 0, 0, 0.2);">
                                <div class="position-absolute top-0 end-0 m-2 bg-white p-2"
                                    style="border-radius: 8px;">
                                    <span class="rating" style="font-size: 0.8rem;">
                                        &#9733; 4.0
                                    </span>
                                </div>
                                <h6 class="mt-2">Color & Dye</h6>
                                <h6 class="text-muted">Price: <span class="price"> $75.00</span></h6>
                                </h6>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Right Section (Appointments and Team Members) -->
                <div class="col-lg-4">
                    <!-- Upcoming Appointments -->
                    <div class="card p-3 mb-4">
                        <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                            <div id="calendar" class="mb-5 mb-xl-0"></div>
                        </div>
                    </div>
                    <!-- Top Team Member -->

                    <!-- Top Team Member -->
                    <div class="card p-3">
                        <h5>Top Team Members</h5>
                        <div class="team-members">
                            <!-- Jason -->
                            <div class="member d-flex align-items-center mb-3">
                                <img src="{{ asset('media/gallery/g-1.png') }}" alt="Jason" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <h6 class="mb-0">Jason <span class="text-muted">(Supervisor)</span></h6>
                            </div>
                            <!-- Diana -->
                            <div class="member d-flex align-items-center mb-3">
                                <img src="{{ asset('media/gallery/g-2.png') }}" alt="Diana" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <h6 class="mb-0">Diana <span class="text-muted">(Chief Officer)</span></h6>
                            </div>
                            <!-- Devid -->
                            <div class="member d-flex align-items-center mb-3">
                                <img src="{{ asset('media/gallery/g-3.png') }}" alt="Devid" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <h6 class="mb-0">Devid <span class="text-muted">(Specialist)</span></h6>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
    <!-- Theme Switcher Panel -->
    <div class="theme-switcher" id="themeSwitcher">
        <ul class="d-flex p-0 m-0">
            <li class="theme-option" data-theme="theme-1" style="background-color: #e9ccab;"></li>
            <li class="theme-option" data-theme="theme-2" style="background-color: #a6dace;"></li>
            <li class="theme-option" data-theme="theme-3" style="background-color: #FFA28D;"></li>
            <li class="theme-option" data-theme="theme-4" style="background-color: #ffafcc;"></li>
            <li class="theme-option" data-theme="theme-5" style="background-color: #cda0d8;"></li>
        </ul>
    </div>
    <!-- Bootstrap JS and Icons -->

   
</body>

@endsection