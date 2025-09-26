## CIT Student Portfolio (PHP, HTML, CSS)

A clean, professional portfolio for a Computer Information Technology (CIT) student. Built with PHP includes (partials) for structure and an external CSS stylesheet for consistent, responsive design.

### Quick Start

1. Ensure XAMPP (Apache + PHP) is running.
2. Place this folder as `C:\xampp\htdocs\PHP Projects\Portfolio`.
3. Open in a browser: `http://localhost/Portfolio/`

### Project Structure

```
Portfolio/
  index.php            # Home (hero, top skills, featured projects)
  skills.php           # Skills with animated proficiency bars
  courses.php          # Courses by category with timelines
  projects.php         # Project cards with tags
  about.php            # Bio and highlights
  contact.php          # UI-only contact form + social links

  partials/
    header.php         # <head> meta, fonts, CSS link, skip link
    nav.php            # Top navigation (active link highlighting)
    footer.php         # Footer

  assets/
    css/
      style.css        # External stylesheet (responsive, modern theme)
    img/
      favicon.svg      # Favicon placeholder
    cv.pdf             # Replace with your resume
```

### Customize

- Name & tagline: edit `index.php` hero section.
- Social links: update links in `index.php` and `contact.php`.
- Resume: replace `assets/cv.pdf` with your PDF (keep the same name or update links).
- Skills: adjust percentages in `skills.php` (update `--value:NN%` and text).
- Courses: edit lists and semesters in `courses.php` timelines.
- Projects: update cards in `projects.php` (title, description, tags).
- Styles: tweak colors/spacing in `assets/css/style.css`.

### Notes

- This is frontend-only: forms are UI only (no backend processing).
- Uses PHP `include` to share `header.php`, `nav.php`, and `footer.php` across pages.
- External CSS is used (no inline CSS), per best practice.

### Browser URL

- Home: `http://localhost/Portfolio/`
- Skills: `http://localhost/Portfolio/skills.php`
- Courses: `http://localhost/Portfolio/courses.php`
- Projects: `http://localhost/Portfolio/projects.php`
- About: `http://localhost/Portfolio/about.php`
- Contact: `http://localhost/Portfolio/contact.php`

### License

You may use and modify this project for personal and educational purposes.


