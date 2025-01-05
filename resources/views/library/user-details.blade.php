@extends('layouts.app')

@section('styles')
<!-- Font Awesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Custom Styles for Premium Form -->
<style>
    .form-container {
        background: #ffffff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .form-container:hover {
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .form-heading {
        text-align: left;
        font-size: 27px;
        font-weight: bold;
        color: #060607;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .form-group label {
        font-weight: bold;
        font-size: 15px;
        color: #444;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #ddd;
        padding: 12px 15px 12px 40px;
        font-size: 14px;
        box-shadow: none;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.1);
    }

    .custom-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 30px;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #0056b3;
    }

    .form-icon {
        position: absolute;
        top: 50%;
        left: 16px;
        transform: translateY(-50%);
        font-size: 18px;
        color: #999;
    }

    .position-relative {
        position: relative;
    }

    .form-control-with-icon {
        padding-left: 40px;
    }

    .form-container img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
@endsection

@section('content')
<div class="breadcrumb-header justify-content-between">
    <div class="left-content">
        <span class="main-content-title mg-b-0 mg-b-lg-1">USER REGISTRATION</span>
    </div>
    <div class="justify-content-center mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">User Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Registration</li>
        </ol>
    </div>
</div>

<div class="container mt-4">
    <div class="form-container">
        <h2 class="form-heading">Create New User Account</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Full Name -->
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control form-control-with-icon" id="full_name" name="full_name" placeholder="Enter Full Name" required>
                        <i class="fas fa-user form-icon"></i>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-with-icon" id="email" name="email" placeholder="Enter Email Address" required>
                        <i class="fas fa-envelope form-icon"></i>
                    </div>
                </div>

                <!-- Phone Number -->
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control form-control-with-icon" id="phone_number" name="phone_number" placeholder="Enter Phone Number" required>
                        <i class="fas fa-phone form-icon"></i>
                    </div>
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-with-icon" id="password" name="password" placeholder="Enter Password" required>
                        <i class="fas fa-lock form-icon"></i>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="col-md-6">
                    <div class="form-group position-relative">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control form-control-with-icon" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
                        <i class="fas fa-lock form-icon"></i>
                    </div>
                </div>
                  <!-- Profile Picture -->
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="profile_picture">Profile Picture</label>
                        <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter Address"></textarea>
                    </div>
                </div>

              

                <!-- Submit Button -->
                <div class="col-md-12 text-center mt-4">
                    <button type="submit" class="custom-btn">Register User</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Add your custom JavaScript here if needed
</script>
@endsection
