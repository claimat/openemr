<?php
include_once("../../globals.php");
include_once("$srcdir/api.inc");
formHeader("Form: Forms_Cardiology");
$returnurl = $GLOBALS['concurrent_layout'] ? 'encounter_top.php' : 'patient_encounter.php';
?>
<html><head>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>
<style type="text/css">@import url(../../../library/dynarch_calendar.css);</style>
<script type="text/javascript" src="../../../library/dialog.js"></script>
<script type="text/javascript" src="../../../library/textformat.js"></script>
<script type="text/javascript" src="../../../library/dynarch_calendar.js"></script>
<script type="text/javascript" src="../../../library/dynarch_calendar_en.js"></script>
<script type="text/javascript" src="../../../library/dynarch_calendar_setup.js"></script>
<script language='JavaScript'> var mypcc = '1'; </script>

<a href='<?php echo $GLOBALS['webroot']?>/interface/patient_file/encounter/<?php echo $returnurl?>' onclick='top.restoreSession()'> <?php xl("[do not save]",'e') ?> </a>
<form method=post action="<?echo $rootdir;?>/forms/Forms_Cardiology/save.php?mode=new" name="Forms_Cardiology" onSubmit="return top.restoreSession()">
<hr>
<h1> <?php xl("Forms_Cardiology",'e') ?> </h1>
<hr>
<input type="submit" name="submit form" value="submit form" />

<table width="100%" cellpadding="0" cellspacing="0">   

    <tr>

        <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;">

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

                    <td class='text'   colspan="5" align="center" style="border: 1px #000000 solid; height: 15px;">

                        <h3>

                            PATIENT INFORMATION - PLEASE PRINT

                        </h3>
                    </td>
                </tr>
                <tr><td class='text'   colspan="5"><b> <?php xl("FULL LEGAL NAME(FIRST NAME)",'e') ?> </b></td></tr>

                <tr>                    

                    <td class='text'   style="border: 1px #000000 solid;">                        

<table>

<tr><td class='text' > first name</td> <td class='text' ><input type="text" name="_first_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > middle name</td> <td class='text' ><input type="text" name="_middle_name"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > last name</td> <td class='text' ><input type="text" name="_last_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   colspan="2" style="border: 1px #000000 solid;">                        

<table>

<tr><td class='text' > nick name</td> <td class='text' ><input type="text" name="_nick_name"  /></td></tr>

</table>
                    </td>
                </tr>

                

                

                <tr>

                    

                    <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > street address number</td> <td class='text' ><input type="text" name="_street_address_number"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > street name</td> <td class='text' ><input type="text" name="_street_name"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > street name apt</td> <td class='text' ><input type="text" name="_street_name_apt"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > street name space</td> <td class='text' ><input type="text" name="_street_name_space"  /></td></tr>

</table>
                    </td>
                </tr>

                  <tr>

                    

                    <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > po box address number</td> <td class='text' ><input type="text" name="_po_box_address_number"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > po box street</td> <td class='text' ><input type="text" name="_po_box_street"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > po box apt</td> <td class='text' ><input type="text" name="_po_box_apt"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > po box space</td> <td class='text' ><input type="text" name="_po_box_space"  /></td></tr>

</table>
                    </td>
                </tr>

                

                 <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > city</td> <td class='text' ><input type="text" name="_city"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > state</td> <td class='text' ><input type="text" name="_state"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > zip code</td> <td class='text' ><input type="text" name="_zip_code"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > social security</td> <td class='text' ><input type="text" name="_social_security"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > home phone</td> <td class='text' ><input type="text" name="_home_phone"  /></td></tr>

</table>
                    </td>
                </tr>

                

                <tr>

                    

                    <td class='text'    colspan="4" style="border: 1px #000000 solid; height: 10px;">

<table>

<tr><td class='text' > email address</td> <td class='text' ><input type="text" name="_email_address"  /></td></tr>

</table>
                    </td>

                   

                     <td class='text'   style="border: 1px #000000 solid; height: 10px;">

<table>

<tr><td class='text' > cell phone</td> <td class='text' ><input type="text" name="_cell_phone"  /></td></tr>

</table>
                    </td>
                </tr>

                

                 <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' >
<span ><?php xl(' date of birth (yyyy-mm-dd): ','e') ?></span>
</td><td class='text' >
<input type='text' size='10' name='_date_of_birth' id='_date_of_birth' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event' />
<img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22'
id='img__date_of_birth' border='0' alt='[?]' style='cursor:pointer'
title='Click here to choose a date'>
<script>
Calendar.setup({inputField:'_date_of_birth', ifFormat:'%Y-%m-%d', button:'img__date_of_birth'});
</script>
</td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > age</td> <td class='text' ><input type="text" name="_age"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > sex</td> <td class='text' ><label><input type="checkbox" name="_sex[]" value="MALE" /> <?php xl("MALE",'e') ?> </label>
    <label><input type="checkbox" name="_sex[]" value="FEMALE" /> <?php xl("FEMALE",'e') ?> </label></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > marital status</td> <td class='text' ><label><input type="checkbox" name="_marital_status[]" value="MARRIED" /> <?php xl("MARRIED",'e') ?> </label>
    <label><input type="checkbox" name="_marital_status[]" value="SINGLE" />
    <?php xl("SINGLE",'e') ?>
    </label></td></tr>
</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > occupation</td> <td class='text' ><input type="text" name="_occupation"  /></td></tr>

</table>
                    </td>
                </tr>

                <tr>

                    <td class='text'     style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > employer name</td> <td class='text' ><input type="text" name="_employer_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   colspan="4" style="border: 1px #000000 solid;;">

                        <table>

                            <tr>

                                <td class='text'  >

<table>

<tr><td class='text' > employer street address</td> <td class='text' ><input type="text" name="_employer_street_address"  /></td></tr>

</table>
                                </td>

                                <td class='text'  >

<table>

<tr><td class='text' > employer city</td> <td class='text' ><input type="text" name="_employer_city"  /></td></tr>

</table>
                                </td>

                                <td class='text'  >

<table>

<tr><td class='text' > employer state</td> <td class='text' ><input type="text" name="_employer_state"  /></td></tr>

</table>
                                </td>

                                <td class='text'  >

<table>

<tr><td class='text' > employer zip code</td> <td class='text' ><input type="text" name="_employer_zip_code"  /></td></tr>

</table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

                 <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > business phone</td> <td class='text' ><input type="text" name="_business_phone"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > extension</td> <td class='text' ><input type="text" name="_extension"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > drivers license</td> <td class='text' ><input type="text" name="_drivers_license"  /></td></tr>

</table>
                    </td>

                    <td class='text'   colspan="2" style="border: 1px #000000 solid; height: 15px;">

<table>

<tr><td class='text' > drivers license state</td> <td class='text' ><input type="text" name="_drivers_license_state"  /></td></tr>

</table>
                    </td>

                   
                </tr>

                

                

            </table>
        </td>
    </tr>

    

    

    

    

    <tr>

         <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;">

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

                    <td class='text'   colspan="7" align="center" style="border: 1px #000000 solid; height: 15px;">

                        <h3>

                            SPOUSE'S, PARENT'S, AND / OR GUARANTER'S INFORMATION

                        </h3>
                    </td>
                </tr>

                <tr><td class='text'   colspan="7">

<table>

<tr><td class='text' > spg refers to spouse/parents/guarantors</td> <td class='text' ><input type="text" name="_spg_refers_to_spouse_parents_guarantors"  /></td></tr>

</table>
                </td></tr>

                <tr>

                    

                    <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg first name</td> <td class='text' ><input type="text" name="_spg_first_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg middle name</td> <td class='text' ><input type="text" name="_spg_middle_name"  /></td></tr>

</table>
                    </td>

                     <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg last name</td> <td class='text' ><input type="text" name="_spg_last_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg occupation</td> <td class='text' ><input type="text" name="_spg_occupation"  /></td></tr>

</table>
                    </td>
                </tr>

                

                 <tr>

                    

                    <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg address if different than above</td> <td class='text' ><input type="text" name="_spg_address_if_different_than_above"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg city</td> <td class='text' ><input type="text" name="_spg_city"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg state</td> <td class='text' ><input type="text" name="_spg_state"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg zip code</td> <td class='text' ><input type="text" name="_spg_zip_code"  /></td></tr>

</table>
                    </td>

                     <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg home phone</td> <td class='text' ><input type="text" name="_spg_home_phone"  /></td></tr>

</table>
                    </td>
                </tr>

                

                  <tr>

                    

                    <td class='text'   colspan="2" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg employer street address</td> <td class='text' ><input type="text" name="_spg_employer_street_address"  /></td></tr>

</table>
                    </td>

                   <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg employer city</td> <td class='text' ><input type="text" name="_spg_employer_city"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg employer state</td> <td class='text' ><input type="text" name="_spg_employer_state"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg employer zip code</td> <td class='text' ><input type="text" name="_spg_employer_zip_code"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg employer business phone</td> <td class='text' ><input type="text" name="_spg_employer_business_phone"  /></td></tr>

</table>
                    </td>

                    <td class='text'    style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > spg employer extension</td> <td class='text' ><input type="text" name="_spg_employer_extension"  /></td></tr>

</table>
                    </td>
                </tr>

                

            </table>
        </td>
    </tr>

    

     <tr>

         <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;">

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

                    <td class='text'   colspan="3" align="center" style="border: 1px #000000 solid; height: 15px;">

                        <h3>

                            CONCERNING INSURANCE

                        </h3>
                    </td>
                </tr>

                <tr>

                    

                    <td class='text'   colspan="3" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > concerning insurance deatils</td> <td class='text' ><label><input type="checkbox" name="_concerning_insurance_deatils[]" value="SPOUCE IS POLICY HOLDER" /> <?php xl("SPOUCE IS POLICY HOLDER",'e') ?></label>
  <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="MEDICARE" /> <?php xl("MEDICARE",'e') ?></label>
  <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="MEDICAL" /> <?php xl("MEDICAL",'e') ?></label>
  <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="HMO" /> <?php xl("HMO",'e') ?></label>
  <label><input type="checkbox" name="_concerning_insurance_deatils[]" value="WORK COMP" /> <?php xl("WORK COMP",'e') ?></label></td></tr>

</table>
                    </td>

                   
                </tr>

                <tr>

                    

                    <td class='text'   colspan="3" align="right" >

<table>

<tr><td class='text' >
<span ><?php xl(' date of injury (yyyy-mm-dd): ','e') ?></span>
</td><td class='text' >
<input type='text' size='10' name='_date_of_injury' id='_date_of_injury' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event' />
<img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22'
id='img__date_of_injury' border='0' alt='[?]' style='cursor:pointer'
title='Click here to choose a date'>
<script>
Calendar.setup({inputField:'_date_of_injury', ifFormat:'%Y-%m-%d', button:'img__date_of_injury'});
</script>
</td></tr>

</table>
                    </td>

                   
                </tr>

                

                 <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > primary insurance co here</td> <td class='text' ><input type="text" name="_primary_insurance_co_here"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > primary insurance group number</td> <td class='text' ><input type="text" name="_primary_insurance_group_number"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > primary insurance id number</td> <td class='text' ><input type="text" name="_primary_insurance_id_number"  /></td></tr>

</table>
                    </td>

                    
                </tr>

                

                 <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > primary insurance insured name</td> <td class='text' ><input type="text" name="_primary_insurance_insured_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' >
<span ><?php xl(' primary insurance insured date of birth (yyyy-mm-dd): ','e') ?></span>
</td><td class='text' >
<input type='text' size='10' name='_primary_insurance_insured_date_of_birth' id='_primary_insurance_insured_date_of_birth' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event' />
<img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22'
id='img__primary_insurance_insured_date_of_birth' border='0' alt='[?]' style='cursor:pointer'
title='Click here to choose a date'>
<script>
Calendar.setup({inputField:'_primary_insurance_insured_date_of_birth', ifFormat:'%Y-%m-%d', button:'img__primary_insurance_insured_date_of_birth'});
</script>
</td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > primary insurance insured address</td> <td class='text' ><input type="text" name="_primary_insurance_insured_address"  /></td></tr>

</table>
                    </td>

                    
                </tr>

                

                  <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > secondary insurance co name</td> <td class='text' ><input type="text" name="_secondary_insurance_co_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > secondary insurance group number</td> <td class='text' ><input type="text" name="_secondary_insurance_group_number"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > secondary insurance id number</td> <td class='text' ><input type="text" name="_secondary_insurance_id_number"  /></td></tr>

</table>
                    </td>

                    
                </tr>

                

                  <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > secondary insurance insureds name</td> <td class='text' ><input type="text" name="_secondary_insurance_insureds_name"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' >
<span ><?php xl(' secondary insurance insureds date of birth (yyyy-mm-dd): ','e') ?></span>
</td><td class='text' >
<input type='text' size='10' name='_secondary_insurance_insureds_date_of_birth' id='_secondary_insurance_insureds_date_of_birth' onkeyup='datekeyup(this,mypcc)' onblur='dateblur(this,mypcc)' title='yyyy-mm-dd last date of this event' />
<img src='../../../interface/pic/show_calendar.gif' align='absbottom' width='24' height='22'
id='img__secondary_insurance_insureds_date_of_birth' border='0' alt='[?]' style='cursor:pointer'
title='Click here to choose a date'>
<script>
Calendar.setup({inputField:'_secondary_insurance_insureds_date_of_birth', ifFormat:'%Y-%m-%d', button:'img__secondary_insurance_insureds_date_of_birth'});
</script>
</td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > secondary insurance insureds col address</td> <td class='text' ><input type="text" name="_secondary_insurance_insureds_col_address"  /></td></tr>

</table>
                    </td>

                    
                </tr>

                

                

                

            </table>
        </td>
    </tr>

    

    

      <tr>

         <td class='text'   valign="top" style="border: 1px #000000 solid; height: 15px;">

            <table width="100%" cellpadding="0" cellspacing="0">

                <tr>

                    <td class='text'   colspan="4" align="center" style="border: 1px #000000 solid; height: 15px;">

                        <h3>

                            EMERGENCY INFORMATION

                        </h3>
                    </td>
                </tr>

                

                               

                 <tr>

                    

                    <td class='text'   colspan="3" style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > person to notify in case of emergency not leaving with you</td> <td class='text' ><input type="text" name="_person_to_notify_in_case_of_emergency_not_leaving_with_you"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > relationship</td> <td class='text' ><input type="text" name="_relationship"  /></td></tr>

</table>
                    </td>

                    
                </tr>

                

                 <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > person address</td> <td class='text' ><input type="text" name="_person_address"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > person street</td> <td class='text' ><input type="text" name="_person_street"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > person apt</td> <td class='text' ><input type="text" name="_person_apt"  /></td></tr>

</table>
                    </td>

                    

                      <td class='text'   style="border: 1px #000000 solid;">

<table>

<tr><td class='text' > person space</td> <td class='text' ><input type="text" name="_person_space"  /></td></tr>

</table>
                    </td>

                    
                </tr>

                  <tr>

                    

                    <td class='text'   style="border: 1px #000000 solid; height: 6px;">

<table>

<tr><td class='text' > person city</td> <td class='text' ><input type="text" name="_person_city"  /></td></tr>

</table>
                    </td>

                    <td class='text'   style="border: 1px #000000 solid; height: 6px;">

<table>

<tr><td class='text' > person state</td> <td class='text' ><input type="text" name="_person_state"  /></td></tr>

</table>
                    </td>

                     <td class='text'   style="border: 1px #000000 solid; height: 6px;">

<table>

<tr><td class='text' > person zip code</td> <td class='text' ><input type="text" name="_person_zip_code"  /></td></tr>

</table>
                    </td>

                   

                     <td class='text'   style="border: 1px #000000 solid; height: 6px;">

<table>

<tr><td class='text' > person home phone</td> <td class='text' ><input type="text" name="_person_home_phone"  /></td></tr>

</table>
                    </td>
                </tr>

                

                 

                

                

                

            </table>
        </td>
    </tr>

</table>
<table width="100%"><tr><td class='text'   colspan="3"><h3> <?php xl("Health History (Confidential)",'e') ?> </h3></td></tr>

<tr>
<td class='text'   colspan="3" style="border: 1px #000000 solid"><h3> <?php xl("History and Physical",'e') ?> </h3></td></tr>

<tr><td class='text'    valign="top">

 <?php xl("Heart problems",'e') ?><br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Heart Attack" /> <?php xl("Heart Attack",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Angina" /> <?php xl("Angina",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Heart Murmur" /> <?php xl("Heart Murmur",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Rheumatic Fever" /> <?php xl("Rheumatic Fever",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Abnormal Rhythm-arrhythmia" /> <?php xl("Abnormal Rhythm(arrhythmia)",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Palpitations and irregular heartbeats" /> <?php xl("Palpitations and irregular heartbeats",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Fainting" /> <?php xl("Fainting",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Enlarge Heart" /> <?php xl("Enlarge Heart",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Chest Pains or Pressure" /> <?php xl("Chest Pains or Pressure",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Shortness of Breath" /> <?php xl("Shortness of Breath",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Dizziness" /> <?php xl("Dizziness",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Swollen Legs" /> <?php xl("Swollen Legs",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Heart Failure" /> <?php xl("Heart Failure",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Blue Lips or Fingernails" /> <?php xl("Blue Lips or Fingernails",'e') ?> </label> <br> <label><input type="checkbox" name="heart_problems_or_symptoms[]" value="Leg Cramps when you walk" /> <?php xl("Leg Cramps when you walk",'e') ?> </label></td>

<td class='text'    valign="top">

 <?php xl("Have you ever had",'e') ?><br> <label><input type="checkbox" name="have_you_ever_had[]" value="A Stress Test" /> <?php xl("A Stress Test",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="An Echocardiogram" /> <?php xl("An Echocardiogram",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Cardiac Catheterization" /> <?php xl("Cardiac Catheterization",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Coronary Angioplasty" /> <?php xl("Coronary Angioplasty",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Coronary Bypass Surgery" /> <?php xl("Coronary Bypass Surgery",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Valve Surgery" /> <?php xl("Valve Surgery",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Electrophysiology Study or Proc" /> <?php xl("Electrophysiology Study or Proc",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="A Pacemaker" /> <?php xl("A Pacemaker",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Implanted Defibrillator" /> <?php xl("Implanted Defibrillator",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="ECG" /> <?php xl("ECG",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="24 Holter Monitor" /> <?php xl("24 Holter Monitor",'e') ?> </label> <br> <label><input type="checkbox" name="have_you_ever_had[]" value="Event Recorder " /> <?php xl("Event Recorder ",'e') ?> </label>
</td>

<td class='text'    valign="top">
<?php xl("Check if you have",'e') ?><br> <label><input type="checkbox" name="check_if_you_have[]" value="High Blood Pressure" /> <?php xl("High Blood Pressure",'e') ?> </label> <br> <label><input type="checkbox" name="check_if_you_have[]" value="High Cholestrol" /> <?php xl("High Cholestrol",'e') ?> </label> <br> <label><input type="checkbox" name="check_if_you_have[]" value="Ever Smoked" /> <?php xl("Ever Smoked",'e') ?> </label> <br> <label><input type="checkbox" name="check_if_you_have[]" value="Diabetes" /> <?php xl("Diabetes",'e') ?> </label> <br> <label><input type="checkbox" name="check_if_you_have[]" value="Do You Exercise" /> <?php xl("Do You Exercise",'e') ?> </label><br><?php xl("Close family member with",'e') ?><br> <label><input type="checkbox" name="close_family_member_with[]" value="Heart Attack" /> <?php xl("Heart Attack",'e') ?> </label> <br> <label><input type="checkbox" name="close_family_member_with[]" value="Angina" /> <?php xl("Angina",'e') ?> </label><br><?php xl("If a woman have you",'e') ?><br> <label><input type="checkbox" name="if_a_woman_have_you[]" value="Passed Menopause" /> <?php xl("Passed Menopause",'e') ?> </label><br><?php xl("Menopause passed on what age",'e') ?><input type="text" name="menopause_passed_on_what_age"  /><br><label><input type="checkbox" name="have_you_take_estrogen_replacement" value="yes" /></label>  <?php xl("Have you take estrogen replacement",'e') ?></td></tr>


</td>
</tr>



<tr><td class='text'  colspan="3"> <?php xl("Please tell us anything else about heart",'e') ?><textarea name="please_tell_us_anything_else_about_heart"  rows="4" cols="40"></textarea>
<tr><td class='text'   colspan="3" style="border: 1px #000000 solid; height: 28px;"><h3> <?php xl("Current Medications",'e') ?> </h3></td></tr>

<tr>

<td class='text'   colspan="3">
    <strong> <?php xl("Please tell us about medicines(name,dose or strength,how many times a day).Include over the counter medictaions:",'e') ?> </strong></td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail1",'e') ?><textarea name="medicine_detail1"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail2",'e') ?><textarea name="medicine_detail2"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail3",'e') ?><textarea name="medicine_detail3"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail4",'e') ?><textarea name="medicine_detail4"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail5",'e') ?><textarea name="medicine_detail5"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail6",'e') ?><textarea name="medicine_detail6"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail7",'e') ?><textarea name="medicine_detail7"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Medicine detail8",'e') ?><textarea name="medicine_detail8"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr>
<td class='text'   colspan="3" style="border: 1px #000000 solid;"><h3> <?php xl("Allergies",'e') ?> </h3></td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Are you allergic to any medications",'e') ?>
  <label><input type="checkbox" name="are_you_allergic_to_any_medications[]" value="Yes" /> <?php xl("Yes",'e') ?> </label>
  <label><input type="checkbox" name="are_you_allergic_to_any_medications[]" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Lis medicine to which you are allergic",'e') ?><input type="text" name="lis_medicine_to_which_you_are_allergic"  /></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("What kind of reaction did you have",'e') ?><input type="text" name="what_kind_of_reaction_did_you_have"  /></td></tr>

</table>
</td></tr>

<tr>

<td class='text'   valign="top">

<?php xl("Constitutional",'e') ?><br> <label><input type="checkbox" name="constitutional[]" value="Lack of energy" /> <?php xl("Lack of energy",'e') ?> </label> <br> <label><input type="checkbox" name="constitutional[]" value="Trouble sleeping" /> <?php xl("Trouble sleeping",'e') ?> </label><BR><label><input type="checkbox" name="constitutional[]" value="Loss of appetite" /> <?php xl("Loss of appetite",'e') ?> </label> <br> <label><input type="checkbox" name="constitutional[]" value="Weight changes" /> <?php xl("Weight changes",'e') ?></label><br><label><input type="checkbox" name="constitutional[]" value="Fever" /> <?php xl("Fever",'e') ?> </label>
</td>

<td class='text'    valign="top">

 <?php xl("Heent",'e') ?><br> <label><input type="checkbox" name="heent[]" value="Blurred vision" /> <?php xl("Blurred vision",'e') ?> </label> <br> <label><input type="checkbox" name="heent[]" value="Glaucoma" /> <?php xl("Glaucoma",'e') ?> </label> <br> <label><input type="checkbox" name="heent[]" value="Cataracts" /> <?php xl("Cataracts",'e') ?> </label> <br> <label><input type="checkbox" name="heent[]" value="Buzzing or ringing in ears" /> <?php xl("Buzzing or ringing in ears",'e') ?> </label> <br> <label><input type="checkbox" name="heent[]" value="Hay fever" /> <?php xl("Hay fever",'e') ?> </label> <br> <label><input type="checkbox" name="heent[]" value="Sinus problem" /> <?php xl("Sinus problem",'e') ?> </label>
</td>

<td class='text'    valign="top">

<?php xl("Respiratory",'e') ?><br> <label><input type="checkbox" name="respiratory[]" value="Wheezing" /> <?php xl("Wheezing",'e') ?> </label> <br> <label><input type="checkbox" name="respiratory[]" value="Cough" /> <?php xl("Cough",'e') ?> </label> <br> <label><input type="checkbox" name="respiratory[]" value="Coughing Blood" /> <?php xl("Coughing Blood",'e') ?> </label> <br> <label><input type="checkbox" name="respiratory[]" value="Asthma" /> <?php xl("Asthma",'e') ?> </label> <br> <label><input type="checkbox" name="respiratory[]" value="Tuberculosis" /> <?php xl("Tuberculosis",'e') ?> </label>
</td>
</tr>

<tr>

<td class='text'    valign="top">

 <?php xl("Digestive",'e') ?><br> <label><input type="checkbox" name="digestive[]" value="Indigestion" /> <?php xl("Indigestion",'e') ?> </label> <br> <label><input type="checkbox" name="digestive[]" value="Change in bowel habits" /> <?php xl("Change in bowel habits",'e') ?> </label> <br> <label><input type="checkbox" name="digestive[]" value="Bloody or tarry stools" /> <?php xl("Bloody or tarry stools",'e') ?> </label> <br> <label><input type="checkbox" name="digestive[]" value="Jaundice" /> <?php xl("Jaundice",'e') ?> </label> <br> <label><input type="checkbox" name="digestive[]" value="Liver problems" /> <?php xl("Liver problems",'e') ?> </label> <br> <label><input type="checkbox" name="digestive[]" value="Ulcers" /> <?php xl("Ulcers",'e') ?> </label> <br> <label><input type="checkbox" name="digestive[]" value="Gallstone" /> <?php xl("Gallstone",'e') ?> </label>
</td>

<td class='text'    valign="top">

 <?php xl("Urinary",'e') ?><br> <label><input type="checkbox" name="urinary[]" value="Frequency" /> <?php xl("Frequency",'e') ?> </label> <br> <label><input type="checkbox" name="urinary[]" value="Infections" /> <?php xl("Infections",'e') ?> </label> <br> <label><input type="checkbox" name="urinary[]" value="Stones" /> <?php xl("Stones",'e') ?> </label> <br> <label><input type="checkbox" name="urinary[]" value="Bladder incontinence" /> <?php xl("Bladder incontinence",'e') ?> </label>
</td>

<td class='text'    valign="top">

 <?php xl("Musculoskeletal",'e') ?><br> <label><input type="checkbox" name="musculoskeletal[]" value="Joint pain swelling or redness" /> <?php xl("Joint pain swelling or redness",'e') ?> </label> <br> <label><input type="checkbox" name="musculoskeletal[]" value="arthritis" /> <?php xl("arthritis",'e') ?> </label> <br> <label><input type="checkbox" name="musculoskeletal[]" value="back pain" /> <?php xl("back pain",'e') ?> </label> <br> <label><input type="checkbox" name="musculoskeletal[]" value="muscle aches" /> <?php xl("muscle aches",'e') ?> </label> <br> <label><input type="checkbox" name="musculoskeletal[]" value="muscle tenderness" /> <?php xl("muscle tenderness",'e') ?> </label> <br> <label><input type="checkbox" name="musculoskeletal[]" value="gout" /> <?php xl("gout",'e') ?> </label>
</td>
</tr>

<tr>

<td class='text'    valign="top">
 <?php xl("Dermatological",'e') ?><br> <label><input type="checkbox" name="dermatological[]" value="Rash" /> <?php xl("Rash",'e') ?> </label> <br> <label><input type="checkbox" name="dermatological[]" value="Itching" /> <?php xl("Itching",'e') ?> </label> <br> <label><input type="checkbox" name="dermatological[]" value="other skin problems" /> <?php xl("other skin problems",'e') ?> </label>
</td>

<td class='text'    valign="top">

<?php xl("Men",'e') ?><br> <label><input type="checkbox" name="men[]" value="Prostate problems" /> <?php xl("Prostate problems",'e') ?> </label> <br> <label><input type="checkbox" name="men[]" value="night time urination" /> <?php xl("night time urination",'e') ?> </label>
</td>

<td class='text'    valign="top">

 <?php xl("Women",'e') ?><br> <label><input type="checkbox" name="women[]" value="Abnormal Menstrua periods" /> <?php xl("Abnormal Menstrua periods",'e') ?> </label> <br> <label><input type="checkbox" name="women[]" value="could you be pregnant" /> <?php xl("could you be pregnant",'e') ?> </label>
</td>
</tr>

<tr>

<td class='text'    valign="top">

 <?php xl("Female reproductive",'e') ?><br> <label><input type="checkbox" name="female_reproductive[]" value="breast lumps" /> <?php xl("breast lumps",'e') ?> </label> <br> <label><input type="checkbox" name="female_reproductive[]" value="recent mamogram" /> <?php xl("recent mamogram",'e') ?> </label> <br> <label><input type="checkbox" name="female_reproductive[]" value="pap smear or pelvic exam" /> <?php xl("pap smear or pelvic exam",'e') ?> </label>
</td>

<td class='text'    valign="top">

 <?php xl("Neurological",'e') ?><br> <label><input type="checkbox" name="neurological[]" value="Paralysis-even temporary" /> <?php xl("Paralysis-even temporary",'e') ?> </label> <br> <label><input type="checkbox" name="neurological[]" value="stroke" /> <?php xl("stroke",'e') ?> </label> <br> <label><input type="checkbox" name="neurological[]" value="numbness" /> <?php xl("numbness",'e') ?> </label> <br> <label><input type="checkbox" name="neurological[]" value="loss of balance" /> <?php xl("loss of balance",'e') ?> </label> <br> <label><input type="checkbox" name="neurological[]" value="dizziness" /> <?php xl("dizziness",'e') ?> </label>
</td>

<td class='text'    valign="top">

 <?php xl("Psychiatric",'e') ?><br> <label><input type="checkbox" name="psychiatric[]" value="Unusual thoughts" /> <?php xl("Unusual thoughts",'e') ?> </label> <br> <label><input type="checkbox" name="psychiatric[]" value="Nervousness" /> <?php xl("Nervousness",'e') ?> </label> <br> <label><input type="checkbox" name="psychiatric[]" value="crying or sadness" /> <?php xl("crying or sadness",'e') ?> </label> <br> <label><input type="checkbox" name="psychiatric[]" value="depression" /> <?php xl("depression",'e') ?> </label> <br> <label><input type="checkbox" name="psychiatric[]" value="suicide attempts" /> <?php xl("suicide attempts",'e') ?> </label>
</td>
</tr>

<tr>

<td class='text'    valign="top">

 <?php xl("Endocrinology",'e') ?><br> <label><input type="checkbox" name="endocrinology[]" value="Thyroid disorder" /> <?php xl("Thyroid disorder",'e') ?> </label> <br> <label><input type="checkbox" name="endocrinology[]" value="Diabetes" /><?php xl("Diabetes",'e') ?> </label> <br> <label><input type="checkbox" name="endocrinology[]" value="Excess thirst" /><?php xl("Excess thirst",'e') ?> </label> <br> <label><input type="checkbox" name="endocrinology[]" value="Excess hunger" /> <?php xl("Excess hunger",'e') ?> </label> <br> <label><input type="checkbox" name="endocrinology[]" value="excess urination" /> <?php xl("excess urination",'e') ?> </label>
</td>

<td class='text'    valign="top">

 <?php xl("Hematological",'e') ?><br> <label><input type="checkbox" name="hematological[]" value="Bleeding" /> <?php xl("Bleeding",'e') ?> </label> <br> <label><input type="checkbox" name="hematological[]" value="Easy bruising" /> <?php xl("Easy bruising",'e') ?> </label> <br> <label><input type="checkbox" name="hematological[]" value="risk factors for hiv" /> <?php xl("risk factors for hiv",'e') ?> </label> <br> <label><input type="checkbox" name="hematological[]" value="Anemia" /> <?php xl("Anemia",'e') ?> </label> <br> <label><input type="checkbox" name="hematological[]" value="Cancer" /> <?php xl("Cancer",'e') ?> </label>
</td>

<td class='text'    valign="top">&nbsp;


</td>
</tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Have you had any operations",'e') ?><textarea name="have_you_had_any_operations"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Are you being treated now or have been treated for any illness",'e') ?><textarea name="are_you_being_treated_now_or_have_been_treated_for_any_illness"  rows="4" cols="40"></textarea></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3" style="border: 1px #000000 solid;"><h3> <?php xl("Social History
",'e') ?></h3> </td></tr>

<tr>

<td class='text'  colspan="2" ><strong>

Marital</strong></td>

<td class='text'   valign="top" ><strong>

Health Habits:</strong></td>
</tr>

<tr>

<td class='text'   colspan="2">

<table>

<tr><td class='text' > <?php xl("Marital status",'e') ?>
  <label><input type="checkbox" name="marital_status[]" value="single" /> <?php xl("single",'e') ?> </label>
  <label><input type="checkbox" name="marital_status[]" value="married" /> <?php xl("married",'e') ?> </label>
  <label><input type="checkbox" name="marital_status[]" value="widowed" /> <?php xl("widowed",'e') ?> </label>
  <label><input type="checkbox" name="marital_status[]" value="divorced" /> 
  <?php xl("divorced",'e') ?></label></td></tr>

</table>
</td>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("Do you smoke",'e') ?>
  <label><input type="checkbox" name="do_you_smoke[]" value="Yes" /> <?php xl("Yes",'e') ?> </label>
  <label><input type="checkbox" name="do_you_smoke[]" value="No" /> <?php xl("No",'e') ?> </label></td></tr>

</table>
</td>
</tr>

<tr>

<td class='text'   colspan="2">

<table>

<tr><td class='text' > <?php xl("Occupation",'e') ?><input type="text" name="occupation"  /></td></tr>

</table>
</td>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("How many packs per day",'e') ?><input type="text" name="how_many_packs_per_day"  /></td></tr>

</table>
</td>
</tr>

<tr>

<td class='text'   colspan="2">

<table>

<tr><td class='text' > <?php xl("Leisure activities",'e') ?><input type="text" name="leisure_activities"  /></td></tr>

</table>
</td>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("For how many years",'e') ?><input type="text" name="for_how_many_years"  /></td></tr>

</table>
</td>
</tr>

<tr>

<td class='text'   colspan="2">

<table>

<tr><td class='text' > <?php xl("Educational level",'e') ?><input type="text" name="educational_level"  /></td></tr>

</table>
</td>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("How much alcohol do you drink",'e') ?><input type="text" name="how_much_alcohol_do_you_drink"  /></td></tr>

</table>
</td>
</tr>

<tr>

<td class='text'   colspan="2">&nbsp;


</td>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("Do you use any drugs",'e') ?><input type="text" name="do_you_use_any_drugs"  /></td></tr>

</table>
</td>
</tr>

<tr><td class='text'   colspan="3"  style="border: 1px #000000 solid;">
<H3>Family History:</H3>

</td></tr>
<tr><td class='text'   colspan="3"> <?php xl("Check if any close family members(parents,brothers and sisters,children) have:",'e') ?> </td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Heart problems",'e') ?>
  <label><input type="checkbox" name="heart_problems[]" value="Mother" /> <?php xl("Mother",'e') ?> </label>
  <label><input type="checkbox" name="heart_problems[]" value="Father" /> <?php xl("Father",'e') ?> </label>
  <label><input type="checkbox" name="heart_problems[]" value="Brother" /> <?php xl("Brother",'e') ?> </label>
  <label><input type="checkbox" name="heart_problems[]" value="Sister" /> <?php xl("Sister",'e') ?> </label>
  <label><input type="checkbox" name="heart_problems[]" value="Child" /> <?php xl("Child",'e') ?> </label>
  <label><input type="checkbox" name="heart_problems[]" value="None" /> <?php xl("None",'e') ?> </label></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("High blood pressure",'e') ?>
  <label><input type="checkbox" name="high_blood_pressure[]" value="Mother" /> <?php xl("Mother",'e') ?> </label>
  <label><input type="checkbox" name="high_blood_pressure[]" value="Father" /> <?php xl("Father",'e') ?> </label>
  <label><input type="checkbox" name="high_blood_pressure[]" value="Brother" /> <?php xl("Brother",'e') ?> </label>
  <label><input type="checkbox" name="high_blood_pressure[]" value="Sister" /> <?php xl("Sister",'e') ?> </label>
  <label><input type="checkbox" name="high_blood_pressure[]" value="Child" /> <?php xl("Child",'e') ?> </label>
  <label><input type="checkbox" name="high_blood_pressure[]" value="None" /> 
  <?php xl("None",'e') ?></label></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > <?php xl("Diabetes",'e') ?>
  <label><input type="checkbox" name="diabetes[]" value="Mother" /> <?php xl("Mother",'e') ?> </label>
  <label><input type="checkbox" name="diabetes[]" value="Father" /> <?php xl("Father",'e') ?> </label>
  <label><input type="checkbox" name="diabetes[]" value="Brother" /> <?php xl("Brother",'e') ?> </label>
  <label><input type="checkbox" name="diabetes[]" value="Sister" /> <?php xl("Sister",'e') ?> </label>
  <label><input type="checkbox" name="diabetes[]" value="Child" /> <?php xl("Child",'e') ?> </label>
  <label><input type="checkbox" name="diabetes[]" value="None" /> 
  <?php xl("None",'e') ?></label></td></tr>

</table>
</td></tr>

<tr><td class='text'   colspan="3">

<table>

<tr><td class='text' > cancer</td> <td class='text' ><label><input type="checkbox" name="_cancer[]" value="Mother" /> <?php xl("Mother",'e') ?> </label>
    <label><input type="checkbox" name="_cancer[]" value="Father" /> <?php xl("Father",'e') ?> </label>
    <label><input type="checkbox" name="_cancer[]" value="Brother" /> <?php xl("Brother",'e') ?> </label>
    <label><input type="checkbox" name="_cancer[]" value="Sister" /> <?php xl("Sister",'e') ?> </label>
    <label><input type="checkbox" name="_cancer[]" value="Child" /> <?php xl("Child",'e') ?> </label>
    <label><input type="checkbox" name="_cancer[]" value="None" /> 
    <?php xl("None",'e') ?></label></td></tr>

</table>
    </td></tr>

<tr>

<td class='text'   colspan="3" style="border: 1px #000000 solid;">
<h3>
Hospitalizations:</h3>
</td></tr>

<tr>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("Year",'e') ?><input type="text" name="year"  /></td></tr>

</table>
</td>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("Hospital",'e') ?><input type="text" name="hospital"  /></td></tr>

</table>
</td>

<td class='text'    valign="top">

<table>

<tr><td class='text' > <?php xl("Reason",'e') ?><input type="text" name="reason"  /></td></tr>

</table>
</td>
</tr>

</table>
<table></table><input type="submit" name="submit form" value="submit form" />
</form>
<a href='<?php echo $GLOBALS['webroot']?>/interface/patient_file/encounter/<?php echo $returnurl?>' onclick='top.restoreSession()'> <?php xl("[do not save]",'e') ?> </a>
<?php
formFooter();
?>
