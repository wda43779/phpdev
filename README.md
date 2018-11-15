# 在docker中安装php开发环境

## 安装docker

MacOS: https://docs.docker.com/docker-for-mac/install/

Ubuntu: https://docs.docker.com/install/linux/docker-ce/ubuntu/

## （仅linux环境）安装 docker-compose

```bash
$ sudo curl -L "https://github.com/docker/compose/releases/download/1.23.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
$ sudo chmod +x /usr/local/bin/docker-compose
```

参考： https://docs.docker.com/compose/install/#install-compose

## （仅linux环境）将自己加入 docker 用户组

创建 docker 用户组

```bash
$ sudo groupadd docker
```

将自己添加入docker用户组

```bash
$ sudo usermod -aG docker $USER
```


参考： https://docs.docker.com/install/linux/linux-postinstall/#manage-docker-as-a-non-root-user

## 启动开发环境

```bash
$ docker-compose up
```

访问 http://localhost/ 即可。
修改本地 `./src` 来进行开发

停止服务，清理环境

```bash
$ docker-compose down
```