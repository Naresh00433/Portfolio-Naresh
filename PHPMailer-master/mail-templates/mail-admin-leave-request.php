<html>

<head>
  <style type="text/css">
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      background-color: #fff;
      margin: 30px auto;
      padding: 20px 30px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .header {
      background-color:rgb(45, 0, 168);
      color: #fff;
      padding: 20px;
      border-radius: 8px 8px 0 0;
      font-size: 24px;
      text-align: center;
    }

    .content {
      padding: 20px;
      font-size: 15px;
      line-height: 1.6;
      color: #333;
    }

    .content p {
      margin: 14px 0;
    }

    .details {
      background: #f9f9f9;
      padding: 15px;
      border-radius: 4px;
      margin: 20px 0;
    }

    .details table {
      width: 100%;
      border-collapse: collapse;
    }

    .details table td {
      padding: 8px;
      vertical-align: top;
      border-bottom: 1px solid #ddd;
    }

    .details table td.label {
      font-weight: bold;
      color: #555;
      width: 40%;
    }

    .footer {
      padding: 15px;
      font-size: 12px;
      text-align: center;
      color: #777;
      border-top: 1px solid #ddd;
    }

    .button {
      display: inline-block;
      margin: 20px 0;
      padding: 10px 20px;
      background-color: rgb(45, 0, 168);
      color: white !important;
      text-decoration: none;
      border-radius: 4px;
      font-size: 15px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="header">
      New Leave Request Alert
    </div>
    <div class="content">
      <p>Dear Admin,</p>
      <p>A new leave request has been submitted and requires your review and action. Below are the details of the
        request:</p>
      <div class="details">
        <table>
          <tr>
            <td class="label">Employee ID:</td>
            <td><?php echo $employeeId; ?></td>
          </tr>
          <tr>
            <td class="label">Employee Name:</td>
            <td><?php echo $UserFullName; ?></td>
          </tr>
          <tr>
            <td class="label">Leave Type:</td>
            <td><?php echo ucfirst($leave_type); ?></td>
          </tr>
          <tr>
            <td class="label">Day Type:</td>
            <td><?php echo ucfirst($day_type); ?></td>
          </tr>
          <tr>
            <td class="label">Start Date:</td>
            <td><?php echo date('d M Y', strtotime($start_date)); ?></td>
          </tr>
          <tr>
            <td class="label">End Date:</td>
            <td><?php echo date('d M Y', strtotime($end_date)); ?></td>
          </tr>
          <tr>
            <td class="label">Reason:</td>
            <td><?php echo nl2br(htmlspecialchars($leave_reason)); ?></td>
          </tr>
          <tr>
            <td class="label">Applied On:</td>
            <td><?php echo $appliedDate; ?></td>
          </tr>
        </table>
      </div>
      <p>Please review this leave request at your earliest convenience.</p>
      <a href="https://management.metricvibes.com/leave-requests"
        class="button" style="color:white !important;">Take Review</a>
      <p>Thank you for your prompt attention.</p>
      <p>Best Regards,<br>Metric Vibes Management Team</p>
    </div>
    <div class="footer">
      &copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.
    </div>
  </div>
</body>

</html>