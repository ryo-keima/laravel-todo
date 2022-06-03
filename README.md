# Laravel TODO

## 概要

PHPフレームワークであるLaravelを用いて、TODOアプリを実装した。
複数ユーザーが使用可能なWebアプリで、ログインをすることで、
ユーザーごとのタスクの一覧表示・追加・更新・削除を行うことが可能。
WebサーバーとしてNginx、データベースはMySQLを使用している。

## 画面キャプチャ

### ログイン画面

![login](./doc/login.png)

### タスク一覧画面

![list](./doc/list.png)

## 始め方

1. Dockerのセットアップ

Docker Desktopのダウンロード & インストール
<https://www.docker.com/products/docker-desktop/>

2. プロジェクトのクローン

```shell
git clone https://github.com/ryo-keima/laravel-todo.git
cd laravel-todo
```

3. .envファイルの作成

`laravel-todo/src/.env.example`ファイルを`.env`にリネームする

4. 起動

```shell
docker-compose up --build
```

5. セットアップ(パッケージのインストールとダミーデータの挿入)

新たに端末を起動し、以下のコマンドを実行します。
```
docker-compose exec app composer install
docker-compose exec app php artisan migrate:fresh --seed
```

6. ブラウザで表示

ブラウザで下記URLにアクセスします。
`http://127.0.0.1:8081/`

7. ログイン

下記アカウントでログインできます。

```shell
Email: test@example.com
Password: testpass
```

8. サーバの停止

「`Ctrl + C`」キーで停止します。
