@extends('layout.app')
@section('title', 'Event')
@section('content')

<link rel="stylesheet" href="{{ asset('css/event.css') }}">

@include('partials.sidebar')
@include('partials.header')
@section('page_name', 'Event')

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
                <th>Event Name</th>
                <th>Status</th>
                <th>Date</th>
                <th>Time</th>
                <th>Officer Assigned</th>
            </tr>
        </thead>

        <tbody id="event-list">
            <tr>
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
                <td colspan="5">No data available in table</td>
            `;
            tableBody.appendChild(noDataRow);
        } else {
            // Populate table with data
            data.forEach(item => {
                const row = document.createElement("tr");
                row.innerHTML = `
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