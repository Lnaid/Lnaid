@extends('layouts.auth')
    @push('css')
        <link href="{{ asset('assets/css/ms-form2.css') }}" rel="stylesheet">
    @endPush
    @section('content')
        <section class="" >
            <!-- MultiStep Form -->
            <div class="row" style="margin-top: 80px">
                <div class="col-md-6 col-md-offset-3">
                    <form id="msform" action="{{ route('store.sponsor') }}" method="POST" name="sponsor-signup">
                        @method('post')
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">General Details</li>
                            <li>Social Profiles</li>
                            <li>Account Setup</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 class="fs-title">General Details</h2>
                            <h3 class="fs-subtitle">Tell us something more about you</h3>
                            <input type="text" name="fname" placeholder="Name" required="required" id="fname" />
                            <p id="fname-err" class="input-err"></p>
                            <select>
                                <option>Individual</option>
                                <option>Corporate Body</option>
                            </select>
                            <input type="text" name="phone" placeholder="Phone"/>
                            <input type="text" name="location" placeholder="Location"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Social Profiles</h2>
                            <h3 class="fs-subtitle">Your presence on the social network</h3>
                            <input type="text" name="twitter" placeholder="Twitter"/>
                            <input type="text" name="facebook" placeholder="Facebook"/>
                            <input type="text" name="linkedin" placeholder="Linkedin"/>
                            <input type="text" name="website" placeholder="Website"/>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Create your account</h2>
                            <h3 class="fs-subtitle">Fill in your credentials</h3>
                            <input type="text" name="email" required="required" placeholder="Email"/>
                            <input type="password" name="pass" placeholder="Password"/>
                            <input type="password" name="cpass" placeholder="Confirm Password"/>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                        </fieldset>
                    </form>
                    
                </div>
            </div>
            <!-- /.MultiStep Form -->
        </section>

    @endSection
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script src="{{ asset('assets/js/ms-script2.js') }}"></script>
    @endPush

