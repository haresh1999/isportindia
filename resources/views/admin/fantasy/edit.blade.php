@extends('admin.layout.main')

@section('title','Fantasy Create')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('content')
<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-body pb-4 pb-xl-6" style="max-width: 100% !important">
        <div class="row g-0">
            <div class="col-lg-12 col-12 pe-lg-2">
                <div class="card mb-2 p-4 p-sm-5">
                    <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                        <div class="title title-color green">Edit Fantasy</div><a class="btn-stroke btn-small"
                            href="{{route('fantasy')}}">
                            <svg class="icon icon-arrow-left me-1">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg><span>Back</span></a>
                    </div>

                    <form action="{{ route('fantasy.update',$fantasy->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-0">
                            <div class="row">

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Name of Website
                                        or App
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Maximum 100 characters">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('name')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <input class="form-control" type="text" name="name"
                                        value="{{ old('name',$fantasy->name) }}">
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">URL
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="paste your fantasy url here">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('link')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <input class="form-control" type="text" name="link"
                                        value="{{ old('link',$fantasy->link) }}">
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Image
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="upload your fantasy profile image">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('img')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <input class="form-control" type="file" name="img">
                                    @if ($fantasy->img)
                                    <a target="_blank" href="{{ getImageUrl($fantasy->img) }}">View</a>
                                    @endif
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Status
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Status Of Publish">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('status')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <select class="select select-wide" name="status">
                                        <option {{ old('status',$fantasy->status)==1 ? 'selected' : '' }}
                                            value="1">Active</option>
                                        <option {{ old('status',$fantasy->status)==2 ? 'selected' : '' }}
                                            value="2">InActive</option>
                                    </select>
                                </div>

                                <div class="w-100 text-center">
                                    <button class="btn mt-3">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection