@extends('layouts.app')

@section('content')

<style>
    .main-container {
            width: 100%;
            margin: 100px 0px;
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .profile-container {
            width: 80%;
            max-width: 1200px;
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-picture {
            width: 212px;
            height: 212px;
            border-radius: 50%;
            overflow: hidden;
            background-image: url('img/a1.jpeg');
            background-size: cover;
            margin: 0 auto;
        }
        .profile-info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .profile-info div {
            flex: 1;
            text-align: center;
        }
        .profile-info div span {
            display: block;
            color: #1E1E1E;
            font-size: 16px;
            font-weight: 700;
        }
        .profile-info div p {
            color: #6A6A6A;
            font-size: 16px;
            font-weight: 700;
        }
        .divider {
            width: 100%;
            height: 3px;
            background: black;
            margin: 20px 0;
        }
        .barcode-container {
             margin-top: 20px;
             text-align: center;
            }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .modal-dialog-centered {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal-body {
            text-align: center;
        }
</style>

    <div class="main-container">
        <div class="profile-container">
            <div class="header">
                <h1>Student Profile</h1>
             </div>
            <div class="profile-picture"></div>
            <div class="profile-info">
                <div>
                    <span>FULL NAME</span>
                    <p>Zeinice Eugene Asprer</p>
                </div>
                <div>
                    <span>CONTACT NUMBER</span>
                    <p>09*********</p>
                </div>
                <div>
                    <span>EMAIL</span>
                    <p>Asprer_Zeinice@*******</p>
                </div>
                <div>
                    <span>STUDENT NUMBER</span>
                    <p>04-22-300296</p>
                </div>
            </div>
            <div class="divider"></div>
            <div class="profile-info">
                <div>
                    <span>BIRTHDAY</span>
                    <p>June 17, 2001</p>
                </div>
                <div>
                    <span>ADDRESS</span>
                    <p>Amby Anastacia</p>
                </div>
            </div>
        </div>
    </div>
    <div class="barcode-container">
        <button class="btn" data-bs-toggle="modal" data-bs-target="#barcodeModal">Generate Barcode</button>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="barcodeModal" tabindex="-1" aria-labelledby="barcodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="barcodeModalLabel">Student Barcode</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <svg id="barcode"></svg>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>


<script>
function generateBarcode() {
    const studentNumber = "04-22-300296"; // Replace with dynamic student number
    JsBarcode("#barcode", studentNumber, {
        format: "CODE128",
        displayValue: true,
        fontSize: 18
    });
}

// Trigger barcode generation when the modal is shown
document.getElementById('barcodeModal').addEventListener('shown.bs.modal', generateBarcode);
</script>




@endsection
