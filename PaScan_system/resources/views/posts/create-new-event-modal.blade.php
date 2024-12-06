<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Datepicker CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="{{asset('css/event.css')}}">

<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Add New Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addEvent">
                    <div class="row mt-1">
                        <!-- Event Name -->
                        <div class="form-group col-md-6 mb-3">
                            <input type="text" id="eventName" class="form-control">
                            <label for="eventName" class="form-label">Event Name</label>
                        </div>

                        <!-- Date of Event -->
                        <div class="form-group col-md-6 mb-3">
                            <div class="input-group">
                                <input type="text" id="date-of-an-event" class="form-control datepicker">
                                <button class="btn btn-outline-secondary" type="button" id="datepicker-trigger">
                                    <i class="bi bi-calendar2-event"></i>
                                </button>
                            </div>
                            <label for="date-of-an-event" class="form-label">Date of an Event</label>
                        </div>

                        <!-- Event Place -->
                        <div class="form-group col-md-6 mb-3">
                            <input type="text" id="eventPlace" class="form-control">
                            <label for="eventPlace" class="form-label">Event Place</label>
                        </div>

                        <!-- Event Type -->
                        <div class="form-group col-md-6 mb-3">
                            <select id="eventType" class="form-select">
                                <option selected disabled>Select an Event Type</option>
                                <option value="1">Wholeday</option>
                                <option value="2">Half-Day Morning</option>
                                <option value="3">Half-Day Afternoon</option>
                                <option value="4">Other</option>
                            </select>
                            <label for="eventType" class="form-label">Event Type</label>
                        </div>
                    </div>

                    <!-- Morning Schedule -->
                    <div class="row time-schedule">
                        <div class="col-md-6 mb-3 event-type">
                            <h6 class="sched_type fw-500">Morning Schedule</h6>
                            <div class="row g-3">
                                <div class="form-group row mt-3">
                                    <div class="input-group">
                                        <div class="cs-form">
                                            <input type="time" class="form-control" />
                                          </div>
                                    </div>
                                    <label for="morningStartTime" class="form-label">Start Time</label>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="input-group">
                                        <div class="cs-form">
                                            <input type="time" class="form-control" />
                                          </div>
                                    </div>
                                    <label for="morningEndTime" class="form-label">End Time</label>
                                </div>
                            </div>
                        </div>

                        <!-- Afternoon Schedule -->
                        <div class="col-md-6 mb-3 event-type">
                            <h6 class="sched_type fw-500">Afternoon Schedule</h6>
                            <div class="row g-3">
                                <div class="form-group row mt-3">
                                    <div class="input-group">
                                        <div class="cs-form">
                                            <input type="time" class="form-control" />
                                          </div>
                                    </div>
                                    <label for="afternoonStartTime" class="form-label">Start Time</label>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="input-group">
                                        <div class="cs-form">
                                            <input type="time" class="form-control" />
                                          </div>
                                    </div>
                                    <label for="afternoonEndTime" class="form-label">End Time</label>
                                </div>
                            </div>
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

<!-- Bootstrap and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize the datepicker
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            autoclose: true,
            todayHighlight: true
        });

        // Trigger the datepicker on calendar icon click
        $('#datepicker-trigger').click(function () {
            $('#date-of-an-event').focus();
        });

    
    });
</script>
