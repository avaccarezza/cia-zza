<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Nombre: {{ $data['name'] }}</div>
        <div class="card-body">
            <h5 class="card-title">Asunto: {{ $data['subject'] }}</h5>
            <h5 class="card-title">Correo: {{ $data['email'] }}</h5>
            <p class="card-text">Mensaje: {!! nl2br($data['message']) !!}</p>
        </div>
    </div>

    <!-- Add Bootstrap JavaScript (jQuery and Popper.js are required) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
