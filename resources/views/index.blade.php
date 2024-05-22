@extends('layouts.master')

@section('title','PROGRAMMAZIONE')

@section('breadcrumb')
<li class="breadcrumb-item" aria-current="page"><a href="{{ route('home') }}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Library</li>
<li class="breadcrumb-item active" aria-current="page">Books</li>
@endsection


@section('body')
          <div class="row text-center">
              <h2>
                Scegli il cinema
              </h2>
          </div>

            <div class="row" >
              <div class="col-md-6 col-sm-12 order-md-1 mt-2 mb-2">
                <div class="card border-dark w-100 h-100">
                  <div class="card-header text-center">
                    <a class="btn btn-primary" href="#"> Vedi programmazione Garden-Multivision</a>
                  </div>
                      <div class="card-body">
                          <a href="#progrGarden">
                          <img src="img/Loghi/logoGarden-removebg-preview.png" class="img-fluid" alt="...">
                        </a>
                                   
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 order-md-1 mt-2 mb-2">
                  <div class="card border-dark w-100 h-100">
                    <div class="card-header text-center">
                      <a class="btn btn-primary" href="#"> Vedi programmazione Iride-Vega</a>
                    </div>
                        <div class="card-body d-flex justify-content-center align-items-center">
                          <a href="#progrIride">
                            <img src="img/Loghi/logoIride-removebg-preview.png" class="img-fluid" alt="...">
                          </a>      
                      </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
@endsection