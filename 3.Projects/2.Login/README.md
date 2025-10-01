## Beach Logging Project — PHP Role-Based Login

Pure PHP login system with two roles: Administrator and User. Frontend uses HTML with PHP and Tailwind CSS (via CDN). External custom styles are in `assets/styles.css`.

### Features
- Role-based authentication (admin and user)
- Redirects to role-specific dashboards
- Session-based access guards
- Tailwind-styled UI

### Demo Credentials
- Admin: username `admin`, password `admin123`
- User: username `user`, password `user123`

You can change these in `users.php`.

### Prerequisites
- XAMPP (Apache + PHP) on Windows
- Project path: `C:\xampp\htdocs\PHP\2.Projects\2.Login\`

### Run Locally
1. Start Apache in XAMPP.
2. Navigate to `http://localhost/PHP/2.Projects/2.Login/`.
3. You will be redirected to `login.php`.
4. Sign in with the demo credentials above:
   - Admin goes to `admin.php`
   - User goes to `user.php`
5. Use `logout.php` to end the session.

### File Structure
```
2.Login/
├─ index.php           # Entry; redirects based on session/role
├─ login.php           # Login form + POST handling
├─ auth.php            # Auth helpers: authenticate, guards, logout
├─ users.php           # Demo user store (username/password/role)
├─ admin.php           # Admin dashboard (guarded)
├─ user.php            # User dashboard (guarded)
├─ logout.php          # Session destroy + redirect to login
└─ assets/
   └─ styles.css       # Small custom styles (external CSS)
```

### Technology Notes
- Tailwind CSS is included via CDN in the page `<head>`.
- Keep custom CSS in `assets/styles.css` (separate from HTML) for clarity.

### Customization
- Update demo users in `users.php`.
- To switch to hashed passwords:
  1. Replace `password` with `password_hash` (generated via `password_hash('newpass', PASSWORD_BCRYPT)`),
  2. Update `authenticate` in `auth.php` to use `password_verify($password, $record['password_hash'])`.

### Security Considerations
- This demo keeps credentials in memory and compares plain text for simplicity. For production:
  - Use a database with hashed passwords (bcrypt/argon2)
  - Implement CSRF protection for forms
  - Regenerate session IDs on login
  - Use HTTPS

### Troubleshooting
- If you see a blank page or immediate redirect, ensure sessions are enabled and Apache is running.
- Confirm the URL path matches your folder structure under `htdocs`.


