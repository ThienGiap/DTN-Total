<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ERROR); // E_ERROR Một lỗi nghiêm trọng ko thể đc phục hồi

// trigger_error("Cảnh báo: Dữ liệu không hợp lệ!", E_USER_WARNING);
// 1 thông điệp cảnh báo ko chí mạng do ng dùng tạo ra Nó giống như E_WARNING và
// nó sử dụng hàm trigger_error()

// trigger_error() đc sử dụng để tạo ra thông báo lỗi cấp người dùng 
// nó sẽ tạo ra 1 thông báo lỗi có thể đc bắt và xử lý bởi PHP

// if (!isset($_SERVER['SCRIPT_FILENAME'])) {
//     // Kích hoạt lỗi người dùng với thông báo tùy chỉnh và E_USER_ERROR
//     user_error('$_SERVER[\'SCRIPT_FILENAME\'] không được thiết lập.', E_USER_ERROR);
// } else {
//     $url = $_SERVER['SCRIPT_FILENAME'];
//     $exploded = explode('/', $url);
//     return end($exploded);
// }
// // Khi gặp đk lỗi nghiêm trọng trong code, kích hoạt 1 lỗi ng dùng bằng cách sử dụng
// // user_error()
// // E_USER_ERROR sẽ thực thi code và hiển thị thông báo lỗi
// // Xử lý lỗi phải kiểm tra giá trị và trả về của hàm thay vì kết hợp thông báo lỗi trong chính hàm đó

// if (!$filename = basename($_SERVER['SCRIPT_FILENAME'])) {
//     // Xử lý lỗi ở đây
//     // ...
// }



// declare(strict_types=1);

// function summary(int $a, int $b) {
//     return $a + $b;
// }

// echo summary('2', '3'); // Sẽ thông báo lỗi ngay

// E_STRICT sẽ thiển thị thông báo lỗi và gợi ý cách tối ưu hóa code


// -----------------------------------------------------------------

// Xử lý lỗi hàm die() và exit()

// die(); // kết hợp giữa echo, nó hiển thị thông báo đến ngươid dùng và dừng thực thi code

// $denominator = 0;
// if ($denominator == 0) {
//   die("Number is zero."); // Hiển thị thông báo lỗi và chấm dứt lệnh
// } else {
//   echo 2 / $denominator;
// }

// // exit();
// if(!file_exists("/path/to/data-file.txt")) {
//     // nếu chương trình chạy vào đây thì code ở phía sau sẽ không được thực thi
//     exit("Không tìm thấy file này!!!"); 
// }
// else {
//     $file=fopen("/path/to/data-file.txt","r");
//     print "Mở file thành công!!!";
// }
// logic ....



// Thiết lập trình sử lý lỗi 

// set_error_handler() khi sử dụng hàm này trình xử lý lỗi của php sẽ hoàn toàn bị bỏ qua

// function customError($errno, $error_msg)
// {
//     echo "<b>Error:</b> [$errno] <br>";
//     echo "<b>Error Description:</b> $error_msg <br>";
//     echo "Ending Script";
// }
// set_error_handler("customError");
// echo (5 / 0);

// Lỗi Log
// Sử dụng hàm error_log(), gửi nhật ký lỗi tới một file đc chỉ định.

// Gửi lỗi qua mail

// function calcDivision($dividend, $divisor){
//     if ($divisor == 0){
//         trigger_error("calcDivision(): The divisor cannot be zero", E_USER_WARNING); //kích hoạt lỗi
//         return false;
//     } else{
//         return($dividend / $divisor);
//     }
// }
// function customError($errno, $errstr, $errfile, $errline, $errcontext){
//     $message = date("Y-m-d H:i:s - ");
//     $message .= "Error: [" . $errno ."], " . "$errstr in $errfile on line $errline, ";
//     $message .= "Variables:" . print_r($errcontext, true) . "\r\n";
    
//     error_log($message, 1, "thiengiapnguyen04.com"); //thay đổi gmail ở đây.
//     die("There was a problem, please try again. Error report submitted to webmaster.");
// }
// set_error_handler("customError");
// echo calcDivision(10, 0);
// echo "This will never be printed.";


// Excaption try catch
// là 1 giải pháp quản lý lỗi kiểu hướng đối tượng
// 1 đối tượng Exception sẽ chứa các thông tin về nơi xảy ra lỗi
// 1 số từ khóa liên quan tới Exception:
//  Try: code có thể xảy ra ngoại lệ nằm trong khối try nếu ko lỗi thì sẽ chạy bình thường
//  nếu xảy ra lỗi thì 1 lỗi sẽ đc ném ra.
//  Throw: lỗi đc kích hoạt. Mỗi throw phải bao gồm ít nhất 1 khối catch
//  Catch: Lấy ra 1 lỗi và tạo ra 1 đối tượng chứa thông tin ngoại lệ.

// Cú pháp:
// try 
// {
//     //Khối lệnh mà có thể phát sinh Exception
// } 
// catch (Exception $e) 
// {    
//     //Khối lệnh bắt được Exception
// }

//tạo hàm và throw một ngoại lệ
// function checkNum($number) {
// if($number > 1) {
//     throw new Exception("Giá trị phải nhỏ hơn hoặc bằng 1.");
// }
// return true;
// }

// //kích hoạt ngoại lệ trong khối "try"
// try {
// checkNum(2); // Kiểm tra nếu 1 số lớn hơn 1 đc gọi trong khối try 
// // nếu ngoại lệ được ném ra thì lệnh sau không được thực thi
// echo 'Number nhỏ hơn hoặc bằng 1.';
// } catch(Exception $e) { //catch exception lấy ra lỗi và tạo đối trượng $e để chứa thông tin lỗi
// echo 'Message: ' .$e->getMessage(); // Hiển thị tin nhắn lỗi
// }

// getCode() Hiển thị các mã số là đại diện của lỗi
// try {
//     // Mã có thể gây ra lỗi
// } catch (Exception $e) {
//     $code = $e->getCode(); // Lấy mã ngoại lệ
//     // Xử lý ngoại lệ dựa trên mã
//     if ($code === 100) {
//         // Xử lý lỗi kết nối cơ sở dữ liệu
//     } else {
//         // Xử lý các loại lỗi khác
//     }
// }


// getFile() Hiển thị các tập tin và đường dẫn xảy ra lỗi
// $noi_dung = file_get_contents("duong_dan/toi/tap_tin.txt");
// echo $noi_dung;

// // getLine() Hiển thị các dòng xảy ra lỗi
// try {
//     throw new Exception("Lỗi đã xảy ra");
// } catch (Exception $e) {
//     echo $e->getLine();
// }
// $handle = fopen("duong_dan/toi/tap_tin.txt", "r");
// if ($handle) {
//     while (($line = fgets($handle)) !== false) {
//         echo $line;
//     }
//     fclose($handle);
// }

// getTrace() Hiển thị trả về thông tin truy vết lỗi là 1 mảng các tên file và số dòng 
// getPrevious() HIển thị lỗi trước khi xảy ra trường hợp hiện tại
class MyCustomException extends Exception {}

function doStuff() {
    try {
        throw new InvalidArgumentException("Bạn đang làm sai!", 112);
    } catch (Exception $e) {
        throw new MyCustomException("Có điều gì đó đã xảy ra", 911, $e);
    }
}

try {
    doStuff();
} catch (Exception $e) {
    do {
        printf("%s:%d %s (%d) [%s]\n", $e->getFile(), $e->getLine(), $e->getMessage(), $e->getCode(), get_class($e));
    } while ($e = $e->getPrevious());
}

// getTraceAsString() Hiển thị 1 loại dấu vết của lỗi như 1 chuỗi thay vì 1 mảng
// __toString() HIển thị toàn bộ lỗi như 1 chuỗi