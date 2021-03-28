@push('css')
	<style>
        .table p{
            margin: 0;
        }

        .filter-container{
            margin-bottom: 15px;
            padding-bottom: 25px;
            /*background: white;*/
            color: white;
            font-size: 16px;
        }

    </style>
        
 @endpush

<div class="content">
	<div class="row">                
	    <div class="col-md-3 col-lg-3">
	        <div class="card mb-4 o-hidden">
	            <div class="card-body ul-card__widget-chart">
	                <div class="ul-widget__chart-info">
	                    <h5 class="heading">Total</h5>
	                    <div class="ul-widget__chart-number">
	                        <h2 class="t-font-boldest">510</h2>
	                        <small class="text-muted">Total number of students on Lnaid</small>
	                    </div>
	                </div>
	                <!-- <div id="basicArea-chart"></div> -->
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3 col-lg-3">
	        <div class="card mb-4 o-hidden">
	            <div class="card-body ul-card__widget-chart">
	                <div class="ul-widget__chart-info">
	                    <h5 class="heading">This Month</h5>
	                    <div class="ul-widget__chart-number">
	                        <h2 class="t-font-boldest">23</h2>
	                        <small class="text-muted">New Students for the current month</small>
	                    </div>
	                </div>
	                <div id=""></div>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3 col-lg-3">
	        <div class="card mb-4 o-hidden">
	            <div class="card-body ul-card__widget-chart">
	                <div class="ul-widget__chart-info">
	                    <h5 class="heading">Verified</h5>
	                    <div class="ul-widget__chart-number">
	                        <h2 class="t-font-boldest">301</h2>
	                        <small class="text-muted">Total number of verified students on Lnaid</small>
	                    </div>
	                </div>
	                <!-- <div id="basicArea-chart3"></div> -->
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3 col-lg-3">
	        <div class="card mb-4 o-hidden">
	            <div class="card-body ul-card__widget-chart">
	                <div class="ul-widget__chart-info">
	                    <h5 class="heading">Suspended</h5>
	                    <div class="ul-widget__chart-number">
	                        <h2 class="t-font-boldest">52</h2><small class="text-muted">Suspended students on Lnaid</small>
	                    </div>
	                </div>
	               <!--  <div id="basicArea-chart4"></div> -->
	            </div>
	        </div>
	    </div>
  	</div>	

	<div class="overflow-hidden  sm:rounded-lg px-4 py-4" >
		@if (session()->has('message'))
		<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
			<div class="flex">
				<div>
					<p class="text-sm">{{ session('message') }}</p>
				</div>
			</div>
		</div>

		@endif
		<!-- table-->
        <div class="col-lg-12 col-xl-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="ul-widget__head v-margin">
                        <div class="filter-container">
				        	<h2>Filter</h2>
					        <div class="row">
					            <div class="col-md-4">
					                <label for="">Search Name</label>
					                <input type="text" class="form-control" wire:model="filter.search"   >
					            </div>

					            <div class="col-md-3">
					                <label for="">School</label>
					                <select wire:model="filter.school" class="form-control" >
					                    <option value="">All Schools</option>
					                    @foreach($schools as $school)
					                    	<option value="{{ $school->id }}">{{ $school->name }}</option>
					                    @endforeach
					                </select>
					            </div>

					            <div class="col-md-3">
					                <label for="">Items perpage</label>
					                <select wire:model="items_per_page" class="form-control" >
					                    <option value="">5</option>
					                    <option value="10">10</option>
					                    <option value="20">20</option>
					                </select>
					            </div>

					            <div class="col-md-2" style="display: flex;align-items: flex-end;" >
					                <div>
					                    <button type="button" wire:click="loadList" class="btn btn-default" >Filter</button>
					                </div>
					            </div>
					        </div>
				    	</div>
                    </div>
                    <div class="ul-widget-body">
                        <div class="ul-widget3">
                            <div class="ul-widget6__item--table">
                                <table class="table">
                                    <thead>
                                        <tr class="text-black">
                                            <th scope="col">#</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">School</th>
                                            <th scope="col">Score</th>
                                            <th scope="col">Requests</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($objects))
										@foreach($objects as $student)
                                        <!-- start tr-->
                                        <tr>
                                            <th scope="row">
                                                {{ $loop->iteration }}
                                            </th>

                                            <td>
                                            	<span>
                                                    <div class="ul-widget_user-card">
                                                        <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" /></div>
                                                    </div>
                                                </span>
                                            </td>
                                            <td>
                                            	{{ $student->user->name }}
                                            </td>
                                            <td>
                                            	{{ $student->school->name}}
                                            </td>
                                            <td>
                                            	<span class="badge badge-pill badge-outline-danger p-2 m-1">
                                            	{{ $student->verificationScore() }}
                                            	</span>
                                        	</td>

                                        	<td>
                                        		{{ $student->requests->count() }}
                                        	</td>

                                            <td>
                                                <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>

                                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                	<a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> View</a>
                                                	<a class="dropdown-item ul-widget__link--font" href="#"> <i class="i-Data-Save"></i> Edit</a>
                                                    <a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Verify</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end tr-->
                                       	@endforeach
                                   	@endif
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

</div>


@push('js')
	<!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
@endpush
