<html>
  <head>
    <style type="text/css">
      body { font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 0; }
      .container { max-width: 600px; background-color: #fff; margin: 40px auto; padding: 20px 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
      .header { background-color: #007bff; color: #fff; padding: 18px; border-radius: 8px 8px 0 0; text-align: center; font-size: 22px; }
      .content { padding: 18px; font-size: 14px; line-height: 1.4; color: #333; }
      .details { background-color: #f1f1f1; padding: 12px; border-radius: 4px; margin: 18px 0; }
      .details table { width: 100%; border-collapse: collapse; }
      .details table td { padding: 6px; border-bottom: 1px solid #ddd; }
      .details table td.label { font-weight: bold; color: #555; width: 40%; }
      .footer { padding: 12px; font-size: 11px; text-align: center; color: #777; border-top: 1px solid #eee; }
      .status-approved { color: #28a745; }
      .status-rejected { color: #dc3545; }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="header">Expense Request Status Update</div>
      <div class="content">
        <p>Dear <?php echo $employee_name; ?>,</p>
        <p>Your expense request has been <span class="status-<?php echo strtolower($status); ?>"><?php echo $status; ?></span>.</p>
        <div class="details">
          <table>
            <tr><td class="label">Request ID:</td><td><?php echo $expense_id; ?></td></tr>
            <tr><td class="label">Subject:</td><td><?php echo $subject; ?></td></tr>
            <tr><td class="label">Amount:</td><td><?php echo number_format($amount, 2); ?></td></tr>
            <tr><td class="label">Status:</td><td class="status-<?php echo strtolower($status); ?>"><?php echo $status; ?></td></tr>
            <tr><td class="label">Updated On:</td><td><?php echo date('d M Y h:i A'); ?></td></tr>
          </table>
        </div>
        <p>Best Regards,<br>Metric Vibes Management Team</p>
      </div>
      <div class="footer">&copy; <?php echo date("Y"); ?> Metric Vibes Management. All rights reserved.</div>
    </div>
  </body>
</html>