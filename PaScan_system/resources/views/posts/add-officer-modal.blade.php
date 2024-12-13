<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/officers.css') }}">

<div class="modal fade" id="addOfficerModal" tabindex="-1" aria-labelledby="addOfficerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOfficerModalLabel">Add New Officer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Profile Icon -->
                <img src="{{asset('img/officer-icon.png')}}" alt="Officer Icon">
                <!-- Form Fields -->
                <form id="addOfficer">
                    <div class="row mt-3">
                        <div class="form-group col-md-6 mb-3">
                            <input type="text" id="firstName" class="form-control">
                            <label for="firstName" class="form-label">First Name</label>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <input type="text" id="middleName" class="form-control">
                            <label for="middleName" class="form-label">Middle Name</label>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <input type="text" id="lastName" class="form-control">
                            <label for="lastName" class="form-label">Last Name</label>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <input type="text" id="position" class="form-control">
                            <label for="position" class="form-label">Position</label>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <input type="text" id="username" class="form-control">
                            <label for="username" class="form-label">Username</label>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <input type="password" id="password" class="form-control">
                            <label for="password" class="form-label">Password</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-submit">Submit</button>
            </div>
        </div>
    </div>
    
</div>   

<!--SUCCESS MODAL
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-body">
                <!-- Success Icon 
                <div class="mb-3">
                    <div class="success-icon d-flex justify-content-center align-items-center mx-auto">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>
                </div>-->
                <!-- Success Message 
                <h3 class="fw-bold text-uppercase text-success">Success</h3>
                <p class="mt-2">Officer Successfully Added</p>-->
                <!-- OK Button
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>-->

<script>
    // Handle form submission
    document.getElementById('addOfficerForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);
        const data = Object.fromEntries(formData.entries());
        
        // Here you can send the data to your backend via an AJAX call
        console.log('New Officer Data:', data);

        // Close modal and reset form
        const modal = bootstrap.Modal.getInstance(document.getElementById('addOfficerModal'));
        modal.hide();
        this.reset();
    });
</script>
