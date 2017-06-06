<HTML>
<BODY>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dist/simplePagination.css" />
<script src="dist/jquery.simplePagination.js"></script>
        

        <table class="table table-bordered table-striped">  
    <thead>  
    <tr>  
    <th>Reg No</th>  
    <th>Name</th>
    <th>E-Mail</th>  
    </tr>  
    </thead>  
    <tbody id="target-content">
    </tbody> 
    </table>
    <nav><ul class="pagination">
    <?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
                if($i == 1):?>
                <li class='active'  id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
                <?php else:?>
                <li id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
            <?php endif;?>          
    <?php endfor;endif;?>
    </ul></nav>
    </BODY>
    </HTML>
        