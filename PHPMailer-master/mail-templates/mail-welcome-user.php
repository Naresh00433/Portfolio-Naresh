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
        background-color: #ffffff;
        margin: 40px auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      }
      .header {
        background-color: #007bff;
        color: #ffffff;
        padding: 20px;
        border-radius: 8px 8px 0 0;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
      }
      .content {
        padding: 20px;
        font-size: 14px;
        line-height: 1.6;
        color: #333333;
      }
      .content p {
        margin: 0 0 10px;
      }
      .content ul {
        list-style: none;
        padding-left: 0;
      }
      .content ul li {
        background: #f9f9f9;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 4px;
      }
      .content ul li strong {
        display: inline-block;
        width: 150px;
      }
      .content ol {
        padding-left: 20px;
      }
      .footer {
        padding: 15px;
        font-size: 12px;
        text-align: center;
        color: #777777;
        border-top: 1px solid #eeeeee;
        border-radius: 0 0 8px 8px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        Congratulations & Welcome to Metric Vibes!
      </div>
      <div class="content">
        <p>Dear <?php echo $newUserFullName; ?>,</p>
        <p>
          Congratulations on becoming a member of Metric Vibes as a <?php echo $designation; ?>! 
          Your journey with us begins here.
        </p>
        <p>Here are your important details:</p>
        <ul>
          <li><strong>Name:</strong> <?php echo $newUserFullName; ?></li>
          <li><strong>Employee ID:</strong> <?php echo $employee_id; ?></li>
          <li><strong>Work Email:</strong> <?php echo $newUserEmail; ?></li>
          <li><strong>Designation:</strong> <?php echo $designation; ?></li>
          <li><strong>Department:</strong> <?php echo $department; ?></li>
          <li><strong>Date of Joining:</strong> <?php echo date('d M Y', strtotime($doj)); ?></li>
          <li><strong>Registration Date:</strong> <?php echo isset($registration_date) ? $registration_date : date('d M Y'); ?></li>
          <li><strong>Default Password:</strong> MetricVibes@2025</li>
        </ul>
        <p>
          <strong>Next Steps:</strong>
          <ol>
            <li>Login with your work email</li>
            <li>Change your default password from the dashboard</li>
            <li>Complete your full profile</li>
          </ol>
        </p>
        <p>We're excited to have you on board!</p>
        <p>Best Regards,<br>Metric Vibes Management Team</p>
      </div>
      <div class="footer">
        &copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.
      </div>
    </div>
  </body>
</html>