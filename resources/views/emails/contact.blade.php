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
                            <td align="center">
                                <img src="http://geobizzweb.celatatech.com/assets/img/email_images/main_banner.png" alt="celataTech_main_banner" width="100%" height="280" style="display: block;" />
                            </td>
                        </tr>
                        <tr>
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

                        <tr>
                            <td bgcolor="#292dc2" style="padding: 30px 30px;">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-radius:8px;border-collapse: collapse;">
                                    <tr>
                                        <td style="color: #ffffff; font-size: 14px; line-height: 26px;">
                                            <p style="margin: 0;">
                                                Copyright &copy; 2023 GeoBizz
                                            </p>
                                        </td>
                                        <td align="right">
                                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="http://geobizzweb.celatatech.com/assets/img/logos/geobizz_logo.png" alt="geobizz_logo" width="130" height="45" style="display: block;" border="0" />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
