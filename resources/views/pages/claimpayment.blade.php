@extends('layouts.design')
@section('contents')
{{-- first row in claim p showing metrics --}}
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Songs Uploaded</h6>
                {{-- <div class="dropdown mb-2">
                  <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                  </div>
                </div> --}}
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">3,897</h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>+3.3%</span>
                      <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                  </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                  <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Plays</h6>
                {{-- <div class="dropdown mb-2">
                  <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                  </div>
                </div> --}}

              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">35,084</h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-danger">
                      <span>-2.8%</span>
                      <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                    </p>
                  </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                  <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Growth</h6>
                {{-- <div class="dropdown mb-2">
                  <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                  </div>
                </div> --}}
              </div>

              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">89.87%</h3>
                  <div class="d-flex align-items-baseline">
                    <p class="text-success">
                      <span>+2.8%</span>
                      <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                    </p>
                  </div>
                </div>
                <div class="col-6 col-md-12 col-xl-7">
                  <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->

  {{-- second card deal with treadings,and other song naratives --}}

  <div class="col-lg-12 col-xl-12 stretch-card">
    <div class="card">
        <div class="card-body">
            {{-- 1 st card for units --}}
            <div class="row">
            <div class="col-md-4 grid-margin stretch-card" style="height: 120px">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Units</h6>
                      {{-- <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                        </div>
                      </div> --}}
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">3,897</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- first card for units --}}
              {{-- second card for radio plays --}}
              <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                      <h6 class="card-title mb-0">Artist</h6>
                      <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex flex-column">
                      <a href="#" class="d-flex align-items-center border-bottom pb-3">
                        <div class="mr-3">
                          <img src="assets\images\faces\face2.jpg" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100 artist" data-artist="leonardo payne">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Leonardo Payne</h6>
                            <p class="text-muted tx-12">12.30 PM</p>
                          </div>
                          <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                      </a>
                      <a href="#" class="d-flex align-items-center border-bottom py-3">
                        <div class="mr-3">
                          <img src="assets\images\faces\face3.jpg" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100 artist" data-artist="carl Henson">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Carl Henson</h6>
                            <p class="text-muted tx-12">02.14 AM</p>
                          </div>
                          <p class="text-muted tx-13">I've finished it! See you so..</p>
                        </div>
                      </a>
                      <a href="#" class="d-flex align-items-center border-bottom py-3">
                        <div class="mr-3">
                          <img src="assets\images\faces\face4.jpg" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100 artist" data-artist="Jensen Combs">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Jensen Combs</h6>
                            <p class="text-muted tx-12">08.22 PM</p>
                          </div>
                          <p class="text-muted tx-13">This template is awesome!</p>
                        </div>
                      </a>
                      <a href="#" class="d-flex align-items-center border-bottom py-3">
                        <div class="mr-3">
                          <img src="assets\images\faces\face5.jpg" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100 artist" data-artist="Amiah Burton">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Amiah Burton</h6>
                            <p class="text-muted tx-12">05.49 AM</p>
                          </div>
                          <p class="text-muted tx-13">Nice to meet you</p>
                        </div>
                      </a>
                      <a href="#" class="d-flex align-items-center border-bottom py-3">
                        <div class="mr-3">
                          <img src="assets\images\faces\face6.jpg" class="rounded-circle wd-35" alt="user">
                        </div>
                        <div class="w-100 artist" data-artist="Yeretzi Mayo">
                          <div class="d-flex justify-content-between">
                            <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                            <p class="text-muted tx-12">01.19 AM</p>
                          </div>
                          <p class="text-muted tx-13">Hey! there I'm available...</p>
                        </div>
                      </a>
                      <a href="#" class="d-flex align-items-center border-bottom py-3">
                          <div class="mr-3">
                            <img src="assets\images\faces\face2.jpg" class="rounded-circle wd-35" alt="user">
                          </div>
                          <div class="w-100 artist" data-artist="Yaretzi Mayo">
                            <div class="d-flex justify-content-between">
                              <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                              <p class="text-muted tx-12">01.19 AM</p>
                            </div>
                            <p class="text-muted tx-13">Hey! there I'm available...</p>
                          </div>
                        </a>


                    </div>
                  </div>
                </div>
              </div>
              {{-- radio plays --}}
            </div>
        </div>
    </div>
    {{-- put /row --}}
</div>
{{-- second card --}}




@endsection

@section('scripts')
