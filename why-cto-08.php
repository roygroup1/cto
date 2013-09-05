<?php
include("includes/include-top.php");
$page_content = com_db_output(com_db_GetValue("select page_content from " . TABLE_PAGE_CONTENT . " where page_name='".$current_page."'"));
include(DIR_INCLUDES."header.php");
?>	
<!-- heading start --> 
<tr>
      <td align="left"  valign="top">&nbsp;</td>
      <td align="left" valign="top"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	       <tr>
        <td align="left" valign="top" class="header-nav"><a href="index.html">Home</a>  /  <a href="#" class="active"><?=$PageTitle;?></a></td>
      </tr>
   <tr>
      <td align="left" valign="top"><img src="images/specer.gif" width="1" height="10" alt="" title="" /></td>
      </tr>
      <tr>
      <td align="left" valign="middle" class="registration-page-heading-bg"><table width="960" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="left" valign="middle" class="registration-page-title-text"><?=$PageTitle;?></td>
        </tr>
      </table></td>
      </tr>
	    <tr>
      <td align="left" valign="top" class="registration-page-bg"><img src="images/blue-down-arrow.jpg" width="235" height="13"  alt="" title="" /></td>
      </tr>
      </table></td>
      <td align="left"  valign="top">&nbsp;</td>
    </tr>
	<!-- heading end -->
    <!-- content start -->
	
	<tr>
      <td align="left"  valign="top">&nbsp;</td>
      <td align="center" valign="top" class="registration-page-bg"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" valign="top">
		   <table width="928" border="0" align="center" cellpadding="0" cellspacing="0">
			  <tr>
			   <td align="left" valign="top"><?=$page_content?></td>
			  </tr>
		   </table>
		 </td>
        </tr>
        <tr>
          <td align="center" valign="top"><img src="images/registration-page-bottom-bg.jpg" width="960" height="11" alt="" title="" /></td>
        </tr>
      </table></td>
      <td align="left"  valign="top">&nbsp;</td>
    </tr>
 <!-- content end-->
   <!-- footer link start -->
<?php include(DIR_INCLUDES."footer-link.php");?>
   <!-- footer link end -->
<?php      
include(DIR_INCLUDES."footer.php");	
?>