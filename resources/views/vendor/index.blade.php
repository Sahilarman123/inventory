@extends('layouts.master')
@section('content')
<div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Vendors</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Email</th>
                                            <th>Search Terms</th>
                                            <th>Street</th>
                                            <th>House No.</th>
                                            <th>Postal Code</th>
                                            <th>City</th>
                                            <th>Country</th>
                                            <th>Bank Name</th>
                                            <th>Account Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sortable-table">
                                        @foreach($vendors as $ven)
                                        <tr>
                                            <td>{{$ven->name}}</td>
                                            <td>{{$ven->title}}</td>
                                            <td>{{$ven->email}}</td>
                                            <td>{{$ven->search_terms}}</td>
                                            <td>{{$ven->street}}</td>
                                            <td>{{$ven->house_no}}</td>
                                            <td>{{$ven->postal_code}}</td>
                                            <td>{{$ven->city}}</td>
                                            <td>{{$ven->country}}</td>
                                            <td>{{$ven->bank_name}}</td>
                                            <td>{{$ven->account_number}}</td>
                                            <td>
                                            <a href="#" class="btn btn-primary btn-circle btn-sm">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#" class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

                
                <script src="{{ asset('sortablejs/Sortable.min.js') }}"></script>

                <script>
                    $(document).ready(function() {
                        $('#dataTable').DataTable();
                    });
                </script>

                <script>
                // Initialize SortableJS on the tbody element
                var sortableTable = Sortable.create(document.getElementById('sortable-table'), {
                    handle: '.drag-handle', // Add a class to the column headers to act as the drag handle
                    onUpdate: function (event) {
                    // Get the updated order of the columns
                    var columnOrder = Array.from(event.to.children).map(function (item) {
                        return item.dataset.column;
                    });

                    // Send the updated order to the server via AJAX
                    axios.post('/update-column-order', { columnOrder: columnOrder })
                        .then(function (response) {
                        // Handle the response if needed
                        })
                        .catch(function (error) {
                        // Handle the error if needed
                        });
                    },
                });
                </script>
@endsection