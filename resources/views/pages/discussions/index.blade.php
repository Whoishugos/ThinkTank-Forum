@extends('layouts.app')

@section('content')
    <section class="bg-gray pt-4 pb-5">
        <div class="container">
            <div class="mb-4">
                <div class="mb-3 d-flex align-items-center justify-content-between">
                    <h2 class="me-4 mb-0">
                        All Discussions
                    </h2>
                    <div>
                        50,000 Discussions
                    </div>
                </div>
                <a href="/" class="btn btn-primary ">Log In to Create Discussions</a>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 Likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    5 Answer
                                </div>
                            </div>
                            {{-- START FORM DISKUSI --}}
                            <div class="col-12 col-lg-10">
                                <a href="http://">
                                <h3>How to add a custom validation in laravel?</h3>
                                </a>
                                <p>I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the "...</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="http://">
                                        <span class="badge rounded-pills text-bg-light">Eloquent</span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="http://" class="me-1">
                                            <img src="{{ asset('images/profile.png') }}" alt="Hugo" class="avatar-sm rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="http://" class="me-1 fs-bold">Hugo</a>
                                            <span class="color-gray">5 Minutes Ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 Likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    5 Answer
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="http://">
                                <h3>How to add a custom validation in laravel?</h3>
                                </a>
                                <p>I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the "...</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="http://">
                                        <span class="badge rounded-pills text-bg-light">Eloquent</span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="http://" class="me-1">
                                            <img src="{{ asset('images/profile.png') }}" alt="Hugo" class="avatar-sm rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="http://" class="me-1 fs-bold">Hugo</a>
                                            <span class="color-gray">5 Minutes Ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-discussions">
                        <div class="row">
                            <div class="col-12 col-lg-2 mb-1 mb-lg-0 d-flex flex-row flex-lg-column align-items-end">
                                <div class="text-nowrap me-2 me-lg-0">
                                    3 Likes
                                </div>
                                <div class="text-nowrap color-gray">
                                    5 Answer
                                </div>
                            </div>
                            <div class="col-12 col-lg-10">
                                <a href="http://">
                                <h3>How to add a custom validation in laravel?</h3>
                                </a>
                                <p>I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the "...</p>
                                <div class="row">
                                    <div class="col me-1 me-lg-2">
                                        <a href="http://">
                                        <span class="badge rounded-pills text-bg-light">Eloquent</span>
                                        </a>
                                    </div>
                                    <div class="col-5 col-lg-4">
                                        <div class="avatar-sm-wrapper d-inline-block">
                                            <a href="http://" class="me-1">
                                            <img src="{{ asset('images/profile.png') }}" alt="Hugo" class="avatar-sm rounded-circle">
                                            </a>
                                        </div>
                                        <span class="fs-12px">
                                            <a href="http://" class="me-1 fs-bold">Hugo</a>
                                            <span class="color-gray">5 Minutes Ago</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- SELESAI FORM DISKUSI --}}
                </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <h3>All Categories</h3>
                    <div>
                        <a href="http://">
                        <span class="badge rounded-pills text-bg-light">Eloquent</span>
                        <span class="badge rounded-pills text-bg-light">Eloquent</span>
                        <span class="badge rounded-pills text-bg-light">Eloquent</span>
                        </a>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </section>
@endsection
