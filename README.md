### レシピ検索アプリ friege ###
## 概要 ##
楽天レシピカテゴリ別ランキングAPIを利用したレシピ検索アプリです。MVCモデルを軸としています。

# ログイン機能 #
ログイン機能を**Laravel Breeze**を用いて実装しました。

# レシピ検索機能 #
材料をひとつ入れることで、その材料を使用したレシピを五件出力します。
出力されたレシピを検索すると、そのレシピの詳細画面が表示されます。

# レビュー作成・表示機能
レシピに対するレビューを作成し、それをユーザー名とともに詳細画面の下部に表示するようにしました。

# 閲覧レシピ表示機能 #
レシピ詳細画面を開いたレシピについて、新しいものから３件をトップ画面に表示するようにしました。

## 技術 ##
## Laravel ##
バックエンドは基本PHPのフレームワーク**Laravel**で実装しました。フロントエンドについては、Laravelのbladeファイルを用いました。

## レイアウト・デザイン ##
レイアウトについては、**Laravel Breeze**を利用しました。また、デザインは**tailwindCSS**を用いて整えました。

# データベース #
データベース管理システムとして、**MySQL**を利用しました。

# 開発環境 #
開発環境は、**Dockerコンテナ**を利用しました。

## 実装ファイルについて ##
# viewクラス src\resources\views\project\ #
**top.blade.php**：トップ画面
**index.blade.php**：検索結果表示画面
**view.blade.php**：レシピ詳細画面
**reviewcreate.php**：レビュー作成画面

# modelクラス src\app\Models\ #
**Category.php**：入力材料と同レコードの楽天レシピAPI利用時に必要なIDを取得
**Recipe.php**：レシピ詳細を検索結果時にrecipesテーブルに格納。レシピ詳細表示時に情報を取得
**RecipeHistory.php**：詳細を閲覧したレシピの詳細データのみを格納。閲覧履歴表示時に取得
**Review.php**：作成したレビューを格納。レビュー表示時に取得

# controllerクラス src\app\Http\Controllers\ #
**SearchController**：レシピ検索"search"、レシピ詳細表示"show"
**ReviewController**：レビュー作成画面移行"create"、レビュー登録"post"

# その他重要ファイル #
**src\routes\web.php**：ルートを記述。全てAuthenticationをかませており、ログインしているユーザーのみ利用可能
**src\database\migrations**：マイグレーションファイルを格納している
**src\database\seeders\CategorySeeder.php**：categoriesテーブルに対するシーディングファイル。検索に対応している材料を追加するならこのファイル

## 実際の画面 ##
# ログイン画面 #
![ログイン画面](src\public\images\login.png)

# トップ画面 #
トップ画面
![トップ画面1](src\public\images\top1.png)
テキストボックスに材料を入力
![トップ画面2](src\public\images\top2.png)

# 検索結果表示画面 #
検索結果上部
![検索結果1](src\public\images\search_result1.png)
検索結果下部
![検索結果2](src\public\images\search_result2.png)

一番上のレシピを選択してみます

# レシピ詳細表示画面 #
詳細画面上部
![詳細1](src\public\images\recipe1.png)
詳細画面下部
![詳細2](src\public\images\recipe2.png)

「レビュー作成は**こちら**」からレビュー作成画面に遷移
# レビュー作成画面 #
レビュー作成画面
![レビュー作成](src\public\images\review_create.png)

送信後のレビュー表示
![レビュー表示](src\public\images\recipe_after_review.png)

レシピ詳細閲覧後のトップ画面
![レシピ詳細after](src\public\images\top_after_view_recipe.png)

## 工夫した点 ##
・ユーザーが見やすいような**シンプルなデザイン**にした。
・**閲覧履歴**を表示することで、気になるレシピをもう一度見やすくした。
・材料が対応していない、または未入力の場合、**バリデーションメッセージ**を表示するようにした。
材料未入力の場合
![材料未入力](src\public\images\validation_no_ingredient.png)
材料未対応の場合
![材料未対応](src\public\images\validation_not_responsive.png)

## 改善点 ##
ユーザビリティのさらなる向上を向けて、以下の課題を挙げており、改善予定です。

・レシピ検索が1つの材料でしかできないため、**複数材料での検索**に対応させたい。APIの変更を検討したほうが良い。
・一人当たり何件でもレビューを登録できるため、**一件のみ登録**できるようにしたい。
・星形マークによる**お気に入りレシピ登録機能**を実装したい。
・デザインのブラッシュアップ
・フルページ以外のUI調整