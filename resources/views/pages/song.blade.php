@extends('layouts.app')
@section('contents')
<div class="col-lg-7 col-xl-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">SONGS</h6>
          <div class="dropdown mb-2">
            <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
              <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th class="pt-0">#</th>
                <th class="pt-0">Name</th>
                <th class="pt-0">Time</th>
                <th class="pt-0">Artist</th>
                <th class="pt-0">Album</th>
                <th class="pt-0">Genre</th>
                <th class="pt-0">Plays</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>NobleUI jQuery</td>
                <td>01/01/2019</td>
                <td>26/04/2019</td>
                <td><span class="badge badge-danger">Released</span></td>
                <td>Leonardo Payne</td>
              </tr>
              <tr>
                <td>2</td>
                <td>NobleUI Angular</td>
                <td>01/01/2019</td>
                <td>26/04/2019</td>
                <td><span class="badge badge-success">Review</span></td>
                <td>Carl Henson</td>
              </tr>
              <tr>
                <td>3</td>
                <td>NobleUI ReactJs</td>
                <td>01/05/2019</td>
                <td>10/09/2019</td>
                <td><span class="badge badge-info-muted">Pending</span></td>
                <td>Jensen Combs</td>
              </tr>
              <tr>
                <td>4</td>
                <td>NobleUI VueJs</td>
                <td>01/01/2019</td>
                <td>31/11/2019</td>
                <td><span class="badge badge-warning">Work in Progress</span>
                </td>
                <td>Amiah Burton</td>
              </tr>
              <tr>
                <td>5</td>
                <td>NobleUI Laravel</td>
                <td>01/01/2019</td>
                <td>31/12/2019</td>
                <td><span class="badge badge-danger-muted text-white">Coming soon</span></td>
                <td>Yaretzi Mayo</td>
              </tr>
              <tr>
                <td>6</td>
                <td>NobleUI NodeJs</td>
                <td>01/01/2019</td>
                <td>31/12/2019</td>
                <td><span class="badge badge-primary">Coming soon</span></td>
                <td>Carl Henson</td>
              </tr>
              <tr>
                <td class="border-bottom">3</td>
                <td class="border-bottom">NobleUI EmberJs</td>
                <td class="border-bottom">01/05/2019</td>
                <td class="border-bottom">10/11/2019</td>
                <td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>
                <td class="border-bottom">Jensen Combs</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection

@section('scripts')