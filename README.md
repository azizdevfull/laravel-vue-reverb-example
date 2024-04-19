<h1>Installation</h1>

<h3>For backend: </h3>

```bash
compser i
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```.env
REVERB_APP_ID=<your_id>
REVERB_APP_KEY=<your_key>
REVERB_APP_SECRET=<your_secret>
REVERB_HOST="localhost"
REVERB_PORT=8080
REVERB_SCHEME=http
```

```bash
php artisan migrate
```

```bash
php artisan serve
```

```bash
php artisan reverb:start
```

```bash
php artisan queue:work
```

<h3>For frontend: </h3>

```bash
npm install
```

```bash
npm run dev
```
