@extends('layouts.template')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-xl-2">
                        <a href="ecommerce-add-new-products.html" class="btn btn-primary"><i class='bx bxs-plus-square'></i>New</a>
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
                                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                            <li><a class="dropdown-item" href="#">Dropdown link</a></li>
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

<h6 class="mb-0 text-uppercase">Room Type</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <table class="table mb-0 table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Hotels</th>
                        <th scope="col">Room Size</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                    <tr>
                        <th scope="row">{{ $type->name }}</th>
                        <td>{{ $type->hotel }}</td>
                        <td>{{ $type->room_size }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
