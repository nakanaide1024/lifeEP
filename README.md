# README

# アプリケーションの概要

■アプリURL<br>
http://life-ep.herokuapp.com/

■私個人のマイページURL<br>
http://life-ep.herokuapp.com/mypage/5

- 人生で起きた印象的なエピソードをタイトル毎に管理。
- 備考欄にはエピソードの詳細を記録可能。
- 備考欄にはその他、人に話す時のコツなどをアップデートすることでネタ帳としての役割を追加。
- エピソードが溜まったら、URLを共有することで自らのネタ帳のタイトル部分のみ公開可能。初対面の人との話のネタやプロフィールの一貫として、また仲間内でのコミュニケーションの一助として使用することができる。


# アプリケーションの機能
- ログイン / ログアウト機能
- ゲストログイン機能
- エピソード投稿機能
- エピソード編集機能
- エピソード削除機能
- URL共有機能

# 制作背景
人と話す際、人生の中でエピソードがないわけじゃないが、会話の最中に思い出せなかったりしっかり話せない事がある。
また、初対面の人とは話初めのきっかけを見つける事が困難。
話の上手い人はエピソードトークが上手なので、芸人さんのように人生で起きたことをネタ帳のようにまとめておけば忘れにくくなるし見返すことで話しやすくなると考えた。
またエピソードのタイトルを可視化して人に見せる事ができればお互いを知るきっかけや、コミュニケーションのきっかけになって面白いと思った。


# 使用した技術（開発環境）
## フレームワーク
- Laravel 8.44.0
## データベース
- MYSQL

# 今後解決したい課題
- 簡単なプロフィール機能も追加したい。
- テストコードを実装したい。
- 他のSNSサイトにリンクや新しいエピソードを追加した際に押しさせができるようにしたい。
- セキュリティがまだ脆弱なので強化したい。
- ユーザー検索機能をつけたい。

# テーブル設計

## Usersテーブル

| column           | Type    | Options     |
| ---------------- | ------- | ----------- |
| email            | string  | null: false |
| password         | string  | null: false |
| nickname         | string  | null: false |

### Association

- has_many :episodes

## Episodes

| column                | Type       | Options                                       |
| --------------------- | ---------- | --------------------------------------------- |
| title                 | string     | null: false                                   |
| user_id               | foreignId  | null: false, foreign_key: true                |
| remarks               | text       | null: ture                                    |
| category              | integer    | null: false                                   |

### Association

- belongs_to :User
