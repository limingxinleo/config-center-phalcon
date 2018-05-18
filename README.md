# 配置中心

> 本项目以[Phalcon基础开发框架](https://github.com/limingxinleo/basic-phalcon)为基础，进行封装。

[![Build Status](https://travis-ci.org/limingxinleo/config-center-phalcon.svg?branch=master)](https://travis-ci.org/limingxinleo/config-center-phalcon)

[Phalcon 官网](https://docs.phalconphp.com/zh/latest/index.html)

## 其他封装版本
- [Thrift GO服务版本](https://github.com/limingxinleo/thrift-go-phalcon-project)
- [Phalcon快速开发框架](https://github.com/limingxinleo/biz-phalcon)
- [Phalcon基础开发框架](https://github.com/limingxinleo/basic-phalcon)
- [Zipkin开发版本](https://github.com/limingxinleo/zipkin-phalcon)
- [Eureka开发版本](https://github.com/limingxinleo/eureka-phalcon)
- [RabbitMQ](https://github.com/limingxinleo/rabbitmq-phalcon)
- [ELK开发版本](https://github.com/limingxinleo/elk-phalcon)
- [配置中心](https://github.com/limingxinleo/config-center-phalcon)


## 初始化Mongo数据库
~~~
> use conf;
# 增加key索引
> db.conf.createIndex({key:1},{unique:true});
# 添加配置中心版本号
> db.conf.insert({key:"version", val:0, created_at:new Date(2015,5,27,8), updated_at:new Date(2015,5,27,8)});
~~~

