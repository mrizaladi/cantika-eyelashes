@extends('layouts.dashboard')
@section('title')
    Store Dashboard Create
@endsection
@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                &laquo; Menu
            </button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-none d-lg-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture" />
                            Hi, Angga
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/index.html">Back to Store</a>
                            <a class="dropdown-item" href="/dashboard-account.html">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-inline-block mt-2" href="#">
                            <img src="/images/icon-cart-empty.svg" alt="" />
                        </a>
                    </li>
                </ul>
                <!-- Mobile Menu -->
                <ul class="navbar-nav d-block d-lg-none mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Hi, Angga
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-inline-block" href="#">
                            Cart
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">Add New Product</h2>
                    <p class="dashboard-subtitle">
                        Create your own product
                    </p>
                </div>
                <div class="dashboard-content">
                    <div class="row">
                        <div class="col-12">
                            <form action="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Product Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        aria-describedby="name" name="storeName" value="Papel La Casa" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input type="number" class="form-control" id="price"
                                                        aria-describedby="price" name="price" value="200" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea name="descrioption" id="" cols="30" rows="4" class="form-control">
The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning
                                </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="thumbnails">Thumbnails</label>
                                                    <input type="file" multiple class="form-control pt-1" id="thumbnails"
                                                        aria-describedby="thumbnails" name="thumbnails" />
                                                    <small class="text-muted">
                                                        Kamu dapat memilih lebih dari satu file
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <button type="submit" class="btn btn-success btn-block px-5">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("editor");
    </script>
@endpush
