@extends('layout.app')
@section('title', 'PaScan | Attendees')
@section('content')

<link rel="stylesheet" href="{{asset('css/attendees.css')}}">
@include('partials.sidebar')

<x-header-section>
    Attendees
</x-header-section>


<section id="main" class="main">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- New Student Button -->
        <button class="btn btn-add-student" data-bs-toggle="modal" data-bs-target="#addStudentAttendeesModal">
            <i class="fa-solid fa-user-plus"></i> Student
        </button>

    
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search">
            <button class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <!--NUMBER OF ENTRIES TO SHOW-->
    <div class="show-entries d-flex">
        <label for="entries">Show</label>
        <select id="entries" class="form-select mx-2" style="width: auto; font-size: 14px;">
            <option value="5">5</option>
            <option value="10" selected>10</option>
            <option value="15">15</option>
            <option value="20">20</option>
        </select>
        <label for="entries">entries</label>
    </div>

    <!--STUDENT INFO TABLE-->
    <table id="student_dataTable">
        <thead>
            <tr>
                <th class="text-center">Roll No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Grd/Yr Level</th>
                <th>Section</th>
                <th>Program</th>
                <th>Major</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="student_info">
            <tr>
                <td>hilary</td>
            </tr>
        </tbody>
    </table>
</section>

@include('posts.add-student-attendees')

<script>

    const data = []; 
    // Reference to table body
    const studenttableBody = document.querySelector("#student_dataTable tbody");

    function renderTable(data) {
        // Clear existing rows
        studenttableBody.innerHTML = "";

        if (data.length === 0) {
            // If no data, display "No data available"
            const noDataRow = document.createElement("tr");
            noDataRow.classList.add("no-data");
            noDataRow.innerHTML = `
                <td colspan="9">No data available</td>
            `;
            studenttableBody.appendChild(noDataRow);
        } else {
            // Populate table with data
            data.forEach(item => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${item.roll_no}</td>
                    <td>${item.first_name}</td>
                    <td>${item.last_name}<td>
                    <td>${item.department}</td>
                    <td>${item.grade_yr_lvl}</td>
                    <td>${item.section}</td>
                    <td>${item.program}</td>
                    <td>${item.major}</td>
                    <td>${item.action}</td>
                `;
                studenttableBody.appendChild(row);
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