<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name = "author" content = "chamdiem">
    <link rel="stylesheet" href="./style.css">
    <title>xếp loại học sinh</title>
</head>
<body>
    <div id="wrapper">
        <h2> Xếp loại kết quả tuyển sinh</h2>
        <form action="" method = "post">
            <!--Toan-->
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm Toán:</label>
                </div>
                <div class="lblinput">
                    <input type="number" name = "Toan" value = "
                        <?php echo isset($_POST["Toan"]) ? $_POST["Toan"] : ""; ?>"/>
                </div>
            </div>
            <!--Ly-->
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm Lý:</label>
                </div>
                <div class="lblinput">
                    <input type="number" name = "Ly" value = "
                        <?php echo isset($_POST["Ly"]) ? $_POST["Ly"] : ""; ?>"/>
                </div>
            </div>
            <!--Hoa-->
            <div class="row">
                <div class="lbltitle">
                    <label>Điểm Hóa:</label>
                </div>
                <div class="lblinput">
                    <input type="number" name = "Hoa" value = "
                        <?php echo isset($_POST["Hoa"]) ? $_POST["Hoa"] : ""; ?>"/>
                </div>
            </div>
            <!--khu vuc-->
            <div class="row">
                <div class="lbltitle">
                    <label>Chọn khu vực</label>
                </div>
                <div class="lblinput">
                    <select name = "KhuVuc">
                        <option value="" selected>--Chọn khu vực--</option>
                        <option value="1">Khu vực 1</option>
                        <option value="2">Khu vực 2</option>
                        <option value="3">Khu vực 3</option>
                        <option value="4">Khu vực 4</option>
                        <option value="5">Khu vực 5</option>
                    </select>
                </div>
            </div>
            <!--gui form-->
            <div class="row">
                <div class="submit">
                    <input type="submit" name="btnsubmit" value="Xếp loại">
                </div>
            </div>
        </form>
        <!--hien ket qua-->
        <div id="result">
            <h2>Kết quả xếp loại:</h2>
            <div class="row">
                <!--tong diem-->
                <div class="lbltitle">
                    <label>Tổng điểm</label>
                </div>
                <div class="lbloutput">
                    <?php 
                        echo isset($_POST["btnsubmit"]) ? 
                        $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"] : "";
                    ?>
                </div>
                </br>
                <!--xep loai-->
                <div class="lbltitle">
                    <label>Xếp loại:</label>
                </div>
                <div class="lbloutput">
                    <?php
                        if(isset($_POST["btnsubmit"])){
                            $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                            if($TongDiem >= 24){
                                echo "Giỏi";
                            }
                            else if($TongDiem >= 21){
                                echo "Khá";
                            }
                            else if($TongDiem >= 15){
                                echo "Trung Bình";
                            }
                            else{
                                echo "Yếu";
                            }
                        }
                    ?>
                </div>
                </br>
                <!--diem uu tien-->
                <div class="lbltitle">
                    <label>Điểm ưu tiên:</label>
                </div>
                <div class="lbloutput">
                    <?php
                        if(isset($_POST["btnsubmit"])){
                            $DiemUuTien = empty($_POST["KhuVuc"]) ? 0 : $_POST["KhuVuc"];
                            switch ($DiemUuTien) {
                                case 0:
                                case 4:
                                case 5:
                                    echo "0";
                                    break;
                                case 1:
                                case 2:
                                    echo "5";
                                    break;
                                case 3:
                                    echo "3";
                                    break;
                                default:
                                    # code...
                                    break;
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>