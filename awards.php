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
        
        ?>
        <h1>Production Number</h1>
        <table title="Production Number" border="0">
            
            <tr>
                <td>Contestant No.</td>
                <?php 
                    $count_judge = 0;
                    $k = $con->query("SELECT judgeID FROM judge");
                	while($r = $k->fetch_array()){ ?>
                		<td><?php echo $r[0]; ?></td>
                		<?php $count_judge++;
                	}
                ?>
            </tr>
           	<!-- end of table header -->
            <?php 
            	$cat = 1;
            	$rs = $con->query("SELECT * FROM contestants");
            	while($row = $rs->fetch_array()){ ?>
            		<tr>
            			<td><?php echo $row[0] ?></td>
            			<?php

            				for($i=1 ; $i<=$count_judge; $i++){
            					$jid = 'Judge'.$i; 
            					$rs2 = $con->query("SELECT * FROM tally where categID=$cat and conID=$row[0] and judgeID='$jid'");
            					if(mysqli_num_rows($rs2) > 0){
                                    $total =0;
            						 for ($j=1; $j < 4; $j++) { 
                                        $rs3 = $con->query("SELECT * FROM tally where categID=$j and conID=$row[0] and judgeID='$jid'");
                                        $fetch1 = mysqli_fetch_assoc($rs3);
                                        $total = $total + $fetch1['rate'];

                                    }?>

	            					<td><?php echo $total; ?></td>
	            					<?php
            					}else{ 
            						echo "<td>0</td>";
            					}
            					
            				}
            			?>
            			
            		</tr>
            		<?php
            	}
            ?>
            <!-- end of table body -->
        </table>
        

        <form name="form1" method="POST" action="awards2.php?catKey=1" >
            <input type="submit" value="       VIEW      "/>
        </form>

        <!-- ---------------------------------------------------- -->


        <h1>Fun wear</h1>
        <table title="Fun wear" border="0">
            
            <tr>
                <td>Contestant No.</td>
                <?php 
                    $count_judge = 0;
                    $k = $con->query("SELECT judgeID FROM judge");
                    while($r = $k->fetch_array()){ ?>
                        <td><?php echo $r[0]; ?></td>
                        <?php $count_judge++;
                    }
                ?>
            </tr>
            <!-- end of table header -->
            <?php 
                $cat = 4;
                $rs = $con->query("SELECT * FROM contestants");
                while($row = $rs->fetch_array()){ ?>
                    <tr>
                        <td><?php echo $row[0] ?></td>
                        <?php
                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                $rs2 = $con->query("SELECT * FROM tally where categID=$cat and conID=$row[0] and judgeID='$jid'");
                                $total =0;
                                if(mysqli_num_rows($rs2) > 0){
                                    
                                     for ($j=4; $j < 8; $j++) { 
                                        $rs3 = $con->query("SELECT * FROM tally where categID=$j and conID=$row[0] and judgeID='$jid'");
                                        $fetch1 = mysqli_fetch_assoc($rs3);
                                        

                                        $total = $total + $fetch1['rate'];

                                    }
                                    $rs4 = $con->query("SELECT * FROM prelim where conID=$row[0]");
                                        $fetch2 = mysqli_fetch_assoc($rs4);
                                        $total =($total * .85)+$fetch2['preRate'];
                                    ?>

                                    <td><?php echo $total; ?></td>
                                    <?php
                                }else{ 
                                    echo "<td>0</td>";
                                }
                                
                            }
                        ?>
                        
                    </tr>
                    <?php
                }
            ?>
            <!-- end of table body -->
        </table>
        

        <form name="form1" method="POST" action="awards2.php?catKey=2" >
            <input type="submit" value="       VIEW      "/>
        </form>

        <!-- ---------------------------------------------------- -->

        <h1>Formal wear</h1>
        <table title="Formal wear" border="0">
            
            <tr>
                <td>Contestant No.</td>
                <?php 
                    $count_judge = 0;
                    $k = $con->query("SELECT judgeID FROM judge");
                    while($r = $k->fetch_array()){ ?>
                        <td><?php echo $r[0]; ?></td>
                        <?php $count_judge++;
                    }
                ?>
            </tr>
            <!-- end of table header -->
            <?php 
                $cat = 8;
                $rs = $con->query("SELECT * FROM contestants");
                while($row = $rs->fetch_array()){ ?>
                    <tr>
                        <td><?php echo $row[0] ?></td>
                        <?php
                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                $rs2 = $con->query("SELECT * FROM tally where categID=$cat and conID=$row[0] and judgeID='$jid'");
                                if(mysqli_num_rows($rs2) > 0){
                                    $total =0;
                                     for ($j=8; $j < 11; $j++) { 
                                        $rs3 = $con->query("SELECT * FROM tally where categID=$j and conID=$row[0] and judgeID='$jid'");
                                        $fetch1 = mysqli_fetch_assoc($rs3);
                                        $total = $total + $fetch1['rate'];

                                    }?>
                                    <td><?php echo $total; ?></td>
                                    <?php
                                }else{ 
                                    echo "<td>0</td>";
                                }
                                
                            }
                        ?>
                        
                    </tr>
                    <?php
                }
            ?>
            <!-- end of table body -->
        </table>
        

        <form name="form1" method="POST" action="awards2.php?catKey=3" >
            <input type="submit" value="       VIEW      "/>
        </form>

        <!-- ---------------------------------------------------- -->

        <h1>For Top 5</h1>
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
        
        <form name="form4" method="POST" action="awards2.php?catKey=5" >
            <input type="submit" value="       VIEW      "/>
        </form>
        <!--===============-->
        <!--====================================-->

        <h1>Final</h1>
        <table title="Beauty" border ="1">
            <tr>
                <td>Contestant No.</td>
                <?php 
                    $count_judge = 0;
                    $k = $con->query("SELECT judgeID FROM judge");
                    while($r = $k->fetch_array()){ ?>
                        <td><?php echo $r[0]; ?></td>
                        <?php $count_judge++;
                    }
                ?>
<?php 
                $cat = 1;
                $rs = $con->query("SELECT * FROM topcontestants");
                while($row = $rs->fetch_array()){ ?>
                    <tr>
                        <td><?php echo $row[0] ?></td>
                        <?php

                            for($i=1 ; $i<=$count_judge; $i++){
                                $jid = 'Judge'.$i; 
                                $rs2 = $con->query("SELECT * FROM toptally where tCategID=$cat and tconID=$row[4] and tJudgeID='$jid'");
                                if(mysqli_num_rows($rs2) > 0){
                                    $total =0;
                                     for ($j=1; $j < 3; $j++) { 
                                        $rs3 = $con->query("SELECT * FROM toptally where tCategID=$j and tconID=$row[4] and tJudgeID='$jid'");
                                        $fetch1 = mysqli_fetch_assoc($rs3);
                                        $total = $total + $fetch1['tRate'];

                                    }?>

                                    <td><?php echo $total; ?></td>
                                    <?php
                                }else{ 
                                    echo "<td>0</td>";
                                }
                                
                            }
                        ?>
                        
                    </tr>
                    <?php
                }
            ?>
            
        </table>
        
        <form name="form4" method="POST" action="awards2.php?catKey=5" >
            <input type="submit" value="       VIEW      "/>
        </form>

    </body>
</html>