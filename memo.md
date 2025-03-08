//https://laranote.jp/laravel-11-breeze-multi-auth-user-admin-example/
-----
・git cloneする
・cloneしてきたら finder から フォルダ名 を Laravel_Template から変更してください(コマンド+シフト+Option)
・そのgithubで新しいリポジトリ作る
・元々の `.gitディレクトリ` 削除
・`git init`
・ git add .
・ git commit -m "Initial commit"   
・新しいリポジトリを作る  
・ git remote add origin https://github.com/XXXX/XXXXXX.git
・ git push -u origin main
(ミスったら `.git`消してやり直してください)
-----
まず `task install` でタスクファイルしてください 
次に .envのmysqlのところを書く(DBも新しくDBクライアントで作る)
php artisan migrate
先に npm run dev
その後 php artisan serve --port=xxxx


