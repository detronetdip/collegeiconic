<?php 
require('assets/require/top.php');
authenticate();

?>
        <div class="path">
          <div class="container">
            <a href="index.php">Home</a>
            /
            <a href="Queries.php">Queries</a>
          </div>
        </div>

        <div class="cartrow" id="catrow">
          <div class="gh">
            <div class="heading">
              <h3>All Queries</h3>
            </div>
            <div class="maincontainer">
            <table class="wishlist">
                <thead>
                    <th>#</th>
                    <th>date & time</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>View</th>
                </thead>
                <tbody>
                <?php
                        $query="select * from queries order by id desc";
                        $res=mysqli_query($con,$query);
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        $st='';
                        $idd=$row['id'];
                        if($row['isread']==0){
                          $st="<span class='badge ofd'> Unread </span>";
                        }else if($row['isread']==1){
                            $st="<span class='badge green'> Seen </span>";
                        }
                    ?>
                      <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                           
                            <?php echo $row['time']; ?>
                            
                        </td>
                        <td> <?php echo $row['uname']; ?></td>
                        <td>
                            <?php echo $st; ?>
                        </td>
                        <td>
                            <div class="acn">
                                <a href="view-detail.php?d=<?php echo $row['id']; ?>" class="view">
                                    <ion-icon name="eye"></ion-icon>
                                </a>
                            </div>
                        </td>
                    </tr>


                    <?php $i++; } ?>
                </tbody>
            </table>
            </div>
          </div>
        </div>
<?php 
require('assets/require/foot.php');
?>