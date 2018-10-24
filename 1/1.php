<?php
const ERROR_LOG_PATTERN = '#ERROR#';
$log = file('read_file.log');

foreach ($log as $row => $value) {
    if (strpos($value, ERROR_LOG_PATTERN)) {
        file_put_contents('error_read_file.log', $value , FILE_APPEND | LOCK_EX);
    }
}
