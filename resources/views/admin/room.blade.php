@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-xl-2">
                        <a href="{{ url('room/add') }}" class="btn btn-sm btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>New Room</a>
                    </div>
                    <div class="col-lg-9 col-xl-10">
                        <form class="float-lg-end">
                            <div class="row row-cols-lg-auto g-2">
                                <div class="col-12">
                                    <div class="position-relative">
                                        <input type="text" class="form-control ps-5" placeholder="Search Product..."> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-white">Sort By</button>
                                        <div class="btn-group" role="group">
                                          <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class='bx bx-chevron-down'></i>
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-white">Collection Type</button>
                                        <div class="btn-group" role="group">
                                          <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class='bx bxs-category'></i>
                                          </button>
                                          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="{{ url('room/add') }}">Add new room</a></li>
                                            <li><a class="dropdown-item" href="{{url('room/device')}}">Add new device</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-white">Price Range</button>
                                        <div class="btn-group" role="group">
                                          <button id="btnGroupDrop1" type="button" class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class='bx bx-slider'></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session()->has('message'))
<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
    <div class="d-flex align-items-center">
        <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
        </div>
        <div class="ms-3">
            <h6 class="mb-0 text-white">Great</h6>
            <div class="text-white">{{ session('message') }}</div>
        </div>
    </div>
    <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">

    @foreach ($rooms as $room)
    <div class="col-lg-3">
        <div class="card
         @php
        if($room->status  == 'vc'){
            echo "border-success border-bottom border-2 border-0";
        }elseif($room->status == 'vd'){
            echo "border-danger border-bottom border-2 border-0";
        }elseif ($room->status == 'oc'){
            echo "border-primary border-bottom border-2 border-0";
        }elseif ($room->status == 'rs'){
            echo "border-warning border-bottom border-2 border-0";
        }
        @endphp ">
            <div class="card-body">
                <h6 class="card-title cursor-pointer">{{ $room->name }}</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent"><i class='bx bx-home font-18 align-middle me-1 '></i> {{ $room->type->name }}</li>
                    <li class="list-group-item bg-transparent ">
                        <i class='bx
                    @php
                        if($room->status == 'vc'){
                            echo "bx-check-square text-success";
                        }elseif($room->status == 'vd'){
                            echo "bx-brush-alt text-danger";
                        }elseif ($room->status == 'oc'){
                            echo "bx bx-bed text-primary";
                        }elseif ($room->status == 'rs'){
                            echo "bx bx-book-bookmark text-warning";
                        }
                        @endphp font-18 align-middle me-1'></i>
                        @php
                        if($room->status == 'vc'){
                            echo "Vacant Clean";
                        }elseif($room->status == 'vd'){
                            echo "Vacant Dirty";
                        }elseif ($room->status == 'oc'){
                            echo "Occupied";
                        }elseif ($room->status == 'rs'){
                            echo "Reserved";
                        }
                        @endphp
                    </li>
                    <li class="list-group-item bg-transparent ">
                        Do Not Disturb
                        <i class="font-18 align-middle me-0
                        @php
                        if($room->dnd == 'false'){
                            echo "bx bx-bell text-success";
                        }else{
                            echo "bx bx-bell text-danger";
                        }
                        @endphp
                        "></i>
                        @php
                        if($room->dnd == 'false'){
                            echo "No";
                        }else{
                            echo "Yes";
                        }
                        @endphp
                    </li>
                </ul>
            </div>

            <div class="card-footer">
                <a href="{{ url('room/device/'. $room->id) }}">
                    <i class="bx bx-devices text-secondary"></i>
                </a>

            </div>
        </div>
    </div>
    @endforeach

</div><!--end row-->
@endsection
