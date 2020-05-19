@extends('layouts.app')
@section('contents')


<div class="profile-page tx-13">
<div class="row">
    <div class="col-12 grid-margin">
      <div class="profile-header">
        <div class="cover">
          <div class="gray-shade"></div>
          <figure>
            <img src="..\assets\images\profile-cover.jpg" class="img-fluid" alt="profile cover">
          </figure>
          <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
              <img class="profile-pic" src="..\assets\images\faces\face1.jpg" alt="profile">
              <span class="profile-name">Amiah Burton</span>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-primary btn-icon-text btn-edit-profile">
                <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
              </button>
            </div>
          </div>
        </div>
        <div class="header-links">
          <ul class="links d-flex align-items-center mt-3 mt-md-0">
            <li class="header-link-item d-flex align-items-center active">
              <i class="mr-1 icon-md" data-feather="columns"></i>
              <a class="pt-1px d-none d-md-block" href="#collapsetimeline" data-toggle="collapse" >Timeline</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="user"></i>
              <a class="pt-1px d-none d-md-block" href="#collapseAbout" data-toggle="collapse">About</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="users"></i>
              <a class="pt-1px d-none d-md-block" href="#">Friends <span class="text-muted tx-12">3,765</span></a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="image"></i>
              <a class="pt-1px d-none d-md-block" href="#">Photos</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="video"></i>
              <a class="pt-1px d-none d-md-block" href="#">Videos</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
         <div class="card">
           <div class="collapse" id="collapsetimeline">
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptas repudiandae nostrum obcaecati iusto ducimus saepe, vitae sapiente perspiciatis magni quas facilis mollitia ipsa facere quam culpa eligendi illum laudantium, nemo odio maiores cupiditate aliquid. Odio reprehenderit deserunt voluptate alias autem vitae repellat non nobis minima amet! Quia quam labore deleniti laborum porro, omnis, neque assumenda esse cumque et aliquid!
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, quasi nostrum aliquid sint vitae aspernatur asperiores delectus officiis possimus illum quo odio provident dolorum, dolores tempora, cumque temporibus totam veniam? Iusto numquam qui eligendi fugiat laboriosam molestias necessitatibus blanditiis incidunt minima. Quisquam nesciunt distinctio deleniti voluptates quos, quia iure culpa iusto consequatur in quas fugit. Culpa aliquid nisi voluptas reiciendis!
           </div>
         </div>
        </div>
      </div>


      <div class="row ">
        <div class="col-lg-12">
         <div class="card">
           <div class="collapse" id="collapseAbout">
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga voluptas repudiandae nostrum obcaecati iusto ducimus saepe, vitae sapiente perspiciatis magni quas facilis mollitia ipsa facere quam culpa eligendi illum laudantium, nemo odio maiores cupiditate aliquid. Odio reprehenderit deserunt voluptate alias autem vitae repellat non nobis minima amet! Quia quam labore deleniti laborum porro, omnis, neque assumenda esse cumque et aliquid!
             Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, quasi nostrum aliquid sint vitae aspernatur asperiores delectus officiis possimus illum quo odio provident dolorum, dolores tempora, cumque temporibus totam veniam? Iusto numquam qui eligendi fugiat laboriosam molestias necessitatibus blanditiis incidunt minima. Quisquam nesciunt distinctio deleniti voluptates quos, quia iure culpa iusto consequatur in quas fugit. Culpa aliquid nisi voluptas reiciendis!
           </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

