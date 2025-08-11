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
        font-size: 15px;
        line-height: 1.7;
        color: #333333;
      }
      .otp-box {
        background: #f1f8ff;
        border: 1px dashed #007bff;
        color: #007bff;
        font-size: 2rem;
        letter-spacing: 6px;
        text-align: center;
        padding: 18px 0;
        margin: 24px 0;
        border-radius: 8px;
        font-weight: bold;
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
        Password Reset Request
      </div>
      <div class="content">
        <p>Dear <?php echo htmlspecialchars($userFullName ?? 'User'); ?>,</p>
        <p>
          We received a request to reset your password for your Metric Vibes account.<br>
          Please use the following OTP to reset your password. This OTP is valid for 10 minutes.
        </p>
        <div class="otp-box">
          <?php echo htmlspecialchars($otp); ?>
        </div>
        <p>
          If you did not request a password reset, please ignore this email or contact support.
        </p>
        <p>
          <strong>Need help?</strong> Contact our support team at <a href="mailto:support@metricvibes.com">support@metricvibes.com</a>.
        </p>
        <p>Best Regards,<br>Metric Vibes Management Team</p>
      </div>
      <div class="footer">
        &copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.
      </div>
    </div>
  </body>
</html>