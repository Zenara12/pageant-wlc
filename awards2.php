<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

        zenlike1.0 by nodethirtythree design
        http://www.nodethirtythree.com

-->
<html>
    <head>

    </head>
    <body>
        <?php
        require_once ('config.php');
        if ($_GET['catKey'] == 1) {
            ?>
            <table border="1">
                <tr><td colspan="9" style="text-align: center"><h1>Best in Production Number</h1></td>
                </tr>
                <tr>
                    <td>Contestant Name</td>
                    <td>Contestant No.</td>
                    <?php 
                        $count_judge = 0;
                        $k = $con->query("SELECT judgeID FROM judge");
                        while($r = $k->fetch_array()){ ?>
                            <td><?php echo $r[0]; ?></td>
                            <?php $count_judge++;
                        }
                    ?>
                    <td>Total</td>
                </tr>
                <?php 
                $result = mysqli_query($con, "SELECT sum(rate) as expr1,conID FROM tally WHERE categID between 1 and 3 group by conID order by expr1 desc");
                //$del=mysqli_query($con,"truncate tally2");
                while ($row = mysqli_fetch_array($result)) {
                    $result2 = mysqli_query($con, "SELECT * FROM contestants where conID=" . $row[1]);
                    $row2 = mysqli_fetch_array($result2);
                    ?>
                    <tr>
                        <td><?php echo $row2[1] ?></td>
                        <td><?php echo $row2[0] ?></td>
                        <?php
                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                $res = $con->query("SELECT sum(rate) as r FROM tally WHERE categID between 1 and 3 and conID=$row2[0] and judgeID='$jid'");
                                $g = mysqli_fetch_assoc($res);
                                ?>
                                <td><?php echo $g['r']; ?></td>
                                <?php
                            }
                        ?>
                        <td style="text-align: center"> <?php echo ($row[0]/$count_judge); ?></td>
                        <?php 

                        $con->query("INSERT INTO tally2(conID,categID,rate) VALUES ($row[1],1,($row[0]/$count_judge))") or die($con->error); ?>
                    </tr>
                    <?php
                    ?>

                <?php } ?>    
            </table>
        <?php } else if ($_GET['catKey'] == 2) {
            ?>
            <table border="1">
                <tr><td colspan="9" style="text-align: center"><h1>Best in Fun Wear</h1></td>
                </tr>
                <tr>
                    <td>Contestant Name</td>
                    <td>Contestant No.</td>
                    <?php 
                        $count_judge = 0;
                        $k = $con->query("SELECT judgeID FROM judge");
                        while($r = $k->fetch_array()){ ?>
                            <td><?php echo $r[0]; ?></td>
                            <?php $count_judge++;
                        }
                    ?>
                    <td>Total</td>
                </tr>
                <?php
                $result = mysqli_query($con, "SELECT sum(rate) as expr1,conID FROM tally WHERE categID between 4 and 7 group by conID order by expr1 desc");
                //$del=mysqli_query($con,"truncate tally2");
                $total2 = array();

                while ($row = mysqli_fetch_array($result)) {
                    $result2 = mysqli_query($con, "SELECT * FROM contestants where conID=" . $row[1]);
                    $row2 = mysqli_fetch_array($result2);
                    $total = 0; 
                    ?>
                    <tr>
                        <td><?php echo $row2[1] ?></td>
                        <td><?php echo $row2[0] ?></td>
                        <?php

                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                // 
                                
                                    $res = $con->query("SELECT (sum(tally.rate) * .85) + prelim.preRate as r FROM tally,prelim where tally.categID between 4 and 7 and tally.conID=$row2[0] and prelim.conID=$row2[0] and judgeID='$jid' ");
                                    $g = mysqli_fetch_assoc($res);
                                    
                                
                                        // $rs4 = $con->query("SELECT * FROM prelim where conID=$row2[0]");
                                        // $fetch2 = mysqli_fetch_assoc($rs4);
                                        // $total =($total * .85)+$fetch2['preRate'];
                                ?>
                                <td><?php echo $g['r']; $total+=$g['r'];   ?></td>

                                <?php
                            }
                        ?>
                        <td style="text-align: center"> <?php echo ($total/$count_judge); 

                        ?></td>
                    </tr>
                    <?php $con->query("INSERT INTO tally2(conID,categID,rate) VALUES ($row[1],2,($total/$count_judge))") or die($con->error); 
                    ?>

                <?php } ?>    
            </table>
            <table border = "1">
                <tr>
                    <td>Contestant no.</td>
                    <td>Total rate</td>
                </tr>
                
                    <?php 
                        $rs = $con->query("SELECT conID,rate FROM tally2 where categID = 2 order by rate desc ");
                        while($g = mysqli_fetch_assoc($rs)){
                            ?>
                                <tr>
                                <td><?php echo $g['conID'] ?></td>
                                <td><?php echo $g['rate'] ?></td>
                                </tr>
                            <?php
                        }


                    ?>
                
            </table>

        <?php } else if ($_GET['catKey'] == 3) {
            ?>  
            <table border="1">
                <tr><td colspan="9" style="text-align: center"><h1>Best in Formal Wear</h1></td>
                </tr>
                <tr>
                    <td>Contestant Name</td>
                    <td>Contestant No.</td>
                    <?php 
                        $count_judge = 0;
                        $k = $con->query("SELECT judgeID FROM judge");
                        while($r = $k->fetch_array()){ ?>
                            <td><?php echo $r[0]; ?></td>
                            <?php $count_judge++;
                        }
                    ?>
                    <td>Total</td>
                </tr>
                <?php
                $result = mysqli_query($con, "SELECT sum(rate) as expr1,conID FROM tally WHERE categID between 8 and 10 group by conID order by expr1 desc");
                //$del=mysqli_query($con,"truncate tally2");
                while ($row = mysqli_fetch_array($result)) {
                    $result2 = mysqli_query($con, "SELECT * FROM contestants where conID=" . $row[1]);
                    $row2 = mysqli_fetch_array($result2);
                    ?>
                    <tr>
                        <td><?php echo $row2[1] ?></td>
                        <td><?php echo $row2[0] ?></td>
                        <?php
                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                $res = $con->query("SELECT sum(rate) as r FROM tally WHERE categID between 8 and 10 and conID=$row2[0] and judgeID='$jid'");
                                $g = mysqli_fetch_assoc($res);
                                ?>
                                <td><?php echo $g['r']; ?></td>
                                <?php
                            }
                        ?>
                        <td style="text-align: center"> <?php echo ($row[0]/$count_judge); ?></td>
                    </tr>
                    <?php
                    $con->query("INSERT INTO tally2(conID,categID,rate) VALUES ($row[1],3,($row[0]/$count_judge))") or die($con->error);
                    ?>

                <?php } ?>   



            </table>
            <br>
            <table border="1">
                <tr><td colspan="7" style="text-align: center"><h1>Top 5</h1></td></tr>
                <tr>
                    <td>Contestant No.</td>
                    <td>Name</td>
                    <td>Production</td>
                    <td>Funwear</td>
                    <td>Prelim</td>
                    <td>Formalwear</td>
                    <td>Total</td>
                </tr>
                <?php 
                    $con->query("truncate topcontestants");
                    $rs3 = $con->query("SELECT sum(rate) as expr1,conID FROM tally2 group by conID order by expr1 desc LIMIT 5");
                    while($row3 = $rs3->fetch_array()){
                        $rs4 = $con->query("SELECT * FROM contestants WHERE conID = $row3[1]");
                        $row4 = $rs4->fetch_array();
                        $rs5 = $con->query("SELECT sum(rate) as expr1,conID FROM tally2 where conID=$row3[1] and categID = 1 order by expr1");
                        $row5 = $rs5->fetch_array();
                        $rs6 = $con->query("SELECT sum(rate) as expr1,conID FROM tally2 where conID=$row3[1] and categID = 2 order by expr1");
                        $row6 = $rs6->fetch_array();
                        $rs7 = $con->query("SELECT sum(rate) as expr1,conID FROM tally2 where conID=$row3[1] and categID = 3 order by expr1");
                        $row7 = $rs7->fetch_array();
                        $rs8 = $con->query("SELECT sum(preRate) as expr1,conID FROM prelim where conID=$row3[1] order by expr1");
                        $row8 = $rs8->fetch_array();

                        $con->query("INSERT INTO topcontestants(tConID,tConName, tConDesc,tConImg )
                                VALUES ($row4[0],'$row4[1]','$row4[2]','$row4[3]' )") or die($con->error);
                        ?>
                            <tr>
                                <td><?php echo $row4[0]; ?></td>
                                <td><?php echo $row4[1]; ?></td>
                                <td><?php echo $row5[0]; ?></td>
                                <td><?php echo $row6[0]; ?></td>
                                <td><?php echo $row8[0]; ?></td>
                                <td><?php echo $row7[0]; ?></td>
                                <td><?php echo $row3[0]; ?></td>
                            </tr>
                        <?php
                    }

                ?>
            </table>
            <?php
        } else if ($_GET['catKey'] == 4) {
            ?><table border="1">
                <tr><td colspan="9" style="text-align: center"><h1>For Top 3</h1></td>
                </tr>
                <tr>
                    <td>Contestant Name</td>
                    <td>Contestant No.</td>
                    <?php 
                        $count_judge = 0;
                        $k = $con->query("SELECT judgeID FROM judge");
                        while($r = $k->fetch_array()){ ?>
                            <td><?php echo $r[0]; ?></td>
                            <?php $count_judge++;
                        }
                    ?>
                    <td>Total</td>
                </tr>
                <!-- End of table header -->
                <?php
                $result = mysqli_query($con, "SELECT sum(rate) as expr1,conID FROM tally2 group by conID order by expr1 desc");
                while ($row = mysqli_fetch_array($result)) {
                    $rs1 = $con->query("SELECT * FROM contestants WHERE conID=$row[1]");
                    $row1 = $rs1->fetch_array();
                    ?>
                    <tr>
                        <td><?php echo $row1[1] ?></td>
                        <td><?php echo $row1[0] ?></td>
                        <?php
                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                $rs2 = $con->query("SELECT sum(rate),judgeID,conID FROM tally2 where conID=$row1[0] and judgeID='$jid'");
                                $row2 = $rs2->fetch_array();
                                ?>
                                <td><?php echo $row2[0]; ?></td>
                                <?php
                            }

                        ?>

                        <td style="text-align: center"> <?php echo $row[0]; ?></td>
                    </tr>
            <?php } ?>
            </table>
            <br>
            <table border="1">
                <tr><td colspan="3" style="text-align: center"><h1>Top 3</h1></td></tr>
                <tr>
                    <td>Contestant No.</td>
                    <td>Name</td>
                    <td>Rate</td>
                </tr>
                <?php 
                    $con->query("truncate topcontestants");
                    $rs3 = $con->query("SELECT sum(rate) as expr1,conID FROM tally2 group by conID order by expr1 desc LIMIT 3");
                    while($row3 = $rs3->fetch_array()){
                        $rs4 = $con->query("SELECT * FROM contestants WHERE conID = $row3[1]");
                        $row4 = $rs4->fetch_array(); 
                        $con->query("INSERT INTO topcontestants(tConID,tConName, tConDesc,tConImg )
                                VALUES ($row4[0],'$row4[1]','$row4[2]','$row4[3]' )") or die($con->error);
                        ?>
                            <tr>
                                <td><?php echo $row4[0]; ?></td>
                                <td><?php echo $row4[1]; ?></td>
                                <td><?php echo $row3[0]; ?></td>
                            </tr>
                        <?php
                    }

                ?>
            </table>
        <?php } else if ($_GET['catKey'] == 5) {
            ?><table border="1">
                <tr><td colspan="9" style="text-align: center"><h1>Final</h1></td>
                </tr>
                <tr>
                    <td>Contestant Name</td>
                    <td>Contestant No.</td>
                    <?php 
                        $count_judge = 0;
                        $k = $con->query("SELECT judgeID FROM judge");
                        while($r = $k->fetch_array()){ ?>
                            <td><?php echo $r[0]; ?></td>
                            <?php $count_judge++;
                        }
                    ?>
                    <td>Total</td>
                </tr>
                <!-- End of table header -->
                <?php
                $result = mysqli_query($con, "SELECT sum(tRate) as expr1,tconID FROM toptally where tCategID between 1 and 2 group by tconID order by expr1 desc");
                while ($row = mysqli_fetch_array($result)) {
                    $rs1 = $con->query("SELECT * FROM topcontestants WHERE ID=$row[1]");
                    $row1 = $rs1->fetch_array();
                    ?>
                    <tr>
                        <td><?php echo $row1[1]; ?></td>
                        <td><?php echo $row1[0]; ?></td>
                        <?php
                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                $rs2 = mysqli_query($con,"SELECT sum(tRate),tJudgeID,tconID FROM toptally where tconID=$row1[4] and tJudgeID='$jid'");
                                $row2 = mysqli_fetch_array($rs2);
                                ?>
                                <td><?php echo $row2[0]; ?></td>
                                <?php
                            }

                        ?>

                        <td style="text-align: center"> <?php echo ($row[0]/$count_judge); ?></td>
                    </tr>
            <?php } ?>
            </table>
        <?php }

          ?>
    </body>
</html>