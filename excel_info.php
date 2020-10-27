<?php
header("Content-type:text/html;charset=utf-8");
session_start();

@$myfile=$_REQUEST['myfile'];

//链接数据库
//$link = @mysql_connect('127.0.0.1','root','root') or die('连接数据库失败');
//mysql_select_db('test',$link);
//mysql_query('set names utf8');
//$db = new mysqli('127.0.0.1','root','root','test');

function upExecel(){
@$myfile=$_FILES['myfile'];
//判断是否选择了要上传的表格
if (empty($myfile)) {
    echo "<script>alert('您未选择表格');history.go(-1);</script>";
}

//获取表格的大小，限制上传表格的大小5M
$file_size = $_FILES['myfile']['size'];
if ($file_size>5*1024*1024) {
echo "<script>alert('上传失败，上传的表格不能超过5M的大小');history.go(-1);</script>";
    exit();
}

//限制上传表格类型
$file_type = $_FILES['myfile']['type'];
//application/vnd.ms-excel  为xls文件类型
if ($file_type!='application/vnd.ms-excel') {
    echo "<script>alert('上传失败，只能上传excel2003的xls格式!');history.go(-1)</script>";
 exit();
}

//判断表格是否上传成功
if (is_uploaded_file($_FILES['myfile']['tmp_name'])&&$_FILES['myfile']['name'] == '乐园大型游乐设备信息登记表上传模板.xls') {
    require_once 'Classes/PHPExcel.php';
    require_once 'Classes/PHPExcel/IOFactory.php';
    require_once 'Classes/PHPExcel/Reader/Excel5.php';
    //以上三步加载phpExcel的类

    $objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2007 for 2007 format 
    //接收存在缓存中的excel表格
    $filename = $_FILES['myfile']['tmp_name'];
    $objPHPExcel = $objReader->load($filename); //$filename可以是上传的表格，或者是指定的表格
    $sheet = $objPHPExcel->getSheet(0); 
    $highestRow = $sheet->getHighestRow(); // 取得总行数 
    $db = new mysqli('127.0.0.1','root','winadmin','mrm');
    $sql="";
	@$cityname=$_SESSION['cityname'];
	@$permission=$_SESSION['permission'];
	if($permission == 1){
	for($j=2;$j<=$highestRow;$j++)  
    {
        $CityName = $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue();
        $ParkName = $objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue();
        $ProjectName = $objPHPExcel->getActiveSheet()->getCell("C".$j)->getValue();
        $EquipmentType = $objPHPExcel->getActiveSheet()->getCell("D".$j)->getValue();
        $EquipmentLevel = $objPHPExcel->getActiveSheet()->getCell("E".$j)->getValue();
        $EquipmentModel = $objPHPExcel->getActiveSheet()->getCell("F".$j)->getValue();
        $WorkingLife = $objPHPExcel->getActiveSheet()->getCell("G".$j)->getValue();
        $EquipmentWeight = $objPHPExcel->getActiveSheet()->getCell("H".$j)->getValue();
        $FactoryNum = $objPHPExcel->getActiveSheet()->getCell("I".$j)->getValue();
        $Manufactor =$objPHPExcel->getActiveSheet()->getCell("J".$j)->getValue();
        $ProductionDate_t = $objPHPExcel->getActiveSheet()->getCell("K".$j)->getValue();
        $ProductionDate = gmdate('Y-m-d',\PHPExcel_Shared_Date::ExcelToPHP($ProductionDate_t));
        $RegistrationNum = $objPHPExcel->getActiveSheet()->getCell("L".$j)->getValue();
        $InstallDate_t = $objPHPExcel->getActiveSheet()->getCell("M".$j)->getValue();
        $InstallDate = gmdate('Y-m-d H:i:s',\PHPExcel_Shared_Date::ExcelToPHP($InstallDate_t));
        $NextDate_t = $objPHPExcel->getActiveSheet()->getCell("N".$j)->getValue();
        $NextDate = gmdate('Y-m-d H:i:s',\PHPExcel_Shared_Date::ExcelToPHP($NextDate_t));
        $EndDate_t = $objPHPExcel->getActiveSheet()->getCell("O".$j)->getValue();
        $EndDate = gmdate('Y-m-d H:i:s',\PHPExcel_Shared_Date::ExcelToPHP($EndDate_t));
        $UseOrNo = $objPHPExcel->getActiveSheet()->getCell("P".$j)->getValue();      
        
        //null 为主键id，自增可用null表示自动添加
        $sql =$sql."INSERT INTO equipinfo VALUES('',
        '$CityName','$ParkName','$ProjectName','$EquipmentType',
        '$EquipmentLevel','$EquipmentModel','$WorkingLife','$EquipmentWeight',
        '$FactoryNum','$Manufactor','$ProductionDate','$RegistrationNum',
        '$InstallDate','$NextDate','$EndDate','$UseOrNo');";
    }	
	}else{
    for($j=2;$j<=$highestRow;$j++)  
    {
        $CityName = $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue();
		if($CityName != $cityname){
           echo "<script>alert('添加失败！不存在该城市项目！请仔细核查！');history.back();</script>";
           exit(); 
        }else{
        $ParkName = $objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue();
        $ProjectName = $objPHPExcel->getActiveSheet()->getCell("C".$j)->getValue();
        $EquipmentType = $objPHPExcel->getActiveSheet()->getCell("D".$j)->getValue();
        $EquipmentLevel = $objPHPExcel->getActiveSheet()->getCell("E".$j)->getValue();
        $EquipmentModel = $objPHPExcel->getActiveSheet()->getCell("F".$j)->getValue();
        $WorkingLife = $objPHPExcel->getActiveSheet()->getCell("G".$j)->getValue();
        $EquipmentWeight = $objPHPExcel->getActiveSheet()->getCell("H".$j)->getValue();
        $FactoryNum = $objPHPExcel->getActiveSheet()->getCell("I".$j)->getValue();
        $Manufactor =$objPHPExcel->getActiveSheet()->getCell("J".$j)->getValue();
        $ProductionDate_t = $objPHPExcel->getActiveSheet()->getCell("K".$j)->getValue();
        $ProductionDate = gmdate('Y-m-d',\PHPExcel_Shared_Date::ExcelToPHP($ProductionDate_t));
        $RegistrationNum = $objPHPExcel->getActiveSheet()->getCell("L".$j)->getValue();
        $InstallDate_t = $objPHPExcel->getActiveSheet()->getCell("M".$j)->getValue();
        $InstallDate = gmdate('Y-m-d H:i:s',\PHPExcel_Shared_Date::ExcelToPHP($InstallDate_t));
        $NextDate_t = $objPHPExcel->getActiveSheet()->getCell("N".$j)->getValue();
        $NextDate = gmdate('Y-m-d H:i:s',\PHPExcel_Shared_Date::ExcelToPHP($NextDate_t));
        $EndDate_t = $objPHPExcel->getActiveSheet()->getCell("O".$j)->getValue();
        $EndDate = gmdate('Y-m-d H:i:s',\PHPExcel_Shared_Date::ExcelToPHP($EndDate_t));
        $UseOrNo = $objPHPExcel->getActiveSheet()->getCell("P".$j)->getValue();      
        
        //null 为主键id，自增可用null表示自动添加
        $sql =$sql."INSERT INTO equipinfo VALUES('',
        '$CityName','$ParkName','$ProjectName','$EquipmentType',
        '$EquipmentLevel','$EquipmentModel','$WorkingLife','$EquipmentWeight',
        '$FactoryNum','$Manufactor','$ProductionDate','$RegistrationNum',
        '$InstallDate','$NextDate','$EndDate','$UseOrNo');";
        }
    } 
    }	
        $res = $db->multi_query($sql);
        if ($res) {
            mysqli_query($db,"COMMIT");//提交事务
            //echo "<script>alert('添加成功！');window.location.href='';</script>";
            echo "<script>alert('添加成功！');history.back();</script>";           
        }else{
            mysqli_query($db,"ROLLBACK");//事务回滚
            echo "<script>alert('添加失败！添加失败！请仔细检查数据格式或是否存在该项目！');history.back();</script>";
            exit();
        }
        mysqli_query($db,"END");
    }else
    {
        echo "<script>alert('请上传正确的Excel文件！！！');history.back();</script>";
		exit();
		mysqli_query($db,"END");
    }
}

//调用
upExecel();
?>