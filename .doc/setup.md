# SET UP

## setup

#### 1. clicheからひな形をクローンしてgitを再設定する
````
cd nowhite/
git clone git@github.com:osamuya/cliche.git
rm -fR .git
git init
git config user.name aonuma
git config user.email aonuma.mori@gmail.com
git add -A
git commit -m "nowhite initial commit"
git push origin master
````

#### 2. composer install...(install vendor)

````
cd approot/
cp -p .env.example .env
php artisan key:generate
bash optimazer.sh
bash setup.sh
````
.envの設定をする。
ブラウザーキャッシュを削除して再アクセス。

#### 3. npm
````
cd /PROJECT_DIR/approot/public
npm install
npm run start
````
npm runが正常に動作すればOK。

#### 4. Database migration
````
cd /PROJECT_DIR/approot
php artisan migrate
````

#### 5. Setting Log
````
cd /PROJECT_DIR/approot/storage/logs
touch login.log
chmod 666 login.log
touch app.log
chmod 666 app.log
````

#### 6. Regist test user

/registerからユーザー登録しておく。



