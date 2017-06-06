 <?php  
       include "stu_list.php"; 
        $sql = "SELECT COUNT(regno) FROM Student";  
        $rs_result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_row($rs_result);  
        $total_records = $row[0];
        $limit=4;   
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<nav><ul class='pagination' call_user_func(simplePagination)>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='stu_list.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
        ?>

        <script type="text/javascript">
            $(document).ready(function(){
            $('.pagination').pagination({
                    items: <?php echo $total_records;?>,
                    itemsOnPage: <?php echo $limit;?>,
                    cssStyle: 'light-theme',
                    currentPage : <?php echo $page;?>,
                    hrefTextPrefix : 'index.php?page='
                });
                });
            </script>