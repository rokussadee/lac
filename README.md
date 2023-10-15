# Les Ateliers Claus

## Deployment

To deploy this project:

Create .env file based on [.env.example](https://github.com/rokussadee/lac/blob/development/lac_laravel/.env.example)

Run MySQL test database (for example, using MAMP), then;

```bash
  npm install
  composer install
  npm run watch-poll
  php artisan migrate:refresh
  php artisan db:seed
  php artisan serve
```

## Acknowledgements

- [AlpineJS Carousel](https://gist.github.com/calebporzio/6f61fcd74fdf67140be774b4e6fdb86d)
- [Optimized YouTube Embed](https://chrispennington.blog/blog/lazy-load-youtube-embed-with-custom-poster/)
