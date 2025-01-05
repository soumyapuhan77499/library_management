@extends('layouts.app')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f5f5f5;
    }
    .form-container {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin: 30px auto;
    }
    .form-heading {
        text-align: left;
        font-size: 28px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
        text-transform: uppercase;

    }
    .form-group label {
        font-weight: 600;
        color: #555;
    }
    .form-control {
        border-radius: 8px;
        padding: 10px 15px;
    }
    .custom-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        transition: all 0.3s;
    }
    .custom-btn:hover {
        background-color: #0056b3;
    }
    .icon {
        color: #007bff;
        margin-right: 10px;
    }
</style>
@endsection

@section('content')

<div class="breadcrumb-header justify-content-between">
    <div class="left-content">
        <span class="main-content-title mg-b-0 mg-b-lg-1">BOOK DETAILS</span>
    </div>
    <div class="justify-content-center mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Book Details</a></li>
            <li class="breadcrumb-item active" aria-current="page">Book</li>
        </ol>
    </div>
</div>

<div class="form-container">
    <div class="form-heading">
        <i class="fas fa-book icon"></i> Add New Book
    </div>
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <!-- Book Title -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="book_title">Book Title</label>
                    <input type="text" class="form-control" id="book_title" name="book_title" placeholder="Enter Book Title" required>
                </div>
            </div>

            <!-- Author Name -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="author_name">Author Name</label>
                    <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Enter Author Name" required>
                </div>
            </div>

            <!-- Publication Date -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="publication_date">Publication Date</label>
                    <input type="date" class="form-control" id="publication_date" name="publication_date" required>
                </div>
            </div>

            <!-- ISBN Number -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="isbn_number">ISBN Number</label>
                    <input type="text" class="form-control" id="isbn_number" name="isbn_number" placeholder="Enter ISBN Number" required>
                </div>
            </div>

            <!-- Category -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="">Select Category</option>
                        <option value="Fiction">Fiction</option>
                        <option value="Non-Fiction">Non-Fiction</option>
                        <option value="Science">Science</option>
                        <option value="History">History</option>
                        <option value="Biography">Biography</option>
                    </select>
                </div>
            </div>

            <!-- Language -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="language">Language</label>
                    <select class="form-control" id="language" name="language" required>
                        <option value="">Select Language</option>
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Telugu">Telugu</option>
                        <option value="Kannada">Kannada</option>
                        <option value="Malayalam">Malayalam</option>
                        <option value="Punjabi">Punjabi</option>
                        <option value="Bengali">Bengali</option>
                        <option value="Urdu">Urdu</option>
                        <option value="Odia">Odia</option>
                        <option value="Assamese">Assamese</option>
                        <option value="Konkani">Konkani</option>
                        <option value="Sanskrit">Sanskrit</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="German">German</option>
                        <option value="Russian">Russian</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Korean">Korean</option>
                        <option value="Arabic">Arabic</option>
                        <option value="Portuguese">Portuguese</option>
                        <option value="Italian">Italian</option>
                    </select>
                </div>
            </div>

            <!-- Description -->
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Book Description"></textarea>
                </div>
            </div>

            <!-- Cover Image -->
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="cover_image">Cover Image</label>
                    <input type="file" class="form-control" id="cover_image" name="cover_image">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-4">
            <button type="submit" class="custom-btn"><i class="fas fa-save"></i> Save Book</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
