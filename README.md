# Introduction

This is a skeleton application using the Hyperf framework. This application is meant to be used as a starting place for those looking to get their feet wet with Hyperf Framework.

## Docker hub link
https://hub.docker.com/r/hyperf/hyperf

## Version 2.0 document
https://hyperf.wiki/2.0/#/

## Aliyun mirror
### Composer
```sh
composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
# cancel
composer config -g --unset repos.packagist
```

### Docker
```json
{
  "registry-mirrors": [
    "https://wbiz3je9.mirror.aliyuncs.com"
  ]
}
```

### Alpinelinux
```sh
sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories
```

## Docker Hub
https://hub.docker.com/orgs/wikiforest/

## Get start

### Change host
```
127.0.0.1       api.wikiforest.com
```

```sh
docker-compose build
composer install --ignore-platform-reqs
docker-compose up
```

## Change host
```
127.0.0.1       api.wikiforest.com
127.0.0.1       db.wikiforest.com
127.0.0.1       container.wikiforest.com
```

## Push if Dockerfiles changed
```sh
docker-compose push
```

## Contact Alex
[omytty@126.com](mailto:omytty@126.com "omytty@126.com")
