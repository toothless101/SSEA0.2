@extends('layout.app')
@section('title', 'PaScan | Officers')
@section('content')

<link rel="stylesheet" href="{{ asset('css/officers.css') }}">
@include('partials.sidebar')
@include('partials.header')
    <section id="main" class="main">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- New Officer Button -->
            <button class="btn btn-new-officer" data-bs-toggle="modal" data-bs-target="#addOfficerModal">
                + New Officer
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
        <table id="dataTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Edit</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody id="assigned_officer">
                <tr>
                    <td id="name-clm">Hilary Mae Poralan</td>
                    <td>VIce President</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </section>
 
@include('posts.add-officer-modal') <!--ADD NEW OFFICER MODAL-->
    
    <script>
        // Sample data (empty array initially)
        const data = []; // Populate with data dynamically, e.g., [{ name: "John", position: "Manager" }]

        // Reference to table body
        const tableBody = document.querySelector("#dataTable tbody");

        function renderTable(data) {
            // Clear existing rows
            tableBody.innerHTML = "";

            if (data.length === 0) {
                // If no data, display "No data available"
                const noDataRow = document.createElement("tr");
                noDataRow.classList.add("no-data");
                noDataRow.innerHTML = `
                    <td colspan="4">No data available in table</td>
                `;
                tableBody.appendChild(noDataRow);
            } else {
                // Populate table with data
                data.forEach(item => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${item.name}</td>
                        <td>${item.position}</td>
                        <td>${item.edit}<td>
                        <td>${item.status}</td>
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
<!-- Bootstrap JavaScript Bundle -->


@endsection

