@extends('admin.layout.main')

@section('title','Article Create')

@section('content')
<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">New Article</div>
    </div>
    <div class="page-body pb-4 pb-xl-6">
        <div class="row g-0">
            <div class="col-lg-8 col-12 pe-lg-2">
                <div class="card mb-2 p-4 p-sm-5">
                    <div class="card-head d-flex align-items-center justify-content-between mb-5 mb-sm-6">
                        <div class="title title-color green">Articles & News</div><a class="btn-stroke btn-small"
                            href="{{route('dashboard')}}">
                            <svg class="icon icon-arrow-left me-1">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg><span>Back</span></a>
                    </div>

                    <form action="{{ route('article.store') }}" method="post">
                        @csrf
                        <div class="card-body p-0">

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Title
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                    title="Maximum 100 characters. No HTML or emoji allowed">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input class="form-control mb-5 mb-sm-6" type="text" name="title">

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Description
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                    title="Maximum 100 characters. No HTML or emoji allowed">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="editor mb-5 mb-sm-6 position-relative">
                                <div class="editor-toolbar d-flex p-3">
                                    <button class="ql-bold">
                                        <svg class="icon icon-bold">
                                            <use xlink:href="#icon-bold"></use>
                                        </svg>
                                    </button>
                                    <button class="ql-italic ms-5">
                                        <svg class="icon icon-italic">
                                            <use xlink:href="#icon-italic"></use>
                                        </svg>
                                    </button>
                                    <button class="ql-underline ms-5">
                                        <svg class="icon icon-underline">
                                            <use xlink:href="#icon-underline"></use>
                                        </svg>
                                    </button>
                                    <div class="smileys-actions">
                                        <button class="smileys-head ms-5">
                                            <svg class="icon icon-double-smile">
                                                <use class="fill" href="#icon-smile-fill"></use>
                                                <use class="stroke" href="#icon-smile-stroke"></use>
                                            </svg>
                                        </button>
                                        <div class="smileys-body d-flex rounded-1 p-1">
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/Blush.png" /></button>
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/Surprised.png" /></button>
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/SweatGrinning.png" /></button>
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/Cool.png" /></button>
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/Sleepy.png" /></button>
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/CryingWithLaughter.png" /></button>
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/HeartEyes.png" /></button>
                                            <button class="smileys-item rounded-circle"><img
                                                    src="img/content/reaction/SmileEyes.png" /></button>
                                        </div>
                                    </div>
                                    <button class="ms-5">
                                        <svg class="icon icon-link">
                                            <use xlink:href="#icon-link"></use>
                                        </svg>
                                    </button>
                                    <button class="ql-list ms-5">
                                        <svg class="icon icon-list">
                                            <use xlink:href="#icon-list"></use>
                                        </svg>
                                    </button>
                                    <button class="d-none d-sm-block ql-align ms-5">
                                        <svg class="icon icon-align">
                                            <use xlink:href="#icon-align"></use>
                                        </svg>
                                    </button>
                                    {{-- <button class="d-none d-sm-block ms-auto">
                                        <svg class="icon icon-arrow-left">
                                            <use xlink:href="#icon-arrow-left"></use>
                                        </svg>
                                    </button>
                                    <button class="d-none d-sm-block ms-2">
                                        <svg class="icon icon-arrow">
                                            <use xlink:href="#icon-arrow"></use>
                                        </svg>
                                    </button> --}}
                                </div>
                                <textarea class="editor-container" name="description" id="description" cols="30"
                                    rows="5"></textarea>
                            </div>

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Image
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                    title="Maximum 100 characters. No HTML or emoji allowed">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input class="form-control mb-5 mb-sm-6" type="file" name="image">

                            <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Status
                                <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                    title="Maximum 100 characters. No HTML or emoji allowed">
                                    <svg class="icon icon-info">
                                        <use xlink:href="#icon-info"></use>
                                    </svg>
                                </div>
                            </div>
                            @error('status')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <select class="select select-wide" name="status">
                                <option selected value="">Select status</option>
                                <option value="1">Active</option>
                                <option value="2">InActive</option>
                            </select>

                            <div class="w-100 text-center">
                                <button class="btn mt-3">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="page-footer p-4 p-sm-5 px-xl-7 mx-n4 mx-sm-n5 mx-xl-n7 mt-auto">
        <div class="container p-0 d-block d-sm-flex">
            <div class="d-flex align-items-center mb-4 mb-sm-0">
                <svg class="icon icon-check-all fill-shades-2 me-3">
                    <use xlink:href="#icon-check-all"></use>
                </svg><span class="caption pe-1">Last saved</span><span class="caption text-reset">Oct 4, 2021 -
                    23:32</span>
            </div>
            <div class="d-flex ms-auto">
                <button class="btn-stroke flex-grow-1">Save Draft</button>
                <button class="btn ms-2 flex-grow-1">Publish now</button>
                <div class="action-item ms-2">
                    <button class="action-head btn-stroke p-3">
                        <svg class="icon icon-more-vertical">
                            <use xlink:href="#icon-more-vertical"></use>
                        </svg>
                    </button>
                    <div class="action-body top p-3">
                        <button class="action-item d-block d-lg-none" data-bs-toggle="modal"
                            data-bs-target="#modal-preview">
                            <svg class="icon icon-expand">
                                <use xlink:href="#icon-expand"></use>
                            </svg>Preview
                        </button>
                        <button class="action-item" data-bs-toggle="modal" data-bs-target="#modal-datepicker">
                            <svg class="icon icon-calendar">
                                <use xlink:href="#icon-calendar"></use>
                            </svg>Schedule product
                        </button>
                        <button class="action-item">
                            <svg class="icon icon-link">
                                <use xlink:href="#icon-link"></use>
                            </svg>Get shareable link
                        </button>
                        <button class="action-item">
                            <svg class="icon icon-close">
                                <use xlink:href="#icon-close"></use>
                            </svg>Clear data
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection