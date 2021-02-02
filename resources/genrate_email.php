<?php
function genrate_email_message($link,$title,$text,$name)
{
  $logo = LOGO;
  $site_title = APP;
  $domain_name = Domain;
$message = <<<DELIMETER
<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <title>TechRoar-PropertyPanel</title>
   </head>
   <body>
      <head>
         <!--[if gte mso 9]>
         <xml>
            <o:OfficeDocumentSettings>
               <o:AllowPNG/>
               <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
         </xml>
         <![endif]-->
         <title>TechRoar-PropertyPanel</title>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
         <meta content="width=device-width, initial-scale=1.0" name="viewport">
         <!--[if !mso]><!-- -->
         <meta content="IE=edge" http-equiv="X-UA-Compatible">
         <!--<![endif]-->
         <!--[if !mso]><!-- -->
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,400,300" rel="stylesheet" type="text/css">
         <!--<![endif]-->
         <style type="text/css">html, body { background-color:#fafbfc; }
            img { display:block; }
            .ReadMsgBody {width: 100%; }
            .ExternalClass {width: 100%; }
            * { -webkit-text-size-adjust: none; }
            .whiteLinks a:link, .whiteLinks a:visited { color:#ffffff!important;}
            .appleLinksGrey a { color:#b7bdc1!important; text-decoration:none!important; }
            table {border-collapse:collapse;}
            .preheader{ font-size: 1px; line-height:1px; display: none!important; mso-hide:all; }
            /* AOL Mail td overrides */
            #maincontent td{color:#525C65;}
         </style>
         <!--[if mso]>
         <style type="text/css">
            body, table, td, a {font-family: Arial, Helvetica, sans-serif !important;}
         </style>
         <![endif]-->
      </head>
      <body bgcolor="#fafbfc" style="Margin:0; padding:0;" yahoo="fix">
         <table border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
               <tr>
                  <td style="background-color:#fafbfc">
                     <center bgcolor="#fafbfc" style="width:100%;background-color:#fafbfc;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">
                        <div id="maincontent" style="max-width:620px; font-size:0;margin:0 auto;">
                           <!--[if gte mso 9]>
                           <table border="0" cellpadding="0" cellspacing="0" style="width:620px;">
                              <tr>
                                 <td valign="top">
                                    <![endif]-->
                                    <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                       <tbody>
                                          <tr>
                                             <td>
                                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center" style="padding-bottom:20px;">
                                                            <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:13px; line-height:18px; color:#00C0EA; text-align:center; width:200px;">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="padding:20px 0 10px 0;">
                                                                        <a style="text-decoration:none;"><img alt="TechRoar" border="0" src="{$logo}" style="display:block; border-radius:50%; width:50% !important; font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:22px;  color:#000000; text-transform:uppercase; text-align:center; letter-spacing:1px;"></a>
                                                                     </td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                   <tbody>
                                                      <tr>
                                                         <td bgcolor="#fafbfc" style="width:7px; font-size:1px;">&nbsp;</td>
                                                         <td bgcolor="#f5f6f7" style="width:1px; font-size:1px;">&nbsp;</td>
                                                         <td bgcolor="#f0f2f3" style="width:1px; font-size:1px;">&nbsp;</td>
                                                         <td bgcolor="#edeef1" style="width:1px; font-size:1px;">&nbsp;</td>
                                                         <td bgcolor="#ffffff">
                                                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="text-align:center; padding:40px 40px 40px 40px;border-bottom:3px solid #2647c0; border-top:3px solid #2647c0;">
                                                                        <!--[if gte mso 9]>
                                                                        <table border="0" cellpadding="0" cellspacing="0" style="width:520px;">
                                                                           <tr>
                                                                              <td valign="top">
                                                                                 <![endif]-->
                                                                                 <div style="display:inline-block; width:100%; max-width:520px;">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:14px; line-height:24px; color:#525C65; text-align:left; width:100%;">
                                                                                       <tbody>
                                                                                          <tr>
                                                                                             <td>
                                                                                                <p style="Margin:0; font-size:22px; line-height:23px; color:#11275a; font-weight:bold;">
                                                                                                   <strong>
                                                                                                   Hi
                                                                                                   {$name},</strong><br><br>
                                                                                                </p>
                                                                                             </td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                             <td>
                                                                                                {$text} <br><br>
                                                                                             </td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                             <td align="center" style="padding:15px 0 40px 0; border-bottom:1px solid #f3f6f9; ">
                                                                                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate !important; border-radius:15px; width:210px;">
                                                                                                   <tbody>
                                                                                                      <tr>
                                                                                                         <td align="center" valign="top">
                                                                                                            <!--[if gte mso 9]>
                                                                                                            <table border="0" cellspacing="0" cellpadding="0" style="width:210px">
                                                                                                               <tr>
                                                                                                                  <td bgcolor="#2647c0" style="padding:0px 10px; text-align:center;" valign="top">
                                                                                                                     <![endif]-->
                                                                                                                     <a href="{$link}" target="_blank" style="background-color:#2647c0; border-collapse:separate !important; border-top:10px solid #2647c0; border-bottom:10px solid #2647c0; border-right:45px solid #2647c0; border-left:45px solid #2647c0; border-radius:4px; color:#ffffff; display:inline-block; font-family:'Open+Sans','Open Sans',Helvetica, Arial, sans-serif; font-size:13px; font-weight:bold; text-align:center; text-decoration:none; letter-spacing:2px;">{$title}</a>
                                                                                                                     <!--[if gte mso 9]>
                                                                                                                  </td>
                                                                                                               </tr>
                                                                                                            </table>
                                                                                                            <![endif]-->
                                                                                                         </td>
                                                                                                      </tr>
                                                                                                   </tbody>
                                                                                                </table>
                                                                                             </td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                             <td style="padding-top:30px;">
                                                                                                <p style="Margin:20px 0 20px 0;">Or copy this link and paste in your web browser</p>
                                                                                                <p style="Margin:20px 0; font-size:12px; line-height:17px; word-wrap:break-word; word-break:break-all;"><a href="{$link}" style="color:#5885ff; text-decoration:underline;" target="_blank">{$link}</a></p>
                                                                                             </td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                             <td style="font:14px/16px Arial, Helvetica, sans-serif; color:#363636; padding:0 0 14px;">
                                                                                                Cheers,
                                                                                             </td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                             <td style="font:bold 14px/16px Arial, Helvetica, sans-serif; color:#11275a; padding:0 0 7px;">
                                                                                                {$site_title}
                                                                                             </td>
                                                                                          </tr>
                                                                                       </tbody>
                                                                                    </table>
                                                                                 </div>
                                                                                 <!--[if gte mso 9]>
                                                                              </td>
                                                                           </tr>
                                                                        </table>
                                                                        <![endif]-->
                                                                     </td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td bgcolor="#e0e2e5" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td bgcolor="#e0e2e4" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td bgcolor="#e8ebed" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td bgcolor="#f1f3f6" style="height:1px; width:100%; line-height:1px; font-size:0;">&nbsp;</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </td>
                                                         <td bgcolor="#edeef1" style="width:1px; font-size:1px;">&nbsp;</td>
                                                         <td bgcolor="#f0f2f3" style="width:1px; font-size:1px;">&nbsp;</td>
                                                         <td bgcolor="#f5f6f7" style="width:1px; font-size:1px;">&nbsp;</td>
                                                         <td bgcolor="#fafbfc" style="width:7px; font-size:1px;">&nbsp;</td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td align="center" style="padding:30px 0 20px 0;">
                                                <table border="0" cellpadding="0" cellspacing="0" style="width:220px;">
                                                   <tbody>
                                                      <tr>
                                                         <td align="center">
                                                            <a href="#" target="_blank"><img alt="Facebook" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/facebook.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>
                                                         </td>
                                                         <td align="center">
                                                            <a href="#" target="_blank"><img alt="Twitter" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/twitter.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>
                                                         </td>
                                                         <td align="center">
                                                            <a href="#" target="_blank"><img alt="Google" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/google.jpg" style="display:block; width:28px!important; height:26px!important;" width="28"></a>
                                                         </td>
                                                         <td align="center">
                                                            <a href="#" target="_blank"><img alt="Linkedin" border="0" height="26" src="https://s3-us-west-2.amazonaws.com/udacity-email/Footer/linkedin.jpg" style="display:block; width:26px!important; height:26px!important;" width="26"></a>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td align="center" style="padding-bottom:40px;">
                                                <table border="0" cellpadding="0" cellspacing="0" style="font-family:'Open+Sans', 'Open Sans', Helvetica, Arial, sans-serif; font-size:12px; line-height:18px;  text-align:center; width:auto;">
                                                   <tbody>
                                                      <tr>
                                                         <td style="color:#b7bdc1;">
                                                            <p style="margin:0;"><span class="appleLinksGrey">&copy; CopyRight</span> &nbsp;•&nbsp; <span class="appleLinksGrey">All Rights are Reserved.</span> <br> <a style="text-decoration: none;color:#b7bdc1;" href="{$domain_name}">{$domain_name}</a></p>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!--[if gte mso 9]>
                                 </td>
                              </tr>
                           </table>
                           <![endif]-->
                        </div>
                     </center>
                  </td>
               </tr>
            </tbody>
         </table>
   </body>
   </body>
</html>
DELIMETER;
return $message;

}