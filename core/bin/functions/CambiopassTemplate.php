<?php

	function CambiopassTemplate($users){
		  $html = '
  <html>
    <body style="background: #FFFFF;font-family: Verdana;font-size: 14px;color:#1c1b1b">
      <div>
        <h2>Hola '.$users.'</h2>
        <p style="font-size: 17px;"> Su contraseña ha sido modificada.</p>
        <p>El dia '.date('d/m/Y', time()).'</p>
        <p style="font-size: 9px;">&copy; '.date('Y', time()).''.APP_TITLE.'. Todos los derechos reservados </p>
      </div>
    </body>
  </html>';

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
                        <h1 style="font-size: 48px; font-weight: 400; margin: 0;">Hola  '.$users.'!</h1>
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
      <div style="padding:5px;"></div>
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
                  <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-size: 50px; font-weight: 400; line-height: 25px;" >
                    <p style="margin: 0;  font: oblique bold 70% cursive;">Su contraseña ha sido modificada el dia:<br>'.date('d/m/Y', time()).'</p>
                  </td>
                </tr>
                <!-- BULLETPROOF BUTTON -->
                <tr>
                  <td bgcolor="#ffffff" align="left">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                          <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                            
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <!-- COPY -->
                <tr>
                  <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                    <p style="margin: 0;"></p>
                  </td>
                </tr>
                <!-- COPY -->
                  <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: "Lato", Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;" >
                      <p style="margin: 0;"><a href="http://litmus.com" target="_blank" style="color: #0286f9;"></a></p>
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
                    <p style="margin: 0;"><br></p>
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
  '
;
  return $html;

	} 


?>