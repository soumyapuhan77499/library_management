@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- row -->
    <div class="full-bg">
        <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
            <div>
                <h3 class="card-title">BOOK MANAGEMENT</h3>
            </div>
			<div class="live-indicator">
				<span class="dot"></span>
				<span>Live</span>
			</div>
        </div>
		<div class="row row-sm mt-4">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
					<div class="card px-3 ps-4">
						<div class="row index1">
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
								<div class="row border-end bd-xs-e-0 p-3">
									<div class="col-3 d-flex align-items-center justify-content-center">
										<div class="circle-icon bg-primary text-center align-self-center overflow-hidden shadow">
											<i class="fe fe-shopping-bag tx-15 text-white"></i>
										</div>
									</div>
									<div class="col-9 py-0">
										<div class="pt-4 pb-3">
											<div class="d-flex">
												<h6 class="mb-2 tx-12">Borrowed Book</h6>
												<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.11%</span>
											</div>
											<div class="pb-0 mt-0">
												<div class="d-flex">
													<h4 class="tx-18 font-weight-semibold mb-0">5,472</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
								<div class="row border-end bd-md-e-0 bd-xs-e-0 bd-lg-e-0 bd-xl-e-0  p-3">
									<div class="col-3 d-flex align-items-center justify-content-center">
										<div class="circle-icon bg-warning text-center align-self-center overflow-hidden shadow">
											<i class="fe fe-dollar-sign tx-15 text-white"></i>
										</div>
									</div>
									<div class="col-9">
										<div class="pt-4 pb-3">
											<div class="d-flex">
												<h6 class="mb-2 tx-12">Returned Book</h6>
												<span class="badge bg-danger-transparent text-danger font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.23%</span>
											</div>
											<div class="pb-0 mt-0">
												<div class="d-flex">
													<h4 class="tx-18 font-weight-semibold mb-0">47,589</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
								<div class="row border-end bd-xs-e-0  p-3">
									<div class="col-3 d-flex align-items-center justify-content-center">
										<div class="circle-icon bg-secondary text-center align-self-center overflow-hidden shadow">
											<i class="fe fe-external-link tx-15 text-white"></i>
										</div>
									</div>
									<div class="col-9">
										<div class="pt-4 pb-3">
											<div class="d-flex">
												<h6 class="mb-2 tx-12">Overdue Books</h6>
												<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>1.57%</span>
											</div>
											<div class="pb-0 mt-0">
												<div class="d-flex">
													<h4 class="tx-18 font-weight-semibold mb-0">8,943</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
								<div class="row  p-3">
									<div class="col-3 d-flex align-items-center justify-content-center">
										<div class="circle-icon bg-info text-center align-self-center overflow-hidden shadow">
											<i class="fe fe-credit-card tx-15 text-white"></i>
										</div>
									</div>
									<div class="col-9">
										<div class="pt-4 pb-3">
											<div class="d-flex	">
												<h6 class="mb-2 tx-12">Missing Books</h6>
												<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.45%</span>
											</div>
											<div class="pb-0 mt-0">
												<div class="d-flex">
													<h4 class="tx-18 font-weight-semibold mb-0">$57.12M</h4>
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
		</div>

		<div class="full-bg">
			<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
				<div>
					<h3 class="card-title">ANANDA BAZAR</h3>
				</div>
				<div class="live-indicator">
					<span class="dot"></span>
					<span>Live</span>
				</div>
			</div>
			<div class="row row-sm">
				<div class="col-lg-6 col-xl-3 col-md-6 col-12">
					<div class="card bg-primary-gradient text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<div class="icon1 mt-2 text-center">
										<i class="fe fe-users tx-40"></i>
									</div>
								</div>
								<div class="col-8">
									<div class="mt-0 text-center">
										<span class="text-white">Total Books</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam1-up" class="text-white">5,74,12</span>
												</p>
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
													<span id="cam1-down" class="text-white">453565</span>
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
					<div class="card bg-success-gradient text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-4">
									<div class="icon1 mt-2 text-center">
										<i class="fe fe-users tx-40"></i>
									</div>
								</div>
								<div class="col-8">
									<div class="mt-0 text-center">
										<span class="text-white">Visitors</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam3-up" class="text-white">8,943</span>
												</p>
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
													<span id="cam3-down" class="text-white">453565</span>
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
										<i class="fe fe-users tx-40"></i>
									</div>
								</div>
								<div class="col-8">
									<div class="mt-0 text-center">
										<span class="text-white">New Members</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam4-up" class="text-white">5,74.12</span>
												</p>
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
													<span id="cam4-down" class="text-white">453565</span>
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
										<i class="fe fe-users tx-40"></i>
									</div>
								</div>
								<div class="col-8">
									<div class="mt-0 text-center">
										<span class="text-white">Pending Fees</span>
										<div class="pb-0 mt-0">
											<div class="d-flex">
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-up mx-2 text-success"></i>
													<span id="cam5-up" class="text-white">453786</span>
												</p>
												<p class="mb-0 fs-14 text-muted text-white">
													<i class="fas fa-arrow-circle-down mx-2 text-danger"></i>
													<span id="cam5-down" class="text-white">453565</span>
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
    </div>
   

@endsection

@section('scripts')
<script>
	
    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Internal Piety js -->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

    <!-- Internal Chart js -->
    <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>
@endsection
