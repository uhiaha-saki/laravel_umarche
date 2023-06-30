## Laravel php自作「つなぐマルシェ」
- 概要
直売所を利用する生産者と消費者をつなぎ、地方の
農業を活性化させる一助となるようなサイトを作りました。

ユーザー(消費者)、オーナー(生産者)、サイト管理者にわけ、マルチログインできるようになっております。

## 使い方
- ユーザー(消費者)

直売所の商品一覧をみることができ、商品詳細を確認することができます。
また、商品のカテゴリーや値段順などに合わせて検索する機能もあります。

カート追加機能・決済機能もつけております。
（Stripe決済ライブラリを使用）

- オーナー(生産者)

商品情報(説明・在庫登録)、商品画像、店情報
を登録することができます。
それぞれ、編集・削除ができます。

- サイト管理者

オーナー情報を見ることができ、新規登録、編集、削除を行うことができます。

また、削除はソフトデリートとデリーと二段階になっています。

## ダウンロード方法

 https://github.com/uhiaha-saki/laravel_umarche

（Secが大きくなるほど新しいものです）

## インストール方法

.envファイルの中の下記をご利用の環境に合わせて変更してください。

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=laravel
- DB_USERNAME=root
- DB_PASSWORD=saki2315

## テーブル情報

- Ownersテーブル
id
name
email
password
created_at
updated_at
deleted_at


- Shopsテーブル
id
owner_id(FK)
name
information
filename
is_selling
created_at
updated_at

- Productsテーブル
id(AI,PK)
shop_id(FK)
name
information
price
is_selling
sort_order
secondary_category_id(FK)
image1(FK)
image2(FK)
image3(FK)
image4(FK)
created_at
updated_at


- Imagesテーブル
id(AI)
owner_id(FK)
filename
title
created_at
updated_at


- Usersテーブル
id(AI)
name
email
password
created_at
updated_at


- Cartsテーブル
id(PK)
user_id(FK)
product_id(FK)
quantity
created_at
updated_at


- Adminsテーブル
id（PK）
name
email
password
created_at
updated_at

- PrimaryCategoryテーブル
id
name
sort_order


- SecondaryCategoryテーブル
id
name
primary_category_id
sort_order


- t_stocksテーブル
id
product_id（FK）
type
quantity
created_at
updated_at


## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg ~ sample6.jpgとして
保存しています。

php artisan strage:linkで
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に
保存すると表示されます。
(produvtsフォルダが
ない場合は作成してください。)

ショップの画像も表示する場合は
storage/app/public/shopsフォルダ内を作成し
画像を保存してください。
