# dockerized LNMP


修改 docker/daemon.json，设置docker的镜像库为阿里云镜像库，内容如下:

{
    "registry-mirrors" : ["https://***.mirror.aliyuncs.com"]
}

或 其他镜像仓库，如：http://f1361db2.m.daocloud.io

挂载到 MySQL 的 data 目录中如果有文件，那么MySQL的root密码就已经
保存在了其中表文件当中了，那么 docker-compose.yml 中设置的MySQL的root密码就无法生效了,
想要设置密码可以到phpmyadmin或mysql-cli中去设置
