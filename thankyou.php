<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

        zenlike1.0 by nodethirtythree design
        http://www.nodethirtythree.com

-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <?php
        require_once ('config.php');
        $result = mysqli_query($con, "SELECT * FROM toptally where tJudgeID='" . $_GET['judge'] . "'
            and tCategID=1");
        $ctr = 0;
        while ($row = mysqli_fetch_array($result)) {
            $ctr++;
        }
        if ($ctr == 0) {

            foreach ($_POST as $name => $value) {
//                print "$name : $value<br>";
                $cID = 0;
                for ($i = 1; $i <= 5; ++$i) {
                    if ($name == ("b" . $i)) {
                        $cID = $i;
                        $cat = 1;
                        $i = 13;
                    }else if ($name == ("i" . $i)) {
                        $cID = $i;
                        $cat = 2;
                        $i = 13;
                    }

                }
                $sql = "INSERT INTO toptally (tCategID ,tJudgeID ,tconID ,tRate)
        VALUES ($cat, '" . $_GET['judge'] . "'," . $cID . "," . $value . ")";
                if (!mysqli_query($con, $sql)) {
                    die('Error: ' . mysqli_error($con));
                }
            }
        }
       
        ?>
        <div id="main_container">
            <div id="header">
                <div id="logo"><h2> 2017 Mr & Miss Business 2017</h2><br/> <h3>Welcome <?php echo $_GET['judge'] ?></h3></div>

                <div id="menu">
                </div>

            </div>

            <div class="green_box">
                <div class="clock">

                </div>
                <div class="text_content">
                    <h1>Thank you very much</h1>
                    <br/>
                   
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

    </body>
</html>