# 开发环境 Docker + PHP + Nginx + MySQL

## docker compose 开机自启动
在 /etc/rc.local 文件中加入下列行：
```
/usr/bin/docker-compose -f /home/dnmp/docker-compose.yml up -d
```


## Window 安装问题：

> 因为 windows 下的 WSL 环境中使用 docker 搭建的环境中运行的程序（例如php），对宿主机上的文件系统的操作很慢（需要经过 Windows的文件系统 -> WSL的linux发行版的文件系统 -> docker 进程的虚拟文件系统），
所以把开发代码放到 WSL 发行版中，使用编辑器打开项目目录 \\wsl.localhost 进行开发
