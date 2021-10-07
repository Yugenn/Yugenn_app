# 人間登録アプリ

## アプリの概要
- 出会った人を登録できるアプリ
- 登録した人を閲覧、編集、更新することができます。


## テーブル定義
- Articleテーブル  人物の情報が格納されています。
- Birthplaceテーブル 都道府県の情報が格納されています。

## 実装機能
- サプリメント情報のCRUD機能
- 個々のサプリメントに対するレビユーのCRUD機能
- サプリメントの検索機能

## 苦労したところ
- レビューのCRUD機能を実装するのが大変でした。主に、レビューとサプリメントの紐付けが難しかった。

## 改良点
- バリデーションがまだ実装できていない。
- 新規登録で画像を投稿できない。
- 誰でも編集できてしまう(ユーザー、管理者の実装)

## 画面
### 一覧画面
<img width="1280" alt="一覧" src="https://user-images.githubusercontent.com/89439437/136316760-874a6ccf-53bb-4c9d-9056-4727d7dd9e80.png">

### 詳細画面
<img width="1280" alt="詳細" src="https://user-images.githubusercontent.com/89439437/136316860-1d50e7e1-ee3e-474b-b41d-b3729feba5a6.png">


### 新規登録画面
<img width="1280" alt="新規登録" src="https://user-images.githubusercontent.com/89439437/136316912-79fa3ef2-59ee-4369-b92e-f9433a33d4fd.png">

### 編集画面
<img width="1280" alt="更新" src="https://user-images.githubusercontent.com/89439437/136316960-d7aa95f8-f91f-4269-8fe8-dd18223fa448.png">