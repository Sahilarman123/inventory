@extends('layouts.master')
@section('content')
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-9 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Add Vendor</h1>
                                    </div>
                                    <form class="user" action="{{route('create_vendor')}}" method="POST">
                                        @csrf
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Search Terms" name="search_terms">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Street" name="street">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="House No." name="house_no">
                                        </div>
                                        
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Postel Code" name="postal_code">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="City" name="city">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Country" name="country">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Bank Name" name="bank_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Account Number" name="account_number">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" 
                                            placeholder="Password" name="password">
                                        </div>
                                        
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Create Vendor
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection