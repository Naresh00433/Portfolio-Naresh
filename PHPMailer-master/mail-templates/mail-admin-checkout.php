<html>
  <head>
    <style type="text/css">
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 600px;
        background-color: #ffffff;
        margin: 40px auto;
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      }
      .header {
        background-color: #dc3545;
        color: #ffffff;
        padding: 18px;
        border-radius: 8px 8px 0 0;
        text-align: center;
        font-size: 22px;
      }
      .content {
        padding: 18px;
        font-size: 14px;
        line-height: 1.4;
        color: #333333;
      }
      .details {
        background-color: #f1f1f1;
        padding: 12px;
        border-radius: 4px;
        margin: 18px 0;
      }
      .details table {
        width: 100%;
        border-collapse: collapse;
      }
      .details table td {
        padding: 6px;
        border-bottom: 1px solid #dddddd;
      }
      .details table td.label {
        font-weight: bold;
        color: #555555;
        width: 40%;
      }
      .footer {
        padding: 12px;
        font-size: 11px;
        text-align: center;
        color: #777777;
        border-top: 1px solid #eeeeee;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        Employee Check-out Alert
      </div>
      <div class="content">
        <p>Dear Admin,</p>
        <p>
          An employee has checked out. Details are as follows:
        </p>
        <div class="details">
          <table>
            <tr>
              <td class="label">Employee ID:</td>
              <td><?php echo $employee_id; ?></td>
            </tr>
            <tr>
              <td class="label">Employee Name:</td>
              <td><?php echo $employee_name; ?></td>
            </tr>
            <tr>
              <td class="label">Check-out Time:</td>
              <td><?php echo date('h:i A', strtotime($check_out_time)); ?></td>
            </tr>
            <tr>
              <td class="label">Date:</td>
              <td><?php echo date('d M Y'); ?></td>
            </tr>
          </table>
        </div>
        <p>Best Regards,<br>Metric Vibes Management Team</p>
      </div>
      <div class="footer">
        &copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.
      </div>
    </div>
  </body>
</html>