# Bronx Bites — PHP Header and Footer Project

A fictional restaurant website demonstrating reusable PHP includes.

## Files
- `header.php`: shared HTML head, site title, and navigation.
- `footer.php`: shared contact link, dynamic copyright year, and closing tags.
- `index.php`: restaurant homepage.
- `menu.php`: menu generated from a PHP array with a foreach loop.
- `style.css`: shared responsive styling.

Both content pages use `include __DIR__ . '/header.php';` and
`include __DIR__ . '/footer.php';`. `__DIR__` resolves includes relative to
that PHP file. Each page sets `$pageTitle` and `$currentPage` before including
the header. HTML output is escaped with `htmlspecialchars` where appropriate.

## Run locally
Install PHP 8 or later, open a terminal in this folder, and run:

```sh
php -S localhost:8000
```

Open http://localhost:8000/index.php and follow the Our menu link.
You can also put the folder in XAMPP's htdocs and visit it through localhost.
Opening PHP files directly in a browser will not execute PHP.

## Check functionality
1. Visit index.php and menu.php; confirm both display the same header/footer.
2. Confirm each page title and active navigation link changes.
3. Confirm the menu contains six dishes with formatted prices.
4. Confirm the footer year matches the server year.
5. Resize the window to check the single-column mobile layout.

## Submit through GitHub
1. Create a repository named `bronx-bites-php` on GitHub.
2. Extract this ZIP, then upload the six project files from inside this folder
   using **Add file > Upload files** and commit the changes.
3. Submit the repository URL shown in your browser to your instructor.

GitHub stores the PHP source. GitHub Pages cannot execute PHP; use a PHP
server to run the project.

## Course reference
This project follows the assignment's Chapter 5 include-file pattern.
The actual uCertify lesson and its GitHub example URL were not supplied,
so this is an original implementation rather than a verified reproduction
of those examples. Compare it with your assigned lesson before submission.
