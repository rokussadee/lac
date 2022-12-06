# Les Ateliers Claus

## Deployment

To deploy this project;

Run MySQL test database, then;

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
