@extends('layout.app')
@section('title', 'PaScan | Event')

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

@section('content')

<link rel="stylesheet" href="{{ asset('css/event.css') }}">

@include('partials.sidebar')

<x-header-section>
    Event
</x-header-section>

<section id="main" class="main">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- New Officer Button -->
        <button class="btn btn-new-event" data-bs-toggle="modal" data-bs-target="#addEventModal">
            + New Event
        </button>

        <div class="search-container">
            <input 
                type="text" 
                class="search-input" 
                placeholder="Search"
                id="search_bar"
            >
            <button class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!--TABLE-->
    <div class="event-table">
        <table id="eventdataTable" class="display">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Event Name</th>
                    <th>Details</th>
                    <th>Officer Assigned</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="event-list">
                <tr>
                    <td>1</td>
                    <td>Intramurals</td>
                    <td>Description</td>
                    <td>Officer Name</td>
                    <td>Ongoing</td>
                    <td>Edit/Delete</td>
                </tr>
            </tbody>
        </table> 
    </div>
</section>

@include('posts.create-new-event-modal')

<script>
   $(document).ready(function () {
    if ($.fn.dataTable) { // Ensure DataTables is loaded
        $('#eventdataTable').DataTable({
            dom: 'lt<"d-flex justify-content-between mt-2"<"table-info"i><"table-pagination"p>>r',
            language: {
                lengthMenu: "Show _MENU_ entries"
            }
        });

        // Bind custom search
        $('.search-input').on('keyup', function () {
            $('#eventdataTable').DataTable().search(this.value).draw();
        });
    } else {
        console.error("DataTables library is not loaded.");
    }
});

</script>
@endsection
