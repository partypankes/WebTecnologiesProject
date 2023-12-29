<?php

$hash = '$2y$10$nz4RQWWi31D6aajNZemIpupm5ATlXoWoBudRWcO7rFSIUPspZDgk6';
echo password_verify("ciao",$hash);
if(password_verify("ciao",$hash)) {
    echo "password giusta";
}