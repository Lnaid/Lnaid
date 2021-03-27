<!-- =============== Stats  start ================-->
<div class="row mb-4">
    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body ul-card__widget-chart">
                <div class="ul-widget__chart-info">
                    <h5 class="heading">RAISED</h5>
                    <div class="ul-widget__chart-number">
                        <h2 class="t-font-boldest">N980,420.00</h2><small class="text-muted">46% compared to last year</small>
                    </div>
                </div>
                <div id="basicArea-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body ul-card__widget-chart">
                <div class="ul-widget__chart-info">
                    <h5 class="heading">REQUESTS</h5>
                    <div class="ul-widget__chart-number">
                        <h2 class="t-font-boldest">230</h2><small class="text-muted">4% compared to last year</small>
                    </div>
                </div>
                <div id="basicArea-chart2"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body ul-card__widget-chart">
                <div class="ul-widget__chart-info">
                    <h5 class="heading">Transactions</h5>
                    <div class="ul-widget__chart-number">
                        <h2 class="t-font-boldest">4901</h2><small class="text-muted">16% compared to last year</small>
                    </div>
                </div>
                <div id="basicArea-chart3"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body ul-card__widget-chart">
                <div class="ul-widget__chart-info">
                    <h5 class="heading">OFFERS</h5>
                    <div class="ul-widget__chart-number">
                        <h2 class="t-font-boldest">52</h2><small class="text-muted">7% compared to last year</small>
                    </div>
                </div>
                <div id="basicArea-chart4"></div>
            </div>
        </div>
    </div>

     <!-- finance-->
    <div class="col-md-12 col-lg-12 mt-4">
        <div class="card o-hidden h-100">
            <div class="card-header bg-transparent">
                <div class="row" style="align-items: center;">
                    <div class="col-md-6">
                        <div class="ul-card-widget__head-label">
                            <h5 class="text-18 font-weight-700 card-title">Finance Summary</h5>
                        </div>
                    </div>
                    <div class="text-right col-md-6">
                        <button class="btn btn-outline-primary" type="button">Summary View</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-muted text-14 font-weight-500">March Donations Summary</h3><span class="text-muted text-18 font-weight-600">N490,420.00</span>
                    </div>
                    <div class="col-md-6">
                        <h3 class="text-muted text-14 font-weight-500">Final Revenue</h3><span class="text-muted text-18 font-weight-600">March 25,2021</span>
                    </div>
                </div>
            </div>
            <div>
                <div id="spark2"></div>
            </div>
        </div>
    </div>

    <!-- recent donations-->
    <div class="col-lg-8 col-xl-8 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head v-margin">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Recent Donations</h3>
                    </div>
                    <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <div class="ul-widget-body">
                    <div class="ul-widget3">
                        <div class="ul-widget6__item--table">
                            <table class="table">
                                <!-- <thead>
                                    <tr class="ul-widget6__tr--sticky-th">
                                        <th scope="col">#</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Managed By</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead> -->
                                <tbody>
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>02/22/2021</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">James Udison</a><span>N21,000</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                                
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/10.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>01/16/2021</td>
                                        <td><span class="badge badge-pill badge-outline-info p-2 m-1">Processed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Idowu Oisa</a><span>N430,000</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/12.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>03/20/2021</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Angela Ings</a><span>$560</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/13.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>01/12/2021</td>
                                        <td><span class="badge badge-pill badge-outline-primary p-2 m-1">Processing</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Mallam Abubarka</a><span>N67,000</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/15.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>2/28/2021</td>
                                        <td><span class="badge badge-pill badge-outline-danger p-2 m-1">Confirmed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Grace Hetinwood</a><span>$100</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> Save</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Import</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Folder-Download"></i> Update</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Gears-2"></i> Customize</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/16.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>03/21/2021</td>
                                        <td><span class="badge badge-pill badge-outline-warning p-2 m-1">Processed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Aaron Stroustrup</a><span>$890</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                    <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>03/28/2021</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Kante Dincon</a><span>$120</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                     <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>03/28/2021</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Kante Dincon</a><span>$120</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                     <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>03/28/2021</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Kante Dincon</a><span>$120</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                     <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>03/28/2021</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Kante Dincon</a><span>$120</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
                                     <!-- start tr-->
                                    <tr>
                                        <th scope="row">
                                            <label class="checkbox checkbox-outline-info">
                                                <input type="checkbox" checked="" /><span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td><span>
                                                <div class="ul-widget_user-card">
                                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/17.jpg" alt="" /></div>
                                                </div>
                                            </span></td>
                                        <td>03/28/2021</td>
                                        <td><span class="badge badge-pill badge-outline-success p-2 m-1">Processed</span></td>
                                        <td><a class="ul-widget4__title d-block" href="#">Kante Dincon</a><span>$120</span></td>
                                        <td>
                                            <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Bar-Chart-4"> </i> Export</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Data-Save"> </i> View</a><a class="dropdown-item ul-widget__link--font" href="#"><i class="i-Duplicate-Layer"></i> Print</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- end tr-->
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
    <!-- new users -->
    <div class="col-lg-4 col-md-6 col-xl-4 mt-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="ul-widget__head">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">New Users</h3>
                    </div>
                    <div class="ul-widget__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget4-tab1-content" role="tab" aria-selected="true">Today</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget4-tab2-content" role="tab" aria-selected="false">Month</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ul-widget__body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="__g-widget4-tab1-content">
                            <div class="ul-widget1">
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/1.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-danger m-1" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
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
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/2.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-success m-1" type="button">Follow</button>
                                    </div>
                                </div>
                                <div class="ul-widget4__item ul-widget4__users">
                                    <div class="ul-widget4__img"><img id="userDropdown" src="../../dist-assets/images/faces/5.jpg" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget2__info ul-widget4__users-info"><a class="ul-widget2__title" href="#">Anna Strong</a><span class="ul-widget2__username" href="#">Visual Designer,Google Inc</span></div>
                                    <div class="ul-widget4__actions">
                                        <button class="btn btn-outline-info m-1" type="button">Follow</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rectent payouts-->
    <div class="mt-4 col-md-6">
        <div class="card o-hidden mb-4">
            <div class="card-header d-flex align-items-center">
                <h3 class="w-50 float-left card-title m-0">Recent Request</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Student</th>
                                <th scope="col">Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John Kennth</td>
                                <td>04-03-2021</td>
                                <td>$300</td>
                                <td><span class="badge badge-success">Pending</span></td>
                                <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Favour Ijinke</td>
                                <td>01-01-2021</td>
                                <td>N150000</td>
                                <td><span class="badge badge-info">Approved</span></td>
                                <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Monday Silas</td>
                                <td>03-10-2021</td>
                                <td>N30000</td>
                                <td><span class="badge badge-warning">Approved</span></td>
                                <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Princess Odin</td>
                                <td>04-03-2021</td>
                                <td>$3000</td>
                                <td><span class="badge badge-success">Pending</span></td>
                                <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td> Charles Pinkua</td>
                                <td>04-03-2021</td>
                                <td>N60000</td>
                                <td><span class="badge badge-success">Pending</span></td>
                                <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Sanusi Adamu</td>
                                <td>04-03-2021</td>
                                <td>N85000</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                <td><a class="text-success mr-2" href="#"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end of col-->
    <!-- recent-activities-->
    <div class="col-lg-6 col-xl-6 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head __g-support v-margin">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Recent Activities</h3>
                    </div>
                    <button class="btn bg-white _r_btn border-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span><span class="_dot _inline-dot bg-primary"></span></button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <div class="ul-widget__body">
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">10:00</span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-warning ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna
                            </div>
                        </div>
                    </div>
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">16:00 </span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-danger ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna elit enim at
                                minim<br /> veniam quis nostrud
                            </div>
                        </div>
                    </div>
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">13:00</span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-primary ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna
                            </div>
                        </div>
                    </div>
                    <div class="ul-widget-s7">
                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time">08:00</span>
                            <div class="ul-widget-s7__item-circle">
                                <p class="badge-dot-success ul-widget7__big-dot"></p>
                            </div>
                            <div class="ul-widget-s7__item-text">
                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                tempor<br /> incididunt ut labore et dolore magna
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============== Horizontal bar End ================-->
