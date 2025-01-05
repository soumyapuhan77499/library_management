@extends('layouts.app')

@section('styles')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<style>


<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .card {
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        background: linear-gradient(145deg, #f6f6f6, #e0e0e0);
        transition: all 0.3s ease-in-out;
    }

    .card:hover {
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .card-header {
        color: white;
        font-weight: bold;
    }


    .card-body {
        padding: 20px;
        color: #333;
    }

    .tx-26 {
        font-size: 26px;
        font-weight: 600;
    }

    .text-muted {
        color: #777;
    }

    .d-flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .text-success {
        color: #28a745 !important;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    .me-3 {
        margin-right: 15px;
    }

    #bookChart {
        max-height: 300px;
        margin-top: 30px;
    }

    .fa {
        font-size: 20px;
    }

    .number {
        transition: all 0.5s ease-in-out;
    }


    /* Add hover effect for the card */
    .card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .table-container {
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .status.borrowed {
            background-color: #f39c12;
            color: #fff;
        }

        .status.returned {
            background-color: #28a745;
            color: #fff;
        }

        .action-icons i {
            margin-right: 10px;
            cursor: pointer;
            color: #007bff;
        }

        .action-icons i:hover {
            color: #0056b3;
        }
</style>

</style>
@endsection

@section('content')
    <!-- row -->
    <div class="full-bg">
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div>
                <h3 class="card-title" style="color: black">USER DETAILS</h3>
            </div>
			
        </div>
		

		<div class="full-bg">
			
			<div class="row row-sm">
				
				<div class="col-lg-6 col-xl-3 col-md-6 col-12">
					<div class="card bg-success-gradient text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<div class="icon1 mt-2 text-center">
                                        <img src="{{ asset('assets/img/library/audience.png') }}" class="ht-50" alt="Library Image">
									</div>
								</div>
								<div class="col-8">
									<div class="mt-0 text-center">
										<span class="text-white">Visitors</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class="mb-0 fs-14 text-muted text-white"    style="font-size: 20px">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam3-up" class="text-white number">80</span>
												</p>
												<p class="mb-0 fs-14 text-muted text-white"     style="font-size: 20px">
													<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
													<span id="cam3-down" class="text-white number">45</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-lg-6 col-xl-3 col-md-6 col-12">
					<div class="card bg-danger-gradient text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<div class="icon1 mt-2 text-center">
                                        <img src="{{ asset('assets/img/library/add-group.png') }}" class="ht-50" alt="Library Image">
									</div>
								</div>
								<div class="col-8">
									<div class="mt-0 text-center">
										<span class="text-white">New Members</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class="mb-0 fs-14 text-muted text-white" style="font-size: 20px">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam4-up" class="text-white number">100</span>
												</p>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <div class="col-lg-6 col-xl-3 col-md-6 col-12">
					<div class="card bg-primary-gradient text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<div class="icon1 mt-2 text-center">
                                        <img src="{{ asset('assets/img/library/diversity.png') }}" class="ht-50" alt="Library Image">
									</div>
								</div>
								<div class="col-8">
									<div class="mt-0 text-center">
										<span class="text-white">Our Member</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class="mb-0 fs-14 text-muted text-white" style="font-size: 20px">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam1-up" class="text-white number">100</span>
												</p>
												<p class="mb-0 fs-14 text-muted text-white"  style="font-size: 20px">
													<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
													<span id="cam1-down" class="text-white number">40</span>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-lg-6 col-xl-3 col-md-6 col-12">
					<div class="card bg-warning-gradient text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<div class="icon1 mt-2 text-center">
                                        <img src="{{ asset('assets/img/library/wallet.png') }}" class="ht-50" alt="Library Image">
									</div>
								</div>
								<div class="col-8">
									<div class="text-center">
										<span class="text-white">Pending Fees</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class=" text-muted text-white" style="font-size: 17px;">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam5-up" class="text-white  number">₹ 36</span>
												</p>
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div>
                <h3 class="card-title" style="color: black">BOOK DETAILS</h3>
            </div>
        </div>

        <div class="row row-sm mt-4">
            <!-- Total Books Section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
                <div class="card p-3 premium-card border-0 shadow-sm rounded-lg">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/library/book1.png') }}" class="ht-50 me-3" alt="Library Image">
                        <div>
                            <h6 class="tx-14 text-muted mb-1">Total Books</h6>
                            <h4 class="tx-20 font-weight-semibold mb-0">8,943</h4>
                            <span class="badge bg-success-transparent text-success font-weight-semibold">
                                <i class="fa fa-caret-up me-1"></i>1.57%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Borrowed Books Section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
                <div class="card p-3 premium-card border-0 shadow-sm rounded-lg">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/library/books.png') }}" class="ht-60 me-3" alt="Library Image">
                        <div>
                            <h6 class="tx-14 text-muted mb-1">Borrowed Books</h6>
                            <h4 class="tx-20 font-weight-semibold mb-0">2,812</h4>
                            <span class="badge bg-success-transparent text-success font-weight-semibold">
                                <i class="fa fa-caret-up me-1"></i>0.11%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Returned Books Section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
                <div class="card p-3 premium-card border-0 shadow-sm rounded-lg">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/library/return.png') }}" class="ht-50 me-3" alt="Library Image">
                        <div>
                            <h6 class="tx-14 text-muted mb-1">Returned Books</h6>
                            <h4 class="tx-20 font-weight-semibold mb-0">1,053</h4>
                            <span class="badge bg-danger-transparent text-danger font-weight-semibold">
                                <i class="fa fa-caret-up me-1"></i>0.23%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Missing Books Section -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
                <div class="card p-3 premium-card border-0 shadow-sm rounded-lg">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/library/open-book.png') }}" class="ht-50 me-3" alt="Library Image">
                        <div>
                            <h6 class="tx-14 text-muted mb-1">Missing Books</h6>
                            <h4 class="tx-20 font-weight-semibold mb-0">57</h4>
                            <span class="badge bg-success-transparent text-success font-weight-semibold">
                                <i class="fa fa-caret-up me-1"></i>0.45%
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div>
                <h3 class="card-title" style="color: black">LIBRARY DETAILS</h3>
            </div>
        </div>
        <div class="row row-sm mt-3">
            <div class="col-sm-12 col-lg-12 col-xl-3">
                <div class="card">
                    <div class="card-header pb-2" style="background: linear-gradient(90deg, #f9c314, #f64d30); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                        <h3 class="card-title mb-2">BOOKS CATEGORIES</h3>
                    </div>
                    <div class="card-body p-0 customers mt-1">
                        <div class="country-card pt-0">
                            <div class="mb-4">
                                <div class="d-flex mb-1">
                                    <span class="tx-13 font-weight-semibold">Science & Technology</span>
                                    <div class="ms-auto">
                                        <span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span>
                                        <span class="number-font" id="number-count-science">32,879</span> 
                                        (<span id="percentage-science">65</span>%)
                                    </div>                                
                                </div>
                                <div class="progress ht-8 br-5 mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" id="progress-science" style="width: 50%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="d-flex">
                                    <span class="tx-13 font-weight-semibold">Philosophy</span>
                                    <div class="ms-auto">
                                        <span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span>
                                        <span class="number-font" id="number-count-philosophy">56,291</span> 
                                        (<span id="percentage-philosophy">69</span>%)
                                    </div>
                                </div>
                                <div class="progress ht-8 br-5 mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" id="progress-philosophy" style="width: 80%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="d-flex">
                                    <span class="tx-13 font-weight-semibold">Education</span>
                                    <div class="ms-auto">
                                        <span class="text-success mx-1"><i class="fe fe-trending-up"></i></span>
                                        <span class="number-font" id="number-count-education">34,209</span> 
                                        (<span id="percentage-education">60</span>%)
                                    </div>
                                </div>
                                <div class="progress ht-8 br-5 mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" id="progress-education" style="width: 60%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="d-flex">
                                    <span class="tx-13 font-weight-semibold">Health & Fitness</span>
                                    <div class="ms-auto">
                                        <span class="text-success mx-1"><i class="fe fe-trending-up"></i></span>
                                        <span class="number-font" id="number-count-health">45,870</span> 
                                        (<span id="percentage-health">86</span>%)
                                    </div>
                                </div>
                                <div class="progress ht-8 br-5 mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" id="progress-health" style="width: 80%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="d-flex">
                                    <span class="tx-13 font-weight-semibold">Literature</span>
                                    <div class="ms-auto">
                                        <span class="text-success mx-1"><i class="fe fe-trending-up"></i></span>
                                        <span class="number-font" id="number-count-literature">67,357</span> 
                                        (<span id="percentage-literature">73</span>%)
                                    </div>
                                </div>
                                <div class="progress ht-8 br-5 mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="progress-literature" style="width: 70%"></div>
                                </div>
                            </div>
                            
                            <div class="mb-0">
                                <div class="d-flex">
                                    <span class="tx-13 font-weight-semibold">Architecture</span>
                                    <div class="ms-auto">
                                        <span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span>
                                        <span class="number-font" id="number-count-architecture">56,291</span> 
                                        (<span id="percentage-architecture">69</span>%)
                                    </div>
                                </div>
                                <div class="progress ht-8 br-5 mt-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-purple" id="progress-architecture" style="width: 80%"></div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-12 col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-header pb-2" style="background: linear-gradient(90deg, #3ff9f9, #3f10fb); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                        <div class="card-title mb-2">TRENDING BOOK NAME</div>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group projects-list border-0">
                            <!-- Book 1 -->
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="tx-13 mb-2 font-weight-semibold text-dark" id="book-1-title">The Alchemist</p>
                                    <h4 class="text-dark mb-0 font-weight-semibold text-dark tx-18" id="book-1-sales">3,876</h4>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted tx-12">
                                        <i class="fa fa-caret-up text-success me-1"></i> <span id="book-1-change" class="text-success">03%</span> last month
                                    </span>
                                    <span class="text-muted tx-11" id="book-1-time">5 days ago</span>
                                </div>
                            </a>
            
                            <!-- Book 2 -->
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="tx-13 mb-2 font-weight-semibold text-dark" id="book-2-title">Educated</p>
                                    <h4 class="text-dark mb-0 font-weight-semibold text-dark tx-18" id="book-2-sales">2,178</h4>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted tx-12">
                                        <i class="fa fa-caret-down text-danger me-1"></i><span id="book-2-change" class="text-danger"> 16%</span> last month
                                    </span>
                                    <span class="text-muted tx-11" id="book-2-time">2 days ago</span>
                                </div>
                            </a>
            
                            <!-- Book 3 -->
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="tx-13 mb-2 font-weight-semibold text-dark" id="book-3-title">Atomic Habits</p>
                                    <h4 class="text-dark mb-0 font-weight-semibold text-dark tx-18" id="book-3-sales">1,367</h4>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted tx-12">
                                        <i class="fa fa-caret-up text-success me-1"></i><span id="book-3-change" class="text-success"> 06%</span> last month
                                    </span>
                                    <span class="text-muted tx-11" id="book-3-time">1 day ago</span>
                                </div>
                            </a>
            
                            <!-- Book 4 -->
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="tx-13 mb-2 font-weight-semibold text-dark" id="book-4-title">Cosmos</p>
                                    <h4 class="text-dark mb-0 font-weight-semibold text-dark tx-18" id="book-4-sales">678</h4>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted tx-12">
                                        <i class="fa fa-caret-down text-danger me-1"></i><span id="book-4-change" class="text-danger"> 25%</span> last month
                                    </span>
                                    <span class="text-muted tx-11" id="book-4-time">10 days ago</span>
                                </div>
                            </a>
            
                            <!-- Book 5 -->
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="tx-13 mb-2 font-weight-semibold text-dark" id="book-5-title">Steve Jobs</p>
                                    <h4 class="text-dark mb-0 font-weight-semibold text-dark tx-18" id="book-5-sales">578</h4>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted tx-12">
                                        <i class="fa fa-caret-up text-success me-1"></i><span id="book-5-change" class="text-success"> 55%</span> last month
                                    </span>
                                    <span class="text-muted tx-11" id="book-5-time">11 days ago</span>
                                </div>
                            </a>
            
                            <!-- Book 6 -->
                            {{-- <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-start-0 border-end-0 border-top mb-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <p class="tx-13 mb-2 font-weight-semibold text-dark" id="book-6-title">My Life in Full</p>
                                    <h4 class="text-dark mb-0 font-weight-semibold text-dark tx-18" id="book-6-sales">27,215</h4>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <span class="text-muted tx-12">
                                        <i class="fa fa-caret-up text-success me-1"></i><span id="book-6-change" class="text-success"> 32%</span> last month
                                    </span>
                                    <span class="text-muted tx-11" id="book-6-time">11 days ago</span>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 col-xl-3">
                <div class="card">
                    <div class="card-header pb-2" style="background: linear-gradient(90deg, #ff5bf7, #eb1d76); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                        <div>
                            <h3 class="card-title mb-2">Book Timeline</h3>
                        </div>
                    </div>
                    <div class="card-body mt-0">
                        <div class="latest-timeline mt-4">
                            <ul class="timeline mb-0">
                                <li>
                                    <div class="featured_icon danger">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </li>
                                <li class="mt-0 activity">
                                    <div><span class="tx-11 text-muted float-end">23 Sep, 2021</span></div>
                                    <a href="javascript:void(0);" class="tx-12 text-dark">
                                    <p class="mb-1 font-weight-semibold text-dark tx-13">Soumyaranjan puhan</p>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Alexander Hamilton</p>
                                </li>
                                <li>
                                    <div class="featured_icon success">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </li>
                                <li  class="mt-0 activity">
                                    <div><span class="tx-11 text-muted float-end">16 Aug, 2021</span></div>
                                    <a href="javascript:void(0);" class="tx-12 text-dark">
                                    <p class="mb-1 font-weight-semibold text-dark tx-13">Rakesh Moharana</p>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Bandi Ra Atma Katha </p>
                                </li>
                                <li>
                                    <div class="featured_icon primary">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </li>
                                <li class="mt-0 activity">
                                    <div><span class="tx-11 text-muted float-end">23 Feb, 2021</span></div>
                                    <a href="javascript:void(0);" class="tx-12 text-dark">
                                    <p class="mb-1 font-weight-semibold text-dark">Diptiranjan Rout</p>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Agyatara Kala</p>
                                </li>
                                <li>
                                    <div class="featured_icon warning">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </li>
                                <li class="mt-0 activity">
                                    <div><span class="tx-11 text-muted float-end">21 june, 2021</span></div>
                                    <a href="javascript:void(0);" class="tx-12 text-dark">
                                    <p class="mb-1 font-weight-semibold text-dark tx-13">Sumanta Swain</p>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Mahabharata for Children  </p>
                                </li>
                                <li>
                                    <div class="featured_icon teal">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </li>
                                <li class="mt-0 activity">
                                    <div><span class="tx-11 text-muted float-end">04 Aug, 2021</span></div>
                                    <a href="javascript:void(0);" class="tx-12 text-dark">
                                    <p class="mb-1 font-weight-semibold text-dark tx-13">Chandrasekhar Mohanty</p>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Sri Jagannatha Kahani  </p>
                                </li>
                                <li>
                                    <div class="featured_icon info">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                </li>
                                <li class="mt-0 activity">
                                    <div><span class="tx-11 text-muted float-end">04 Aug, 2021</span></div>
                                    <a href="javascript:void(0);" class="tx-12 text-dark">
                                    <p class="mb-1 font-weight-semibold text-dark tx-13">Himanshu Puhan</p>
                                    </a>
                                    <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Jagannatha Charitamrita </p>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-12 col-lg-12">
                <div class="card" style="border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-header pb-2" style="background: linear-gradient(90deg, #5bff89, #0c3e57); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                        <h3 class="card-title mb-2">Book Statistics</h3>
                    </div>
                    <div class="card-body pb-0" style="height: 400px;">
                        <div class="row mb-4">
                            <!-- Total Borrow -->
                            <div class="col-6">
                                <div class="text-muted tx-12 text-center mb-2" style="font-weight: bold; color: #5b8bff;">Borrowed Books</div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <span class="me-3 tx-26 font-weight-semibold" id="borrowedBooks" style="color: #5b8bff;">2,132</span>
                                    <span class="text-success font-weight-semibold">
                                        <i class="fa fa-book me-2"></i> Borrow
                                    </span>
                                </div>
                            </div>
            
                            <!-- Total Return -->
                            <div class="col-6">
                                <div class="text-muted tx-12 text-center mb-2" style="font-weight: bold; color: #f44336;">Returned Books</div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <span class="me-3 tx-26 font-weight-semibold" id="returnedBooks" style="color: #f44336;">1,053</span>
                                    <span class="text-danger font-weight-semibold">
                                        <i class="fa fa-undo me-2"></i> Return
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Chart Placeholder -->
                        <canvas id="bookChart"></canvas>
                    </div>
                </div>
            </div>

            
                  
        </div>

        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div>
                <h3 class="card-title" style="color: black">Book Borrow and Return Details</h3>
            </div>
        </div>

        <div class="row row-sm mt-3">
            <div class="col-sm-12 col-lg-12 col-xl-12">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Borrower Name</th>
                                <th>Book Title</th>
                                <th>Author Name</th>
                                <th>Borrow Date</th>
                                <th>Return Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pravupad Sahoo</td>
                                <td>The Great Gatsby</td>
                                <td>F. Scott Fitzgerald</td>
                                <td>2025-01-01 10:30 AM</td>
                                <td>2025-01-10 2:00 PM</td>
                                <td><span class="status returned">Returned</span></td>
                                <td class="action-icons">
                                    <i class="fas fa-eye" title="View Details"></i>
                                    <i class="fas fa-trash-alt" title="Delete"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Saroj Panda</td>
                                <td>1984</td>
                                <td>George Orwell</td>
                                <td>2025-01-05 11:00 AM</td>
                                <td>2025-01-12 3:30 PM</td>
                                <td><span class="status borrowed">Borrowed</span></td>
                                <td class="action-icons">
                                    <i class="fas fa-eye" title="View Details"></i>
                                    <i class="fas fa-trash-alt" title="Delete"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Abhijit Das</td>
                                <td>To Kill a Mockingbird</td>
                                <td>Harper Lee</td>
                                <td>2025-01-02 9:15 AM</td>
                                <td>2025-01-15 12:45 PM</td>
                                <td><span class="status returned">Returned</span></td>
                                <td class="action-icons">
                                    <i class="fas fa-eye" title="View Details"></i>
                                    <i class="fas fa-trash-alt" title="Delete"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kalpataru Behera</td>
                                <td>Mahabharat</td>
                                <td>Harper Lee</td>
                                <td>2024-01-02 8:15 AM</td>
                                <td>2025-01-15 12:45 PM</td>
                                <td><span class="status returned">Returned</span></td>
                                <td class="action-icons">
                                    <i class="fas fa-eye" title="View Details"></i>
                                    <i class="fas fa-trash-alt" title="Delete"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
   

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Initialize borrowed and returned books
    let borrowedBooks = 2132;
    let returnedBooks = 1053;

    // Function to generate random changes
    function generateRandomChanges() {
        // Randomize borrowed and returned books
        borrowedBooks += Math.floor(Math.random() * 100) - 50; // Change between -50 and +50
        returnedBooks += Math.floor(Math.random() * 100) - 50; // Change between -50 and +50

        // Ensure the numbers don't go below 0
        borrowedBooks = Math.max(borrowedBooks, 0);
        returnedBooks = Math.max(returnedBooks, 0);

        // Update the displayed values
        document.getElementById('borrowedBooks').textContent = borrowedBooks.toLocaleString();
        document.getElementById('returnedBooks').textContent = returnedBooks.toLocaleString();

        // Update the chart data
        updateChart();
    }

    // Chart.js setup
    const ctx = document.getElementById('bookChart').getContext('2d');
    const bookChart = new Chart(ctx, {
        type: 'bar', // Bar chart
        data: {
            labels: ['Borrowed Books', 'Returned Books'],
            datasets: [{
                label: 'Books Statistics',
                data: [borrowedBooks, returnedBooks],
                backgroundColor: ['#28a745', '#dc3545'],
                borderColor: ['#28a745', '#dc3545'],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Function to update chart data
    function updateChart() {
        bookChart.data.datasets[0].data = [borrowedBooks, returnedBooks];
        bookChart.update(); // Update the chart
    }

    // Generate random changes every 5 seconds
    setInterval(generateRandomChanges, 3000);

</script>


<script>
    // Function to generate random 3-digit numbers
    function getRandomNumber() {
        return Math.floor(Math.random() * 900) + 100;  // Generates a random number between 100 and 999
    }

    // Function to update stats
    function updateStats() {
        // Visitors stats
        let visitorsUp = getRandomNumber();
        let visitorsDown = getRandomNumber();

        // New Members stats
        let newMembers = getRandomNumber();

        // Total Books stats
        let booksUp = getRandomNumber();
        let booksDown = getRandomNumber();

        // Pending Fees stats
        let pendingFees = `₹ ${Math.floor(Math.random() * 100) + 10}`; // Random value between ₹10 and ₹109

        // Update the text content of the elements
        document.getElementById("cam3-up").textContent = visitorsUp;
        document.getElementById("cam3-down").textContent = visitorsDown;

        document.getElementById("cam4-up").textContent = newMembers;

        document.getElementById("cam1-up").textContent = booksUp;
        document.getElementById("cam1-down").textContent = booksDown;

        document.getElementById("cam5-up").textContent = pendingFees;
    }

    // Set interval to update stats every 5 seconds
    setInterval(updateStats, 5000);  // 5000 ms = 5 seconds

    // Initial call to set the stats right away when the page loads
    updateStats();
</script>
<script>
    // Function to generate random 5-digit number
    function getRandomNumber() {
        return Math.floor(Math.random() * 900) + 100;  // Random number between 10000 and 99999
    }

    // Function to generate random 2-digit percentage
    function getRandomPercentage() {
        return Math.floor(Math.random() * 100);  // Random percentage between 0 and 99
    }

    // Function to update the number count and percentage dynamically
    function updateStats() {
        // Science & Technology
        let numberScience = getRandomNumber();
        let percentageScience = getRandomPercentage();
        document.getElementById("number-count-science").textContent = numberScience.toLocaleString();
        document.getElementById("percentage-science").textContent = percentageScience;
        document.getElementById("progress-science").style.width = percentageScience + "%";

        // Philosophy
        let numberPhilosophy = getRandomNumber();
        let percentagePhilosophy = getRandomPercentage();
        document.getElementById("number-count-philosophy").textContent = numberPhilosophy.toLocaleString();
        document.getElementById("percentage-philosophy").textContent = percentagePhilosophy;
        document.getElementById("progress-philosophy").style.width = percentagePhilosophy + "%";

        // Education
        let numberEducation = getRandomNumber();
        let percentageEducation = getRandomPercentage();
        document.getElementById("number-count-education").textContent = numberEducation.toLocaleString();
        document.getElementById("percentage-education").textContent = percentageEducation;
        document.getElementById("progress-education").style.width = percentageEducation + "%";

        // Health & Fitness
        let numberHealth = getRandomNumber();
        let percentageHealth = getRandomPercentage();
        document.getElementById("number-count-health").textContent = numberHealth.toLocaleString();
        document.getElementById("percentage-health").textContent = percentageHealth;
        document.getElementById("progress-health").style.width = percentageHealth + "%";

        // Literature
        let numberLiterature = getRandomNumber();
        let percentageLiterature = getRandomPercentage();
        document.getElementById("number-count-literature").textContent = numberLiterature.toLocaleString();
        document.getElementById("percentage-literature").textContent = percentageLiterature;
        document.getElementById("progress-literature").style.width = percentageLiterature + "%";

        // Architecture
        let numberArchitecture = getRandomNumber();
        let percentageArchitecture = getRandomPercentage();
        document.getElementById("number-count-architecture").textContent = numberArchitecture.toLocaleString();
        document.getElementById("percentage-architecture").textContent = percentageArchitecture;
        document.getElementById("progress-architecture").style.width = percentageArchitecture + "%";
    }

    // Set interval to update the stats every 5 seconds
    setInterval(updateStats, 5000);  // 5000 ms = 5 seconds

    // Initial call to set the stats right away when the page loads
    updateStats();
</script>


<script>
    // Array of books with initial details
    const books = [
        { title: "The Alchemist", sales: 3876, change: 3, time: "5 days ago" },
        { title: "Educated", sales: 2178, change: -16, time: "2 days ago" },
        { title: "Atomic Habits", sales: 1367, change: 6, time: "1 day ago" },
        { title: "Cosmos", sales: 678, change: -25, time: "10 days ago" },
        { title: "Steve Jobs", sales: 578, change: 55, time: "11 days ago" },
        { title: "My Life in Full", sales: 27215, change: 32, time: "11 days ago" }
    ];

    // Function to generate random sales and percentage changes
    function generateRandomData() {
        books.forEach((book, index) => {
            // Randomize sales between a range
            book.sales = Math.floor(Math.random() * (50000 - 1000) + 1000);

            // Randomize percentage change between -30% to +30%
            book.change = Math.floor(Math.random() * (60 + 30)) - 30;

            // Update the HTML elements with the new values
            document.getElementById(`book-${index + 1}-title`).textContent = book.title;
            document.getElementById(`book-${index + 1}-sales`).textContent = book.sales.toLocaleString();
            document.getElementById(`book-${index + 1}-change`).textContent = `${book.change}%`;
            document.getElementById(`book-${index + 1}-time`).textContent = getRandomTime();
        });
    }

    // Function to return a random time (1 to 10 days ago)
    function getRandomTime() {
        const daysAgo = Math.floor(Math.random() * 10) + 1;
        return `${daysAgo} days ago`;
    }

    // Call the function to set initial data
    generateRandomData();

    // Optionally, you can set an interval to update the data periodically
    setInterval(generateRandomData, 5000); // Update every 10 seconds
</script>



@endsection
