@extends('layouts.admin')
@section('title','settings')
@section('content')

<div class=" py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient-primary text-white text-center rounded-top-4">
                    <h4 class="mb-0"><i class="bi bi-shield-lock-fill me-2"></i> Change Password</h4>
                </div>
                <div class="card-body p-4">
                    <form action="#" method="POST">
                        @csrf

                        <!-- Current Password -->
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter current password">
                            </div>
                        </div>

                        <!-- New Password -->
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-key"></i></span>
                                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter new password">
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm New Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-check2-circle"></i></span>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm new password">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow">
                                <i class="bi bi-arrow-repeat me-2"></i> Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
