<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title><?php include("includes/title.php"); ?></title>
        <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
        <script type="text/javascript">
            function validateForm()
            {
                for (var i = 1; i <= 12; ++i)
                {

                    var x = document.forms["form1"]["a" + i].value;
                    if (x == null || x == "")
                    {
                        alert("Contestant #" + i + "\'s Beauty rate is empty");
                        return false;
                    }
                    if (x < 1 || x > 35)
                    {
                        alert("Contestant #" + i + "\'s Beauty rate must be from 1 to 35 only");
                        return false;
                    }
                    if (isNaN(x)) {
                        alert("Contestant #" + i + "\'s Beauty rate must be a number");
                        return false;

                    }

                    var x = document.forms["form1"]["b" + i].value;
                    if (x == null || x == "")
                    {
                        alert("Contestant #" + i + "\'s Poise and Confidence rate is empty");
                        return false;
                    }
                    if (x < 1 || x > 45)
                    {
                        alert("Contestant #" + i + "\'s Poise and Confidence rate must be from 1 to 45 only");
                        return false;
                    }
                    if (isNaN(x)) {
                        alert("Contestant #" + i + "\'s Poise and Confidence Impact rate must be a number");
                        return false;

                    }

                    var x = document.forms["form1"]["c" + i].value;
                    if (x == null || x == "")
                    {
                        alert("Contestant #" + i + "\'s Audience Impact rate is empty");
                        return false;
                    }
                    if (x < 1 || x > 20)
                    {
                        alert("Contestant #" + i + "\'s Audience Impact rate must be from 1 to 20 only");
                        return false;
                    }
                    if (isNaN(x)) {
                        alert("Contestant #" + i + "\'s Audience Impact rate must be a number");
                        return false;

                    }
                }

            }
        </script>
        <?php
        require_once ('config.php');
        
        ?>
    </head>

    <body>
        <div id="main_container">
            <form name="form1" method="post" action="funwear.php?judge=<?php echo $_GET['judge'] ?>" onsubmit="return validateForm()">
                <div id="header">
                    <div id="logo"><h2> <?php include("includes/title.php"); ?></h2><br/> <h3>Welcome <?php echo $_GET['judge'] ?></h3></div>

                    <div id="menu">
                        <ul>                                        
                        <li><a class="current" href="#" title="">Production Number</a></li>
                        <li><a href="funwear.php?judge=<?php echo $_GET['judge'] ?>">Fun Wear</a></li>
                        <li><a href="formal.php?judge=<?php echo $_GET['judge'] ?>">Formal Wear</a></li>
                        <li><a href="top5.php?judge=<?php echo $_GET['judge'] ?>">Top 5</a></li>
                        </ul>
                    </div>

                </div>

                <div class="green_box">
                    <div class="clock">
                        <img src="images/guy.png" alt="" title=""/>             
                    </div>
                    <div class="text_content">
                        <h1>Production Number</h1>
                        <p class="green">
                            NOTE: Please use the following as basis for rating the Production Number
                        </p>
                        <h1>Beauty (1 to 35)</h1>
                        <h1>Poise and Confidence (1 to 45)</h1>
                        <h1>Audience (1 to 20)</h1>
                    </div>
                </div><!--end of green box-->

                <div id="main_content">
                    <div id="left_content">
                        <table border="0" width="100%" align="center">
                            <tr>
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    $result = mysqli_query($con, "SELECT * FROM contestants where conID=$i");
                                    $row = mysqli_fetch_array($result);
                                    ?>
                                    <td align="center"><img src="<?php echo $row[3] ?>" class="center" alt="A chinese lion statue" /></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    $result = mysqli_query($con, "SELECT * FROM contestants where conID=$i");
                                    $row = mysqli_fetch_array($result);
                                    ?>
                                    <td align="center"><sub>No. <?php echo $row[0]; ?></sub> <br><strong ><?php echo $row[1] ?></strong> <br/> <sub style="color:grey"><?php echo $row[2] ?></sub></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                for ($i = 1; $i <= 4; $i++) {
                                    ?>
                                    <td style="color:red"  align="center">
                                        <sub>Beauty</sub><br>
                                        <input id="a<?php echo $i; ?>" name="a<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                        <sub>Poise and Confidence</sub><br>
                                        <input id="b<?php echo $i; ?>" name="b<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                        <sub>Audience Impact</sub><br>
                                        <input id="c<?php echo $i; ?>" name="c<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <!--Next Five Contestants-->
                            <tr>
                                <?php
                                for ($i = 5; $i <= 8; $i++) {
                                    $result = mysqli_query($con, "SELECT * FROM contestants where conID=$i");
                                    $row = mysqli_fetch_array($result);
                                    ?>
                                    <td align="center"><img src="<?php echo $row[3] ?>" class="center" alt="A chinese lion statue" /></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                for ($i = 5; $i <= 8; $i++) {
                                    $result = mysqli_query($con, "SELECT * FROM contestants where conID=$i");
                                    $row = mysqli_fetch_array($result);
                                    ?>
                                    <td align="center"><sub>No. <?php echo $row[0]; ?></sub> <br><strong><?php echo $row[1] ?></strong> <br/> <sub><?php echo $row[2] ?></sub></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                for ($i = 5; $i <= 8; $i++) {
                                    ?>
                                    <td style="color:red"  align="center">
                                        <sub>Beauty</sub><br>
                                        <input id="a<?php echo $i; ?>" name="a<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                        <sub>Poise and Confidence</sub><br>
                                        <input id="b<?php echo $i; ?>" name="b<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                        <sub>Audience Impact</sub><br>
                                        <input id="c<?php echo $i; ?>" name="c<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <!--Next Five Contestants-->
                            <tr>
                                <?php
                                for ($i = 9; $i <= 12; $i++) {
                                    $result = mysqli_query($con, "SELECT * FROM contestants where conID=$i");
                                    $row = mysqli_fetch_array($result);
                                    ?>
                                    <td align="center"><img src="<?php echo $row[3] ?>" class="center" alt="A chinese lion statue" /></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                for ($i = 9; $i <= 12; $i++) {
                                    $result = mysqli_query($con, "SELECT * FROM contestants where conID=$i");
                                    $row = mysqli_fetch_array($result);
                                    ?>
                                    <td align="center"><sub>No. <?php echo $row[0]; ?></sub> <br><strong><?php echo $row[1] ?></strong> <br/> <sub><?php echo $row[2] ?></sub></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                for ($i = 9; $i <= 12; $i++) {
                                    ?>
                                    <td style="color:red"  align="center">
                                        <sub>Beauty</sub><br>
                                        <input id="a<?php echo $i; ?>" name="a<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                        <sub>Poise and Confidence</sub><br>
                                        <input id="b<?php echo $i; ?>" name="b<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                        <sub>Audience Impact</sub><br>
                                        <input id="c<?php echo $i; ?>" name="c<?php echo $i; ?>" type="tel" style="font-size: 30px;text-align: center" maxlength="4" size="4"/><br>
                                    </td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <?php
                                }
                                ?>
                            </tr>
                        </table>
                    </div><!--end of left content-->
                    <div style=" clear:both;"></div>
                </div><!--end of main content-->


                <?php include("includes/footer.php"); ?>  
            </form>
        </div> <!--end of main container-->
    </body></html>