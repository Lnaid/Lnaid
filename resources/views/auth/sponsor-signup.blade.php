@extends('layouts.auth')
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
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
                            <input type="text" name="name" placeholder="Name" required="required" id="name" value="{{ old('name') }}" />
                            <select name="sponsor_type", id="sponsor-type">
                                <option value="individual">Individual</option>
                                <option value="corporate">Corporate Body</option>
                            </select>
                            <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}"/>
                            <input type="text" required="required" name="location" placeholder="Location" value="{{ old('location') }}"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Social Profiles</h2>
                            <h3 class="fs-subtitle">Your presence on the social network</h3>
                            <input type="text" name="twitter" placeholder="Twitter" value="{{ old('twitter') }}"/>
                            <input type="text" name="facebook" placeholder="Facebook" value="{{ old('facebook') }}"/>
                            <input type="text" name="linkedin" placeholder="Linkedin"  value="{{ old('linkedin') }}"/>
                            <input type="text" name="website" placeholder="Website"  value="{{ old('website') }}"/>
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <h2 class="fs-title">Create your account</h2>
                            <h3 class="fs-subtitle">Fill in your credentials</h3>
                            <input type="text" name="email" required="required" placeholder="Email"  value="{{ old('email') }}"/>
                            <input type="password" name="password" id="pass" placeholder="Password" />
                            <input type="password" name="confirm_password" placeholder="Confirm Password"/>

                            <input type="hidden" name="account_type" value="sponsor" />
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
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ asset('assets/js/ms-script2.js') }}"></script>

        @include('partials.error', ['position' => 'toast-bottom-left' ])
        @include('partials.flash', ['position' => 'toast-bottom-left', 'timeout' => 1000 ])

    @endPush

