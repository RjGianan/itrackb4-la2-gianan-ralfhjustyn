# Laboratory Activity 3 - Detail Pages and Route Parameters

## Student Information
- **Name:** Ralfh Justyn V. Gianan
- **Block:** 4C
- **Course:** ITRACKB4 - Web Systems and Technologies: Web Programming 2

## Answers to Reflection Questions

### Q1: Route Order - Featured vs Detail

I placed my `/movies/featured` route **before** the `/movies/{id}` route in my routes file. This order is critical because Laravel matches routes from top to bottom and stops at the first match. If I had swapped them, when someone visits `/movies/featured`, Laravel would check the detail route first, see that `{id}` matches any string (including the word "featured"), and incorrectly display the detail view trying to find an item with id="featured". This would result in a 404 error on my featured page. By placing the featured route first, it matches before the generic `{id}` parameter ever gets checked, ensuring the featured movie displays correctly.

### Q2: Handling Non-Existent IDs

When someone visits a URL with an ID that doesn't exist in my data (like `/movies/999`), they receive a proper **404 Not Found** page with no file paths or error details exposed. I implemented this by using the `abort(404)` function in my `show()` method. Before returning the movie view, I check whether the requested ID exists in my data array using `isset($movies[$id])`. If the ID is not found, the `abort(404)` helper immediately stops execution and returns a clean HTTP 404 response, which is much more secure and professional than letting a PHP error display.

### Q3: Why Use Route Names Instead of Hard-Coded URLs

I generate all my links from route names (like `route('movies.show', $movie['id'])`) instead of typing URLs directly (like `/movies/{{ $movie['id'] }}`). This is important because if I ever need to change a URL structure—for example, changing `/movies` to `/library`—I only need to update the route definition in `routes/web.php`. All links throughout my application automatically use the new URL without editing any view files. If I had hard-coded `/movies/7` in my Blade templates, I would have to find and update every single URL manually, and I'd likely miss some, creating broken links that users would encounter.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
