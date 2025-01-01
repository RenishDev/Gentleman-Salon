@extends('front-end.front-end.about')

@section('main-section')
    <!--=====================================-->
    <!--=        Join Team Area Start       =-->
    <!--=====================================-->
    <section class="join-team">
        <div class="row">
            <div class="col-lg-8">
                <img src="/media/team/join-team-2.jpg" alt="">
            </div>
            <div class="col-lg-4">
                <div class="join-team-form">
                    <h2>DROP US YOUR CV</h2>
                    <div class="row">
                        <form method="post" action="join-team.html" class="submit-form">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" required
                                        placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" required
                                        placeholder="email@example.com">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <select class="form-control" name="position">
                                        <option value="">Select Available Positions</option>
                                        <option value="new_york">Massage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="cv" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" rows="3"
                                        placeholder="Your Message (We would love to hear from you)"></textarea>
                                </div>
                            </div>
                            <div class="text-center mb-5">
                                <button type="submit" class="stylen-btn btn-primary paper-plane">SEND PROPOSAL</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fal fa-check-circle"></i>
                            <h3>Application Submitted Successfully!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
