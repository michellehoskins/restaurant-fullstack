@extends('layouts.app')

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Sign Up To Receive Notifications for Deals</h1>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="firstNameInput">First Name</label>
                                    <input type="fname" class="form-control" name="text" id="firstNameInput" placeholder="John">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastNameInput">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="lastNameInput" placeholder="Doe">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="emailInput">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneInput">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="555-555-5555">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>In signing up I acknowledge that I am 18 years of age or older, want to receive email offers from Billy's Burgers and, if I select to join Dine Rewards, agree to the terms and conditions of the program.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection