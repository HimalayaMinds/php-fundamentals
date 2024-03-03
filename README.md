# PHP Fundamentals

Welcome to the PHP Fundamentals repository! This repository is designed to help you learn and practice the basics of PHP programming language.

🚀 #PHP #PhpFundamentals #PhpBasic #OpenSource

![learn PHP Fundamentals](./assets/img/php-fundamental.jpg)

# PHP Basics :

#### 1. **Introduction:**

-  PHP (Hypertext Preprocessor) is a server-side scripting language widely used for web development.
-  Executed on the server, PHP generates dynamic content before sending it to the browser.

#### 2. **Syntax:**

-  PHP code is embedded within HTML.
-  Start with `<?php` and end with `?>`.

```php
<?php
   // PHP code here
?>
```

#### 3. **Variables:**

In the context of mathematics, computer science, and programming, a variable is a symbolic name or identifier associated with a value that may be changed during the execution of a program. Essentially, it is a storage location (typically in computer memory) paired with an associated symbolic name (an identifier), which contains some known or unknown quantity or information referred to as a "value."

-  Prefix with `$`.
-  Case-sensitive.
-  No need to declare data types.

```php
$name = "John";
$age = 25;
```

#### 4. **Data Types:**

-  Strings, Integers, Floats, Booleans, Arrays, Objects, NULL.

#### 5. **Operators:**

-  Arithmetic, Assignment, Comparison, Logical, Increment/Decrement.

```php
$x = 10;
$y = 5;
$sum = $x + $y;
```

# **Control Structures:**

#### 6. **Conditionals:**

-  `if`, `else`, `elseif`.

```php
$grade = 85;
if ($grade >= 60) {
   echo "Pass";
} else {
   echo "Fail";
}
```

#### 7. **Loops:**

-  `for`, `while`, `do-while`, `foreach`.

```php
for ($i = 0; $i < 5; $i++) {
   echo $i;
}
```

# **Functions:**

#### 8. **Functions:**

-  Reusable blocks of code.
-  Defined using `function`.

```php
function greet($name) {
   echo "Hello, $name!";
}
```

#### 9. **Arrays:**

-  Ordered maps.
-  Numerical and associative arrays.

```php
$colors = array("Red", "Green", "Blue");
$info = array("name" => "John", "age" => 30);
```

# **File Handling:**

#### 10. **File Handling:**

-  Reading and writing to files.

```php
$file = fopen("example.txt", "r");
echo fread($file, filesize("example.txt"));
fclose($file);
```

# **Database Connectivity:**

#### 11. **Database Connection:**

-  Using `mysqli` or `PDO` for database interactions.

```php
$conn = new mysqli("localhost", "username", "password", "database");
```

# **Security:**

#### 12. **Security:**

-  Protect against SQL injection and XSS attacks.
-  Use prepared statements for database queries.

```php
$stmt = $conn->prepare("INSERT INTO table (column) VALUES (?)");
$stmt->bind_param("s", $value);
$stmt->execute();
```

### **Conclusion:**

These notes cover the basics of PHP, but there's much more to explore. PHP is versatile and widely used for web development, from simple scripts to complex applications.

For in-depth learning, refer to the official [PHP Documentation](https://www.php.net/manual/en/) and explore real-world projects. Happy coding!

## License

This repository is licensed under the [MIT License](./LICENSE), allowing for widespread use and collaboration.

## Contact

For any questions, feedback, or collaboration inquiries, feel free to reach out:

-  Email: chaudharypradip678@gmail.com
<!-- -  Twitter: [@YourTwitterHandle](https://twitter.com/YourTwitterHandle) -->

Feel free to customize the content as needed to better suit your repository and audience. Let me know if you need further assistance!
