<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Onlinexchange</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.2.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700&display=swap" rel="stylesheet">
        <!-- Main Css -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
    </head>

    <body>
        <!-- Hero Start -->
        <div style="margin-top: 50px;">
            <table cellpadding="0" cellspacing="0" style="font-family: Nunito, sans-serif; font-size: 15px; font-weight: 400; max-width: 600px; border: none; margin: 0 auto; border-radius: 6px; overflow: hidden; background-color: #fff; box-shadow: 0 0 3px rgba(60, 72, 88, 0.15);">
                <thead>
                    <tr style="background-color: #2f55d4; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;">
                        <th scope="col"><img src="images/logo-light.png" height="24" alt="">Onlinexchange</th>
                    </tr>
                    
                </thead>
    
                <tbody>
                    <tr style="background-color: #7a7b7c; padding: 3px 0; border: none; line-height: 68px; text-align: center; color: #fff; font-size: 24px; letter-spacing: 1px;">
                        <th scope="col"><img src="images/logo-light.png" height="24" alt="">{{ $mailrejet['title'] }}</th>
                    </tr>
                    <tr>
                        <td style="padding: 48px 24px 0; color: #161c2d; font-size: 18px; font-weight: 600;">
                            Hello, {{ $mailrejet['first_name_of_users'] }} {{ $mailrejet['last_name_of_users'] }}.
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 15px 24px 15px; color: #8492a6;">
                            Nous sommes désolé !!!
                            Votre compte sur <b>Onlinexchange</b> a été rejeté avec succès. 
                            Voici ci-dessous le(s) motif(s) du rejet:

                            <div class="card">
                                <div class="card-body" style="background-color: #9042e9; border-radius: 5px 5px 5px 5px;">
                                    <span style=" padding: 3px; border-radius: 5px 5px 5px 5px; text-align: center; color: #fff; font-size: 15px; letter-spacing: 1px;">
                                        {{ $mailrejet['motif'] }}
                                    </span>
                                </div>
                           </div>
                        </td>


                    </tr>
                    <tr>
                        <td style="padding: 15px 24px 15px; color: #8492a6;">
                            <b>Onlinexchange</b> <br> Support Team
                        </td>
                    </tr>
    
                    <tr>
                        <td style="padding: 16px 8px; color: #8492a6; background-color: #f8f9fc; text-align: center;">
                            © <script>document.write(new Date().getFullYear())</script> <b>Onlinexchange</b>.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Hero End -->
    </body>
</html>