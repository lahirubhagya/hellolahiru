<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Message Received | Lahiru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
        a[x-apple-data-detectors] { color: inherit !important; }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: 'Poppins', Arial, sans-serif;">

<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td style="padding: 40px 0;">

            <!-- Outer wrapper -->
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600"
                   style="border-collapse: collapse; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.10);">

                <!-- Header -->
                <tr>
                    <td bgcolor="#111111" style="padding: 36px 40px 28px 40px; text-align: center;">
                        <a href="https://hellolahiru.up.railway.app" style="display: inline-block;">
                            <img src="https://hellolahiru.up.railway.app/assets/images/logo/logo_full_dark.png"
                                 alt="hellolahiru" width="240" style="display: block; margin: 0 auto;" />
                        </a>
                    </td>
                </tr>

                <!-- Orange accent bar -->
                <tr>
                    <td bgcolor="#F68338" style="height: 4px; font-size: 0; line-height: 0;">&nbsp;</td>
                </tr>

                <!-- Divider -->
                <tr>
                    <td bgcolor="#ffffff" style="padding: 0 40px;">
                        <div style="border-top: 1px solid #eeeeee;"></div>
                    </td>
                </tr>

                <!-- Summary of what they sent -->
                <tr>
                    <td bgcolor="#ffffff" style="padding: 32px 40px 40px 40px;">
                        <p style="margin: 0 0 20px 0; font-size: 13px; letter-spacing: 2px; text-transform: uppercase; color: #999999; font-weight: 600;">
                            Your Message Summary
                        </p>

                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                               style="background-color: #f9f9f9; border-radius: 8px; border-collapse: collapse;">
                            <tr>
                                <td style="padding: 14px 20px; border-bottom: 1px solid #eeeeee;">
                                    <span style="font-size: 12px; color: #999; display: block; margin-bottom: 2px;">NAME</span>
                                    <span style="font-size: 15px; color: #111111; font-weight: 600;">{{ $data->name }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 14px 20px; border-bottom: 1px solid #eeeeee;">
                                    <span style="font-size: 12px; color: #999; display: block; margin-bottom: 2px;">SUBJECT</span>
                                    <span style="font-size: 15px; color: #111111; font-weight: 600;">{{ $data->subject }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 14px 20px; border-bottom: 1px solid #eeeeee;">
                                    <span style="font-size: 12px; color: #999; display: block; margin-bottom: 2px;">YOUR EMAIL</span>
                                    <span style="font-size: 15px; color: #111111;">{{ $data->email }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 14px 20px; border-bottom: 1px solid #eeeeee;">
                                    <span style="font-size: 12px; color: #999; display: block; margin-bottom: 2px;">YOUR PHONE</span>
                                    <span style="font-size: 15px; color: #111111;">{{ $data->phone }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 14px 20px;">
                                    <span style="font-size: 12px; color: #999; display: block; margin-bottom: 6px;">YOUR MESSAGE</span>
                                    <span style="font-size: 14px; color: #444444; line-height: 1.7; display: block;">{{ $data->message }}</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td bgcolor="#111111" style="padding: 28px 40px; text-align: center;">
                        <p style="margin: 0; font-size: 12px; color: #555555;">
                            &copy; {{ date('Y') }} hellolahiru &nbsp;&middot;&nbsp;
                            <a href="mailto:gunawardhanalahiru21@gmail.com" style="color: #F68338; text-decoration: none;">
                                gunawardhanalahiru21@gmail.com
                            </a>
                        </p>
                    </td>
                </tr>

            </table>
            <!-- End outer wrapper -->

        </td>
    </tr>
</table>

</body>
</html>
