@extends('back.layout')
@section('css')
@endsection

@section('main')
    <div class="col-md-6 col-xl-12 stretch-card">
        <div class="card card-revenue-table">
            <div class="card-body">
                <div class="revenue-item d-flex">
                    <div class="revenue-desc">
                        <h6>Member Profit</h6>
                        <p class="font-weight-light"> Average Weekly Profit </p>
                    </div>
                    <div class="revenue-amount">
                        <p class="text-primary"> +20 </p>
                    </div>
                </div>
                <div class="revenue-item d-flex">
                    <div class="revenue-desc">
                        <h6>Total Profit</h6>
                        <p class="font-weight-light"> Weekly Customer reservations </p>
                    </div>
                    <div class="revenue-amount">
                        <p class="text-primary"> +30 </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper mt-4">
            <div class="d-flex justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <p class="mb-0 font-weight-medium">21,435</p>
                    <small class="text-muted ml-2">Requests</small>
                </div>
                <p class="mb-0 font-weight-medium">34%</p>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="wrapper mt-4">

            <h4 class="card-title font-weight-medium mb-0 d-none d-md-block">Active Users</h4>
            <div class="wrapper mt-4">
                <div class="d-flex justify-content-between mb-2">
                    <div class="d-flex align-items-center">
                        <p class="mb-0 font-weight-medium">200</p>
                        <small class="text-muted ml-2">Email account</small>
                    </div>
                    <p class="mb-0 font-weight-medium">80%</p>
                </div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="wrapper mt-4">
            <div class="d-flex justify-content-between mb-2">
                <div class="d-flex align-items-center">
                    <p class="mb-0 font-weight-medium">30</p>
                    <small class="text-muted ml-2">Posts Likes daily</small>
                </div>
                <p class="mb-0 font-weight-medium">34%</p>
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>




    <div class="wrapper mt-4">
        <div class="card">
            <div class="card-body py-5">
                <div class="d-flex flex-row justify-content-center align-items">
                    <i class="mdi mdi-facebook text-facebook icon-lg"></i>
                    <div class="ml-3">
                        <h6 class="text-facebook font-weight-semibold mb-0">2.62 Subscribers</h6>

                        <p class="text-muted card-text">You main list growing</p>
                    </div>
                    <div class="ml-3">
                        <h6 class="text-google font-weight-semibold mb-0">3.4k Followers</h6>
                        <p class="text-muted card-text">You main list growing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-5">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
@endsection
