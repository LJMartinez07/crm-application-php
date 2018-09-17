<?php

function AgEmpleado($nombre,$pass){

  /*$html = '
  <html>
    <body style="background: #FFFFF;font-family: Verdana;font-size: 14px;color:#1c1b1b">
      <div>
        <h2>Hola '.$nombre.'</h2>
        <p style="font-size: 17px;">Usted ha sido agregado a ADG CRM</p>
        <p>Su contraseña para iniciar sesion en el sistema es:</p>
        <p style="padding:15px;background-color:#ECF8FF;"><a style="font-weight:bold;color:#2BA6CB;" href="" target="_blank">'. $pass .'</a>
        </p>
        <p style="font-size: 9px;">&copy; '.date('Y', time()).''.APP_TITLE.'. Todos los derechos reservados </p>
      </div>
    </body>
  </html>';*/

  
  $html = '<!-- THIS EMAIL WAS BUILT AND TESTED WITH LITMUS http://litmus.com -->
  <!-- IT WAS RELEASED UNDER THE MIT LICENSE https://opensource.org/licenses/MIT -->
  <!-- QUESTIONS? TWEET US @LITMUSAPP -->
  <!DOCTYPE html>
  <html>
  <head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <style type="text/css">
      /* FONTS */
      @media screen {
          @font-face {
            font-family: "Lato";
            font-style: normal;
            font-weight: 400;
            src: local("Lato Regular"), local("Lato-Regular"), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format("woff");
          }
          
          @font-face {
            font-family: "Lato";
            font-style: normal;
            font-weight: 700;
            src: local("Lato Bold"), local("Lato-Bold"), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format("woff");
          }
          
          @font-face {
            font-family: "Lato";
            font-style: italic;
            font-weight: 400;
            src: local("Lato Italic"), local("Lato-Italic"), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format("woff");
          }
          
          @font-face {
            font-family: "Lato";
            font-style: italic;
            font-weight: 700;
            src: local("Lato Bold Italic"), local("Lato-BoldItalic"), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format("woff");
          }
      }
      
      /* CLIENT-SPECIFIC STYLES */
      body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
      table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
      img { -ms-interpolation-mode: bicubic; }
  
      /* RESET STYLES */
      img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
      table { border-collapse: collapse !important; }
      body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
  
      /* iOS BLUE LINKS */
      a[x-apple-data-detectors] {
          color: inherit !important;
          text-decoration: none !important;
          font-size: inherit !important;
          font-family: inherit !important;
          font-weight: inherit !important;
          line-height: inherit !important;
      }
      
      /* MOBILE STYLES */
      @media screen and (max-width:600px){
          h1 {
              font-size: 32px !important;
              line-height: 32px !important;
          }
      }
  
      /* ANDROID CENTER FIX */
      div[style*="margin: 16px 0;"] { margin: 0 !important; }
  </style>
  </head>
  <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
  
  <!-- HIDDEN PREHEADER TEXT -->
  <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Lato", Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
    
  </div>
  
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <!-- LOGO -->
      <tr>
          <td bgcolor="#0286f9" align="center">
              <!--[if (gte mso 9)|(IE)]>
              <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
              <tr>
              <td align="center" valign="top" width="600">
              <![endif]-->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" >
                  <tr>
                      <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                          <a href="http://litmus.com" target="_blank">
                              <img alt="Logo" src="http://litmuswww.s3.amazonaws.com/community/template-gallery/ceej/logo.png" width="40" height="40" style="display: block; width: 40px; max-width: 40px; min-width: 40px; font-family: "Lato", Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;" border="0">
                          </a>
                      </td>
                  </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
              </td>
              </tr>
              </table>
              <![endif]-->
          </td>
      </tr>
      <!-- HERO -->
      <tr>
          <td bgcolor="#0286f9" align="center" style="padding: 0px 10px 0px 10px;">
              <!--[if (gte mso 9)|(IE)]>
              <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
              <tr>
              <td align="center" valign="top" width="600">
              <![endif]-->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" >
                  <tr>
                      <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                        <h1 style="font-size: 48px; font-weight: 400; margin: 0;">'.$nombre.'</h1>
                      </td>
                  </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
              </td>
              </tr>
              </table>
              <![endif]-->
          </td>
      </tr>
      <!-- COPY BLOCK -->
      <tr>
          <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
              <!--[if (gte mso 9)|(IE)]>
              <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
              <tr>
              <td align="center" valign="top" width="600">
              <![endif]-->
              <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" >
                <!-- COPY -->
                <tr>
                  <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                    <p style="margin: 0;"></p>
                  </td>
                </tr>
                <!-- BULLETPROOF BUTTON -->
                <tr>
                  <td bgcolor="#ffffff" align="left">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                          <table border="0" cellspacing="0" cellpadding="0">
                
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- COPY -->
                <tr>
                  <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font-size: 18px; font-weight: 400; line-height: 25px;" >
                    <p style="margin: 0;" font: oblique bold 40% Times New Roman;">Te han agragado a <strong>FortUp</strong> como empleado ya puedes iniciar session conmo tal su contraña es:</p>
                  </td>
                  <br>

                </tr>
                <!-- COPY -->
                  <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                     <center> <p style="margin: 0; font-size: 18px; " >'.$pass.'</p></center>
                    </td>
                  </tr>
                <!-- COPY -->
                <tr>
                  <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                    <p style="margin: 0;"></p>
                  </td>
                </tr>
                <!-- COPY -->
                <tr>
                  <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                    <p style="margin: 0;"></p>
                  </td>
                </tr>
              </table>
              <!--[if (gte mso 9)|(IE)]>
              </td>
              </tr>
              </table>
              <![endif]-->
          </td>
      </tr>
      <!-- SUPPORT CALLOUT -->
      <tr>
  </body>
  </html>
  ';

  return $html;

}

?>
