<style type="text/css">
    table {
        table-layout: fixed;
        word-wrap: break-word;
        position: static; 
    }
    /* @-webkit-keyframes my {
       0% { color: #F8CD0A; } 
       50% { color: #fff;  } 
       100% { color: #F8CD0A;  } 
   }
   @-moz-keyframes my { 
       0% { color: #F8CD0A;  } 
       50% { color: #fff;  }
       100% { color: #F8CD0A;  } 
   }
   @-o-keyframes my { 
       0% { color: #F8CD0A; } 
       50% { color: #fff; } 
       100% { color: #F8CD0A;  } 
   }
   @keyframes my { 
       0% { color: #F8CD0A;  } 
       50% { color: #fff;  }
       100% { color: #F8CD0A;  } 
   } 

   @keyframes glowing {
      0% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
      50% { background-color: #0094FF; box-shadow: 0 0 10px #0094FF; }
      100% { background-color: #004A7F; box-shadow: 0 0 3px #004A7F; }
  }
  .tkb {
   background:#7F8387;
   font-size:24px;
   font-weight:bold;
   -webkit-animation: my 200ms infinite;
   -moz-animation: my 200ms infinite; 
   -o-animation: my 200ms infinite; 
   animation: my 200ms infinite;
} */
.table-responsive {
  max-width:100%;
  overflow-x: auto;
}
.content {
    padding-left: 25px;
    padding-right: 25px;
    line-height: 17px;
}


td{

    font-size: 12px;
}
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content" >


  <table>


    <tr>

        <td valign="top">
<!--Phần thoi khoa bieu(ở bên trái)-->
            <div   class="col-md-12" style=" float: left">
               <table id="processTable" class="table table-bordered text-center " >
                 <thead style="background: #17A2B8;color: white" >
                    <tr>
                        <th class="text-center " style="width: 10%">Tiết \Thứ</th>
                        <th class="text-center ">Hai</th>
                        <th class="text-center ">Ba</th>
                        <th class="text-center ">Tư</th>
                        <th class="text-center ">Năm</th>
                        <th class="text-center ">Sáu</th>
                        <th class="text-center ">Bảy</th>
                        <th class="text-center ">Chủ nhật</th> 
                    </tr>
                </thead>
                <tbody id="bodyTable"><!-- Bảng thời khóa biểu tuần -->




                    <tr id="lesson1">
                        <td title="7h - 7h50'">1</td>      
                        <td id="location-12"></td>
                        <td id="location-13"></td>
                        <td id="location-14"></td>
                        <td id="location-15"></td>
                        <td id="location-16"></td>
                        <td id="location-17"></td>
                        <td id="location-18"></td>
                    </tr>
                    <tr id="lesson2">
                        <td title="8h - 8h50'">2</td>
                        <td id="location-22"></td>
                        <td id="location-23"></td>
                        <td id="location-24"></td>
                        <td id="location-25"></td>
                        <td id="location-26"></td>
                        <td id="location-27"></td>
                        <td id="location-28"></td>

                    </tr>
                    <tr id="lesson3">
                        <td title="9h - 9h50'">3</td>
                        <td id="location-32"></td>
                        <td id="location-33"></td>
                        <td id="location-34"></td>
                        <td id="location-35"></td>
                        <td id="location-36"></td>
                        <td id="location-37"></td>
                        <td id="location-38"></td>
                    </tr>
                    <tr id="lesson4">
                        <td title="10h - 10h50'">4</td>
                        <td id="location-42"></td>
                        <td id="location-43"></td>
                        <td id="location-44"></td>
                        <td id="location-45"></td>
                        <td id="location-46"></td>
                        <td id="location-47"></td>
                        <td id="location-48"></td>
                    </tr>
                    <tr id="lesson5">
                        <td title="11h - 11h50'">5</td>
                        <td id="location-52"></td>
                        <td id="location-53"></td>
                        <td id="location-54"></td>
                        <td id="location-55"></td>
                        <td id="location-56"></td>
                        <td id="location-57"></td>
                        <td id="location-58"></td>
                    </tr>
                    <tr>
                        <th colspan="8" title="11h50' - 13h" style="background: #7F8387; color: white; "><h5 style="margin: opx; margin: unset;"></h5></th>
                    </tr>
                    <tr id="lesson6">
                        <td title="13h - 13h50'">6</td>
                        <td id="location-62"></td>
                        <td id="location-63"></td>
                        <td id="location-64"></td>
                        <td id="location-65"></td>
                        <td id="location-66"></td>
                        <td id="location-67"></td>
                        <td id="location-68"></td>
                    </tr>
                    <tr id="lesson7">
                        <td title="14h - 14h50'">7</td>
                        <td id="location-72"></td>
                        <td id="location-73"></td>
                        <td id="location-74"></td>
                        <td id="location-75"></td>
                        <td id="location-76"></td>
                        <td id="location-77"></td>
                        <td id="location-78"></td>
                    </tr>
                    <tr id="lesson8">
                        <td title="15h - 15h50'">8</td>
                        <td id="location-82"></td>
                        <td id="location-83"></td>
                        <td id="location-84"></td>
                        <td id="location-85"></td>
                        <td id="location-86"></td>
                        <td id="location-87"></td>
                        <td id="location-88"></td>
                    </tr>
                    <tr id="lesson9">
                        <td title="16h - 16h50'">9</td>
                        <td id="location-92"></td>
                        <td id="location-93"></td>
                        <td id="location-94"></td>
                        <td id="location-95"></td>
                        <td id="location-96"></td>
                        <td id="location-97"></td>
                        <td id="location-98"></td>
                    </tr>
                    <tr id="lesson10">
                        <td title="17h - 17h50'">10</td>
                        <td id="location-02"></td>
                        <td id="location-03"></td>
                        <td id="location-04"></td>
                        <td id="location-05"></td>
                        <td id="location-06"></td>
                        <td id="location-07"></td>
                        <td id="location-08"></td>
                    </tr>
                </tbody>
            </table>

        </div>


    </div>



</td>

<!-- <td valign="top"class="float-right" style="width: 200px" >
  <div >

   <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">Danh Mục</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-primary">This is a primary list group item</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary list group item</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>
      <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>
  </div>

</div>
</td> -->


</tr>

</table>


<?php
foreach($dsThoiKhoaBieu_CaNhan as $item)
{

    $date = $item ['ThoiGianKetThuc'];
    $today = date("Y-m-d");
    $test = rand(50,200);
    $test1 = rand(50,200);
    
 

    if ($date >= $today) {

         ?>

           <script type="text/javascript">

     $(document).ready(function(){

        $("#location-"+"<?php echo substr($item['BuoiHoc'],0,1); ?>"+"<?php echo $item['ThuHoc'] ?>").text("<?php  echo $item['TenMonHoc']; ?>" +" (<?php  echo $item['MaMonHoc']; ?>)   Tên phòng máy: <?php  echo $item['TenPhongMay']; ?>");
        $("#location-"+"<?php echo substr($item['BuoiHoc'],1,1); ?>"+"<?php echo $item['ThuHoc'] ?>").text("Thời gian bắt đầu là: <?php   echo  $item['ThoiGianBatDau']; ?>");
    });

     var td1 = document.getElementById("location-"+"<?php echo substr($item['BuoiHoc'],0,1); ?>"+"<?php echo $item['ThuHoc'] ?>");
     td1.style.background = "rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
     td1.style.border = " 1px solid rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
     td1.style.color = "white";
     var td2 = document.getElementById("location-"+"<?php echo substr($item['BuoiHoc'],1,1); ?>"+"<?php echo $item['ThuHoc'] ?>");
     td2.style.background = "rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
     td2.style.border = " 1px solid rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
     td2.style.color = "white";
     var td3 = document.getElementById("location-"+"<?php echo substr($item['BuoiHoc'],2,1); ?>"+"<?php echo $item['ThuHoc'] ?>");
     td3.style.background = "rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
     td3.style.border = " 1px solid rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
     td3.style.color = "white";
     <?php 
     if(strlen($item['BuoiHoc'])==5){
        ?>
        var td4 = document.getElementById("location-"+"<?php echo substr($item['BuoiHoc'],3,1); ?>"+"<?php echo $item['ThuHoc'] ?>");
        td4.style.background = "rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
        td4.style.border = " 1px solid rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
        td4.style.color = "white";
        var td5 = document.getElementById("location-"+"<?php echo substr($item['BuoiHoc'],4,1); ?>"+"<?php echo $item['ThuHoc'] ?>");
        td5.style.background = "rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
        td5.style.border = " 1px solid rgb(125,<?php  echo $test;?>,<?php  echo $test1;?>)";
        td5.style.color = "white";


    <?php }
    ?>
</script>

    


   
 
<?php  
}

}      
?>

</div>