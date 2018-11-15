<?php
$mysqli = new mysqli("db", "dev", "password", "test_db");
if ($mysqli->connect_errno) {
    echo "连接失败 (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo '连接数据库成功';