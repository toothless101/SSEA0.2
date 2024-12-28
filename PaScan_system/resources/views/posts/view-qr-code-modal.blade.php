<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/attendees.css') }}">

<div class="modal fade" id="viewQRCodeModal" tabindex="-1" aria-labelledby="viewQRCodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewQRCodeModalLabel">QR Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
            <div class="modal-body">
            <div class="qr_preview">
                <div class="qr_code_img d-flex justify-content-center">
                    <img id="qr_output" alt="QR Code" src="{{asset('img/no-image-available.png')}}">
                </div>

            <div class="rollnumber">
                <div class="rollno d-flex justify-content-center mt-2">
                    <label for="rollno">Roll No</label>
                    
                </div>
                <div class="roll_number d-flex justify-content-center">
                    <h6>20242500001</h6>
                </div>
            </div>
            <div class="student_name">
                <div class="stud_title d-flex justify-content-center">
                    <label for="studentName">Name</label>
                </div>
                <div class="studentName d-flex justify-content-center mb-2">
                    <h6>Hilary Mae Poralan</h6>
                </div>
            </div>
            <div class="print d-flex justify-content-center">
                <button class="print_qr" data-bs-toggle="modal" data-bs-target="#viewQRCodeModal">
                    <i class="bi bi-printer-fill"></i>  Print</button>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>