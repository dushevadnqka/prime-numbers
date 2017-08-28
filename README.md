# Code challenge, which is able to find all prime numbers by given limit and draws a multiplication table with them.

### 1. Prerequisites:
    - Be sure, that you have installed a PHP -v 5.5 or higher
    - Be sure, that you have installed composer / composer.phar on your machine

### 2. Get the code:
    ```
    git clone https://dushevadnqka@bitbucket.org/dushevadnqka/pn-code-challenge.git
    ```
    
### 3. Install all dependencies and prepare the application:
    - Into the project folder:
    ```
    composer install
    ```
    * Depends on your composer alias it could be necessary to run instead:
    ```
    composer.phar install
    ```
### 4. Run the application:
    - With default threshold:
    ```
    php index.php
    ```
    - With certain limit:
    ```
    php index --limit [N] (php index --limit 20)
    ```
    
### 5. Test:
    ```
    vendor/bin/phpspec run
    ```
    