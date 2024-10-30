<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .paper {
            background-color: #ffffff;
            width: 8.5in;
            height: 11in;
            margin: 30px auto;
            padding: 1in;
            border: 1px solid #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
        }
        .header {
            border-bottom: 2px solid #000;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .header-left {
            text-align: left;
        }
        .header-left h1 {
            font-size: 32px;
            margin: 0;
        }
        .header-left p {
            font-size: 14px;
            margin: 5px 0;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .section-content {
            margin-bottom: 20px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
        }
        .info-table td {
            padding: 5px;
            vertical-align: top;
        }
        .signature {
            margin-top: 30px;
            text-align: center; /* Center the signature content */
        }
        .signature strong {
            display: block;
            margin-top: 30px; /* Increased margin for more space */
        }
        .signature p {
            margin: 15px 0; /* Added margin to the paragraph for spacing */
        }
    </style>
</head>
<body>

    <div class="paper">
        <div class="container">
            <div class="header">
                <h1>{{$data['name']}}</h1>
                <p>{{$data['address']}}</p>
                <p>{{$data['email']}}</p>
                <p>{{$data['contact']}}</p>
            </div>

            <div class="section">
                <h2 class="section-title">Objective</h2>
                <p class="section-content">
                {{$data['objective']}}
                </p>
            </div>

            <div class="section">
                <h2 class="section-title">Educational Attainment</h2>
                <div class="section-content">
                    <p><strong>Tertiary:</strong></p>
                    <p>{{$data['tertiary']}}<br>
                        <em>{{$data['tersy']}}</em></p>
                    <p><strong>Secondary:</strong></p>
                    <p>{{$data['secondary1']}}<br>
                        <em>{{$data['secsy1']}}</em></p>
                    <p>{{$data['secondary2']}}<br>
                        <em>{{$data['secsy2']}}</em></p>
                    <p><strong>Primary:</strong></p> 
                    <p>{{$data['primary']}}<br>
                        <em>{{$data['prisy']}}</em></p>
                </div>
            </div>

            <div class="section">
                <h2 class="section-title">Personal Information</h2>
                <table class="info-table">
                    <tr>
                        <td><strong>Date of Birth:</strong></td>
                        <td>{{$data['birthdate']}}</td>
                    </tr>
                    <tr>
                        <td><strong>Age:</strong></td>
                        <td>{{$data['age']}}</td>
                    </tr>
                    <tr>
                        <td><strong>Place of Birth:</strong></td>
                        <td>{{$data['placeofbirth']}}</td>
                    </tr>
                    <tr>
                        <td><strong>Gender:</strong></td>
                        <td>{{$data['gender']}}</td>
                    </tr>
                    <tr>
                        <td><strong>Religion:</strong></td>
                        <td>{{$data['religion']}}</td>
                    </tr>
                    <tr>
                        <td><strong>Nationality:</strong></td>
                        <td>{{$data['nationality']}}</td>
                    </tr>
                    <tr>
                        <td><strong>Civil Status:</strong></td>
                        <td>{{$data['civilstatus']}}</td>
                    </tr>
                </table>
            </div>

            <div class="signature">
                <p>I hereby certify that the above information is true and correct to the best of my knowledge and belief.</p>
                <p><strong>{{$data['signature']}}</strong><br>Student</p>
            </div>
        </div>
    </div>

</body>
</html>