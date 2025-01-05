@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
                    <div class="card sales-card">
                        <div class="row" >
                            <div class="col-8" id="card1"  style="background-color: #38CAB3 !important">
                                <div class="ps-4 pt-4 pe-3 pb-4">
                                    <div class="">
                                    </div>
                                    <h6 class="mb-2 tx-12" style="color: white">NORTH ZONE</h6>
                                    <div class="pb-0 mt-0">
                                        <div class="">
                                            <p class="mb-0 fs-14 text-muted">
                                                <i class="fas fa-arrow-circle-up mx-2 text-success"></i>
                                                <span style="font-size: 17px;" id="singha-up"
                                                    class="text-white">20000</span>
                                            </p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img style="height: 100%;width:100%" src="{{ asset('assets/img/visitor/1.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
                    <div class="card sales-card">
                        <div class="row">
                            <div class="col-8" id="card2"  style="background-color: #38CAB3 !important">
                                <div class="ps-4 pt-4 pe-3 pb-4">
                                    <div class="">
                                        <h6 class="mb-2 tx-12" style="color: white">SOUTH ZONE</h6>
                                    </div>
                                    <div class="pb-0 mt-0">
                                        <div class="">
                                            <p class="mb-0 fs-14 text-muted"><i
                                                    class="fas fa-arrow-circle-up mx-2 text-success"></i><span
                                                    style="font-size: 17px" id="singha-up1" class="text-white">15000</span>
                                            </p>
                                        
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src ="{{ asset('assets/img/visitor/2.jpeg') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
                    <div class="card sales-card">
                        <div class="row">
                            <div class="col-8" id="card3"  style="background-color: #38CAB3 !important">
                                <div class="ps-4 pt-4 pe-3 pb-4">
                                    <div class="">
                                        <h6 class="mb-2 tx-12" style="color: white">EAST ZONE</h6>
                                    </div>
                                    <div class="pb-0 mt-0">
                                        <div class="">
                                            <p class="mb-0 fs-14 text-muted"><i
                                                    class="fas fa-arrow-circle-up mx-2 text-success"></i><span
                                                    style="font-size: 17px" id="singha-up2" class="text-white">10000</span>
                                            </p>
                                         
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src ="{{ asset('assets/img/visitor/image3.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12">
                    <div class="card sales-card">
                        <div class="row">
                            <div class="col-8" id="card4"  style="background-color: #38CAB3 !important">
                                <div class="ps-4 pt-4 pe-3 pb-4">
                                    <div class="">
                                        <h6 class="mb-2 tx-12" style="color: white">WEST ZONE</h6>
                                    </div>
                                    <div class="pb-0 mt-0">
                                        <div class="">
                                            <p class="mb-0 fs-14 text-muted"><i
                                                    class="fas fa-arrow-circle-up mx-2 text-success"></i><span
                                                    style="font-size: 17px" id="singha-up3" class="text-white">10000</span>
                                            </p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src ="{{ asset('assets/img/visitor/image4.JPG') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- audio section --}}

        <audio id="siren-sound" src="{{ asset('assets/img/visitor/siren.mp3') }}" preload="auto"></audio>

        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header border-bottom-0">
                    <div>
                        <h3 class="card-title mb-2 ">PEOPLE COUNT</h3> <span class="d-block tx-12 mb-0 text-muted"></span>
                    </div>
                </div>
                <div class="card-body">
                    <div id="statistics20">

                    </div>
                </div>
            </div>
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        <h3 class="card-title mb-2 ">ZONE WISE PEOPLE COUNT</h3> <span class="d-block tx-12 mb-0 text-muted"></span>

                    </div>
                    <div class="d-md-flex">
                        <div class="mg-r-20 mg-t-10 col-md-3 text-center" > 
                            <div class="">
                                <p class="data-attributes">
                                    <span data-peity='{ "fill": ["#6c25be", "rgba(67, 87, 133, .09)"], "height": 60, "width": 60, "innerRadius": 10, "radius": 40 }'>6/7</span>
                                </p>
                                <p>EAST ZONE
                                </p>
                            </div>
                        </div>
                        <div class="mg-r-20 mg-t-10 col-md-3 text-center">
                            <div class="">
                                <p class="data-attributes">
                                    <span data-peity='{ "fill": ["#19c0c0", "rgba(67, 87, 133, .09)"],"height": 60, "width": 60, "innerRadius": 16, "radius": 36 }'>4/7</span>
                                </p>
                                <p>WEST ZONE

                                </p>
                            </div>
                        </div>
                        <div class="mg-r-20 mg-t-10 col-md-3 text-center">
                            <div class="">
                                <p class="data-attributes">
                                    <span data-peity='{ "fill": ["#00b9ff", "rgba(67, 87, 133, .09)"], "height": 60, "width": 60, "innerRadius": 18, "radius": 38 }'>5/7</span>
                                </p>
                                <p>NORTH ZONE

                                </p>
                            </div>
                        </div>
                        <div class="mg-r-20 mg-t-10 col-md-3 text-center">
                            <div class="">
                                <p class="data-attributes">
                                    <span data-peity='{ "fill": ["#ff8819 ", "rgba(67, 87, 133, .09)"], "height": 60, "width": 60, "innerRadius": 18, "radius": 40 }'>4/7</span>
                                </p>
                                <p>SOUTH ZONE
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- </div> -->
    </div>
@endsection

@section('scripts')
<script>
    function getRandomFiveDigitNumber() {
        return Math.floor(5000 + Math.random() * 20000);
    }

    let sirenPlaying = false;

    function updateCounter(upId, cardId, sirenSound) {
        const singhaUp = document.getElementById(upId);
        const card = document.getElementById(cardId);
        const upNumber = getRandomFiveDigitNumber();

        singhaUp.innerText = upNumber;

        // Change background color based on singha-up value
        if (upNumber > 20000) {
            card.style.backgroundColor = 'red';
        } else if (upNumber >= 10000 && upNumber <= 20000) {
            card.style.backgroundColor = 'orange';
        } else {
            card.style.backgroundColor = 'green';
        }

        checkAndPlaySiren(sirenSound);
    }

    function checkAndPlaySiren(sirenSound) {
        const singhaUpElements = ['singha-up', 'singha-up1', 'singha-up2', 'singha-up3'];
        let shouldPlaySiren = false;

        for (let i = 0; i < singhaUpElements.length; i++) {
            const singhaUp = document.getElementById(singhaUpElements[i]);
            const card = document.getElementById(`card${i + 1}`);
            if (card.style.backgroundColor === 'red') {
                shouldPlaySiren = true;
                break;
            }
        }

        if (shouldPlaySiren && !sirenPlaying) {
            sirenSound.play();
            sirenPlaying = true;
        } else if (!shouldPlaySiren && sirenPlaying) {
            sirenSound.pause();
            sirenSound.currentTime = 0;
            sirenPlaying = false;
        }
    }

    function startIntervals() {
        const sirenSound = document.getElementById('siren-sound');

        setInterval(() => {
            updateCounter('singha-up', 'card1', sirenSound);
        }, 1000); // 10 seconds interval for the first section

        setInterval(() => {
            updateCounter('singha-up1', 'card2', sirenSound);
        }, 2000); // 20 seconds interval for the second section

        setInterval(() => {
            updateCounter('singha-up2', 'card3', sirenSound);
        }, 2000); // 25 seconds interval for the third section

        setInterval(() => {
            updateCounter('singha-up3', 'card4', sirenSound);
        }, 5000); // 15 seconds interval for the fourth section
    }

    // Call the function to start intervals
    startIntervals();
</script>


    <!--Internal Sparkline js -->
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Internal Piety js -->
    <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
    <!-- Internal Chart js -->
    <script src="{{ asset('assets/plugins/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

    <!-- Internal Peity js -->
    <script src="{{asset('assets/js/chart.peity.js')}}"></script>
@endsection
