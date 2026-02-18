# 🌿 GaSo&Co — Business Website

🔗 **Live version**  
<https://sophiamorchen.github.io/gaso-co/>

---

## Overview

This repository contains the source code of the official website for **GaSo&Co**, a sole proprietorship specializing in:

- Equipment rental (garden & construction tools)  
- Green space maintenance  
- Small home improvement services  

The project serves both as a real business website and as a structured front-end development project.

---

## Technical Stack

- HTML5  
- SCSS (modular architecture)  
- CSS3 (Flexbox, responsive design)  
- GitHub Pages (static hosting)

---

## Architecture & Deployment

The project was initially built using a modular PHP structure (with reusable includes for layout components).

Since **GitHub Pages does not support server-side rendering**, the project was fully converted into a static HTML version to enable deployment.

This adaptation required:

- Removing PHP includes  
- Refactoring layout structure  
- Maintaining styling modularity via SCSS  
- Ensuring full static compatibility  

The SCSS architecture remains modular and organized, with separated concerns (variables, reset, layout, components, sections).

---

## Styling Approach

- Centralized variables (`_variables.scss`)
- Global reset & base layers
- Component-based partials (header, footer, buttons, sections)
- Compiled via `main.scss`
- Local Montserrat font integration

---

## Design Principles

- Clean layout structure  
- Maintainable SCSS organization  
- Responsive-first thinking  
- No frameworks  
- No JavaScript dependency  

---

## Live Deployment

Hosted via GitHub Pages:  
<https://sophiamorchen.github.io/gaso-co/>

---

## Author

**Sophia Mörchen**  
Front-end Developer & Entrepreneur  
