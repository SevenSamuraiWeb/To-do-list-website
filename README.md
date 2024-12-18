# Taskify - your personal task manager

## Project Overview
This project is a simple and efficient task management website designed to help users manage their daily tasks effectively. With a smooth and user-friendly interface, users can easily add, view, edit, delete, and mark tasks as completed.

---

## Features

- **Add Tasks**: Users can create new tasks with ease.
- **Edit Tasks**: Update task details to reflect changes.
- **Delete Tasks**: Remove tasks that are no longer needed.
- **Mark as Completed**: Use checkboxes to mark tasks as done.
- **User-Friendly UI**: Simple and smooth design for an optimal experience.

---

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

---

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```

2. Set up your web server and database:
   - Install [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/).
   - Create a database and import the provided `.sql` file (if applicable).

3. Update the database connection in the `config.php` file:
   ```php
   $servername = "your-server";
   $username = "your-username";
   $password = "your-password";
   $dbname = "your-database";
   ```

4. Run the project:
   - Place the project folder in your web server's `htdocs` directory (if using XAMPP).
   - Access the website at `http://localhost/<project-folder-name>`.

---

## Usage

1. **Add Tasks**:
   - Fill in the task details and click "Add Task."

2. **Edit Tasks**:
   - Click the "Edit" button next to a task, update the details, and save.

3. **Delete Tasks**:
   - Click the "Delete" button to remove a task.

4. **Mark Tasks as Completed**:
   - Check the checkbox next to a task to mark it as done.

---

## Screenshots
Include screenshots here to showcase the UI and features.

---

## Future Enhancements
- Add user authentication for personalized task lists.
- Include task categorization or tagging.
- Enable drag-and-drop functionality to reorder tasks.
- Implement a search feature to find tasks quickly.

---

## Contributions
Contributions are welcome! Feel free to open an issue or submit a pull request.

---

## License
This project is licensed under the [GNU General Public License v3.0](LICENSE).

---

## Acknowledgements
Thanks to all contributors and resources that helped build this project!

