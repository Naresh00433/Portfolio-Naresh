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
        background-color: #28a745;
        color: #ffffff;
        padding: 18px;
        border-radius: 8px 8px 0 0;
        text-align: center;
        font-size: 22px; /* Reduced from 24px */
      }
      .content {
        padding: 18px;
        font-size: 14px; /* Reduced from 16px */
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
        font-size: 11px; /* Reduced from 12px */
        text-align: center;
        color: #777777;
        border-top: 1px solid #eeeeee;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        New Employee Added
      </div>
      <div class="content">
        <p>Dear Admin,</p>
        <p>
          A new employee has been added to Metric Vibes Management. Kindly review the details below:
        </p>
        <div class="details">
          <table>
            <tr>
              <td class="label">Employee ID:</td>
              <td><?php echo $employee_id; ?></td>
            </tr>
            <tr>
              <td class="label">Employee Name:</td>
              <td><?php echo $newUserFullName; ?></td>
            </tr>
            <tr>
              <td class="label">Email:</td>
              <td><?php echo $newUserEmail; ?></td>
            </tr>
            <tr>
              <td class="label">Department:</td>
              <td><?php echo $department; ?></td>
            </tr>
            <tr>
              <td class="label">Designation:</td>
              <td><?php echo $designation; ?></td>
            </tr>
            <tr>
              <td class="label">Date of Joining:</td>
              <td><?php echo date('d M Y', strtotime($doj)); ?></td>
            </tr>
            <tr>
              <td class="label">Registration Date:</td>
              <td><?php echo isset($registration_date) ? $registration_date : date('d M Y'); ?></td>
            </tr>
          </table>
        </div>
        <p>
          Please review this new entry in the admin panel at your earliest convenience.
        </p>
        <p>Best Regards,<br>Metric Vibes Management Team</p>
      </div>
      <div class="footer">
        &copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.
      </div>
    </div>
  </body>
</html>