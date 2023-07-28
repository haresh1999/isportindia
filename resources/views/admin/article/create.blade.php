@extends('admin.layout.main')

@section('title','Article Create')

@section('css')
<link rel="stylesheet" href="{{ asset('admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

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
                            href="{{route('article')}}">
                            <svg class="icon icon-arrow-left me-1">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg><span>Back</span></a>
                    </div>

                    <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Category
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Category of article select from below">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('category')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <select class="select select-wide category" name="category">
                                        <option value="" selected disabled>Select Category</option>
                                        <option {{ old('category')=='latest_update' ? 'selected' : '' }}
                                            value="latest_update">Latest Update</option>
                                        <option {{ old('category')=='seasons_update' ? 'selected' : '' }}
                                            value="seasons_update">Seasons Update</option>
                                        <option {{ old('category')=='fantasy' ? 'selected' : '' }} value="fantasy">
                                            Fantasy</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mt-4 d-none seasons">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Select Seasons
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Select seasons related to article">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('cid')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <select class="select select-wide" name="cid" id="select_season_val">
                                        <option value="" selected disabled>Select Seasons</option>
                                        @foreach (getSeasons() as $val)
                                        <option {{ old('cid')==$val['cid'] ? 'selected' : '' }} value="{{$val['cid']}}">
                                            {{$val['title']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 mt-4 d-none match">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Select Match
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Select match available in season">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('match_id')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <select class="select select-wide" name="match_id" id="match_option">
                                        <option value="" selected disabled>Select Match</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mt-4 d-none fantasy">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Fantasy Tips
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Type of article select from below">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('fantasy_id')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <select class="select select-wide" name="fantasy_id">
                                        <option value="" selected disabled>Select Fantasy</option>
                                        @foreach ($fantasy as $key => $fant)
                                        <option {{ old('fantasy_id')==$key ? 'selected' : '' }}value="{{ $key }}">{{
                                            $fant }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Type
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Type of article select from below">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('type')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <select class="select select-wide" name="type">
                                        <option value="" selected disabled>Select type</option>
                                        <option {{ old('type')=='highlighter' ? 'selected' : '' }} value="highlighter">
                                            Highlighter</option>
                                        <option {{ old('type')=='normal' ? 'selected' : '' }} value="normal">Normal
                                        </option>
                                        <option {{ old('type')=='one_liner' ? 'selected' : '' }} value="one_liner">One
                                            Liner</option>
                                    </select>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Title
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Maximum 100 characters">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('title')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Short
                                        Description
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Write short description of this blog">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('short_description')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <textarea class="form-control mb-5 mb-sm-6" name="short_description" rows="3"
                                        cols="10">{{ old('short_description') }}</textarea>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Description
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="Article Details Description">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('description')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <textarea id="editor1" name="description" rows="10"
                                        cols="80">{{ old('description') }}</textarea>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Image
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip" title="Image">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('img')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <input class="form-control" type="file" name="img">
                                </div>

                                <div class="col-md-12 mt-4">
                                    <div class="caption d-flex align-items-center mb-3 text-reset fs-8">Article Read Min
                                        <div class="info-tooltip ms-1" data-bs-toggle="tooltip"
                                            title="add number of min to read this article">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    @error('min')
                                    <span class="text-red">{{$message}}</span>
                                    @enderror
                                    <input class="form-control" type="text" name="min" value="{{ old('min') }}">
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
                                        <option {{ old('stauts')==1 ? 'selected' : '' }} selected value="1">Active
                                        </option>
                                        <option {{ old('stauts')==2 ? 'selected' : '' }} value="2">InActive</option>
                                    </select>
                                </div>
                            </div>
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

@section('script')
<!-- CK Editor -->
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('admin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
</script>
<script>
$('.category').change(function(){

    if ($(this).val() == 'seasons_update' || $(this).val() == 'fantasy'){
        
        $('.seasons').removeClass('d-none')
        $('.seasons').addClass('d-block')

        if ($(this).val() == 'fantasy') {
            $('.fantasy').removeClass('d-none')
            $('.fantasy').addClass('d-block')
            $('.match').removeClass('d-none')
            $('.match').addClass('d-block')
        }else{
            $('.fantasy').removeClass('d-block')
            $('.fantasy').addClass('d-none')    
            $('.match').removeClass('d-block')
            $('.match').addClass('d-none')    
        }
    }else{
        $('.seasons').removeClass('d-block')
        $('.seasons').addClass('d-none')
        $('.fantasy').removeClass('d-block')
        $('.fantasy').addClass('d-none')
    }
})

$('#select_season_val').change(function(){

    $.ajax({
        type: "POST",
        url: "{{ route('season.match') }}",
        data: {'_token':"{{ csrf_token() }}",'cid' :$(this).val()},
        dataType: "json",
        success: function (response) {
            $('#match_option').html(' ')
            $.each(response, function (index, value) { 
                $('#match_option').append('<option value="'+valueOfElement.match_id+'">'+valueOfElement.short_title + ' ' + valueOfElement.format_str + ' ' + valueOfElement.match_number +'</option>');
            });
        }
    });
})
</script>
@endsection