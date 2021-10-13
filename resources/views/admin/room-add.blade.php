@extends('layouts.template')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="p-4 border rounded">
            <form class="row g-3" id="add-room" action="{{ route('post.room') }}" method="POST">

                @csrf

                <div class="form-group col-md-6">
                    <label for="hotel" class="form-label">Hotel</label>
                    <input type="text" class="form-control" name="hotel" id="hotel" value="Testing Hotel">
                </div>
                <div class="form-group col-md-6">
                    <label for="room_name" class="form-label">Room Name</label>
                    <input type="text" name="room_name" class="form-control" id="room_name">
                </div>
                <div class="form-group col-md-6">
                    <label for="type" class="form-label">Room Type</label>
                    <select class="form-select" name="type_id" id="type">
                        <option selected value="">Choose...</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    <label id="error-type"></label>
                </div>
                <div class="form-group col-md-6">
                    <label for="type" class="form-label">Status</label>
                    <select class="form-select" name="status" id="status" >
                        <option selected value="">Choose room status</option>
                        <option value="vc">Vacant Clean</option>
                        <option value="vd">Vacant Dirty</option>
                        <option value="oc">Occupied</option>
                        <option value="rs">Reserved</option>
                    </select>
                    <label id="error-status"></label>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
