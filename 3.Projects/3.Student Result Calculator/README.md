# Student Result Calculator

Simple PHP web app with registration, login, and a student result calculator for up to seven subjects. Uses Tailwind CSS, sessions, and file-based storage.

## Quick start (XAMPP on Windows)

1. Place this folder under `C:\xampp\htdocs\PHP\2.Projects\3.Student Result Calculator`.
2. Start Apache in XAMPP.
3. Visit `http://localhost/PHP/2.Projects/3.Student%20Result%20Calculator/public/` in your browser.

## Structure

- `public/` - Web root (index, register, login, calculator, result, logout)
- `includes/` - Shared PHP (auth, storage, layout, tailwind)
- `storage/` - Data storage (users.json)
- `tailwind/` - Tailwind config and built CSS

## Notes

- Passwords are hashed using PHP's `password_hash`.
- Session-based authentication, file-based user storage.
- No database required.


