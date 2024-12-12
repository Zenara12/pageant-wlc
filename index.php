<?php require("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title><?php include("includes/title.php"); ?></title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>


    </head>

    <body>
        <div id="main_container">
            <div id="header">
                <div id="logo"><h2> <?php include("includes/title.php"); ?></h2><br/> <h3>Welcome JUDGE</h3></div>

                <div id="menu">
                </div>

            </div>

            <div class="green_box">
                <div class="clock">

                </div>
                <div class="text_content">
                    <h1>Please select judge number</h1>
                    <br/>
                    <form name="form1" method="get" action="production.php" > 
                        <select id="judge" name="judge">
                            <?php 
                                $rs = $con->query("SELECT judgeID FROM judge");
                                while($row = $rs->fetch_array()){ ?>
                                    <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                                    <?php
                                }
                             ?>
                        </select> 
                        <input type="Submit" value"   LOGIN   "/>
                </form>

            </div>
        </div><!--end of green box-->

        <div id="main_content">
            <div id="left_content">
            </div><!--end of left content-->

            <div style=" clear:both;"></div>
        </div><!--end of main content-->


        <div id="footer">
            <div class="copyright">
                &copy;2017 CICTE Minor Projects. All rights reserved
            </div>
            <div class="footer_links"> 
            </div>
        </div>  
        </form>
    </div> <!--end of main container-->
</body></html>