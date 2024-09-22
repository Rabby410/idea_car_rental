<!DOCTYPE html>
<html>
<head>
    <title>Booking Canceled</title>
</head>
<body>
<h1>Your Booking Has Been Canceled</h1>
<p>Dear {{ $rental->user->name }},</p>
<p>We regret to inform you that your booking for the car {{ $rental->car->name }} has been canceled due to some issues with the booking.</p>
<p>Please contact our support team for further assistance.</p>
<p>Thank you for your understanding.</p>
</body>
</html>
