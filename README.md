# dockerized LNMP


修改 docker/daemon.json，设置docker的镜像库为阿里云镜像库，内容如下:

{
    "registry-mirrors" : ["https://***.mirror.aliyuncs.com"]
}

或 其他镜像仓库，如：http://f1361db2.m.daocloud.io

data/mysql 是挂载到 mysql 容器的数据目录,  如果其中已有文件，那么说明MySQL的root密码已经
保存在data/mysql中的表文件当中了，那么 docker-compose.yml 中设置的MySQL的root密码就无法生效了,
想要设置密码可以到phpmyadmin或mysql-cli中去设置
