<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

<title>Kontakt</title>

<meta name="description" content="Veranstalter f&uuml;r Asiatische Konzerte">
<meta name="keywords" content="Konzerte,Thail&auml;ndische Veranstaltung,Thai Rock,Thail&auml;ndische Musik">
<meta name="author" content="Stefan">
<meta name="editor" content="html-editor phase 5">
       <link href="kontakt/style.css" rel="stylesheet" type="text/css" />

<script language="JavaScript">
<!--

<!--

function MM_reloadPage(init) {  //reloads the window if Nav4 resized

  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {

    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}

  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();

}

MM_reloadPage(true);

// -->



function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}



function MM_findObj(n, d) { //v4.0

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && document.getElementById) x=document.getElementById(n); return x;

}



function MM_nbGroup(event, grpName) { //v3.0

  var i,img,nbArr,args=MM_nbGroup.arguments;

  if (event == "init" && args.length > 2) {

    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {

      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;

      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();

      nbArr[nbArr.length] = img;

      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {

        if (!img.MM_up) img.MM_up = img.src;

        img.src = img.MM_dn = args[i+1];

        nbArr[nbArr.length] = img;

    } }

  } else if (event == "over") {

    document.MM_nbOver = nbArr = new Array();

    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {

      if (!img.MM_up) img.MM_up = img.src;

      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : args[i+1];

      nbArr[nbArr.length] = img;

    }

  } else if (event == "out" ) {

    for (i=0; i < document.MM_nbOver.length; i++) {

      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }

  } else if (event == "down") {

    if ((nbArr = document[grpName]) != null)

      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }

    document[grpName] = nbArr = new Array();

    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {

      if (!img.MM_up) img.MM_up = img.src;

      img.src = img.MM_dn = args[i+1];

      nbArr[nbArr.length] = img;

  } }

}

//-->

</script>
<link rel="stylesheet" href="css/meneu.css" type="text/css">
<link rel="stylesheet" href="css/kontakt.css" type="text/css">
<style type="text/css">
.kontaktformular  {
	 width:  470px;
     margin: 10px 0;
     padding: 10px;
     font-size: 11px;
     font-family: Tahoma, Verdana, Arial;
     border: 0px;
     float: left;
     clear: both;
color: black;
font-weight: bold;
     }
     
.kontaktformular fieldset {margin: 10px 0;border:1px solid grey;}
.kontaktformular a {color: #990000; text-decoration: none;}
.kontaktformular a:hover {color: #483D8A;}
  
.kontaktformular legend {
	 background:#710000;;
	 color: #fff;
	 padding: 3px 5px;
	 border: 1px solid #000;
	 text-transform: uppercase;
	 }
	  
.kontaktformular label {
     width: 130px;
	 float: left;
     clear: both;
     padding: 3px 10px;
     margin: 3px 0;
     }
          
.kontaktformular input, .kontaktformular textarea {
     border-right: 1px solid #ddd; 
     border-bottom: 1px solid #ddd;
     border-left: 1px solid #666666; 
     border-top: 1px solid #666666;
     background: #ddc;
     padding: 0px 3px;
     margin: 3px 0;
	 width: 250px;
}

.kontaktformular input:active, .kontaktformular input:focus, .kontaktformular input:hover { background: #ffff88;}
.kontaktformular textarea:active, .kontaktformular textarea:focus, .kontaktformular textarea:hover { background: #ffff88;}

.kontaktdaten table, .anfrage table, .captcha table { border-spacing:0px; width:370px; border:0px solid;}
.label { width:100px; padding:0px;}
.field { width:250px; padding:0px;}
.error { width:200px; padding:0px 0px 0px 5px;}
.captchareload { padding-left:10px;}
input.errordesignfields, textarea.errordesignfields { background-color:#cc3333;}

.buttons { text-align: center;}
.buttons input { width:80px;}
.buttons input, .captchareload img { background: #555555; color: #fff; border-top:2px solid #fff; border-left:2px solid #fff; border-bottom:2px solid #666666; border-right:2px solid #666666;}
.buttons input:hover, .captchareload img:hover { background: #555555; color: #fff; border-top:2px solid #ddd; border-left:2px solid #ddd; border-bottom:2px solid #fff; border-right:2px solid #fff;}

.pflichtfeld {
	 color: #800000; 

</style>
</head>

<body text="#FFFFFF" bgcolor="#000000" link="#FFFFFF" alink="#FFCC00" vlink="#FFFF00" onLoad="MM_preloadImages('../button/geastebuch_g.gif','../button/geastebuch_creme.gif','../button/email_g.gif','../button/email_creme.gif','../button/kont_g.gif','../button/kont-creme.gif','../button/impr_g.gif','../button/impr_creme.gif')">
<table width="900" border="0" bordercolor="#ffffff" align="center" cellpadding="0" cellspacing="0" height="640">

  <tr valign="top">
    <td height="167"><font color="B8B51B" face="Arial, Helvetica, sans-serif"><img src="bilder/bg-banner.gif" width="900" height="167"></font></td>
  </tr>

  <tr bgcolor="#993300">

    <td height="27">

      <div align="center"><font color="B8B51B" face="Arial, Helvetica, sans-serif"></font></div>

      <div align="left">

        <table border="0" cellpadding="10" cellspacing="0" align="right" width="655">

          <tr>

            <td>&nbsp;</td>

            <td>&nbsp;</td>

            <td>&nbsp;</td>

            <td>&nbsp;</td>

            <td>

              <div align="right"><a href="http://www.gaestebuchking.de/cgi-bin/host/firebook.cgi?account=30866" onClick="MM_nbGroup('down','group1','geastebuch','../button/geastebuch_creme.gif',1)" onMouseOver="MM_nbGroup('over','geastebuch','../button/geastebuch_g.gif','../button/geastebuch_creme.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="geastebuch" src="../button/geastebuch.gif" border="0" onLoad="" width="107" height="28"></a></div>

            </td>

            <td>

              <div align="right"><a href="mailto:info@asia-spot.com" onClick="MM_nbGroup('down','group1','email','../button/email_creme.gif',1)" onMouseOver="MM_nbGroup('over','email','../button/email_g.gif','../button/email_creme.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="email" src="../button/email.gif" border="0" onLoad="" width="107" height="28"></a></div>

            </td>

            <td>

              <div align="right"><a href="kontakt_stephan.php" onClick="MM_nbGroup('down','group1','kont','../button/kont-creme.gif',1)" onMouseOver="MM_nbGroup('over','kont','../button/kont_g.gif','../button/kont-creme.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="kont" src="../button/kont.gif" border="0" onLoad="" width="107" height="28" alt="Kontakt"></a></div>

            </td>

            <td>

              <div align="right"><a href="impressum.html" onClick="MM_nbGroup('down','group1','impr','../button/impr_creme.gif',1)" onMouseOver="MM_nbGroup('over','impr','../button/impr_g.gif','../button/impr_creme.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="impr" src="../button/impr.gif" border="0" onLoad="" width="107" height="28" alt="impressum"></a></div>

            </td>

          </tr>

        </table>  <img src="../bilder/a-blindgif.gif" width="22" height="48"></div>

    </td>

  </tr>

  <tr valign="top" bgcolor="#F9D7BB">

    <td height="1085">

      <table width="100%" border="0" cellspacing="0" cellpadding="0" height="1114">

        <tr>

          <td rowspan="4" width="18%" valign="top"> 
            <p>&nbsp;</p>

          </td>

          <td colspan="2" height="27">

            <div align="center"><font color="#000000" face="Arial, Helvetica, sans-serif" size="5"><b></b></font></div>

          </td>

          <td rowspan="4" valign="top" width="19%"> 
            <div align="center">

              <table width="93%" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td> 
                    <div align="center"><font face="Arial, Helvetica, sans-serif"></font></div>
                    <div align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif"></font></div>
                    <div align="center"></div>
                  </td>
                </tr>
              </table>

            </div>

          </td>

        </tr>

        <tr>

          <td width="2%" height="263">&nbsp;</td>

          <td height="263" valign="top">

            <table width="515" border="0" bordercolor="#ffffff" align="center" cellpadding="0" cellspacing="0" height="958">

              <tr>

                <td height="970" valign="top"> 

                  <div align="center">

                      <div align="center">
					  
						<!-- KONTAKTFORMULAR PHP -->
  
     <div id="contentForm">

            <!-- The Quote form starts here-->
            <?php
                 $error             = '';
                 $CompanyName       = '';
                 $FullName          = '';
                 $Email             = '';
				 $Skype             = '';
                 $PhoneNumber       = '';
                 $Country           = '';

                 $DateOnline        = '';
                 $DateFixedFlexible = '';
                 $SiteDesired       = '';
                 $Budget            = '';
                 $checkFeatures     = '';
                 $DescribeProject   = '';
                 $PurposeSite       = '';
                 $NumberPages       = '';
                 $NumberProducts    = '';
                 $ContentMaterial   = '';
                 $WebsitesFan       = '';
                 $Competitors       = '';
                 $CommentProject    = '';

                 $CurrentWebsite    = '';
                 $DomainInfo        = '';
                 $HostInfo          = '';
                 $CommentHost       = '';


                 $spamcheck = ''; // Spam check


            if(isset($_POST['send']))
            {

            //Setting up Variables
                 $CompanyName       = $_POST['CompanyName'];
                 $FullName          = $_POST['FullName'];
                 $Email             = $_POST['Email'];
                 $Skype             = $_POST['Skype'];
                 $PhoneNumber       = $_POST['PhoneNumber'];
                 $Country           = $_POST['Country'];

                 $DateOnline        = $_POST['DateOnline'];
                 $DateFixedFlexible = $_POST['DateFixedFlexible'];
                 $SiteDesired       = $_POST['SiteDesired'];
                 $Budget            = $_POST['Budget'];
                 //features
                 if (isset($_POST["Features"]) && is_array($_POST["Features"])
                 && count($_POST["Features"]) > 0)
                 {
                   foreach($_POST['Features']  as  $checkFeatures)  {
                      $Features_msg .= "$checkFeatures\n";
                   }
                 } // END features

                 $DescribeProject   = $_POST['DescribeProject'];
                 $PurposeSite       = $_POST['PurposeSite'];
                 $NumberPages       = $_POST['NumberPages'];
                 $NumberProducts    = $_POST['NumberProducts'];
	                 if (trim($NumberProducts)  != '') {
						$NumberProducts_msg = ''.$NumberProducts.'';
					} else {
						$NumberProducts_msg = '';
					}
                 //Content Material
                 if (isset($_POST["ContentMaterial"]) && is_array($_POST["ContentMaterial"])
                 && count($_POST["ContentMaterial"]) > 0)
                 {
                   foreach($_POST['ContentMaterial']  as  $checkContentMaterial)  {
                      $ContentMaterial_msg .= "$checkContentMaterial\n";
                   }
                 } //END Content Material

                 $WebsitesFan       = $_POST['WebsitesFan'];
                 $Competitors       = $_POST['Competitors'];
                 $CommentProject    = $_POST['CommentProject'];

                 $CurrentWebsite    = $_POST['CurrentWebsite'];
                 $DomainInfo        = $_POST['DomainInfo'];
                 $HostInfo          = $_POST['HostInfo'];
                 $CommentHost       = $_POST['CommentHost'];


                 $spamcheck = $_POST['spamcheck'];

                // Generate Error Message if a field is left blank
			if(trim($FullName) == '')
                {
                    $error = '<div class="errormsg">Geben Sie bitte Ihren Vor- und Nachnamen ein!</div>';
                }
            	    else if(trim($Email) == '')
                {
                    $error = '<div class="errormsg">Bitte geben Sie Ihre E-Mail adresse ein!</div>';
                }
                else if(!isEmail($Email))
                {
                    $error = '<div class="errormsg">Sie haben eine ungültige E-Mail angegeben. Versuchen Sie es noch einmal</div>';
                }
		        else if(trim($PhoneNumber) == '')
		        {
		        	$error = '<div class="errormsg">Geben Sie bitte Ihre Telefonnummer ein!</div>';
		        }
				else if(!preg_match("/^[0-9]{6,}$/",$PhoneNumber))
		        {
		        	$error = '<div class="errormsg">Geben Sie eine gültige Telefonnummer ein!</div>';
		        }
				else if(trim($Strasse) == '')
		        {
		        	$error = '<div class="errormsg">Geben Sie bitte Ihre Strasse und die Hausnummer ein!</div>';
		        }
          	    else if(trim($spamcheck) == '')
                {
                    $error = '<div class="errormsg">Bitte geben Sie dem Spamschutz ein!</div>';
                }
          	    else if(trim($spamcheck) != '5')
                {
                     $error = '<div class="errormsg">Spam Check: Die Antwort ist nicht korrekt! 2 + 3 = ??</div>';
                }
                if($error == '')
                {

                    // the email will be sent here
                    // make sure to change this to be your e-mail !!!
                    $to      = "gismo199@freenet.de"; 

                    // the email subject
                    $subject = 'Anfrage von ' . $FullName;

                    // the mail message
                    $msg     = "\r\n\n***Kontaktdaten***";
					$msg    .= "\r\n\nVor- und Nachname: $FullName";
					$msg    .= "\r\nStrasse / Nr: $Strasse";
					$msg    .= "\r\nEmail: $Email";
					$msg    .= "\r\nTelefon: $PhoneNumber ";
					$msg    .= "\r\n\n***Anfrage:***";
					$msg    .= "\r\n\nBetreff: $Betreff ";
					$msg    .= "\r\n\nNachricht: \r\n$DescribeProject";
					$msg    .= "\r\n\nAnzahl: $NumberProducts_msg";



                    mail($to, $subject, $msg, "From: $Email\r\nReply-To: $Email\r\nReturn-Path: $Email\r\n");
            ?>

                  <!-- Message sent! (change the text below as you wish)-->
                  <h1>Glückwunsch!!</h1>
                  	<p>Danke <b><?=$FullName;?></b>, Ihre Nachricht wurde erfolgreich gesendet! <br /></p>
                  <!--End Message Sent-->

            <?php
                }
            }
            if(!isset($_POST['send']) || $error != '')
            {
            ?>

		<!-- Start Questionnaire -->
          <form  method="post" id="msgform" action="">
                    <center><p><b>
Hier können Sie Ihre Karte für jede hier eingetragene Veranstaltung bestellen!
</p></b></center>

            <!--Error Message-->
            <?=$error;?>


                <h1>Kontaktdaten</h1>
				   <!-- Full Name -->
                   <p><label >Vor- und Nachname: <span class="required">*</span></label>
                   <input type="text" size="40" value="<?=$FullName;?>" name="FullName" id="q2" /></p>
					<!-- Strasse -->
                   <p><label >Strasse / Nr:<span class="required">*</span></label>
                   <input type="text" size="40" value="<?=$Strasse;?>" name="Strasse" id="q4" /></p>
				   	<!-- Email -->
                   <p><label >E-Mail:<span class="required">*</span></label>
                   <input type="text" size="40" value="<?=$Email;?>" name="Email" id="q3"  /></p>
				   <!-- Phone -->
                   <p><label >Telefon:<span class="required">*</span></label>
                   <input type="text" size="40" value="<?=$PhoneNumber;?>" name="PhoneNumber" id="q4" /></p>

				   	<br class="endOfSection" />

                  <h1>Anfrage / Bestellung</h1>
                     
					<p><label>Anzahl der Karten</label>
                    <select name="NumberProducts" id="q13" >
					  <option>-- bitte wählen --</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
					  <option>5</option>
                      <option>6</option>
                      <option>7</option>
                    </select></p>
					
					<!-- Site desired -->
                    <p><label>Betreff</label>
                   <input type="text" size="40" value="<?=$Betreff;?>" name="Betreff" id="q4" /></p>

                    <!-- Project description -->
                    <p><label>Nachricht</label>
                    <textarea cols="40" rows="6" name="DescribeProject" id="q9" ></textarea></p>
					<!-- How many products will you sell -->
 
				   	<br class="endOfSection" />


                 <h1>AntiSpam</h1>
                    <!-- Spam check -->
                    <p><label>Zusammenrechnen: <b>2 + 3= </b></label>
          			<input name="spamcheck" type="text" class="box" id="spamcheck" size="4" value="<?=$spamcheck;?>" /></p>

				   	<br class="endOfSection" />
		            <!--Error Message-->
		            <?=$error;?>

                    <center><input name="send" class="senden" type="submit" id="send" value="Abschicken"/></center>
              </form>

<!-- E-mail verification. Do not modify the code below this line -->
<?php }
	function isEmail($email){
		return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
	}
?>
<!-- END QUOTE FORM -->

			<br class="endOfSection" />

     
     </div> <!-- /contentForm -->
     

						<!-- ENDE KONTAKTFORMULAR -->
						
                      </div>

                      <p>&nbsp;</p>

                    </form>

                    <p>&nbsp;</p>

                    <p>&nbsp;</p>

                  </div>

                  <div align="center"></div>

                  <div align="center"></div>

                </td>

              </tr>

            </table>

          </td>

        </tr>

        <tr>

          <td colspan="2" height="38">&nbsp;</td>

        </tr>

        <tr>

          <td colspan="2" height="19">&nbsp;</td>

        </tr>

      </table>

    </td>

  </tr>

  <tr bgcolor="#FF0000">

    <td height="23" bgcolor="#993300">

      <div align="center">

        <table width="100%" border="0" cellspacing="0" cellpadding="0" height="16">

          <tr>

            <td width="20%" height="8">

              <div align="center"><font face="Arial, Helvetica, sans-serif" color="#FFFF00" size="1">Copyright

                by Stephan Fischer</font></div>

            </td>

            <td width="29%" height="8"><font face="Arial, Helvetica, sans-serif" color="#FFFF00" size="1"></font></td>

            <td width="16%" height="8">

              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><a href="agb.html">AGB</a></font></div>

            </td>

            <td width="20%" height="8">

              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><a href="kontakt_stephan.php">Kontakt</a></font></div>

            </td>

            <td width="15%" height="8">

              <div align="center"><font face="Arial, Helvetica, sans-serif" size="2"><a href="impressum.html">Impressum</a></font></div>

            </td>

          </tr>

        </table>

      </div>

      <div align="center"></div>

    </td>

  </tr>

</table>

</body>

</html>

