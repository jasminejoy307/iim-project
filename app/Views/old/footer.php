<div class="row align-items-center">
          <!-- <div class="col">
            <h1 class="fs-5 color-900 mt-1 mb-0">Welcome back, Allie!</h1>
            <small class="text-muted">You have 12 new messages and 7 new notifications.</small>
          </div> -->
          <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-7 col-sm-12 mt-2 mt-md-0">
            <!-- daterange picker -->
            <!-- <div class="input-group">
              <input class="form-control" type="text" name="daterange">
              <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Send Report"><i class="fa fa-envelope"></i></button>
              <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Download Reports"><i class="fa fa-download"></i></button>
              <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Generate PDF"><i class="fa fa-file-pdf-o"></i></button>
              <button class="btn btn-secondary" type="button" data-bs-toggle="tooltip" title="Share Dashboard"><i class="fa fa-share-alt"></i></button>
            </div> -->
            <!-- Plugin Js -->
            <script src="./assets/js/bundle/daterangepicker.bundle.js"></script>
            <!-- Jquery Page Js -->
            <script>
              // date range picker
              $(function() {
                $('input[name="daterange"]').daterangepicker({
                  opens: 'left'
                }, function(start, end, label) {
                  console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
              })
            </script>
          </div>
        </div> <!-- .row end -->
      </div>
    </div>
    <!-- start: page body -->
    <!-- <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
      <div class="container-fluid">
        <div class="row g-3 row-deck">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-muted" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                  <path class="fill-primary" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                </svg> -->
                <!-- <div class="mb-2 text-uppercase">NEW EMPLOYEE</div>
                <div><span class="h4">51</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div> -->
              <!-- <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-muted" d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
                  <path class="fill-primary" d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                </svg>
                <div class="mb-2 text-uppercase">EXPENSE</div>
                <div><span class="h4">$3,251</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 13%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div> -->
              <!-- <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-primary" fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                  <path class="fill-primary" d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                  <path class="fill-muted" d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                  <path class="fill-muted" d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                </svg>
                <div class="mb-2 text-uppercase">Revenue</div>
                <div><span class="h4">$18,925</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 78%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div>
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
              <div class="card-body">
                <svg class="position-absolute top-0 end-0 mt-4 me-3" xmlns="http://www.w3.org/2000/svg" width="26" fill="currentColor" viewBox="0 0 16 16">
                  <path class="fill-muted" d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                  <path class="fill-primary" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                </svg>
                <div class="mb-2 text-uppercase">NEW LEADS</div>
                <div><span class="h4">125</span> <span class="small text-muted"><i class="fa fa-level-up"></i> 55%</span></div>
                <small class="text-muted">Analytics for last week</small>
              </div>
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
            <div class="card text-center bg-primary-gradient">
              <div class="card-body d-flex align-items-center justify-content-center">
                <div>
                  <h4 class="mt-4">Welcome Back, Chris!!</h4>
                  <p class="card-text fs-6 mb-5"><strong>Need help?</strong> Check out the documentation of Luno Admin. It includes tons of <strong>Widgets</strong>, <strong>Components</strong>, and Elements with <strong>easy-to-follow</strong> documentation.</p>
                  <a class="btn btn-lg bg-white text-uppercase px-4 lift" href="./docs/index.html" title="">Visit Documentation</a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xxl-6 col-xl-8 col-lg-8">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title m-0">LUNO Revenue</h6>
                <div class="dropdown morphing scale-left">
                  <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                  <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                  <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="card-body">
                <div id="apex-AudienceOverview"></div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Sales by Category</h6>
                <div class="dropdown morphing scale-left">
                  <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                  <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                  <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="card-body">
                <div id="apex-SalesbyCategory"></div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">My Wallet</h6>
                <div class="dropdown morphing scale-left">
                  <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                  <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                  <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="card-body">
                <div>Available BTC <a href="crypto/index.html">View Account</a></div>
                <h3>0.0386245 BTC</h3>
                <div class="py-4">
                  <div class="text-uppercase text-muted small">Buy this month</div>
                  <h5>3.0675432 BTC</h5>
                  <div class="mt-3 text-uppercase text-muted small">Sell this month</div>
                  <h5>2.0345618 BTC</h5>
                </div> -->
                <!-- <div class="btn-group d-flex">
                  <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio1" checked="">
                  <label class="btn btn-outline-secondary" for="gm-btnradio1">Buy</label>
                  <input type="radio" class="btn-check" name="gm-btnradio" id="gm-btnradio2">
                  <label class="btn btn-outline-secondary" for="gm-btnradio2">Sell</label>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title mb-0">Downloads</h6>
                <div class="dropdown morphing scale-left">
                  <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                  <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                  <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="card-body">
                <ul class="list-unstyled">
                  <li class="d-flex py-2 mb-2">
                    <div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o fa-lg"></i></div>
                    <div class="flex-fill ms-3">
                      <span>LUNO_admin.zip</span>
                      <div class="progress mt-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </li> -->
                  <!-- <li class="d-flex py-2 mb-2">
                    <div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o fa-lg"></i></div>
                    <div class="flex-fill ms-3">
                      <span>reposrt_2020.pdf</span>
                      <div class="progress mt-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </li> -->
                  <!-- <li class="d-flex py-2 mb-2">
                    <div class="avatar rounded no-thumbnail"><i class="fa fa-file-code-o fa-lg"></i></div>
                    <div class="flex-fill ms-3">
                      <span>package.json</span>
                      <div class="progress mt-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </li> -->
                  <!-- <li class="d-flex py-2 mb-2">
                    <div class="avatar rounded no-thumbnail"><i class="fa fa-file-code-o fa-lg"></i></div>
                    <div class="flex-fill ms-3">
                      <span>bootstrap.min.css</span>
                      <div class="progress mt-2" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </li>
                </ul>
                <small class="text-muted">Showing 4 out of 24 downloads.</small>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title m-0">Reports overview</h6>
                <div class="dropdown morphing scale-left">
                  <a href="#" class="card-fullscreen" data-bs-toggle="tooltip" title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                  <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                  <ul class="dropdown-menu shadow border-0 p-2">
                    <li><a class="dropdown-item" href="#">File Info</a></li>
                    <li><a class="dropdown-item" href="#">Copy to</a></li>
                    <li><a class="dropdown-item" href="#">Move to</a></li>
                    <li><a class="dropdown-item" href="#">Rename</a></li>
                    <li><a class="dropdown-item" href="#">Block</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <h3>$7,431.14 USD</h3> -->
                <!-- <div class="progress rounded-pill mb-2" style="height: 5px;">
                  <div class="progress-bar chart-color1" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar chart-color2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  <div class="progress-bar chart-color3" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between">
                  <span>0%</span>
                  <span>100%</span>
                </div>
              </div>
              <div class="table-responsive border-top">
                <table class="table card-table table-nowrap mb-0">
                  <tbody>
                    <tr>
                      <td><i class="fa fa-circle me-2 chart-text-color1"></i>Gross value</td>
                      <td>$3,500.71</td>
                      <td><span class="badge bg-success">+12.1%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-circle me-2 chart-text-color2"></i>Net volume from sales</td>
                      <td>$2,980.45</td>
                      <td><span class="badge bg-warning">+6.9%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-circle me-2 chart-text-color3"></i>New volume from sales</td>
                      <td>$950.00</td>
                      <td><span class="badge bg-danger">-1.5%</span></td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-circle me-2"></i>Other</td>
                      <td>32</td>
                      <td><span class="badge bg-success">1.9%</span></td>
                    </tr> -->
                  <!-- </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div> -->
    <!-- start: page footer -->
    <!-- <footer class="page-footer px-xl-4 px-sm-2 px-0 py-3"> -->
      <!-- <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <p class="col-md-4 mb-0 text-muted">© 2023 <a href="https://www.thememakker.com/" target="_blank" title="ThemeMakker Infotech LLP">ThemeMakker</a>, All Rights Reserved.</p>
        <a href="#" class="col-md-4 d-flex align-items-center justify-content-center my-3 my-lg-0 me-lg-auto">
          <svg height="18" viewBox="0 0 67 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="fill-muted" d="M0.863281 18.9997V1.14968H3.11328V16.9997H10.9133V18.9997H0.863281Z" />
            <path class="fill-muted" d="M27.3045 12.6997C27.3045 13.933 27.0545 15.0497 26.5545 16.0497C26.0545 17.033 25.2878 17.8163 24.2545 18.3997C23.2378 18.9663 21.9378 19.2497 20.3545 19.2497C18.1378 19.2497 16.4462 18.6497 15.2795 17.4497C14.1295 16.233 13.5545 14.633 13.5545 12.6497V1.14968H15.8045V12.7247C15.8045 14.1747 16.1878 15.2997 16.9545 16.0997C17.7378 16.8997 18.9128 17.2997 20.4795 17.2997C21.5628 17.2997 22.4378 17.108 23.1045 16.7247C23.7878 16.3247 24.2878 15.783 24.6045 15.0997C24.9212 14.3997 25.0795 13.5997 25.0795 12.6997V1.14968H27.3045V12.6997Z" />
            <path class="fill-secondary" d="M46.5286 0.765681C46.6246 0.82568 46.6726 0.92168 46.6726 1.05368L46.5466 18.6037C46.5466 18.8677 46.3906 18.9937 46.0786 18.9817H44.4586L33.1546 3.62768L33.1006 13.1677L37.5646 13.1857C37.6726 13.1857 37.7626 13.2217 37.8346 13.2937C37.9186 13.3657 37.9606 13.4617 37.9606 13.5817L37.9426 14.8957C37.9426 15.0157 37.9066 15.1237 37.8346 15.2197C37.7626 15.3037 37.6666 15.3457 37.5466 15.3457L31.3726 15.2917H31.3546C31.1026 15.2917 30.9706 15.1837 30.9586 14.9677L31.0666 0.98168C31.0666 0.849679 31.1026 0.74768 31.1746 0.675681C31.2586 0.59168 31.3666 0.555679 31.4986 0.56768H33.1726C33.3406 0.56768 33.4726 0.63368 33.5686 0.765681L44.4406 15.4177L44.5486 0.94568C44.5966 0.741679 44.7286 0.639679 44.9446 0.639679L46.2046 0.65768C46.3126 0.65768 46.4206 0.69368 46.5286 0.765681ZM39.7786 16.7857C39.8986 16.7977 39.9946 16.8397 40.0666 16.9117C40.1386 16.9717 40.1746 17.0677 40.1746 17.1997L40.1566 18.4957C40.1566 18.6157 40.1206 18.7237 40.0486 18.8197C39.9886 18.9037 39.8926 18.9457 39.7606 18.9457H31.3546C31.2346 18.9457 31.1386 18.9097 31.0666 18.8377C30.9946 18.7657 30.9586 18.6697 30.9586 18.5497V17.2357C30.9586 17.1157 30.9946 17.0137 31.0666 16.9297C31.1386 16.8337 31.2406 16.7857 31.3726 16.7857H35.5666C38.0266 16.7857 39.4306 16.7857 39.7786 16.7857Z" />
            <path class="fill-muted" d="M66.0301 10.0497C66.0301 11.433 65.8551 12.6913 65.5051 13.8247C65.1551 14.9413 64.6301 15.908 63.9301 16.7247C63.2467 17.5413 62.3884 18.1663 61.3551 18.5997C60.3384 19.033 59.1551 19.2497 57.8051 19.2497C56.4051 19.2497 55.1884 19.033 54.1551 18.5997C53.1217 18.1497 52.2634 17.5247 51.5801 16.7247C50.8967 15.908 50.3884 14.933 50.0551 13.7997C49.7217 12.6663 49.5551 11.408 49.5551 10.0247C49.5551 8.19135 49.8551 6.59135 50.4551 5.22468C51.0551 3.85801 51.9634 2.79135 53.1801 2.02468C54.4134 1.25801 55.9634 0.87468 57.8301 0.87468C59.6134 0.87468 61.1134 1.25801 62.3301 2.02468C63.5467 2.77468 64.4634 3.84135 65.0801 5.22468C65.7134 6.59135 66.0301 8.19968 66.0301 10.0497ZM51.9301 10.0497C51.9301 11.5497 52.1384 12.8413 52.5551 13.9247C52.9717 15.008 53.6134 15.8413 54.4801 16.4247C55.3634 17.008 56.4717 17.2997 57.8051 17.2997C59.1551 17.2997 60.2551 17.008 61.1051 16.4247C61.9717 15.8413 62.6134 15.008 63.0301 13.9247C63.4467 12.8413 63.6551 11.5497 63.6551 10.0497C63.6551 7.79968 63.1884 6.04135 62.2551 4.77468C61.3217 3.49135 59.8467 2.84968 57.8301 2.84968C56.4801 2.84968 55.3634 3.14135 54.4801 3.72468C53.6134 4.29135 52.9717 5.11635 52.5551 6.19968C52.1384 7.26635 51.9301 8.54968 51.9301 10.0497Z" />
          </svg>
        </a> -->
        <!-- <ul class="nav col-md-4 justify-content-center justify-content-lg-end">
          <li class="nav-item"><a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="nav-link px-2 text-muted">Portfolio</a></li>
          <li class="nav-item"><a href="https://themeforest.net/licenses/standard" target="_blank" class="nav-link px-2 text-muted">licenses</a></li>
          <li class="nav-item"><a href="https://help.market.envato.com/hc/en-us" target="_blank" class="nav-link px-2 text-muted">Support</a></li>
          <li class="nav-item"><a href="https://themeforest.net/licenses/faq" target="_blank" class="nav-link px-2 text-muted">FAQs</a></li>
        </ul> -->
      <!-- </div>
    </footer>
  </div> -->
  <!-- Modal: Create project -->
  <div class="modal fade" id="CreateNew" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content rounded-0">
        <div class="modal-header">
          <h5 class="modal-title">Setup new project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="progress bg-transparent" style="height: 3px;">
          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;"></div>
        </div>
        <div class="modal-body custom_scroll">
          <ul class="nav nav-tabs tab-card border-0 fs-6" role="tablist">
            <li class="nav-item flex-fill text-center"><a class="nav-link active" href="#step1" data-bs-toggle="tab" data-bs-step="1">1. Project</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step2" data-bs-toggle="tab" data-bs-step="3">2. Team</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step3" data-bs-toggle="tab" data-bs-step="4">3. File</a></li>
            <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step4" data-bs-toggle="tab" data-bs-step="5">4. Completed</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade show active" id="step1">
              <div class="card mb-2">
                <div class="card-body">
                  <h6 class="card-title mb-1">Project Type</h6>
                  <p class="text-muted small">If you need more info, please check out <a href="#">FAQ Page</a></p>
                  <!-- Custome redio input -->
                  <div class="c_radio d-flex flex-md-wrap">
                    <label class="m-1 w-100" for="Personal">
                      <input type="radio" name="plan" id="Personal" checked />
                      <span class="card">
                        <span class="card-body d-flex p-3">
                          <svg class="avatar" viewBox="0 0 16 16">
                            <path class="fill-muted" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                          </svg>
                          <span class="ms-3">
                            <span class="h6 d-flex mb-1">Personal Project</span>
                            <span class="text-muted">For smaller business, with simple salaries and pay schedules.</span>
                          </span>
                        </span>
                      </span>
                    </label>
                    <label class="m-1 w-100" for="Team">
                      <input type="radio" name="plan" id="Team" />
                      <span class="card">
                        <span class="card-body d-flex p-3">
                          <svg class="avatar" viewBox="0 0 16 16">
                            <path class="fill-muted" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            <path class="fill-muted" fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                            <path class="fill-muted" d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                          </svg>
                          <span class="ms-3">
                            <span class="h6 d-flex mb-1">Team Project</span>
                            <span class="text-muted">For growing business who wants to create a rewarding place to work.</span>
                          </span>
                        </span>
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="card mb-2">
                <div class="card-body">
                  <h6 class="card-title mb-1">Project Details</h6>
                  <p class="text-muted small">It is a long established fact that a reader will be distracted by Luno.</p>
                  <div class="form-floating mb-2">
                    <select class="form-select">
                      <option selected>Open this select menu</option>
                      <option value="1">Lucid</option>
                      <option value="2">LUNO</option>
                      <option value="3">Luno</option>
                    </select>
                    <label>Choose a Customer *</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="text" class="form-control" placeholder="Project name">
                    <label>Project name *</label>
                  </div>
                  <div class="form-floating mb-2">
                    <textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
                    <label>Add project details</label>
                  </div>
                  <div class="form-floating mb-2">
                    <input type="date" class="form-control">
                    <label>Enter release Date *</label>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="text-muted">Allow Notifications *</div>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="allow_phone" value="option1">
                        <label class="form-check-label" for="allow_phone">Phone</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="allow_email" value="option2">
                        <label class="form-check-label" for="allow_email">Email</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Add People</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step2">
              <div class="card mb-3">
                <div class="card-body">
                  <h6 class="card-title mb-1">Build a Team</h6>
                  <p class="text-muted small">If you need more info, please check out <a href="#">Project Guidelines</a></p>
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Invite Teammates">
                    <label>Invite Teammates</label>
                  </div>
                  <h6 class="card-title mb-1">Team Members</h6>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="list-group6" checked="">
                    <label class="form-check-label text-muted" for="list-group6">Adding Users by Team Members</label>
                  </div>
                </div>
                <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar1.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Angular Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar2.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Joge Lucky</div>
                      <small class="text-muted">ReactJs Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar3.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">NodeJs Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar4.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Sr. Designer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar5.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Designer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar6.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Front-End Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar7.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">QA</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                  <li class="list-group-item d-flex align-items-center">
                    <img class="avatar rounded" src="./assets/img/xs/avatar8.jpg" alt="">
                    <div class="flex-fill ms-2">
                      <div class="h6 mb-0">Chris Fox</div>
                      <small class="text-muted">Laravel Developer</small>
                    </div>
                    <select class="form-select rounded-pill form-select-sm w120">
                      <option value="1">Owner</option>
                      <option value="2">Can Edit</option>
                      <option value="3">Guest</option>
                    </select>
                  </li>
                </ul>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Select Files</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step3">
              <div class="card mb-3">
                <div class="card-body">
                  <h6 class="card-title mb-1">Upload Files</h6>
                  <div class="mb-4">
                    <label class="form-label small">Upload up to 10 files</label>
                    <input class="form-control" type="file" multiple>
                  </div>
                  <span>Already Uploaded File</span>
                </div>
                <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0" style="height: 300px;">
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-pdf-o text-danger"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Annual Sales Report 2018-19</p>
                        <small class="text-muted">.pdf, 5.3 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-excel-o text-success"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Complete Product Sheet</p>
                        <small class="text-muted">.xls, 2.1 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-word-o text-info"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Marketing Guidelines</p>
                        <small class="text-muted">.doc, 2.3 MB</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item py-3">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded no-thumbnail"><i class="fa fa-file-zip-o"></i></div>
                      <div class="flex-fill ms-3 text-truncate">
                        <p class="mb-0 color-800">Brand Photography</p>
                        <small class="text-muted">.zip, 30.5 MB</small>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="text-center">
                <button class="btn btn-lg bg-secondary text-light next text-uppercase">Advanced Options</button>
              </div>
            </div>
            <div class="tab-pane fade" id="step4">
              <div class="card text-center">
                <div class="card-body">
                  <h4 class="card-title mb-1">Project Created!</h4>
                  <span class="text-muted">If you need more info, please check how to create project</span>
                </div>
                <div class="card-body">
                  <button class="btn btn-lg bg-light first text-uppercase">Cretae new project</button>
                  <button class="btn btn-lg bg-secondary text-light text-uppercase">View project</button>
                </div>
                <div class="card-body">
                  <img class="img-fluid" src="./assets/img/project-team.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: my notes -->
  <div class="modal fade" id="MynotesModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header px-4">
          <h5 class="modal-title">My Notes <span class="badge bg-danger ms-2">14</span></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="bg-light px-4 py-3">
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#Notetab-all" role="tab" aria-selected="true">All Notes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Business" role="tab" aria-selected="false">Business</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Social" role="tab">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#Notetab-Create" role="tab"><i class="fa fa-plus me-2"></i>New</a>
            </li>
          </ul>
        </div>
        <div class="modal-body px-4 custom_scroll">
          <div class="tab-content p-0">
            <div class="tab-pane fade active show" id="Notetab-all" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-primary position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">02 January 2021</span>
                  <p class="lead">Give Review for design</p>
                  <span>It has roots in a piece of classical Latin literature from 45 BC, making it over 2020 years old.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-success position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">17 January 2022</span>
                  <p class="lead">Give salary to employee</p>
                  <span>The generated Lorem Ipsum is therefore always free from repetition</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-info position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">02 Fabruary 2020</span>
                  <p class="lead">Launch new template</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-dark position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">22 August 2021</span>
                  <p class="lead">Nightout with friends</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-danger position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">01 December 2021</span>
                  <p class="lead">Change a Design</p>
                  <span> It has survived not only five centuries, but also the leap into electronic</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-warning position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">10 December 2021</span>
                  <p class="lead">Meeting with Mr.Lee</p>
                  <span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Business" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-warning position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">10 December 2021</span>
                  <p class="lead">Meeting with Mr.Lee</p>
                  <span>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
              <div class="card ribbon mb-2">
                <div class="option-2 bg-danger position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">01 December 2021</span>
                  <p class="lead">Change a Design</p>
                  <span> It has survived not only five centuries, but also the leap into electronic</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Social" role="tabpanel">
              <div class="card ribbon mb-2">
                <div class="option-2 bg-dark position-absolute"></div>
                <div class="card-body">
                  <span class="text-muted">22 August 2021</span>
                  <p class="lead">Nightout with friends</p>
                  <span>Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</span>
                </div>
                <div class="card-footer pt-0 border-0">
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-star favourite-note"></i></a>
                  <a class="btn btn-sm btn-outline-secondary" href="#"><i class="fa fa-trash favourite-note"></i></a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="Notetab-Create" role="tabpanel">
              <div class="form-floating mb-2">
                <input type="text" class="form-control" placeholder="Note Title">
                <label>Note Title</label>
              </div>
              <div class="form-floating mb-2">
                <input type="text" class="form-control datepicker" placeholder="Select Date">
                <label>Select Date</label>
              </div>
              <div class="form-floating mb-2">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>Open this select menu</option>
                  <option value="1">Business</option>
                  <option value="2">Social</option>
                </select>
                <label>Works with selects</label>
              </div>
              <div class="form-floating mb-4">
                <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
                <label>Leave a comment here</label>
              </div>
              <button type="button" class="btn btn-primary lift">Save note</button>
              <button type="button" class="btn btn-white border lift" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Schedule -->
  <div class="modal fade" id="ScheduleModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header bg-secondary rounded-0">
          <h5 class="modal-title text-light">Schedule</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body custom_scroll">
          <div class="ps-2">
            <!--Timeline item-->
            <div class="timeline-item ti-primary p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Call Danny at Colby's</div>
                <small class="text-muted">Today - 11:32am</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-info p-3">
              <div class="timeline-icon">
                <img class="avatar sm rounded-circle" src="./assets/img/xs/avatar1.jpg" alt="">
              </div>
              <div class="timeline-content ms-3">
                <div>Meeting with Alice</div>
                <small class="text-muted">Today - 12:50pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-danger p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-comment"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Answer Annie's message</div>
                <small class="text-muted">Today - 01:35pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-danger p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Send new campaign</div>
                <small class="text-muted">Today - 02:40pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-primary p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-smile-o"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Project review</div>
                <small class="text-muted">Today - 03:15pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-warning p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-phone"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Call Trisha Jackson</div>
                <small class="text-muted">Today - 05:40pm</small>
              </div>
            </div>
            <!--Timeline item-->
            <div class="timeline-item ti-success p-3">
              <div class="avatar sm rounded-circle no-thumbnail">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="timeline-content ms-3">
                <div>Write proposal for Don</div>
                <small class="text-muted">Today - 06:30pm</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: RecentChat -->
  <div class="modal fade" id="RecentChat" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
      <div class="modal-content">
        <div class="d-flex align-items-start">
          <div class="nav flex-column nav-pills p-3 h-100">
            <a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar1.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar2.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar3.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-2" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar4.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-5" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar5.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar6.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-7" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar7.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar8.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-3" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar9.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar10.jpg" alt="avatar">
            </a>
            <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
              <img class="avatar sm rounded-circle border" src="./assets/img/xs/avatar5.jpg" alt="avatar">
            </a>
          </div>
          <div class="tab-content shadow-sm">
            <div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
              <div class="card">
                <!-- start: chat header -->
                <div class="card-header border-bottom py-3">
                  <div class="d-flex">
                    <a href="javascript:void(0);" title="">
                      <img class="avatar rounded-circle" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                    </a>
                    <div class="ms-3">
                      <h6 class="mb-0">Orlando Lentz</h6>
                      <small class="text-muted">Last seen: 2 hours ago</small>
                    </div>
                  </div>
                  <div class="dropdown morphing scale-left">
                    <a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                    <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                    <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                      <li><a class="dropdown-item" href="#">File Info</a></li>
                      <li><a class="dropdown-item" href="#">Copy to</a></li>
                      <li><a class="dropdown-item" href="#">Move to</a></li>
                      <li><a class="dropdown-item" href="#">Rename</a></li>
                      <li><a class="dropdown-item" href="#">Block</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- start: chat body -->
                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                  <ul class="list-unstyled chat-history flex-grow-1">
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Hi Aiden, how are you?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Are we meeting today?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar1.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message">
                            <p>Please find attached images</p>
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/3.jpg" alt="">
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/4.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Okay, will check and let you know.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- start: chat footer -->
                <div class="card-footer border-top bg-transparent py-3 px-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <button class="btn btn-primary" type="button">Send</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
              <div class="card">
                <!-- start: chat header -->
                <div class="card-header border-bottom py-3">
                  <div class="d-flex">
                    <a href="javascript:void(0);" title="">
                      <img class="avatar rounded-circle" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                    </a>
                    <div class="ms-3">
                      <h6 class="mb-0">Orlando Lentz</h6>
                      <small class="text-muted">Last seen: 2 hours ago</small>
                    </div>
                  </div>
                  <div class="dropdown morphing scale-left">
                    <a class="nav-link p-2 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                    <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block" href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                    <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none" data-bs-dismiss="modal" aria-label="Close" href="#"><i class="fa fa-close"></i></a>
                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                    <ul class="dropdown-menu shadow border-0 p-2">
                      <li><a class="dropdown-item" href="#">File Info</a></li>
                      <li><a class="dropdown-item" href="#">Copy to</a></li>
                      <li><a class="dropdown-item" href="#">Move to</a></li>
                      <li><a class="dropdown-item" href="#">Rename</a></li>
                      <li><a class="dropdown-item" href="#">Block</a></li>
                      <li><a class="dropdown-item" href="#">Delete</a></li>
                    </ul>
                  </div>
                </div>
                <!-- start: chat body -->
                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                  <ul class="list-unstyled chat-history flex-grow-1">
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Are we meeting today?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Hi Aiden, how are you?</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Yes, Orlando Allredy done <br> There are many variations of passages of Lorem Ipsum available</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message">
                            <p>Please find attached images</p>
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/1.jpg" alt="">
                            <img class="w120 img-thumbnail" src="./assets/img/gallery/2.jpg" alt="">
                          </div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: right -->
                    <li class="mb-3 d-flex flex-row-reverse align-items-end">
                      <div class="max-width-70 text-end">
                        <div class="user-info mb-1">
                          <span class="text-muted small">10:12 AM, Today</span>
                        </div>
                        <div class="card border-0 p-3 bg-primary text-light">
                          <div class="message">Okay, will check and let you know.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                    <!-- Chat: left -->
                    <li class="mb-3 d-flex flex-row align-items-end">
                      <div class="max-width-70">
                        <div class="user-info mb-1">
                          <img class="avatar xs rounded-circle me-1" src="./assets/img/xs/avatar2.jpg" alt="avatar">
                          <span class="text-muted small">10:10 AM, Today</span>
                        </div>
                        <div class="card p-3">
                          <div class="message"> Contrary to popular belief, Lorem Ipsum is not simply random text.</div>
                        </div>
                      </div>
                      <!-- More option -->
                      <div class="btn-group">
                        <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu rounded-4 border-0 shadow">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- start: chat footer -->
                <div class="card-footer border-top bg-transparent py-3 px-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter text here...">
                    <button class="btn btn-primary" type="button">Send</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal: Setting -->
  <div class="modal fade" id="SettingsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
      <div class="modal-content">
        <div class="px-xl-4 modal-header">
          <h5 class="modal-title">Theme Setting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="px-xl-4 modal-body custom_scroll">
          <!-- start: color setting -->
          <div class="card fieldset border border-primary p-3 setting-theme mb-4">
            <span class="fieldset-tile text-primary bg-card">Color Settings</span>
            <ul class="list-unstyled d-flex choose-skin mb-0">
              <li data-theme="black">
                <div class="black"></div>
              </li>
              <li data-theme="indigo">
                <div class="indigo"></div>
              </li>
              <li data-theme="blue">
                <div class="blue"></div>
              </li>
              <li data-theme="cyan">
                <div class="cyan"></div>
              </li>
              <li data-theme="green">
                <div class="green"></div>
              </li>
              <li data-theme="orange">
                <div class="orange"></div>
              </li>
              <li data-theme="blush">
                <div class="blush"></div>
              </li>
              <li data-theme="red">
                <div class="red"></div>
              </li>
              <li data-theme="dynamic">
                <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
              </li>
            </ul>
            <!-- Settings: Theme dynamics -->
            <div class="card fieldset border border-primary p-3 dt-setting mt-4">
              <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
              <div class="row g-3">
                <div class="col-7">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
                      <label>Primary Color</label>
                    </li>
                    <li>
                      <button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
                      <label>Secondary Color</label>
                    </li>
                    <li>
                      <button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                      <label>Site Background</label>
                    </li>
                    <li>
                      <button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Widget Background</label>
                    </li>
                    <li>
                      <button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Border Color</label>
                    </li>
                  </ul>
                </div>
                <div class="col-5">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
                      <label>Chart Color 1</label>
                    </li>
                    <li>
                      <button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
                      <label>Chart Color 2</label>
                    </li>
                    <li>
                      <button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
                      <label>Chart Color 3</label>
                    </li>
                    <li>
                      <button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
                      <label>Chart Color 4</label>
                    </li>
                    <li>
                      <button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
                      <label>Chart Color 5</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- start: Light/dark -->
          <div class="card fieldset border setting-mode mb-4">
            <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
            <div class="c_radio d-flex text-center">
              <label class="m-1 theme-switch" for="theme-switch">
                <input type="checkbox" id="theme-switch" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/dark-version.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-dark" for="theme-dark">
                <input type="checkbox" id="theme-dark" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/dark-theme.svg" alt="Theme Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                <input type="checkbox" id="theme-high-contrast" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/high-version.svg" alt="High Contrast" />
                </span>
              </label>
              <label class="m-1 theme-rtl" for="theme-rtl">
                <input type="checkbox" id="theme-rtl" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/rtl-version.svg" alt="RTL Mode!" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Font setting -->
          <div class="card fieldset border setting-font">
            <span class="fieldset-tile bg-card">Google Font Settings</span>
            <div class="c_radio d-flex text-center font_setting">
              <label class="m-1" for="font-opensans">
                <input type="radio" name="font" id="font-opensans" value="font-opensans" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-opensans.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-quicksand">
                <input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-quicksand.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-nunito">
                <input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-nunito.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-raleway">
                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                <span class="card p-2">
                  <img class="img-fluid" src="./assets/img/font-raleway.svg" alt="Dark Mode" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Dynamic Font Settings -->
          <div class="m-1 p-3 bg-body rounded-4 mb-4">
            <p>Dynamic Font Settings</p>
            <div class="mb-2">
              <label class="form-label small text-muted mb-0">Enter font URL</label>
              <input id="font_url" type="text" class="form-control" placeholder="http://fonts.cdnfonts.com/css/vonfont">
            </div>
            <div class="mb-3">
              <label class="form-label small text-muted mb-0">Enter font family name</label>
              <input id="font_family" type="text" class="form-control" placeholder="vonfont">
            </div>
            <button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
            <button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
          </div>
          <!-- start: Extra setting -->
          <div class="setting-more mb-4">
            <h6 class="card-title">More Setting</h6>
            <ul class="list-group list-group-flush list-group-custom fs-6">
              <!-- Settings: Horizontal menu version -->
              <li class="list-group-item">
                <div class="form-check form-switch h-menu-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="h_menu">
                  <label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
                </div>
              </li>
              <!-- Settings: page header top Fix -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader" checked>
                  <label class="form-check-label" for="PageHeader">Page Header Fix</label>
                </div>
              </li>
              <!-- Settings: page header Dark version  -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-dark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader_dark">
                  <label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
                </div>
              </li>
              <!-- Settings: Border radius -->
              <li class="list-group-item">
                <div class="form-check form-switch radius-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="BorderRadius">
                  <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                </div>
              </li>
              <!-- Settings: sidebar version 2 -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebar-v2 mb-1">
                  <input class="form-check-input" type="checkbox" id="sidebar_v2">
                  <label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
                </div>
              </li>
              <!-- Settings: sidebar dark -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebardark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="SidebarDark">
                  <label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
                </div>
              </li>
              <!-- Settings: Sidebar bg image -->
              <li class="list-group-item setting-img">
                <div class="form-check form-switch imagebg-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="CheckImage">
                  <label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
                </div>
                <div class="bg-images">
                  <ul class="list-unstyled d-flex">
                    <li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="./assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
                    <li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2" href="#"><img src="./assets/img/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
                    <li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3" href="#"><img src="./assets/img/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
                    <li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4" href="#"><img src="./assets/img/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
                    <li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5" href="#"><img src="./assets/img/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
                  </ul>
                </div>
              </li>
              <!-- Settings: Container Fluid -->
              <li class="list-group-item">
                <div class="form-check form-switch fluid-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
                  <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                </div>
              </li>
              <!-- Settings: Card box shadow  -->
              <li class="list-group-item">
                <div class="form-check form-switch shadow-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="card_shadow">
                  <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                </div>
              </li>
            </ul>
          </div>
          <!-- start: Extra link, please do not add in your project -->
          <div class="mb-4">
            <a class="btn lift  btn-outline-secondary" href="./marketing/index.html">Marketing page</a>
            <a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/onepage.html">Landing page</a>
            <a class="btn lift  btn-outline-secondary" href="./onepgae-uikit/index.html">One page Ui Kit Elements</a>
          </div>
        </div>
        <!-- <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
          <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
          <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Jquery Page Js -->
  <!-- Jquery Page Js -->
  <script src="./assets/js/theme.js"></script>
  <!-- Plugin Js -->
  <script src="./assets/js/bundle/apexcharts.bundle.js"></script>
  <!-- Vendor Script -->
  <script src="./assets/js/bundle/apexcharts.bundle.js"></script>
  <script>
    // LUNO Revenue
    var options = {
      series: [{
        name: 'Income',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
      }, {
        name: 'Expenses',
        data: [123, 142, 135, 127, 143, 122, 117, 131, 122, 122, 112, 116]
      }, {
        name: 'Revenue',
        data: [223, 242, 235, 227, 243, 222, 217, 231, 222, 222, 212, 216]
      }],
      chart: {
        type: 'bar',
        height: 260,
        stacked: true,
        stackType: '100%',
        toolbar: {
          show: false,
        },
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 0
          }
        }
      }],
      xaxis: {
        categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      },
      fill: {
        opacity: 1
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      },
    };
    var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);
    chart.render();
    // Sales by Category
    var options = {
      chart: {
        height: 280,
        type: 'donut',
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              total: {
                showAlways: true,
                show: true
              }
            }
          }
        }
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        show: true,
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      series: [55, 35, 10],
    }
    var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);
    chart.render();
  </script>
</body>

</html>