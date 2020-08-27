# Contact Form Package
[![Issues](https://img.shields.io/github/issues/sudipsingh04/Contact-admin-package?style=flat-square)](https://github.com/sudipsingh04/Contact-admin-package/issues) [![Stars](https://img.shields.io/github/stars/sudipsingh04/Contact-admin-package?style=flat-square)](https://github.com/sudipsingh04/Contact-admin-package/stargazers)
##### This a contact form to send email to admin and store the query in database.

Live url : (https://packagist.org/packages/sudip/contact)

## Usage

1. Install the package :- `composer require sudip/contact`
2. Configure your database and email in `.env` file.
3. Run migration :- `php artisan migrate`
4. Run project server `php artisan serve`,
5. Test url `http://127.0.0.1:8000/contact`

## Views Modification
###### In order to modify the contact form and email template :-
1. Run `php artisan vendor:publish`
2. Select the option which depicts `Provider:Sudip\Contact\ContactServiceProvider`
3. Hence files can be edited in `resources/views/vendor/contact`
