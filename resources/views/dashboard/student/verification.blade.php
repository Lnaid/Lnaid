@extends('layouts.student')
@push('css')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" /> -->
@endPush
@section('content')

<!-- ============ Body content start ============= -->
<div class="main-content">
    @include('partials.breadcrumb')
    <div class="separator-breadcrumb border-top"></div>
    <div class="row mb-4">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Verify your account</h4>
                    <ul class="nav nav-pills" id="myPillTab" role="tablist">
                        <li class="nav-item"><a class="nav-link @if($student->schol_email == null) active show @endif" id="home-icon-pill" data-toggle="pill" href="#homePIll" role="tab" aria-controls="homePIll" aria-selected="false"><i class="nav-icon i-Computer-Secure mr-1"></i>Upload your credential</a></li>
                        <li class="nav-item"><a class="nav-link @if($student->schol_email != null && $student->school_id_path == null) active show @endif" id="profile-icon-pill" data-toggle="pill" href="#profilePIll" role="tab" aria-controls="profilePIll" aria-selected="false"><i class="nav-icon i-Computer-Secure mr-1"></i> Upload your school ID card</a></li>
                        <li class="nav-item"><a class="nav-link @if($student->school_id_path != null) active show @endif" id="contact-icon-pill" data-toggle="pill" href="#contactPIll" role="tab" aria-controls="contactPIll" aria-selected="true"><i class="nav-icon i-Computer-Secure mr-1"></i> Final submission</a></li>
                    </ul>
                    <div class="tab-content" id="myPillTabContent">
                        <div class="tab-pane fade  @if($student->schol_email == null) active show @endif" id="homePIll" role="tabpanel" aria-labelledby="home-icon-pill">
                            <form action="{{route('student.verify.step1')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">School Name</p>
                                        <select class="form-control" name="school_id"/>
                                            <option>Select School</option>
                                            @foreach($schools as $sch)
                                                <option value="{{$sch->id}}" @if($student->school_id == $sch->id) selected @endif>{{$sch->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Matric Number</p>
                                        <input class="form-control" type="text" placeholder="Matric Number" name="matric_no" value="{{$student->matric_no}}" />
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Programme Type</p>
                                        <select class="form-control" name="program_type"/>
                                            <option>Select Program</option>
                                            @foreach($programme as $p)
                                                <option value="{{$p}}" @if($student->program_type == strtolower($p)) selected @endif>{{$p}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Department/Course</p>
                                        <input class="form-control" type="text" placeholder="Course/Department" name="department" value="{{$student->department}}" />
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">School/Falculty</p>
                                        <input class="form-control" type="text" placeholder="School/Falculty" name="falculty" value="{{$student->falculty}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Level</p>
                                        <input class="form-control" type="text" placeholder="Level" name="level" value="{{$student->level}}" />
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Admission Year</p>
                                        <input class="form-control" type="date" placeholder="Admission Year" name="admission_year" value="{{$student->admission_year}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Graduation Year</p>
                                        <input class="form-control" type="date" placeholder="Graduation Year" name="graduation_year" value="{{$student->graduation_year}}" />
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Progamme Duration</p>
                                        <input class="form-control" type="number" placeholder="Program Duration" name="program_duration" value="{{$student->program_duration}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Country</p>
                                        <input class="form-control" type="text" placeholder="Country" name="country" value="{{$student->country}}" />
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">State</p>
                                        <input class="form-control" type="text" placeholder="State" name="state" value="{{$student->state}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">DOB (Date of Birth)</p>
                                        <input class="form-control" type="date" placeholder="DOB" name="dob" value="{{$student->dob}}" />
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">School  Email</p>
                                        <input class="form-control" type="email" placeholder="School  Email" name="schol_email" value="{{$student->schol_email}}" />
                                    </div>
                                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-secondary" type="submit">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade @if($student->schol_email != null && $student->school_id_path == null) active show @endif" id="profilePIll" role="tabpanel" aria-labelledby="profile-icon-pill">
                            <form action="{{route('student.verify.step2')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">School ID Card</p>
                                        <input class="form-control" type="file" name="idcard"/>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Admission Letter</p>
                                        <input class="form-control" type="file" name="admission_letter"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Transcript</p>
                                        <input class="form-control" type="file" name="transcript"/>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-secondary" type="submit">Continue</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade @if($student->school_id_path != null) active show @endif" id="contactPIll" role="tabpanel" aria-labelledby="contact-icon-pill">
                            <form action="{{route('student.verify.step3')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">Bank Verification Number (BVN)</p>
                                        <input class="form-control" type="text" name="bvn"/>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="font-weight-400 mb-2">National Identification Number (NIN)</p>
                                        <input class="form-control" type="text" name="nin"/>
                                    </div>
                                    
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-secondary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end of row-->
    <!-- end of main-content -->
</div>

@endSection
@push('js')
<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

<!-- include('partials.error', ['position' => 'toast-bottom-left' ]) -->
<!-- include('partials.flash', ['position' => 'toast-bottom-left', 'timeout' => 1000 ]) -->

@endPush

