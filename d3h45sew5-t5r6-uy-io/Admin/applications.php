<?php 
require('assets/require/top.php');
authenticate();

?>
        <div class="path">
          <div class="container">
            <a href="index.php">Home</a>
            /
            <a href="applications.php">Applications</a>
          </div>
        </div>

        <div class="cartrow" id="catrow">
          <div class="gh">
            <div class="heading">
              <h3>All Applications</h3>
            </div>
            <div class="maincontainer">
            <table class="wishlist">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date & Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        $query="select * from application order by id desc";
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
                         <?php echo $row['aname']; ?>
                        </td>
                        <td> <?php echo $row['time_s']; ?></td>
                        <td>
                            <?php echo $st; ?>
                        </td>
                        <td>
                            <div class="acn">
                                <a href="application-detail.php?d=<?php echo $row['id']; ?>" class="view">
                                    <ion-icon name="eye"></ion-icon>
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