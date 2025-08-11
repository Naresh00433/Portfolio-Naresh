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
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      }
      .header {
        padding: 20px;
        border-radius: 8px 8px 0 0;
        font-size: 24px;
        text-align: center;
        color: #fff;
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
    </style>
  </head>
  <body>
    <?php
      // Determine header color and status text
      if ($status === 'approved') {
          $headerColor = "#28a745";  // Green for approved
          $statusText = "Approved";
      } elseif ($status === 'declined') {
          $headerColor = "#dc3545";  // Red for declined
          $statusText = "Declined";
      } else {
          $headerColor = "#ffc107";  // Orange/yellow for other statuses
          $statusText = ucfirst($status);
      }
    ?>
    <div class="container">
      <div class="header" style="background-color: <?php echo $headerColor; ?>;">
        Leave Request <?php echo $statusText; ?>
      </div>
      <div class="content">
        <p>Dear <?php echo $UserFullName; ?>,</p>
        <p>Your leave request submitted on <?php echo $appliedDate; ?> has been <strong><?php echo $statusText; ?></strong>.</p>
        <div class="details">
          <table>
            <tr>
              <td class="label">Employee ID:</td>
              <td><?php echo $employeeId; ?></td>
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
          </table>
        </div>
        <p>If you have any questions or concerns regarding this decision, please contact our support team.</p>
        <p>Best Regards,<br>Metric Vibes Management Team</p>
      </div>
      <div class="footer">
        &copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.
      </div>
    </div>
  </body>
</html>