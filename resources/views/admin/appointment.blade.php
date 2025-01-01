@extends('admin.layouts.app')
<style>
    /* For 320x866 */
    @media (max-width: 320px) {
        .p-4 {
    /* padding: 2.5rem !important; */
    width: 100%;
    margin-top: 22px;
}
    }

    /* For 375x866 */
    @media (max-width: 375px) {
        .p-4 {
    /* padding: 2.5rem !important; */
    width: 100%;
    margin-top: 22px;
}
    }

    /* For 768x866 */
    @media (max-width: 768px) {
        .p-4 {
    /* padding: 2.5rem !important; */
    width: 100%;
    margin-top: 22px;
}
    }

    /* For 1024x866 */
    @media (max-width: 1024px) {
        .p-4 {
    /* padding: 2.5rem !important; */
    width: 100%;
    margin-top: 22px;
}
    }

    /* For 1440x962 */
    @media (max-width: 1440px) {
        .p-4 {
    /* padding: 2.5rem !important; */
    width: 100%;
    margin-top: 22px;
}
    }

    /* For 2560x1732 */
    @media (max-width: 2560px) {
        .p-4 {
    /* padding: 2.5rem !important; */
    width: 100%;
    margin-top: 22px;
}
    }
</style>
@section('main-section')
    <div class="container py-4">

        <div class="container-fluid p-4">
            <!-- Card -->
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Appointment Data</h5>
                </div>
                <div class="card-body">
                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Beautician Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Row 1 -->
                                <tr>
                                    <td>Shakil Oraf Nure</td>
                                    <td>10/10/2020</td>
                                    <td>09:30-10am</td>
                                    <td>Facial</td>
                                    <td>Beautician A</td>
                                </tr>
                                <!-- Row 2 -->
                                <tr>
                                    <td>Abdul Afuw</td>
                                    <td>11/10/2020</td>
                                    <td>09:30-10am</td>
                                    <td>Haircut</td>
                                    <td>Beautician B</td>
                                </tr>
                                <!-- Row 3 -->
                                <tr>
                                    <td>Waleed</td>
                                    <td>12/10/2020</td>
                                    <td>09:30-10am</td>
                                    <td>Manicure</td>
                                    <td>Beautician C</td>
                                </tr>
                                <!-- Row 4 -->
                                <tr>
                                    <td>Zakariyya</td>
                                    <td>13/10/2020</td>
                                    <td>09:30-10am</td>
                                    <td>Pedicure</td>
                                    <td>Beautician D</td>
                                </tr>
                                <!-- Row 5 -->
                                <tr>
                                    <td>Zebadiyah</td>
                                    <td>14/10/2020</td>
                                    <td>09:30-10am</td>
                                    <td>Massage</td>
                                    <td>Beautician E</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Card Footer with Pagination and Filters -->
                <div class="card-footer d-flex flex-wrap justify-content-between align-items-center">
                    <!-- Pagination -->
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm">Previous</button>
                        <button class="btn btn-secondary btn-sm">1</button>
                        <button class="btn btn-secondary btn-sm">2</button>
                        <button class="btn btn-secondary btn-sm">3</button>
                        <button class="btn btn-secondary btn-sm">4</button>
                        <button class="btn btn-secondary btn-sm">Next</button>
                    </div>
                    <!-- Filters -->
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm">All data</button>
                        <button class="btn btn-secondary btn-sm">Last month</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
