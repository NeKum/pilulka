# Twitter app

#### This app connects to Twitter API v2 and fetches recent tweets.

There is a service Pilulka.php that fetches last 100 tweets containing specific keywords but the app is reusable. Simply create a new class that extends the Subject abstract class and use it in the yaml configuration of MainController.

## Getting started

### 1. Define twitter api credentials

Create a copy of .env and name it .env.local. Fill out these variables
```
OAUTH_ACCESS_TOKEN
OAUTH_ACCESS_TOKEN_SECRET
API_KEY
API_SECRET
```
*in case you don't have any follow instructions on [Twitter API docs](https://developer.twitter.com/en/docs/twitter-api/getting-started/getting-access-to-the-twitter-api)


### 2. install composer packages
```
composer install
```
### 3. install frontend packages
```
yarn install
```
or 
```
npm install
```
### 4. build assets

```
yarn run dev
```
or 
```
npm run dev
```
### 5. run the app

#### using Symfony CLI
```
symfony serve
```

#### using built-in web server
```
php -S localhost:8000 -t public/
```

## Resources
[Abraham\TwitterOAuth](https://github.com/abraham/twitteroauth)