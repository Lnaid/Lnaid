@extends('layouts.auth')
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
        <link href="{{ asset('assets/css/ms-form.css') }}" rel="stylesheet">
    @endPush
    @section('content')
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-6 text-center p-0 mt-3 mb-2">
                    <div class="card px-4 pt-4 pb-0 mt-3 mb-3">
                        <h3 id="heading">Student Account</h3>
                        <p>Fill all form field to go to next step</p>
                        <form id="msform" name="student-signup-msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="school"><strong>School</strong></li>
                                <!-- <li id="payment"><strong>Image</strong></li> -->
                                <li id="confirm"><strong>Terms</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Account Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div>
                                    <label class="fieldlabels">Email: *</label>
                                    <input type="email" name="email" placeholder="Email" />
                                    <label class="fieldlabels">Username: *</label>
                                    <input type="text" name="username" placeholder="Username" />
                                    <label class="fieldlabels">Password: *</label>
                                    <input type="password" name="password" placeholder="Password" />
                                    <label class="fieldlabels">Confirm Password: *</label>
                                    <input type="password" name="confirm_password" placeholder="Confirm Password" />
                                </div> 
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Personal Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div>
                                    <label class="fieldlabels">Full Name: *</label>
                                    <input type="text" name="fname" placeholder="First Name" />
                                    <label class="fieldlabels">Prefered Pronoun: *</label>
                                    <select class="form-control mb-2" name="pronoun">
                                        <option>Select</option>
                                        <option>He/Him</option>
                                        <option>She/Her</option>
                                        <option>They/Them</option>
                                    </select>
                                    <label class="fieldlabels">Contact No.: *</label>
                                    <input type="text" name="phone" placeholder="Contact No." />
                                    <label class="fieldlabels">Alternate Contact No.: *</label>
                                    <input type="text" name="phone_2" placeholder="Alternate Contact No." />
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">School Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div>
                                    <label class="fieldlabels">School: *</label>
                                    <input type="text" name="school" placeholder="School" />
                                    <label class="fieldlabels">Department: *</label>
                                    <input type="text" name="department" placeholder="Department" />
                                    <label class="fieldlabels">Course: *</label>
                                    <input type="text" name="course" placeholder="Course" />
                                    <label class="fieldlabels">Program Type: *</label>
                                    <select class="form-control mb-2" name="program_type">
                                        <option>Select</option>
                                        <option value="undergraduate">Undergraduate</option>
                                        <option value="postgraduate">Postgraduate</option>
                                    </select>

                                    <label class="fieldlabels">Current Level: *</label>
                                    <input type="integer" name="level" placeholder="Level *e.g 100" />
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                            <!-- <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Image Upload:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 5 - 5</h2>
                                        </div>
                                    </div>
                                    <label class="fieldlabels">Upload Your Photo:</label>
                                    <input type="file" name="pic" accept="image/*">
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset> -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Terms:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> <br><br>
                                    <div class="px-3 row justify-content-center" style="height: 200px; overflow-y: scroll;">
                                        <!-- <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div> -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center"></h5>
                                        </div>
                                    </div>

                                    <div class="">
                                        <input class="form-check-input" type="checkbox" style="width: 60px" value="terms" id="flexCheckDefault"> 
                                        <label class="form-check-label" style="margin-left:30px" for="flexCheckDefault">
                                           I have read and accept Lnaid Terms
                                        </label>
                                    </div>

                                </div>

                                


                                <input type="button" id="submit" name="next" class="action-button" value="Submit" />
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endSection
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <!-- <script type="text/javascript">
            $(document).ready(function(){
                $('.next').hover(function(){
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });

                $.ajax({
                    url:  "{{ url('signup-sponsor') }}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(){
                        var success = "{{ Session::get('success') }}";
                        console.log('ajax came back successfully')
                        // toastr.error(success)
                    },

                    error: function(err){
                        errors = err.responseJSON.errors
                        // console.log(err.responseJSON.errors)
                        for(error in errors){
                            // toastr.error(error);
                            console.log(errors[error][0])
                        }
                    }
                });
                })
            })
        </script> -->
        <script src="{{ asset('assets/js/ms-script.js') }}"></script>

        @include('partials.error', ['position' => 'toast-bottom-left' ])
        @include('partials.flash', ['position' => 'toast-bottom-left', 'timeout' => 1000 ])



    @endPush

