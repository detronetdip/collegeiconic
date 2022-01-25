<?php 
require('assets/require/top.php');
authenticate();

?>
        <div class="path">
          <div class="container">
            <a href="index.php">Home</a>
            /
            <a href="colleges.php">colleges</a>
          </div>
        </div>

        <div class="cartrow" id="catrow">
          <div class="gh">
            <div class="heading">
              <h3>All colleges</h3>
              <a href="add_college.php">Add College</a>
            </div>
            <div class="maincontainer">
            <table class="wishlist">
                <thead>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        $query="select * from colleges order by id desc";
                        $res=mysqli_query($con,$query);
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        $st='';
                        $cb='';
                        $idd=$row['id'];
                        if($row['status']==0){
                          $st="<span class='badge ofd'> Deactive </span>";
                           
                          $cb='<a href="javascript:void(0)" class="edit" onclick="college_acdc('.$idd.', 1)">
                          <ion-icon name="wifi"></ion-icon>
                          </a>';
                        }else if($row['status']==1){
                            $st="<span class='badge green'> Active </span>";
                            $cb='<a href="javascript:void(0)" class="nedit" onclick="college_acdc('.$idd.', 0)">
                            <ion-icon name="warning-outline"></ion-icon>
                        </a>';
                        }
                    ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <a href="javascript:void(0)">
                            <img src="../../assets/images/colleges/<?php echo $row['logo']; ?>" alt="product" />
                            </a>
                        </td>
                        <td> <?php echo $row['name']; ?></td>
                        <td>
                            <?php echo $st; 
                            
                                if($row['is_popular']==1){
                                    echo "<br>
                                    <br><span class='badge red small'> Popular </span>";
                                }
                            ?>
                        </td>
                        <td>
                            <div class="acn">
                            <?php echo $cb; ?>
                                <a href="college-detail.php?d=<?php echo $row['id']; ?>" class="view">
                                    <ion-icon name="eye-outline"></ion-icon>
                                </a>
                                <a href="javascript:void" class="del" onclick="college_del(<?php echo $row['id']; ?>)">
                                    <ion-icon name="trash"></ion-icon>
                                </a>
                            </div>
                        </td>
                    </tr>
            <?php
                $i++;
            }
            ?>
                </tbody>
            </table>
            </div>
          </div>
        </div>
<?php 
require('assets/require/foot.php');
?>