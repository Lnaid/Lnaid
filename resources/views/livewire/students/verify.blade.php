
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
	<div class="mdal flex items-end mb-5 justify-center min-h-screen  row">
			<div class="fixed inset-0 transition-opacity">
				<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
			</div>

		<!-- This element is to trick the browser into centering the modal contents. -->
			<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

		@if (session()->has('success'))
			<div class="col-md-12 d-none hidden" role="alert">
				<div class="flex">
					<div>
						<p class="text-sm">{{ session('success') }}</p>
					</div>
				</div>
			</div>
		@endif
		<div class="bg-gray-50 col-md-12">
			@include('partials.error', ['position' => 'toast-top-right' ])
	         @include('partials.flash', ['position' => 'toast-top-right', 'timeout' => 5000 ])
			<button wire:click="closeModal()" type="button" class="btn btn-default float-right">Back</button>
		</div>
		<!-- student details -->

		 <div class="col-md-7 mt-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="ul-widget__head">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Student Details</h3>
                    </div>
                    <div class="ul-widget__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget4-tab1-content" role="tab" aria-selected="true">Account</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget4-tab2-content" role="tab" aria-selected="false">Admission</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget4-tab3-content" role="tab" aria-selected="false">School</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget4-tab3-content" role="tab" aria-selected="false">BVN/NIN</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ul-widget__body">
                    <div class="tab-content">
                        <!-- tab  1 account details -->
                        <div class="tab-pane active show" id="__g-widget4-tab1-content">
	                        <div class="ul-widget4__item ul-widget4__users">
	                           	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Bank Name</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->bank_name }}</span>
	                           	</div>

	                          	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Account Name</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_name }}</span>

	                           	</div>

	                          	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Account Number</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_number }}</span>
	                           	</div>
	                       	</div>

	                       	<hr>
	                       	<div class="ul-widget4__item ul-widget4__users">

	                           	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Sub Account ID</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->rave_subaccount_id }}</span>
	                           	</div>

	                           	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Account ID</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->rave_account_id }}</span>
	                           	</div>

	                          	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Country</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->country }}</span>
	                           	</div>
	                       	</div>

	                       	<hr>
	                       	<div class="ul-widget4__item ul-widget4__users">

	                           	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Split Value</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->split_value }}</span>
	                           	</div>

	                          	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Split Type</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->split_type }}</span>
	                           	</div>

	                          	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Business Name</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->business_name }}</span>
	                           	</div>
	                       	</div>


	                       	<hr>
	                       	<div class="ul-widget4__item ul-widget4__users">

	                           	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Business Mobile</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->business_mobile }}</span>
	                           	</div>

	                          	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Business Email</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->business_email }}</span>
	                           	</div>

	                          	<div class="ul-widget2__info ul-widget4__users-info">
	                           		<a class="ul-widget2__title" href="#">Business Name</a>
	                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->subaccount->business_name }}</span>
	                           	</div>
	                       	</div>

	                       	<div class="ul-widget4__actions">
                                <button class="btn btn-outline-danger m-1" type="button">Create Subaccount</button>
                            </div>
	                    </div>

	                    <!-- tab 2 Admission details -->
                        <div class="tab-pane" id="__g-widget4-tab2-content">
                            <div class="ul-widget1">
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-danger m-1" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-success m-1" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/3.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-warning m-1" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/4.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-info m-1" type="button">Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- tab 3 School details -->
                        <div class="tab-pane" id="__g-widget4-tab3-content">
                            <div class="ul-widget1">
                            </div>
                        </div>

                        <!-- tab 4 School details -->
                        <div class="tab-pane" id="__g-widget4-tab4-content">
                            <div class="ul-widget1">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


		<div class="col-md-7 mt-4 d-none">
		    <div class="card h-100">
		        <div class="card-body">
		            <div class="ul-widget__head">
		                <div class="ul-widget__head-label">
		                    <h3 class="ul-widget__head-title">Account Details</h3>
		                </div>
		                <div class="ul-widget__head-toolbar">  
							<a class="nav-link active show" href="" wire:click.prevent="closeModal()" >Close</a>
		                </div>
		            </div>
		            <div class="ul-widget__body">
		                <div class="tab-content">
		                    <div class="tab-pane active show" id="__g-widget4-tab1-content">
		                        <div class="ul-widget4__item ul-widget4__users">

		                           	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Bank Name</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->bank_name }}</span>
		                           	</div>

		                          	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Account Name</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_name }}</span>

		                           	</div>

		                          	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Account Number</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_number }}</span>
		                           	</div>
		                       	</div>

		                       
		                       <hr>
		                       	<div class="ul-widget4__item ul-widget4__users">

		                           	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Sub Account ID</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->bank_name }}</span>
		                           	</div>

		                           	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Account ID</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->bank_name }}</span>
		                           	</div>

		                          	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Country</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_name }}</span>
		                           	</div>
		                       	</div>


		                       	<hr>
		                       	<div class="ul-widget4__item ul-widget4__users">

		                           	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Split Value</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->bank_name }}</span>
		                           	</div>

		                          	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Split Type</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_name }}</span>
		                           	</div>

		                          	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Business Name</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_number }}</span>
		                           	</div>
		                       	</div>


		                       	<hr>
		                       	<div class="ul-widget4__item ul-widget4__users">

		                           	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Business Mobile</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->bank_name }}</span>
		                           	</div>

		                          	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Business Email</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_name }}</span>
		                           	</div>

		                          	<div class="ul-widget2__info ul-widget4__users-info">
		                           		<a class="ul-widget2__title" href="#">Business Name</a>
		                           		<span class="ul-widget2__username" href="#">{{ $currentStudent->account_number }}</span>
		                           	</div>
		                       	</div>


		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<!-- student verification -->
		<div class="col-md-5 mt-4">
		    <div class="card h-100">
		        <div class="card-body">
		            <div class="ul-widget__head">
		                <div class="ul-widget__head-label">
		                    <h3 class="ul-widget__head-title">Student Verification</h3>
		                </div>
		                <div class="ul-widget__head-toolbar">  
							<a class="nav-link active show" href="" wire:click.prevent="closeModal()" >Close</a>
		                </div>
		            </div>
		            <div class="ul-widget__body">
		            <div class="ul-widget__body">
		                <div class="tab-content">
		                    <div class="tab-pane active show" id="__g-widget4-tab1-content">
		                        <div class="ul-widget1">
		                            <div class="ul-widget4__item ul-widget4__users">
		                                <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
		                                <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">BVN</a><span class="ul-widget2__username" href="#">Bank Verification Number</span></div>
		                                <div id="verify_switch" class="ul-widget4__actions">
		                                    <input type="checkbox" {{ $currentStudentVerification->bvn_verify ? 'checked' : '' }} wire:change="verifyBVN()" id="verify_bvn" /><label for="verify_bvn">BVN</label>
		                                </div>
		                            </div>
		                            <div class="ul-widget4__item ul-widget4__users">
		                                <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
		                                <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">NIN</a><span class="ul-widget2__username" href="#">National Indentification Number - optional</span></div>
		                                <div id="verify_switch" class="ul-widget4__actions">
		                                	<input type="checkbox" {{ $currentStudentVerification->nin_verify ? 'checked' : '' }} wire:change="verifyNIN()" id="verify_nin" /><label for="verify_nin">NIN</label>
		                                </div>
		                            </div>
		                            <div class="ul-widget4__item ul-widget4__users">
		                                <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
		                                <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">School Verification</a><span class="ul-widget2__username" href="#">We use uploaded school ID card to verify</span></div>
		                                <div id="verify_switch" class="ul-widget4__actions">
		                                    <input type="checkbox" {{ $currentStudentVerification->school_verify ? 'checked' : '' }} wire:change="verifySchool()" id="school_verify" />
		                                    <label for="school_verify">School</label>
		                                </div>
		                            </div>
		                            <div class="ul-widget4__item ul-widget4__users">
		                                <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
		                                <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Admission Letter</a><span class="ul-widget2__username" href="#">Confirm admission status</span></div>
		                                <div id="verify_switch" class="ul-widget4__actions">
		                                    <input type="checkbox" {{ $currentStudentVerification->admission_letter_verify ? 'checked' : '' }} wire:change="verifyAdmission()" id="verify_admission" />
		                                    <label for="verify_admission">Admission Letter</label>
		                                </div>
		                            </div>
		                            <div class="ul-widget4__item ul-widget4__users">
		                                <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
		                                <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Bank Details</a><span class="ul-widget2__username" href="#">Bank details must match student name</span></div>
		                                <div id="verify_switch" class="ul-widget4__actions">
		                                     <input type="checkbox" {{ $currentStudentVerification->bank_details_verify ? 'checked' : '' }} wire:change="verifyBankDetails()" id="verify_bank_details" />
		                                    <label for="verify_bank_details">Bank Details</label>
		                                </div>
		                            </div>
		                            <div class="ul-widget4__item ul-widget4__users">
		                                <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
		                                <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Transcript</a><span class="ul-widget2__username" href="#">If student was transfered</span></div>
		                                <div id="verify_switch" class="ul-widget4__actions">
		                                     <input type="checkbox" {{ $currentStudentVerification->transcript_letter_verify ? 'checked' : '' }} wire:change="verifyTranscript()" id="verify_transcript" />
		                                    <label for="verify_transcript">Transcript</label>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

	</div>
</div>
