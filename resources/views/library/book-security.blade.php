@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-xs-4">
                    <div class="card sales-card">
                        <div class="row" >
                            <div class="col-8" id="card1"  style="background: linear-gradient(90deg, #b0b5ed, #148ff4);">
                                <div class="ps-4 pt-4 pe-3 pb-4">
                                    <div class="">
                                    </div>
                                    <h6 class="mb-2 tx-12" style="color: white;font-size: 25px">Entry</h6>
                                    <div class="pb-0 mt-0">
                                        <div class="">
                                            <p class="mb-0 fs-14 text-muted">
                                                <i class="fas fa-arrow-circle-up mx-2 text-success"></i>
                                                <span style="font-size: 17px;" id="singha-up"
                                                    class="text-white">200</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/library/entry.png') }}"  alt="Library Image">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-4 col-xs-4">
                    <div class="card sales-card">
                        <div class="row">
                            <div class="col-8" id="card4" style="background: linear-gradient(90deg, #ed6ddc, #23c1bc);">
                                <div class="ps-4 pt-4 pe-3 pb-4">
                                    <div class="">
                                        <h6 class="mb-2 tx-12" style="color: white;font-size: 25px">Exit</h6>
                                    </div>
                                    <div class="pb-0 mt-0">
                                        <div class="">
                                           
                                            <p class="mb-0 fs-14 text-muted"><i
                                                    class="fas fa-arrow-circle-down mx-2 text-danger"></i> <span
                                                    style="font-size: 17px" id="singha-down3" class="text-white">150</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/library/exit-door.png') }}"  alt="Library Image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-xs-4">
                    <div class="card sales-card">
                        <div class="row">
                            <div class="col-8" id="card4" style="background: linear-gradient(90deg, #f9c314, #f64d30);">
                                <div class="ps-4 pt-4 pe-3 pb-4">
                                    <h6 class="mb-2 tx-12" style="color: white;font-size: 25px">Available</h6>
                                    <p class="mb-0 fs-14 text-muted">
                                        <i class="fas fa-arrow-circle-down mx-2 text-danger"></i> 
                                        <span style="font-size: 17px" id="available-count" class="text-white"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('assets/img/library/availability.png') }}" alt="Library Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- audio section --}}

        <audio id="siren-sound" src="{{ asset('assets/img/visitor/siren.mp3') }}" preload="auto"></audio>

        <div class="col-xl-3 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header pb-2" style="background: linear-gradient(90deg, #5f5d5f, #302329); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                    <h3 class="card-title mb-2">Today Visitors</h3>
                </div>
                <div class="card-body pb-0">
                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="text-muted tx-12 text-center mb-2">Average Male Visitors</div>
                            <div class="d-flex justify-content-center align-items-center">
                                <span class="me-3 tx-26 font-weight-semibold">2,132</span>
                                <span class="text-success font-weight-semibold"><i class="fa fa-caret-up me-2"></i>0.23%</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-muted tx-12 text-center mb-2">Average Female Visitors</div>
                            <div class="d-flex justify-content-center align-items-center">
                                <span class="me-3 tx-26 font-weight-semibold">1,053</span>
                                <span class="text-danger font-weight-semibold"><i class="fa fa-caret-down me-2"></i>0.11%</span>
                            </div>
                        </div>
                    </div>
                    <div id="Viewers"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-3">
            <div class="card">
                <div class="card-header pb-2" style="background: linear-gradient(90deg, #f386ed, #fc0771); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                    <div>
                        <h3 class="card-title mb-2">today borrowed books</h3>
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
                                <a href="javascript:void(0);" class="tx-12 text-dark">
                                <p class="mb-1 font-weight-semibold text-dark tx-13">Himanshu Puhan</p>
                                </a>
                                <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Jagannatha Charitamrita </p>
                            </li>
                            <li>
                                <div class="featured_icon danger">
                                    <i class="fas fa-circle"></i>
                                </div>
                            </li>
                            <li class="mt-0 activity mb-2">
                                <a href="javascript:void(0);" class="tx-12 text-dark">
                                <p class="mb-1 font-weight-semibold text-dark tx-13">Pushpa lata Sethy</p>
                                </a>
                                <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Odia Panchasakha Grantha </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xl-3">
            <div class="card">
                <div class="card-header pb-2" style="background: linear-gradient(90deg, #31fa03, #480a25); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                    <div>
                        <h3 class="card-title mb-2">today returned books</h3>
                    </div>
                </div>
                <div class="card-body mt-0">
                    <div class="latest-timeline mt-4">
                        <ul class="timeline mb-0">
                           
                            <li>
                                <div class="featured_icon success">
                                    <i class="fas fa-circle"></i>
                                </div>
                            </li>
                            <li  class="mt-0 activity">
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
                                <a href="javascript:void(0);" class="tx-12 text-dark">
                                <p class="mb-1 font-weight-semibold text-dark">Diptiranjan Rout</p>
                                </a>
                                <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Agyatara Kala</p>
                            </li>
                            <li>
                                <div class="featured_icon danger">
                                    <i class="fas fa-circle"></i>
                                </div>
                            </li>
                            <li class="mt-0 activity">
                                <a href="javascript:void(0);" class="tx-12 text-dark">
                                <p class="mb-1 font-weight-semibold text-dark tx-13">Soumyaranjan puhan</p>
                                </a>
                                <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Alexander Hamilton</p>
                            </li>
                          
                            <li>
                                <div class="featured_icon teal">
                                    <i class="fas fa-circle"></i>
                                </div>
                            </li>
                            <li class="mt-0 activity">
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
                                <a href="javascript:void(0);" class="tx-12 text-dark">
                                <p class="mb-1 font-weight-semibold text-dark tx-13">Himanshu Puhan</p>
                                </a>
                                <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Jagannatha Charitamrita </p>
                            </li>
                            <li>
                                <div class="featured_icon warning">
                                    <i class="fas fa-circle"></i>
                                </div>
                            </li>
                            <li class="mt-0 activity">
                                <a href="javascript:void(0);" class="tx-12 text-dark">
                                <p class="mb-1 font-weight-semibold text-dark tx-13">Sumanta Swain</p>
                                </a>
                                <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Mahabharata for Children  </p>
                            </li>
                            <li>
                                <div class="featured_icon danger">
                                    <i class="fas fa-circle"></i>
                                </div>
                            </li>
                            <li class="mt-0 activity mb-2">
                                <a href="javascript:void(0);" class="tx-12 text-dark">
                                <p class="mb-1 font-weight-semibold text-dark tx-13">Pushpa lata Sethy</p>
                                </a>
                                <p class="text-muted mt-0 mb-0 tx-12"><span style="font-weight: bold">Book : </span>Odia Panchasakha Grantha </p>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-xl-3">
            <div class="card">
                <div class="card-header pb-2" style="background: linear-gradient(90deg, #7b283a, #3d507f); border-top-left-radius: 15px; border-top-right-radius: 15px; color: white;">
                    <div>
                        <h3 class="card-title mb-2">missing books</h3>
                    </div>
                </div>
                <div class="card-body mt-0">
                    <div class="latest-timeline-missing mt-4">
                        <ul class="timeline mb-0">
                           
                           
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
@endsection

@section('scripts')
<script>
    // List of book names
    const books = [
    "The Great Story",
    "Moby Dick",
    "Pride and Prejudice",
    "1984",
    "To Kill a Bird",
    "The Catcher in the Rye",
    "War and Peace",
    "Crime and Punishment",
    "The Odyssey",
    "The Iliad"
];

const users = [
    "Sujit Parija",
    "Amlana Rout",
    "Rajesh Bhatt",
    "Elina Ray",
    "Ayesha Parija",
    "Rojalini Dalai",
    "Pravupad Sahoo",
];

// Reference to the "Missing Books" section
const missingBooksList = document.querySelector(".latest-timeline-missing ul");

// Function to randomly steal a book
function stealBook() {
    // Randomly select a book and a user
    const randomBook = books[Math.floor(Math.random() * books.length)];
    const randomUser = users[Math.floor(Math.random() * users.length)];
    const date = new Date().toLocaleDateString();

    // Play the siren sound
    const sirenSound = document.getElementById("siren-sound");
    sirenSound.play();

    // Show SweetAlert popup
    // Show SweetAlert popup
    Swal.fire({
        title: "🚨 Book Stolen!",
        html: `<strong>${randomBook}</strong> has been stolen by <strong>${randomUser}</strong>!`,
        icon: "warning",
        confirmButtonText: "OK"
    }).then(() => {
        // Pause the siren sound when the user clicks OK
        sirenSound.pause();
        sirenSound.currentTime = 0; // Reset the audio to the beginning
    });

    // Add the stolen book to the "Missing Books" list
    const bookHTML = `
        <li>
            <div class="featured_icon danger">
                <i class="fas fa-circle"></i>
            </div>
        </li>
        <li class="mt-0 activity">
            <div><span class="tx-11 text-muted float-end">${date}</span></div>
            <a href="javascript:void(0);" class="tx-12 text-dark">
                <p class="mb-1 font-weight-semibold text-dark tx-13">
                    <span style="font-weight: bold">Book: </span>${randomBook} <br>
                    <span style="font-weight: bold">Stolen by: </span>${randomUser}
                </p>
            </a>
        </li>
    `;

    // Append the new book entry to the list
    missingBooksList.insertAdjacentHTML("beforeend", bookHTML);
}

// Trigger the stealBook function every 5 seconds
setInterval(stealBook, 10000);


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        // Initial values for Entry and Exit
        let entry = 200;
        let exit = 150;
    
        // Function to calculate and update the Available count
        function updateCounts() {
            // Randomly increase/decrease entry and exit values
            entry += Math.floor(Math.random() * 10 - 5);  // Random adjustment between -5 and +5
            exit += Math.floor(Math.random() * 10 - 5);
    
            // Ensure exit does not exceed entry
            if (exit > entry) exit = entry;
    
            // Calculate available
            const available = entry - exit;
    
            // Update the DOM
            document.getElementById('singha-up').innerText = entry;
            document.getElementById('singha-down3').innerText = exit;
            document.getElementById('available-count').innerText = available;
        }
    
        // Run the updateCounts function every 5 seconds
        setInterval(updateCounts, 5000);
    
        // Initial run to set values immediately
        updateCounts();
    </script>

@endsection
