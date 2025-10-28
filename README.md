# Shortquts

**A community-powered hub for discovering, sharing, and managing powerful iOS Shortcuts.**

Shortquts is an open-source project aimed at creating a clean, user-friendly, and powerful web platform for the iOS Shortcuts community. Our goal is to provide a central place where users can find reliable, well-documented shortcuts to automate their daily tasks, and where creators can share their work with a wider audience.

---

### 🚧 Project Status: In Development 🚧

This GitHub repository is the central hub for the entire project. In its current, initial phase, it serves a critical role:

**This repository acts as the primary data source (a "JSON Database") for the project's core data.**

This allows us to:
1.  Develop and test the official **"Shortquts Updater"** iOS Shortcut against a stable data structure.
2.  Finalize the data architecture before the full backend is deployed.
3.  Collaborate on the structure and content of the shortcut database.

The full PHP-based website and API are currently under development.

---

### ✨ Key Features (Vision)

-   **A Rich, Structured Database:** Shortcuts are documented with detailed metadata, including semantic and integer versioning, multi-language changelogs, compatibility information, required permissions, and dependencies.
-   **A Powerful Public API:** A RESTful API (`/api/v1/`) will allow developers, power-users, and other shortcuts to programmatically access the entire shortcuts database.
-   **Community-Driven:** The ultimate vision is for the community to submit, review, and rate shortcuts, ensuring quality and variety.
-   **Fully Open Source:** Both the frontend website and the backend API code will be made available in this repository, encouraging transparency and contribution.
-   **Multilingual Support:** The data structure is designed from the ground up to support multiple languages for all user-facing text.

### 🗃️ Repository Structure

-   `/data/shortcuts.json`: The main database file containing all information for every shortcut.
-   `/data/categories.json`: Defines the categories used to organize shortcuts.
-   `/data/users.json`: (Future) Will store data for registered users and creators.

---

We are excited to build this platform for the iOS automation community. Stay tuned for updates!
