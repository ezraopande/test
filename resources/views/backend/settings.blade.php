@extends('backend.layouts') 

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <!-- Custom tabs starts -->
                <div class="custom-tabs-container">

                    <!-- Nav tabs starts -->
                    <ul class="nav nav-tabs" id="customTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab-oneA" data-bs-toggle="tab" href="#oneA" role="tab" aria-controls="oneA" aria-selected="true">Personal Details</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-twoA" data-bs-toggle="tab" href="#twoA" role="tab" aria-controls="twoA" aria-selected="false">Notifications</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-threeA" data-bs-toggle="tab" href="#threeA" role="tab" aria-controls="threeA" aria-selected="false">Credit Cards</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab-fourA" data-bs-toggle="tab" href="#fourA" role="tab" aria-controls="fourA" aria-selected="false">Reset Password</a>
                        </li>
                    </ul>
                    <!-- Nav tabs ends -->

                    <!-- Tab content starts -->
                    <div class="tab-content h-300">
                        <div class="tab-pane fade show active" id="oneA" role="tabpanel">
                            <!-- Personal Details Form -->
                            <div class="row">
                                <div class="col-sm-3 col-12">
                                    <div class="mb-4">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-person"></i>
                                            </span>
                                            <input type="text" class="form-control" id="fullName" placeholder="Full name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12">
                                    <div class="mb-4">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-envelope"></i>
                                            </span>
                                            <input type="email" class="form-control" id="yourEmail" placeholder="Email ID" value="info@email.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12">
                                    <div class="mb-4">
                                        <label for="contactNumber" class="form-label">Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-phone"></i>
                                            </span>
                                            <input type="text" class="form-control" id="contactNumber" placeholder="Contact">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-12">
                                    <div class="mb-4">
                                        <label for="birthDay" class="form-label">DOB</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-calendar4"></i>
                                            </span>
                                            <input type="text" class="form-control" id="birthDay" placeholder="Date of Birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label" for="abt">About</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="bi bi-filter-circle"></i>
                                            </span>
                                            <textarea class="form-control" id="abt" rows="7" placeholder="About you"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="twoA" role="tabpanel">
                            <!-- Notifications Settings -->
                            <div class="row gx-5 align-items-center">
                                <div class="col-sm-4 col-12">
                                    <div class="p-3">
                                        <img src="assets/images/notifications.svg" alt="Notifications" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <ul class="list-group mb-4">
                                        @foreach(['Desktop', 'Email', 'Chat', 'New Message', 'New Follower', 'New Review', 'New Order'] as $notification)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $notification }} Notifications
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="switch{{ $loop->index + 1 }}" {{ $loop->index < 3 ? 'checked' : '' }} />
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="threeA" role="tabpanel">
                            <!-- Credit Cards Table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-outer mb-4">
                                        <div class="table-responsive">
                                            <table class="table truncate align-middle m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Bank Name</th>
                                                        <th>Card Number</th>
                                                        <th>Card Type</th>
                                                        <th>Expiry Date</th>
                                                        <th>Credit Balance</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($cards as $card)
                                                        <tr>
                                                            <td>{{ $card->bank_name }}</td>
                                                            <td>
                                                                <span class="badge {{ $card->badge_class }}">{{ $card->masked_number }}</span>
                                                            </td>
                                                            <td>{{ $card->type }}</td>
                                                            <td>{{ $card->expiry_date }}</td>
                                                            <td>${{ number_format($card->balance, 2) }}</td>
                                                            <td>
                                                                <div class="form-check form-switch m-0">
                                                                    <input class="form-check-input" type="checkbox" role="switch" id="cardActive{{ $loop->index + 1 }}" {{ $card->is_active ? 'checked' : '' }} />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="fourA" role="tabpanel">
                            <!-- Reset Password Form -->
                            <div class="row align-items-end">
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="p-3">
                                        <img src="assets/images/login.svg" alt="Contact Us" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="card border mb-3">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <label class="form-label" for="currentPwd">Current password <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input type="password" id="currentPwd" placeholder="Enter Current password" class="form-control">
                                                    <button class="btn btn-outline-light" type="button">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="newPwd">New Password <span class="text-danger">*</span></label>
                                                <input type="password" id="newPwd" placeholder="Enter New password" class="form-control">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="confirmPwd">Confirm New Password <span class="text-danger">*</span></label>
                                                <input type="password" id="confirmPwd" placeholder="Confirm New password" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content ends -->

                </div>
                <!-- Custom tabs ends -->

            </div>
        </div>
    </div>
</div>

@endsection
