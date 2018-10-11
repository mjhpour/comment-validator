# Sample Project For FARATEK

### Description
This project is a test project for FARATEK hiring process.

### Requirenment:
- Composer (for autoloading)
- PHP 7.x

### Basic Usage:
- Used This command to update autoload file
    ```sh
    $ cd <project_directory>
    $ composer dump-autoload -o
    ```
- Run PHP with Built in server
    ```sh
    $ cd <project_directory>
    $ php -S localhost:<your_port> -f index.php
    ```
- Run PHP in command line
    ```sh
    $ cd <project_directory>
    $ php index.php
    ```

### Add more validations:
- Create a class in the `<project_directory>/src/Component/Comment/Validator` directory.
- Extend this class from `FaraketTestProj\Component\Comment\Validator\AbstractCommentValidator`.
- Implement your custom validation.
- Have fun!
