<?php
echo "Please Wait Admin! We are on it. Please dont press Reload or Back Button";
set_time_limit(0);
$python=`python train.py`;
header('location:dashboard.php');
?>