<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/png" href="images/fi.png"/>
</head>

<body>

    <?php
        require_once "utils/connection.php";
        require_once "utils/login_methods.php";
        require_once "utils/functions.php";

        if(isLogged()){ ?>

            <script type="text/javascript">
                window.location.href = 'index.php';
            </script>
        <?php
            }
        
    ?>



<?php

              $from = "skyders87@gmail.com";
              $headers = "From: " . $from . "\r\n";
                        $headers .= "Reply-To: ". $from . "\r\n";
                        $headers .= "CC: aasd\r\n";
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
                        $subject = "< Registo - Skyders >";
                        $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
                         <head> 
                          <meta charset='UTF-8'> 
                          <meta content='width=device-width, initial-scale=1' name='viewport'> 
                          <meta name='x-apple-disable-message-reformatting'> 
                          <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
                          <meta content='telephone=no' name='format-detection'> 
                          <title>Novo modelo de e-mail 2021-05-06</title> 
                          <!--[if (mso 16)]>
                            <style type='text/css'>
                            a {text-decoration: none;}
                            </style>
                            <![endif]--> 
                          <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
                          <!--[if gte mso 9]>
                        <xml>
                            <o:OfficeDocumentSettings>
                            <o:AllowPNG></o:AllowPNG>
                            <o:PixelsPerInch>96</o:PixelsPerInch>
                            </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]--> 
                          <style type='text/css'>
                        #outlook a {
                            padding:0;
                        }
                        .ExternalClass {
                            width:100%;
                        }
                        .ExternalClass,
                        .ExternalClass p,
                        .ExternalClass span,
                        .ExternalClass font,
                        .ExternalClass td,
                        .ExternalClass div {
                            line-height:100%;
                        }
                        .es-button {
                            mso-style-priority:100!important;
                            text-decoration:none!important;
                        }
                        a[x-apple-data-detectors] {
                            color:inherit!important;
                            text-decoration:none!important;
                            font-size:inherit!important;
                            font-family:inherit!important;
                            font-weight:inherit!important;
                            line-height:inherit!important;
                        }
                        .es-desk-hidden {
                            display:none;
                            float:left;
                            overflow:hidden;
                            width:0;
                            max-height:0;
                            line-height:0;
                            mso-hide:all;
                        }
                        [data-ogsb] .es-button {
                            border-width:0!important;
                            padding:10px 40px 10px 40px!important;
                        }
                        [data-ogsb] .es-button.es-button-1 {
                            padding:10px 5px!important;
                        }
                        @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:40px!important; text-align:center; line-height:120% } h2 { font-size:30px!important; text-align:center; line-height:120% } h3 { font-size:25px!important; text-align:center; line-height:120% } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:40px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:30px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:25px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:18px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } a.es-button, button.es-button { font-size:20px!important; display:inline-block!important } p, ul li, ol li { } .es-header-body p, .es-header-body ul li, .es-header-body ol li { } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li { } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li { } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
                        </style> 
                         </head> 
                         <body style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'> 
                          <div class='es-wrapper-color' style='background-color:#72A2B9'> 
                           <!--[if gte mso 9]>
                                    <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
                                        <v:fill type='tile' color='#72a2b9'></v:fill>
                                    </v:background>
                                <![endif]--> 
                           <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top'> 
                             <tr style='border-collapse:collapse'> 
                              <td valign='top' style='padding:0;Margin:0'> 
                               <table cellpadding='0' cellspacing='0' class='es-header' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table class='es-header-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                     <tr style='border-collapse:collapse'> 
                                      <td class='esdev-adapt-off' align='left' bgcolor='#626262' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;background-color:#626262'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td class='es-m-p0r' valign='top' align='center' style='padding:0;Margin:0;width:560px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;font-size:0px'><img class='adapt-img' src='http://skyders.ml/images/85341620311906854.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='350'></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table> 
                               <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px' cellspacing='0' cellpadding='0' bgcolor='#e0fbfc' align='center'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:20px'> 
                                       <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td class='es-m-p0r es-m-p20b' valign='top' align='center' style='padding:0;Margin:0;width:600px'> 
                                           <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;padding-left:20px;padding-right:20px'><h1 style='Margin:0;line-height:60px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:50px;font-style:normal;font-weight:bold;color:#293241'>Bem vindo ?? nossa fam??lia!</h1></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table> 
                               <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table bgcolor='#e0fbfc' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:5px;padding-bottom:5px'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='center' valign='top' style='padding:0;Margin:0;width:600px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='left' style='padding:0;Margin:0;padding-left:20px;padding-right:20px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#293241;font-size:16px'>Obrigado por se ter registado no nosso site, este email ?? enviado para a confirma????o da sua nova conta, para que a mesma possa usufruir da nossa loja. Ao clicar no bot??o abaixo, voc?? concorda com todos os nossos termos.</p></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;background:linear-gradient(0deg, #E0FBFC 0%, #FFFFFF 100%)'> 
                                       <!--[if mso]><table style='width:560px' cellpadding='0' cellspacing='0'><tr><td style='width:201px' valign='top'><![endif]--> 
                                       <table cellpadding='0' cellspacing='0' class='es-left' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0;width:181px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='right' style='padding:0;Margin:0;padding-top:25px'><h3 style='Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#293241'>Skyders</h3></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='right' class='es-m-txt-c' style='padding:0;Margin:0;padding-top:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#293241;font-size:16px'>Pega na tua carteira<br>e vem voar connosco!</p></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='right' class='es-m-txt-c' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0'> 
                                               <table cellpadding='0' cellspacing='0' class='es-table-not-adapt es-social' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:10px'><a target='_blank' href='https://www.facebook.com/skyders.pq/' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Facebook' src='http://skyders.ml/images/facebook-logo-black.png' alt='Fb' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:10px'><a target='_blank' href='https://twitter.com/skyders9' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Twitter' src='http://skyders.ml/images/twitter-logo-black.png' alt='Tw' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:10px'><a target='_blank' href='https://www.instagram.com/skyders87/' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Instagram' src='http://skyders.ml/images/instagram-logo-black.png' alt='Inst' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0'><a target='_blank' href='https://www.youtube.com/channel/UCLHF-SACdjjuOpMdbtGR93g' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Youtube' src='http://skyders.ml/images/youtube-logo-black.png' alt='Yt' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                          <td class='es-hidden' style='padding:0;Margin:0;width:20px'></td> 
                                         </tr> 
                                       </table> 
                                       <!--[if mso]></td><td style='width:134px' valign='top'><![endif]--> 
                                       <table cellpadding='0' cellspacing='0' class='es-left' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0;width:134px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0'><span class='es-button-border' style='border-style:solid;font-size:30px;border-color:#2CB543;background:#EE6C4D;border-width:0px;display:inline-block;border-radius:20px;width:calc(100% + 10px)'><a href='http://skyders.ml/verify.php?vkey=$vkey' class='es-button es-button-1' target='_blank' style='mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;width: calc(100% + 10px);-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:26px;border-style:solid;border-color:#EE6C4D;border-width:10px 5px;display:inline-block;background:#EE6C4D;border-radius:20px;font-size:30px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-weight:bold;font-style:normal;line-height:31px;width:auto;text-align:center'>Confirmar</a></span></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table> 
                                       <!--[if mso]></td><td style='width:20px'></td><td style='width:205px' valign='top'><![endif]--> 
                                       <table cellpadding='0' cellspacing='0' class='es-right' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0;width:205px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' class='es-m-p0t' style='padding:0;Margin:0;padding-top:20px;font-size:0'> 
                                               <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td style='padding:0;Margin:0;border-bottom:1px solid #293241;background:none;height:1px;width:100%;margin:0px'></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td style='padding:0;Margin:0'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr class='links-images-left' style='border-collapse:collapse'> 
                                                  <td align='left' valign='top' width='100%' style='Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0'><a target='_blank' href='mailto:skyders87@gmail.com' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;color:#293241;font-size:14px'><img src='http://skyders.ml/images/95111615375244881.png' alt='skyders87@gmail.com' title='skyders87@gmail.com' align='absmiddle' width='20' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:15px'>skyders87@gmail.com</a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td style='padding:0;Margin:0'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr class='links-images-left' style='border-collapse:collapse'> 
                                                  <td align='left' valign='top' width='100%' style='Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0'><a target='_blank' href='https://skyders.ml' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;color:#293241;font-size:14px'><img src='http://skyders.ml/images/96481615375245926.png' alt='skyders.ml' title='skyders.ml' align='absmiddle' width='20' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:15px'>skyders.ml</a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td style='padding:0;Margin:0'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr class='links-images-left' style='border-collapse:collapse'> 
                                                  <td align='left' valign='top' width='100%' style='Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0'><a target='_blank' href='' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;color:#293241;font-size:14px'><img src='http://skyders.ml/images/30981615375244660.png' alt='Rua Dom Jo??o Pereira Ven??ncio 1, 2495-440 F??tima' title='Rua Dom Jo??o Pereira Ven??ncio 1, 2495-440 F??tima' align='absmiddle' width='20' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:15px;font-size:12px'>Rua Dom Jo??o Pereira Ven??ncio 1, 2495-440 F??tima</a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;font-size:0'> 
                                               <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td style='padding:0;Margin:0;border-bottom:1px solid #293241;background:none;height:1px;width:100%;margin:0px'></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table> 
                                       <!--[if mso]></td></tr></table><![endif]--></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table> 
                               <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:20px;Margin:0'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;display:none'></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table> 
                          </div>  
                         </body>
                        </html>";

    $error = null;
    $errorRegister = null;

    $user = $_POST['user'] ?? null;
    $password = $_POST['password'] ?? null;

    $registerUser = $_POST['registerUser'] ?? null;
    $registerEmail = $_POST['registerEmail'] ?? null;
    $registerPassword = $_POST['registerPassword'] ?? null;
    $registerConfirmPassword = $_POST['registerConfirmPassword'] ?? null;

    if(isset($_POST['loginForm'])){
        if(is_null($user) || is_null($password)){
            
        }else{
            $query = "SELECT * FROM users WHERE nome = '$user' LIMIT 1";
    
            $userSearch = $db->query($query);
            
            if(!$userSearch){
                $error = msg_erro("Algum erro ocorreu, entre em contacto connosco!");
            }else{
                if($userSearch->num_rows > 0){
                    $reg = $userSearch->fetch_object();
                    if(testHash($password, $reg->password)){
                        if($reg->verified == 0){
                            $error = msg_erro("A sua conta ainda n??o foi verificada, veja no seu email! (Procure tamb??m no spam)");
                            mail($reg->email, $subject, str_replace("vkey=", "vkey=$reg->vkey",$message), $headers);
                        }else{
                            $_SESSION['user'] = $reg->id_user;
                            $_SESSION['nome'] = $reg->nome;
                            $_SESSION['email'] = $reg->email;
                            $_SESSION['tipo'] = $reg->tipo;
                            $error = null;
                            ?>
                            <script type="text/javascript">
                                window.location.href = 'index.php';
                            </script>
                        <?php
                        }
                    
                    }else{
                        $error = msg_erro("A password est?? incorreta!");
                    }
                }else{
                    $error = msg_erro("Esse usu??rio n??o existe!");
                }
            }
        }

    }

if(isset($_POST['registerForm'])){
        
        if(is_null($registerUser) || is_null($registerEmail) || is_null($registerPassword) || is_null($registerConfirmPassword)){
        }else{
	    
          if(trim($registerUser) == ""){
            $errorRegister = msg_erro("O nome n??o pode ficar vazio");
            $errorRegisterClass = 1;
          }else if(trim($registerEmail) == ""){
            $errorRegister = msg_erro("O email n??o pode ficar vazio");
            $errorRegisterClass = 1;
          }else if(trim($registerPassword == "")){
            $errorRegister = msg_erro("A password n??o pode ficar vazia");
            $errorRegisterClass = 1;
          }else{
            if($registerPassword != $registerConfirmPassword){
                $errorRegister = msg_erro("As passwords n??o s??o iguais!");
                $errorRegisterClass = 1;
            }else{
                $users = "SELECT * FROM users WHERE nome = '$registerUser' OR email = '$registerEmail'";
                $usersSearch = $db->query($users);
                if($usersSearch->num_rows > 0){
                    $regUsers = $usersSearch->fetch_object();
                    if($regUsers->nome == $registerUser){
                        $errorRegister = msg_erro("Esse usu??rio j?? existe!");
                        $errorRegisterClass = 1;
                    }else if($regUsers->email == $registerEmail){
                        $errorRegister = msg_erro("Esse email j?? est?? registado!");
                        $errorRegisterClass = 1;
                    }
                }else{
                    $vkey = md5(time().$registerUser);   
                    
                    $message = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
                        <html xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office' style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'>
                         <head> 
                          <meta charset='UTF-8'> 
                          <meta content='width=device-width, initial-scale=1' name='viewport'> 
                          <meta name='x-apple-disable-message-reformatting'> 
                          <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
                          <meta content='telephone=no' name='format-detection'> 
                          <title>Novo modelo de e-mail 2021-05-06</title> 
                          <!--[if (mso 16)]>
                            <style type='text/css'>
                            a {text-decoration: none;}
                            </style>
                            <![endif]--> 
                          <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
                          <!--[if gte mso 9]>
                        <xml>
                            <o:OfficeDocumentSettings>
                            <o:AllowPNG></o:AllowPNG>
                            <o:PixelsPerInch>96</o:PixelsPerInch>
                            </o:OfficeDocumentSettings>
                        </xml>
                        <![endif]--> 
                          <style type='text/css'>
                        #outlook a {
                            padding:0;
                        }
                        .ExternalClass {
                            width:100%;
                        }
                        .ExternalClass,
                        .ExternalClass p,
                        .ExternalClass span,
                        .ExternalClass font,
                        .ExternalClass td,
                        .ExternalClass div {
                            line-height:100%;
                        }
                        .es-button {
                            mso-style-priority:100!important;
                            text-decoration:none!important;
                        }
                        a[x-apple-data-detectors] {
                            color:inherit!important;
                            text-decoration:none!important;
                            font-size:inherit!important;
                            font-family:inherit!important;
                            font-weight:inherit!important;
                            line-height:inherit!important;
                        }
                        .es-desk-hidden {
                            display:none;
                            float:left;
                            overflow:hidden;
                            width:0;
                            max-height:0;
                            line-height:0;
                            mso-hide:all;
                        }
                        [data-ogsb] .es-button {
                            border-width:0!important;
                            padding:10px 40px 10px 40px!important;
                        }
                        [data-ogsb] .es-button.es-button-1 {
                            padding:10px 5px!important;
                        }
                        @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1 { font-size:40px!important; text-align:center; line-height:120% } h2 { font-size:30px!important; text-align:center; line-height:120% } h3 { font-size:25px!important; text-align:center; line-height:120% } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:40px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:30px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:25px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:18px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class='gmail-fix'] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0!important } .es-m-p0r { padding-right:0!important } .es-m-p0l { padding-left:0!important } .es-m-p0t { padding-top:0!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } a.es-button, button.es-button { font-size:20px!important; display:inline-block!important } p, ul li, ol li { } .es-header-body p, .es-header-body ul li, .es-header-body ol li { } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li { } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li { } .es-m-p5 { padding:5px!important } .es-m-p5t { padding-top:5px!important } .es-m-p5b { padding-bottom:5px!important } .es-m-p5r { padding-right:5px!important } .es-m-p5l { padding-left:5px!important } .es-m-p10 { padding:10px!important } .es-m-p10t { padding-top:10px!important } .es-m-p10b { padding-bottom:10px!important } .es-m-p10r { padding-right:10px!important } .es-m-p10l { padding-left:10px!important } .es-m-p15 { padding:15px!important } .es-m-p15t { padding-top:15px!important } .es-m-p15b { padding-bottom:15px!important } .es-m-p15r { padding-right:15px!important } .es-m-p15l { padding-left:15px!important } .es-m-p20 { padding:20px!important } .es-m-p20t { padding-top:20px!important } .es-m-p20r { padding-right:20px!important } .es-m-p20l { padding-left:20px!important } .es-m-p25 { padding:25px!important } .es-m-p25t { padding-top:25px!important } .es-m-p25b { padding-bottom:25px!important } .es-m-p25r { padding-right:25px!important } .es-m-p25l { padding-left:25px!important } .es-m-p30 { padding:30px!important } .es-m-p30t { padding-top:30px!important } .es-m-p30b { padding-bottom:30px!important } .es-m-p30r { padding-right:30px!important } .es-m-p30l { padding-left:30px!important } .es-m-p35 { padding:35px!important } .es-m-p35t { padding-top:35px!important } .es-m-p35b { padding-bottom:35px!important } .es-m-p35r { padding-right:35px!important } .es-m-p35l { padding-left:35px!important } .es-m-p40 { padding:40px!important } .es-m-p40t { padding-top:40px!important } .es-m-p40b { padding-bottom:40px!important } .es-m-p40r { padding-right:40px!important } .es-m-p40l { padding-left:40px!important } }
                        </style> 
                         </head> 
                         <body style='width:100%;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'> 
                          <div class='es-wrapper-color' style='background-color:#72A2B9'> 
                           <!--[if gte mso 9]>
                                    <v:background xmlns:v='urn:schemas-microsoft-com:vml' fill='t'>
                                        <v:fill type='tile' color='#72a2b9'></v:fill>
                                    </v:background>
                                <![endif]--> 
                           <table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top'> 
                             <tr style='border-collapse:collapse'> 
                              <td valign='top' style='padding:0;Margin:0'> 
                               <table cellpadding='0' cellspacing='0' class='es-header' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table class='es-header-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                     <tr style='border-collapse:collapse'> 
                                      <td class='esdev-adapt-off' align='left' bgcolor='#626262' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;background-color:#626262'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td class='es-m-p0r' valign='top' align='center' style='padding:0;Margin:0;width:560px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;font-size:0px'><img class='adapt-img' src='http://skyders.ml/images/85341620311906854.png' alt style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic' width='350'></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table> 
                               <table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px' cellspacing='0' cellpadding='0' bgcolor='#e0fbfc' align='center'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:20px'> 
                                       <table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td class='es-m-p0r es-m-p20b' valign='top' align='center' style='padding:0;Margin:0;width:600px'> 
                                           <table width='100%' cellspacing='0' cellpadding='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;padding-left:20px;padding-right:20px'><h1 style='Margin:0;line-height:60px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:50px;font-style:normal;font-weight:bold;color:#293241'>Bem vindo ?? nossa fam??lia!</h1></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table> 
                               <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table bgcolor='#e0fbfc' class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:5px;padding-bottom:5px'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='center' valign='top' style='padding:0;Margin:0;width:600px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='left' style='padding:0;Margin:0;padding-left:20px;padding-right:20px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#293241;font-size:16px'>Obrigado por se ter registado no nosso site, este email ?? enviado para a confirma????o da sua nova conta, para que a mesma possa usufruir da nossa loja. Ao clicar no bot??o abaixo, voc?? concorda com todos os nossos termos.</p></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px;background:linear-gradient(0deg, #E0FBFC 0%, #FFFFFF 100%)'> 
                                       <!--[if mso]><table style='width:560px' cellpadding='0' cellspacing='0'><tr><td style='width:201px' valign='top'><![endif]--> 
                                       <table cellpadding='0' cellspacing='0' class='es-left' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0;width:181px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='right' style='padding:0;Margin:0;padding-top:25px'><h3 style='Margin:0;line-height:36px;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-size:30px;font-style:normal;font-weight:bold;color:#293241'>Skyders</h3></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='right' class='es-m-txt-c' style='padding:0;Margin:0;padding-top:10px'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;line-height:24px;color:#293241;font-size:16px'>Pega na tua carteira<br>e vem voar connosco!</p></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='right' class='es-m-txt-c' style='padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0'> 
                                               <table cellpadding='0' cellspacing='0' class='es-table-not-adapt es-social' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:10px'><a target='_blank' href='https://www.facebook.com/skyders.pq/' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Facebook' src='http://skyders.ml/images/facebook-logo-black.png' alt='Fb' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:10px'><a target='_blank' href='https://twitter.com/skyders9' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Twitter' src='http://skyders.ml/images/twitter-logo-black.png' alt='Tw' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0;padding-right:10px'><a target='_blank' href='https://www.instagram.com/skyders87/' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Instagram' src='http://skyders.ml/images/instagram-logo-black.png' alt='Inst' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                  <td align='center' valign='top' style='padding:0;Margin:0'><a target='_blank' href='https://www.youtube.com/channel/UCLHF-SACdjjuOpMdbtGR93g' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#293241;font-size:16px'><img title='Youtube' src='http://skyders.ml/images/youtube-logo-black.png' alt='Yt' width='24' height='24' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                          <td class='es-hidden' style='padding:0;Margin:0;width:20px'></td> 
                                         </tr> 
                                       </table> 
                                       <!--[if mso]></td><td style='width:134px' valign='top'><![endif]--> 
                                       <table cellpadding='0' cellspacing='0' class='es-left' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0;width:134px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0'><span class='es-button-border' style='border-style:solid;font-size:30px;border-color:#2CB543;background:#EE6C4D;border-width:0px;display:inline-block;border-radius:20px;width:calc(100% + 10px)'><a href='http://skyders.ml/verify.php?vkey=$vkey' class='es-button es-button-1' target='_blank' style='mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;width: calc(100% + 10px);-ms-text-size-adjust:none;mso-line-height-rule:exactly;color:#FFFFFF;font-size:26px;border-style:solid;border-color:#EE6C4D;border-width:10px 5px;display:inline-block;background:#EE6C4D;border-radius:20px;font-size:30px;font-family:helvetica, 'helvetica neue', arial, verdana, sans-serif;font-weight:bold;font-style:normal;line-height:31px;width:auto;text-align:center'>Confirmar</a></span></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table> 
                                       <!--[if mso]></td><td style='width:20px'></td><td style='width:205px' valign='top'><![endif]--> 
                                       <table cellpadding='0' cellspacing='0' class='es-right' align='right' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='left' style='padding:0;Margin:0;width:205px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' class='es-m-p0t' style='padding:0;Margin:0;padding-top:20px;font-size:0'> 
                                               <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td style='padding:0;Margin:0;border-bottom:1px solid #293241;background:none;height:1px;width:100%;margin:0px'></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td style='padding:0;Margin:0'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr class='links-images-left' style='border-collapse:collapse'> 
                                                  <td align='left' valign='top' width='100%' style='Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0'><a target='_blank' href='mailto:skyders87@gmail.com' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;color:#293241;font-size:14px'><img src='http://skyders.ml/images/95111615375244881.png' alt='skyders87@gmail.com' title='skyders87@gmail.com' align='absmiddle' width='20' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:15px'>skyders87@gmail.com</a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td style='padding:0;Margin:0'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr class='links-images-left' style='border-collapse:collapse'> 
                                                  <td align='left' valign='top' width='100%' style='Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0'><a target='_blank' href='https://skyders.ml' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;color:#293241;font-size:14px'><img src='http://skyders.ml/images/96481615375245926.png' alt='skyders.ml' title='skyders.ml' align='absmiddle' width='20' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:15px'>skyders.ml</a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td style='padding:0;Margin:0'> 
                                               <table cellpadding='0' cellspacing='0' width='100%' class='es-menu' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr class='links-images-left' style='border-collapse:collapse'> 
                                                  <td align='left' valign='top' width='100%' style='Margin:0;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px;border:0'><a target='_blank' href='' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:none;display:block;color:#293241;font-size:14px'><img src='http://skyders.ml/images/30981615375244660.png' alt='Rua Dom Jo??o Pereira Ven??ncio 1, 2495-440 F??tima' title='Rua Dom Jo??o Pereira Ven??ncio 1, 2495-440 F??tima' align='absmiddle' width='20' style='display:inline-block !important;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;padding-right:15px;font-size:12px'>Rua Dom Jo??o Pereira Ven??ncio 1, 2495-440 F??tima</a></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;font-size:0'> 
                                               <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                                 <tr style='border-collapse:collapse'> 
                                                  <td style='padding:0;Margin:0;border-bottom:1px solid #293241;background:none;height:1px;width:100%;margin:0px'></td> 
                                                 </tr> 
                                               </table></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table> 
                                       <!--[if mso]></td></tr></table><![endif]--></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table> 
                               <table cellpadding='0' cellspacing='0' class='es-content' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%'> 
                                 <tr style='border-collapse:collapse'> 
                                  <td align='center' style='padding:0;Margin:0'> 
                                   <table class='es-content-body' align='center' cellpadding='0' cellspacing='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'> 
                                     <tr style='border-collapse:collapse'> 
                                      <td align='left' style='padding:20px;Margin:0'> 
                                       <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                         <tr style='border-collapse:collapse'> 
                                          <td align='center' valign='top' style='padding:0;Margin:0;width:560px'> 
                                           <table cellpadding='0' cellspacing='0' width='100%' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'> 
                                             <tr style='border-collapse:collapse'> 
                                              <td align='center' style='padding:0;Margin:0;display:none'></td> 
                                             </tr> 
                                           </table></td> 
                                         </tr> 
                                       </table></td> 
                                     </tr> 
                                   </table></td> 
                                 </tr> 
                               </table></td> 
                             </tr> 
                           </table> 
                          </div>  
                         </body>
                        </html>";
                        
                    $queryRegister = "INSERT INTO users (nome, email, password, tipo, vkey, verified) VALUES ('$registerUser', '$registerEmail', '".createHash($registerPassword)."', 1, '$vkey', 0)";
                    
                    if ($db->query($queryRegister)) {
                        $errorRegister = msg_sucesso("Caso o seu email esteja correto, receber?? um email de confirma????o em breve!");
                        $errorRegisterClass = 1;
              
                        mail($registerEmail, $subject, $message, $headers);

                      }else{
                        $errorRegister = msg_erro("error" . $queryRegister);
                        $errorRegisterClass = 1;
                      }
                }
                
            }
          }

            

            
        }
    }

    ?>

    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                
                <form action="loginPage.php" method="post" class="sign-in-form" id="loginForm">
                <? echo $error ?>
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></i>
                        <input type="text" placeholder="Usu??rio" name="user">
                    </div>
                    <div class="input-field">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="loginForm">
                </form>

                <form action="loginPage.php" method="post" class="sign-up-form" id="registerForm">
                <? echo $errorRegister ?>
                    <h2 class="title">Registo</h2>
                    <div class="input-field">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></i>
                        <input type="text" placeholder="Usu??rio" name="registerUser">
                    </div>
                    <div class="input-field">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg></i>
                        <input type="email" placeholder="Email" name="registerEmail">
                    </div>
                    <div class="input-field">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg></i>
                        <input type="password" placeholder="Password" name="registerPassword">
                    </div>
                    <div class="input-field">
                        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg></i>
                        <input type="password" placeholder="Confirmar Password" name="registerConfirmPassword">
                    </div>
                    <input type="submit" value="Registar" class="btn solid" name="registerForm">
                </form>
            </div>
        </div>


        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>N??o tens conta?</h3>
                    <p>Regista-te no site antes de fazeres as tuas compras!</p>
                    <button class="btn transparent" id="sign-up-btn">Regista-te</button>
                </div>
                
                <img class="image" src="images/log.svg">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>J?? tens conta?</h3>
                    <p>Entra no site com a tua conta para fazeres as tuas compras!</p>
                    <button class="btn transparent" id="sign-in-btn">Entra</button>
                </div>

                <img class="image" src="images/register.svg">
            </div>
        </div>
    </div>

    <?php
      if($errorRegisterClass == 1){
        ?>
        <script>
          let containerr = document.getElementsByClassName("container")[0];
          containerr.classList.add("sign-up-mode")
        </script>
        <?php
      }
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>

    <script src="js/loginPage.js"></script>
</body>

</html>