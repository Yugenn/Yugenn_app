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
### サプリメント一覧画面
<img width="1440" alt="スクリーンショット 2021-10-06 22 35 28" src=https://raw.githubusercontent.com/Yugenn/Yugenn_app/images/一覧.png>
<img width="1440" alt="スクリーンショット 2021-10-06 22 38 35" src="https://user-images.githubusercontent.com/81233714/136215153-6ca357a1-e016-4ac9-a176-18fa0bd4731f.png">

### サプリメント詳細画面
<img width="1440" alt="スクリーンショット 2021-10-06 22 39 04" src="https://user-images.githubusercontent.com/81233714/136215321-a7016b4c-cea7-4346-8c66-f8c5b746c1d9.png">

### レビュー一覧画面
<img width="1440" alt="スクリーンショット 2021-10-06 22 39 25" src="https://user-images.githubusercontent.com/81233714/136215741-ef36c5a8-4823-4688-8ac4-a1582924b818.png">

### サプリメント登録画面
<img width="1440" alt="スクリーンショット 2021-10-06 22 39 43" src="https://user-images.githubusercontent.com/81233714/136216372-266cc093-398b-4ea1-bf61-0107a0a2ac7d.png">

### サプリメント編集画面
<img width="1440" alt="スクリーンショット 2021-10-06 22 39 59" src="https://user-images.githubusercontent.com/81233714/136216505-745ca6eb-b8b5-4bd8-83b4-cf46dbc45a9d.png">

### レビュー登録画面
<img width="1440" alt="スクリーンショット 2021-10-06 22 40 30" src="https://user-images.githubusercontent.com/81233714/136216696-4c150a25-5050-4dae-baff-bdead6c030f3.png">

### レビュー編集画面
<img width="1440" alt="スクリーンショット 2021-10-06 22 40 16" src="https://user-images.githubusercontent.com/81233714/136216840-7fa81add-444e-457f-9c92-82df29552250.png">