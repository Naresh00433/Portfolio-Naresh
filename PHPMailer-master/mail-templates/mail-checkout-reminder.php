
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout Reminder</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 30px;">
    <div style="max-width: 500px; margin: auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px #eee; padding: 30px;">
        <h2 style="color: #d9534f;">⏰ Friendly Reminder</h2>
        <p>Dear <b>{{name}}</b>,</p>
        <p>Our records show you checked in today at <b>{{checkin_time}}</b> but have not checked out yet.</p>
        <p style="color: #d9534f;"><b>Please remember to check out before leaving.</b></p>
        <hr>
        <small style="color: #888;">This is an automated reminder from the HR system.</small>
    </div>
</body>
</html>