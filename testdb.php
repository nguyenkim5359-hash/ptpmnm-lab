<?php
// Kết nối MySQL
$link = mysql_connect('mysql:3306', 'root', 'root123');

echo "<h1>🚀 Lab GitLab CI/CD - PTPMNM</h1>";
echo "<p><strong>MSSV:</strong> [NHẬP MSSV CỦA BẠN]</p>";
echo "<p><strong>Thời gian:</strong> " . date('Y-m-d H:i:s') . "</p>";

if (!$link) {
    echo '<h2 style="color:red;">❌ Kết nối MySQL THẤT BẠI</h2>';
    echo '<p>Lỗi: ' . mysql_error() . '</p>';
} else {
    echo '<h2 style="color:green;">✅ Kết nối MySQL THÀNH CÔNG!</h2>';
    echo '<p>Phiên bản MySQL: ' . mysql_get_server_info() . '</p>';
}

mysql_close();
?>