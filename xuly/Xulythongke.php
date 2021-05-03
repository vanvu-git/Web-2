<?php
    $conn=new mysqli("localhost","root","","console-beta");
    if(isset($_POST['submit'])){
        if(isset($_POST['date']))
        {
            $month=date("m",strtotime($_POST['date']));
            $year=date("Y",strtotime($_POST['date']));
            $sql="SELECT hoadon.idsanpham,id_theloai,SUM(hoadon.Soluong),dongia from hoadon,sanpham where MONTH(NgayBD)='$month' AND YEAR(NgayBD)='$year' AND 
                    hoadon.idsanpham=sanpham.idsanpham group by hoadon.idsanpham";
            $rs=mysqli_query($conn,$sql);
            $count=mysqli_query($conn,$sql);
            if(mysqli_num_rows($rs)>0){
                echo "<div>
                    <table style='width:100%'>
                        <tr class='header-table'>
                            <th>Sản phẩm </th>
                            <th>Thể loại </th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Tổng tiền </th>
                        </tr>";   
                while($row=mysqli_fetch_assoc($rs)){
                    $SP=$row['idsanpham'];
                    $Theloai=$row['id_theloai'];
                    $sl=$row['SUM(hoadon.Soluong)'];
                    $dongia=$row['dongia'];
                    $Tong=$sl*$dongia;
                    echo "<tr>
                        <td>$SP</td>
                        <td>$Theloai</td>
                        <td>$dongia</td>
                        <td>$sl</td>
                        <td>$Tong</td>
                  </tr>";
                }
                echo " </table> </div>";
            }
        }
        else if(isset($_POST['date1'])&&isset($_POST['date2'])&&isset($_POST['choose'])){
            $date1 = new DateTime($_POST['date1']);
            $datetime1= $date1->format('Y-m-d'); 
            $date2 = new DateTime($_POST['date2']);
            $datetime2= $date2->format('Y-m-d');
            $product=$_POST['choose'];
            $product=($product=='All' || $product=='') ? "":"AND id_theloai='$product'";
            $sql="SELECT id_theloai,id_HD,hoadon.idsanpham,id_khachhang,ten,NgayBD,hoadon.Soluong,dongia from hoadon,sanpham where 
                    hoadon.idsanpham=sanpham.idsanpham $product AND hoadon.NgayBD>='$datetime1' AND hoadon.NgayBD<='$datetime2'";
            $rs=mysqli_query($conn,$sql);
            if(mysqli_num_rows($rs)>0){
                echo "<div>
                    <table style='width:100%'>
                        <tr class='header-table'>
                            <th>Mã HĐ</th>
                            <th>Mã KH</th>
                            <th>Mã SP</th>
                            <th>Tên HĐ</th>
                            <th>Ngày lập</th>
                            <th>Đơn giá </th>
                            <th>Số lượng</th>
                            <th>Tổng tiền </th>
                        </tr>";   
                while($row=mysqli_fetch_assoc($rs)){
                    $HD=$row['id_HD'];
                    $KH=$row['id_khachhang'];
                    $SP=$row['idsanpham'];
                    $Ten=$row['ten'];
                    $Ngay=$row['NgayBD'];
                    $sl=$row['Soluong'];
                    $dongia=$row['dongia'];
                    $Tong=$row['dongia']*$row['Soluong'];
                    echo "<tr>
                        <td>$HD</td>
                        <td>$KH</td>
                        <td>$SP</td>
                        <td>$Ten</td>
                        <td>$Ngay</td>
                        <td>$dongia</td>
                        <td>$sl</td>
                        <td>$Tong</td>
                  </tr>";
                }
                echo " </table> </div>";
            }
        }
    }
?>