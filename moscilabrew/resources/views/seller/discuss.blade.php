@extends('layouts.master')
@section('title', 'Seller Discuss')

@section('navbar')
    @include('layouts.header-seller')
@endsection

@section('bodyClass')
  "seller-body sellerDiscussPage"
@endsection

@section('sideBar')
    @include('layouts.sidebar-seller')
@endsection

@section('content')
<div class="container-fluid">
        <div class="row d-flex">
          <!-- List User -->
          <div class="col-4 overflow-auto" style="height: 25rem;">
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
            <div class="card" style="margin: 1rem;">
              <div class="btn d-flex text-start">
                <div class="col-3"><img id="profileIMG" src="{{ asset('img/Profile pict copy.png') }}" alt="" style="height: 3rem;"></div>
                <div class="col"> 
                  <h6>Nama User</h6>
                  <div class="overflow-hidden" style="height: 1rem; font-size: 0.7rem;">
                    Halo kak, stok biji kopi arabica sumatra ada ga ya?
                  </div >
                </div>
              </div>
            </div>
          </div>
          <div class="col-8 overflow-auto"  style="height: 25rem; padding-right: 3rem;">
            <div class="chat">
              <div class="chat-header clearfix">
                  <div class="row">
                      <div class="col-lg-6">
                          <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                              <img src="{{ asset('img/Profile pict copy.png') }}" alt="avatar">
                          </a>
                          <div class="chat-about">
                              <h6 class="m-b-0">Nama User</h6>
                              <small>Last seen: 2 hours ago</small>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="chat-history">
                  <ul class="m-b-0">
                      <li class="clearfix">
                          <div class="message-data">
                              <span class="message-data-time" style="font-size: 0.7rem;">10:12 AM, Today</span>
                          </div>
                          <div class="message my-message py-2 px-2" style="font-size: 1rem;">Halo kak, stok biji kopi arabica sumatra ada ga ya?</div>                                    
                      </li>                               
                      <li class="clearfix">
                          <div class="message-data text-right">
                              <span class="message-data-time" style="font-size: 0.7rem;">10:15 AM, Today</span>
                          </div>
                          <div class="message other-message float-right py-2 px-2" style="font-size: 1rem;">Oh aman kak, stok masih banyak. Boleh langsung di order ya!.</div>
                      </li>
                  </ul>
              </div>
              <div class="chat-message clearfix">
                  <div class="input-group mb-0">
                      <div class="input-group-prepend">
                          <span class="input-group-text d-flex"><i class="fa fa-send"></i></span>
                      </div>
                      <input type="text" class="form-control" style="height: 1.8rem;" placeholder="Enter text here...">                                    
                  </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection

@section('css')
    
    <link rel="stylesheet" href="{{ asset('css/seller-style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/seller-discuss.css') }}" type="text/css"> 
@endsection

@section('js')
<script>
      const scrollSpy = new bootstrap.ScrollSpy(document.div, {
        target: '#navbar-example2'
      })
    </script>
@endsection
