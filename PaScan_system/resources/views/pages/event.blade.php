@extends('layout.app')
@section('title', 'PaScan | Event')
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
    <table id="eventdataTable">
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

</section>

@include('posts.create-new-event-modal')



<script>
    // Sample data (empty array initially)
    const data = []; // Populate with data dynamically, e.g., [{ name: "John", position: "Manager" }]

    // Reference to table body
    const tableBody = document.querySelector("#eventdataTable tbody");

    function renderTable(data) {
        // Clear existing rows
        tableBody.innerHTML = "";

        if (data.length === 0) {
            // If no data, display "No data available"
            const noDataRow = document.createElement("tr");
            noDataRow.classList.add("no-data");
            noDataRow.innerHTML = `
                <td colspan="6">No data available in table</td>
            `;
            tableBody.appendChild(noDataRow);
        } else {
            // Populate table with data
            data.forEach(item => {
                const row = document.createElement("tr");
                row.innerHTML = 
                `   
                    <td>${item.no}
                    <td>${item.event-name}</td>
                    <td>${item.status}</td>
                    <td>${item.date}<td>
                    <td>${item.time}</td>
                    <td>${item.officer_assigned}</td>
                `;
                tableBody.appendChild(row);
            });
        }
    }

    // Initial render
    renderTable(data);

    
    // Example of adding data dynamically
    // Uncomment this block to simulate data addition
    /*
    setTimeout(() => {
        data.push({ name: "Jane Doe", position: "Developer" });
        data.push({ name: "John Smith", position: "Designer" });
        renderTable(data);
    }, 3000);
    */
    // Initialize Bootstrap modal


    
</script>
@endsection