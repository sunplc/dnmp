
# Docker 下的 Nginx + PHP + MySQL 环境

> 因为 windows 下的 WSL 环境中使用 docker 搭建的环境中运行的程序（例如php），对宿主机上的文件系统的操作很慢（需要经过 Windows的文件系统 -> WSL的linux发行版的文件系统 -> docker 进程的虚拟文件系统），
所以把开发代码放到 WSL 发行版中，使用编辑器打开项目目录 \\wsl.localhost 进行开发

# WSL 查看
```
wsl --list
```

# WSL 安装 Ubuntu
```
wsl --install Ubuntu
```

# WSL 设置默认发行版
```
wsl --setdefault Ubuntu
```

# 进入Linux发行版
```
wsl
```

# 拉取项目代码，使用docker运行
```
docker-compose up
```
