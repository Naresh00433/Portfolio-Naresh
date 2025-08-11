<html>
  <head>
    <style type="text/css">
      body {
        font-family: Arial, sans-serif;
        background-color: #f6f6f6;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 600px;
        margin: 30px auto;
        background-color: #fff;
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }
      .header {
        background-color: #004aad;
        color: #fff;
        padding: 20px;
        border-radius: 8px 8px 0 0;
        font-size: 26px;
        text-align: center;
      }
      .content {
        padding: 30px 20px;
        font-size: 16px;
        color: #333;
        line-height: 1.6;
      }
      .content p {
        margin: 15px 0;
        font-size: 14px; /* Reduced paragraph font size */
      }
      .signature {
        margin-top: 30px;
      }
      .footer {
        padding: 15px 20px;
        font-size: 12px;
        color: #777;
        text-align: center;
        border-top: 1px solid #eee;
      }
      .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 20px 0;
        background-color: #004aad;
        color: white;
        text-decoration: none;
        border-radius: 4px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">
        Security Alert: Password Updated
      </div>
      <div class="content">
        <p>Dear <?php echo $UserFullName; ?>,</p>
        <p>
          We have noticed that your password for the account associated with
          <b><?php echo $employeeId; ?></b> (<strong><?php echo $recipientEmail; ?></strong>) was successfully updated on
          <strong><?php echo $changeDate; ?></strong>.
        </p>
        <p>
          If you did not authorize this change or have any concerns regarding your account security,
          please contact our support team immediately.
        </p>
        <p>
          To help keep your account secure, we also recommend reviewing your recent account
          activity and updating your security questions if needed.
        </p>
        <p>
          If you need any assistance or have questions, please click the button below to contact support.
        </p>
        <a href="mailto:admin@metricvibes.com?subject=Security%20Issue%20-%20Password%20Change" class="button"
          style="display:inline-block; padding:10px 20px; margin:20px 0; background-color:#004aad; color:white !important; text-decoration:none; border-radius:4px;">
          Contact Support
        </a>
        <p class="signature">
          Thank you for being a valued Metric Vibes member,<br>
          The Metric Vibes Management Team
        </p>
      </div>
      <div class="footer">
        &copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.
      </div>
    </div>
  </body>
</html>