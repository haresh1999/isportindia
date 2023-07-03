@extends('admin.layout.main')

@section('title','Article')

@section('content')
<div class="page pt-5 px-4 pt-sm-6 px-sm-5 pt-xl-7 px-xl-7">
    <div class="page-head">
        <div class="h3 mb-4 mb-xl-5">Released</div>
    </div>
    <div class="page-body pb-4 pb-xl-6">
        <div class="card mb-2 p-4 p-sm-5">
            <div class="card-head d-flex flex-wrap align-items-center justify-content-between mb-2 mb-sm-7">
                <div class="title title-color purple me-5 mb-4 mb-sm-0">Products</div>
                <div class="search-input input-group me-sm-5 mb-3 mb-sm-0 order-2 order-sm-1">
                    <button class="input-group-text transparent">
                        <svg class="icon icon-search">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </button>
                    <input class="form-control input-small input-action rounded-2" type="text"
                        placeholder="Search product">
                </div>
                <div class="nav row gx-4 ms-auto flex-nowrap d-flex mb-4 mb-sm-0 order-1 order-sm-2">
                    <div class="btn-sort active col mx-2" data-bs-target="#tab-list" data-bs-toggle="tab">
                        <svg class="icon icon-list">
                            <use xlink:href="#icon-list"></use>
                        </svg>
                    </div>
                    <div class="btn-sort col mx-2" data-bs-target="#tab-grid" data-bs-toggle="tab">
                        <svg class="icon icon-grid">
                            <use xlink:href="#icon-grid"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="drafts tab-content">
                    <div class="tab-pane fade active show" id="tab-list" role="tabpanel">
                        <div class="row g-0">
                            <div class="sheet-table d-block d-md-table">
                                <div class="border-bottom d-none d-md-table-row">
                                    <div class="checkbox-cell d-table-cell py-4 px-3">
                                        <input class="form-check-input" data-group-checkbox="product" type="checkbox" />
                                    </div>
                                    <div class="d-table-cell pb-4 px-3 caption">Product</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Price</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Status</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Rating</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Sales</div>
                                    <div class="d-table-cell pb-4 px-3 caption">Views</div>
                                </div>
                                <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-4 mb-4">
                                    <div class="checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                        <input class="form-check-input" data-item-checkbox="product" type="checkbox" />
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                            class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <div class="sheet-table-preview md-horizontal-image flex-shrink-0"><img
                                                    src="img/content/product-1.jpg" alt="Bento Matte 3D Illustration" />
                                            </div>
                                            <div class="sheet-table-details">
                                                <div class="sheet-table-title mb-2 mb-md-1 me-8 me-md-0">Bento Matte 3D
                                                    Illustration</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="badge common me-3 d-block d-md-none">$98</div>
                                                    <div class="caption">UI design kit</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">$98</div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Status</div>
                                        <div class="badge min green-light">Active</div>
                                    </div>
                                    <div
                                        class="sheet-cell d-flex align-items-center d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Rating</div>
                                        <div class="d-inline-flex align-items-center">
                                            <svg class="icon icon-star-fill me-1 fill-yellow">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="caption fs-8 ps-1">(87) </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Sales</div>
                                        <div class="d-inline-flex">
                                            <div class="badge common me-1">$1,650</div>
                                            <div class="balance d-inline-flex align-items-center px-1 up"
                                                title="Core - Released">
                                                <svg class="icon icon-arrow-up me-1 d-block">
                                                    <use xlink:href="#icon-arrow-up"></use>
                                                </svg>22.3%<span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Views</div>
                                        <div class="d-inline-flex align-items-center">
                                            <div class="badge common me-2">48k</div>
                                            <div class="progress">
                                                <div class="progress-bar blue" role="progressbar" style="width: 60%;"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-4 mb-4">
                                    <div class="checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                        <input class="form-check-input" data-item-checkbox="product" type="checkbox" />
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                            class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <div class="sheet-table-preview md-horizontal-image flex-shrink-0"><img
                                                    src="img/content/product-2.jpg" alt="Bento Matte 3D Illustration" />
                                            </div>
                                            <div class="sheet-table-details">
                                                <div class="sheet-table-title mb-2 mb-md-1 me-8 me-md-0">Bento Matte 3D
                                                    Illustration</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="badge common me-3 d-block d-md-none">$98</div>
                                                    <div class="caption">UI design kit</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">$98</div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Status</div>
                                        <div class="badge min green-light">Active</div>
                                    </div>
                                    <div
                                        class="sheet-cell d-flex align-items-center d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Rating</div>
                                        <div class="d-inline-flex align-items-center">
                                            <svg class="icon icon-star-fill me-1 fill-yellow">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="caption fs-8 ps-1">(87) </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Sales</div>
                                        <div class="d-inline-flex">
                                            <div class="badge common me-1">$1,650</div>
                                            <div class="balance d-inline-flex align-items-center px-1 up"
                                                title="Core - Released">
                                                <svg class="icon icon-arrow-up me-1 d-block">
                                                    <use xlink:href="#icon-arrow-up"></use>
                                                </svg>22.3%<span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Views</div>
                                        <div class="d-inline-flex align-items-center">
                                            <div class="badge common me-2">40k</div>
                                            <div class="progress">
                                                <div class="progress-bar red" role="progressbar" style="width: 20%;"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-4 mb-4">
                                    <div class="checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                        <input class="form-check-input" data-item-checkbox="product" type="checkbox" />
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                            class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <div class="sheet-table-preview md-horizontal-image flex-shrink-0"><img
                                                    src="img/content/product-3.jpg" alt="Bento Matte 3D Illustration" />
                                            </div>
                                            <div class="sheet-table-details">
                                                <div class="sheet-table-title mb-2 mb-md-1 me-8 me-md-0">Bento Matte 3D
                                                    Illustration</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="badge common me-3 d-block d-md-none">$98</div>
                                                    <div class="caption">UI design kit</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">$98</div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Status</div>
                                        <div class="badge min green-light">Active</div>
                                    </div>
                                    <div
                                        class="sheet-cell d-flex align-items-center d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Rating</div>
                                        <div class="d-inline-flex align-items-center">
                                            <svg class="icon icon-star-stroke me-1 fill-shades-2">
                                                <use xlink:href="#icon-star-stroke"></use>
                                            </svg>
                                            <div class="caption fs-8">No ratings</div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Sales</div>
                                        <div class="d-inline-flex">
                                            <div class="badge common me-1">$1,650</div>
                                            <div class="balance d-inline-flex align-items-center px-1 up"
                                                title="Core - Released">
                                                <svg class="icon icon-arrow-up me-1 d-block">
                                                    <use xlink:href="#icon-arrow-up"></use>
                                                </svg>22.3%<span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Views</div>
                                        <div class="d-inline-flex align-items-center">
                                            <div class="badge common me-2">48k</div>
                                            <div class="progress">
                                                <div class="progress-bar purple" role="progressbar" style="width: 70%;"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-4 mb-4">
                                    <div class="checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                        <input class="form-check-input" data-item-checkbox="product" type="checkbox" />
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                            class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <div class="sheet-table-preview md-horizontal-image flex-shrink-0"><img
                                                    src="img/content/product-4.jpg" alt="Bento Matte 3D Illustration" />
                                            </div>
                                            <div class="sheet-table-details">
                                                <div class="sheet-table-title mb-2 mb-md-1 me-8 me-md-0">Bento Matte 3D
                                                    Illustration</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="badge common me-3 d-block d-md-none">$98</div>
                                                    <div class="caption">UI design kit</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">$98</div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Status</div>
                                        <div class="badge min green-light">Active</div>
                                    </div>
                                    <div
                                        class="sheet-cell d-flex align-items-center d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Rating</div>
                                        <div class="d-inline-flex align-items-center">
                                            <svg class="icon icon-star-fill me-1 fill-yellow">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="caption fs-8 ps-1">(87) </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Sales</div>
                                        <div class="d-inline-flex">
                                            <div class="badge common me-1">$650</div>
                                            <div class="balance d-inline-flex align-items-center px-1 up"
                                                title="Core - Released">
                                                <svg class="icon icon-arrow-up me-1 d-block">
                                                    <use xlink:href="#icon-arrow-up"></use>
                                                </svg>22.3%<span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Views</div>
                                        <div class="d-inline-flex align-items-center">
                                            <div class="badge common me-2">24k</div>
                                            <div class="progress">
                                                <div class="progress-bar red" role="progressbar" style="width: 90%;"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-4 mb-4">
                                    <div class="checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                        <input class="form-check-input" data-item-checkbox="product" type="checkbox" />
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                            class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <div class="sheet-table-preview md-horizontal-image flex-shrink-0"><img
                                                    src="img/content/product-5.jpg" alt="Bento Matte 3D Illustration" />
                                            </div>
                                            <div class="sheet-table-details">
                                                <div class="sheet-table-title mb-2 mb-md-1 me-8 me-md-0">Bento Matte 3D
                                                    Illustration</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="badge common me-3 d-block d-md-none">$98</div>
                                                    <div class="caption">UI design kit</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">$98</div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Status</div>
                                        <div class="badge min green-light">Active</div>
                                    </div>
                                    <div
                                        class="sheet-cell d-flex align-items-center d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Rating</div>
                                        <div class="d-inline-flex align-items-center">
                                            <svg class="icon icon-star-fill me-1 fill-yellow">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="caption fs-8 ps-1">(87) </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Sales</div>
                                        <div class="d-inline-flex">
                                            <div class="badge common me-1">$1,650</div>
                                            <div class="balance d-inline-flex align-items-center px-1 up"
                                                title="Core - Released">
                                                <svg class="icon icon-arrow-up me-1 d-block">
                                                    <use xlink:href="#icon-arrow-up"></use>
                                                </svg>22.3%<span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Views</div>
                                        <div class="d-inline-flex align-items-center">
                                            <div class="badge common me-2">16k</div>
                                            <div class="progress">
                                                <div class="progress-bar blue" role="progressbar" style="width: 32%;"
                                                    aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom sheet-row position-relative d-block d-md-table-row pb-4 mb-4">
                                    <div class="checkbox-cell sheet-cell d-none d-md-table-cell py-2 py-md-4 px-3">
                                        <input class="form-check-input" data-item-checkbox="product" type="checkbox" />
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3"><a
                                            class="sheet-table-item d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <div class="sheet-table-preview md-horizontal-image flex-shrink-0"><img
                                                    src="img/content/product-2.jpg" alt="Bento Matte 3D Illustration" />
                                            </div>
                                            <div class="sheet-table-details">
                                                <div class="sheet-table-title mb-2 mb-md-1 me-8 me-md-0">Bento Matte 3D
                                                    Illustration</div>
                                                <div class="d-flex align-items-center">
                                                    <div class="badge common me-3 d-block d-md-none">$98</div>
                                                    <div class="caption">UI design kit</div>
                                                </div>
                                            </div>
                                        </a></div>
                                    <div class="sheet-cell d-none d-md-table-cell py-2 py-md-4 px-0 px-md-3">$98</div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Status</div>
                                        <div class="badge min green-light">Active</div>
                                    </div>
                                    <div
                                        class="sheet-cell d-flex align-items-center d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Rating</div>
                                        <div class="d-inline-flex align-items-center">
                                            <svg class="icon icon-star-fill me-1 fill-yellow">
                                                <use xlink:href="#icon-star-fill"></use>
                                            </svg>4.8
                                            <div class="caption fs-8 ps-1">(87) </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Sales</div>
                                        <div class="d-inline-flex">
                                            <div class="badge common me-1">$3,250</div>
                                            <div class="balance d-inline-flex align-items-center px-1 up"
                                                title="Core - Released">
                                                <svg class="icon icon-arrow-up me-1 d-block">
                                                    <use xlink:href="#icon-arrow-up"></use>
                                                </svg>22.3%<span> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sheet-cell d-block d-md-table-cell py-2 py-md-4 px-0 px-md-3">
                                        <div class="d-inline-block d-md-none caption">Views</div>
                                        <div class="d-inline-flex align-items-center">
                                            <div class="badge common me-2">16k</div>
                                            <div class="progress">
                                                <div class="progress-bar blue" role="progressbar" style="width: 32%;"
                                                    aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-grid" role="tabpanel">
                        <div class="row gy-6 gx-5">
                            <div class="grid-preview col-12 col-sm-6 col-md-4">
                                <div class="grid-preview-thumbnail mb-4">
                                    <input class="checkbox form-check-input" type="checkbox" /><img
                                        src="img/content/product-5.jpg" alt="Fleet - Travel shopping UI design" />
                                    <div class="grid-preview-control d-flex align-items-center justify-content-center">
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-edit">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <svg class="icon icon-arrow">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid-preview-details mb-2">
                                    <div class="d-flex align-items-start justify-content-between"> Fleet - Travel
                                        shopping UI design
                                        <div class="badge large ms-5 green">$65</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-shades-2 fs-8">
                                    <svg class="icon icon-clock me-2 fill-shades-2">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg>Feb 2, 2020 at 10:55 PM
                                </div>
                            </div>
                            <div class="grid-preview col-12 col-sm-6 col-md-4">
                                <div class="grid-preview-thumbnail mb-4">
                                    <input class="checkbox form-check-input" type="checkbox" /><img
                                        src="img/content/product-4.jpg" alt="Bento Matte 3D Illustration" />
                                    <div class="grid-preview-control d-flex align-items-center justify-content-center">
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-edit">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <svg class="icon icon-arrow">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid-preview-details mb-2">
                                    <div class="d-flex align-items-start justify-content-between"> Bento Matte 3D
                                        Illustration
                                        <div class="badge large ms-5 green">$130</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-shades-2 fs-8">
                                    <svg class="icon icon-clock me-2 fill-shades-2">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg>Feb 9, 2020 at 3:00 AM
                                </div>
                            </div>
                            <div class="grid-preview col-12 col-sm-6 col-md-4">
                                <div class="grid-preview-thumbnail mb-4">
                                    <input class="checkbox form-check-input" type="checkbox" /><img
                                        src="img/content/product-2.jpg" alt="Fleet - Travel shopping UI design" />
                                    <div class="grid-preview-control d-flex align-items-center justify-content-center">
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-edit">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <svg class="icon icon-arrow">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid-preview-details mb-2">
                                    <div class="d-flex align-items-start justify-content-between"> Fleet - Travel
                                        shopping UI design
                                        <div class="badge large ms-5 common">$0</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-shades-2 fs-8">
                                    <svg class="icon icon-clock me-2 fill-shades-2">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg>Apr 2, 2021 at 12:36 AM
                                </div>
                            </div>
                            <div class="grid-preview col-12 col-sm-6 col-md-4">
                                <div class="grid-preview-thumbnail mb-4">
                                    <input class="checkbox form-check-input" type="checkbox" /><img
                                        src="img/content/product-3.jpg" alt="Bento Matte 3D Illustration" />
                                    <div class="grid-preview-control d-flex align-items-center justify-content-center">
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-edit">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <svg class="icon icon-arrow">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid-preview-details mb-2">
                                    <div class="d-flex align-items-start justify-content-between"> Bento Matte 3D
                                        Illustration
                                        <div class="badge large ms-5 green">$32</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-shades-2 fs-8">
                                    <svg class="icon icon-clock me-2 fill-shades-2">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg>Apr 9, 2021 at 2:03 PM
                                </div>
                            </div>
                            <div class="grid-preview col-12 col-sm-6 col-md-4">
                                <div class="grid-preview-thumbnail mb-4">
                                    <input class="checkbox form-check-input" type="checkbox" /><img
                                        src="img/content/product-1.jpg" alt="Fleet - Travel shopping UI design" />
                                    <div class="grid-preview-control d-flex align-items-center justify-content-center">
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-edit">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <svg class="icon icon-arrow">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid-preview-details mb-2">
                                    <div class="d-flex align-items-start justify-content-between"> Fleet - Travel
                                        shopping UI design
                                        <div class="badge large ms-5 green">$106</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-shades-2 fs-8">
                                    <svg class="icon icon-clock me-2 fill-shades-2">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg>Apr 23, 2021 at 10:00 PM
                                </div>
                            </div>
                            <div class="grid-preview col-12 col-sm-6 col-md-4">
                                <div class="grid-preview-thumbnail mb-4">
                                    <input class="checkbox form-check-input" type="checkbox" /><img
                                        src="img/content/product-4.jpg" alt="Bento Matte 3D Illustration" />
                                    <div class="grid-preview-control d-flex align-items-center justify-content-center">
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-edit">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2">
                                            <svg class="icon icon-trash">
                                                <use xlink:href="#icon-trash"></use>
                                            </svg>
                                        </button>
                                        <button class="btn-rounded mx-2" data-bs-toggle="modal"
                                            data-bs-target="#modal-product">
                                            <svg class="icon icon-arrow">
                                                <use xlink:href="#icon-arrow"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="grid-preview-details mb-2">
                                    <div class="d-flex align-items-start justify-content-between"> Bento Matte 3D
                                        Illustration
                                        <div class="badge large ms-5 green">$130</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center text-shades-2 fs-8">
                                    <svg class="icon icon-clock me-2 fill-shades-2">
                                        <use xlink:href="#icon-clock"></use>
                                    </svg>Feb 9, 2020 at 3:00 AM
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-footer d-none d-md-block p-4 p-sm-5 px-xl-7 mx-n4 mx-sm-n5 mx-xl-n7 mt-auto">
        <div class="container p-0 d-block d-sm-flex">
            <div class="d-flex align-items-center mb-4 mb-sm-0">
                <svg class="icon icon-check-all fill-shades-2 me-3">
                    <use xlink:href="#icon-check-all"></use>
                </svg><span class="caption">2 products selected</span>
            </div>
            <div class="d-flex ms-auto">
                <button class="btn-delete flex-grow-1">Delete
                    <svg class="icon icon-trash ms-1">
                        <use xlink:href="#icon-trash"></use>
                    </svg>
                </button>
                <button class="btn ms-2 flex-grow-1">Publish</button>
            </div>
        </div>
    </div>
</div>
@endsection