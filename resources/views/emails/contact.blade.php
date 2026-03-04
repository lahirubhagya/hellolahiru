<strong>Message: </strong>{{ $data->user_query }} <br><br>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Hello | Lahiru</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style type="text/css">
            a[x-apple-data-detectors] {color: inherit !important;}
        </style>
    </head>
    <body style="margin: 0; padding: 0;font-family: Poppins !important;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td style="padding: 20px 0 30px 0;">

                    <table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
                        <tr>
                            <!-- Header -->
                            <tr>
                                <td bgcolor="#111111" style="padding: 36px 40px 28px 40px; text-align: center;">
                                    <a href="https://hellolahiru.up.railway.app" style="display: inline-block;">
                                        <img src="https://hellolahiru.up.railway.app/assets/images/logo/logo_full_dark.png"
                                             alt="hellolahiru" width="140" style="display: block; margin: 0 auto;" />
                                    </a>
                                </td>
                            </tr>

                            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:ghostwhite;border-radius:8px;width:100% !important;color: white; font-size: 14px;line-height: 26px;border-collapse: collapse;">
                                    <tr>
                                        <td style="padding-left: 10px !important;color: #153643;">
                                            <h1 style="font-size: 20px; margin: 0;">Contact details</h1>
                                        </td><br><br>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 10px !important;color: #153643; font-size: 16px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                Sender name
                                            </p>
                                        </td>
                                        <td style="padding-right: 10px !important;padding-left: 10px !important;color: #153643; font-size: 14px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                - {{ $data->name }}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left: 10px !important;color: #153643; font-size: 16px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                Sender email
                                            </p>
                                        </td>
                                        <td style="padding-right: 10px !important;padding-left: 10px !important;color: #153643; font-size: 14px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                - {{ $data->email }}
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="padding-left: 10px !important;color: #153643; font-size: 16px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                Subject
                                            </p>
                                        </td>
                                        <td style="padding-right: 10px !important;padding-left: 10px !important;color: #153643; font-size: 14px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                - {{ $data->subject }}
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="padding-left: 10px !important;color: #153643; font-size: 16px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                Sender mobile/telephone
                                            </p>
                                        </td>
                                        <td style="padding-right: 10px !important;padding-left: 10px !important;color: #153643; font-size: 14px; line-height: 26px; ">
                                            <p style="margin: 0;">
                                                - {{ $data->phone }}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <td bgcolor="#ffffff" style="padding: 40px 40px 40px 40px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color:ghostwhite;padding:40px 40px 40px 40px;border-radius:8px;width:100% !important;color: #153643; font-size: 14px;line-height: 26px;border-collapse: collapse;text-align: justify!important;" >
                                <tr>
                                    <td style="padding-top:10px !important;padding-left: 10px !important;color: #153643; font-size: 18px; line-height: 26px;">
                                        <h1 style="font-size: 20px; margin: 0;">User message</h1>
                                    </td>
                                </tr><br>
                                <tr>
                                    <td style="padding-left: 10px !important;padding-right: 10px !important;">
                                        <p style="margin: 0;">
                                            {{ $data->message }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>

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
                </td>
            </tr>
        </table>
    </body>
</html>
