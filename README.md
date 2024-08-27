# Blog Project

## Project Overview

This project is a fully functional blog application built exclusively using pure PHP. The goal of this project is to gain a deeper understanding of PHP and its tools by focusing on fundamental programming concepts and best practices. No frameworks or libraries were used, allowing for a comprehensive exploration of core PHP functionalities.

## Key Concepts

### 1. Classes and Object-Oriented Programming (OOP)
The project is structured using classes to implement Object-Oriented Programming (OOP) principles. Each component of the blog, such as posts, users, and comments, is represented as a class. This approach promotes modularity, code reusability, and easier maintenance.

- **Example:** The `Post` class handles all operations related to blog posts, including creating, updating, and deleting posts. It also interacts with the database to fetch and store post data.

## PHP Types

PHP is a dynamically typed language, meaning you don't need to declare the type of a variable explicitly. Understanding PHP’s types can help you write more efficient and error-free code. Here’s a breakdown of the different types of variables in PHP:

#### **Integer**

Integers represent whole numbers without any decimal points. They can be both positive and negative.
```php
<?php
$age = 25;          // Positive integer
$temperature = -5;  // Negative integer
?>
```

#### **Float (Double)**

Floats, also known as doubles, represent numbers with decimal points. They are used for more precise calculations that require fractional values.
```
<?php
$price = 19.99;     // Float with decimal
$pi = 3.14159;     // Float representing Pi
?>
```

#### **String**

Strings are sequences of characters enclosed in single or double quotes. They are used to represent textual data.
```
<?php
$name = "John Doe";       // String with double quotes
$greeting = 'Hello, world!'; // String with single quotes
?>
```

#### **Boolean**

Booleans can have only two possible values: `true` or `false`. They are often used in conditional statements to control the flow of a program.
```
<?php
$is_logged_in = true;  // Boolean true
$is_admin = false;     // Boolean false
?>
```

#### **Array**

Arrays are collections of values indexed by keys. PHP supports numeric arrays, where the index is a number, and associative arrays, where the index is a named key.
```
<?php
$colors = array("Red", "Green", "Blue"); // Numeric array
?>
```
#####  Associative array
```
<?php
$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
);
?>

```

#### **Object**

Objects are instances of classes and can contain both properties and methods. They are used to model real-world entities and behaviors.
```
<?php
class Car {
    public $make;
    public $model;

    public function start() {
        return "The car is starting.";
    }
}

$myCar = new Car();
$myCar->make = "Toyota";
$myCar->model = "Corolla";
?>
```

#### **NULL**

The `NULL` type represents a variable with no value. A variable that has been explicitly set to `NULL` or has not been initialized has this type.
```
<?php
$var = NULL; // Explicitly set to NULL
$unset_var;  // Uninitialized variable will also be NULL
?>
```

#### Type Casting

Type casting is the process of converting a variable from one type to another. This can be done explicitly by the programmer to ensure data is in the desired format.
```
<?php
$int = (int) 3.14;   // Cast float to integer
$float = (float) "12.34"; // Cast string to float
?>
```

#### Type Juggling

PHP automatically converts variables between types as needed, a feature known as type juggling. This allows PHP to handle different types of data flexibly without requiring explicit conversion in many cases.

Understanding these types and how PHP manages them will help you write more robust and maintainable code in your applications.
```
<?php
$sum = "10" + 5; // PHP converts "10" to integer and performs the addition
echo $sum; // Outputs: 15
?>
```


### 2. Type Hinting
To ensure code reliability and prevent errors, variable types and type hinting are extensively used throughout the project. This practice enforces strict data types, leading to more predictable and error-free code.

- **Example:** Methods in classes use type hints for their parameters and return types, ensuring that the correct data types are passed and returned.

```php
class Post
{
    private int $id;
    private string $title;
    private string $content;

    public function __construct(int $id, string $title, string $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
```
### 3. Continuous Integration / Continuous Deployment (CI/CD)

The project includes a CI/CD pipeline to automate testing, building, and deployment processes. This ensures that every change to the codebase is tested and deployed in a consistent and reliable manner.
```
on: 
  push:
    branches:
     - main
     
name: 🚀 Deploy website on push
jobs:
  web-deploy:
    name: 🎉 Deploy
    runs-on: ubuntu-latest
    steps:
    - name: 🚚 Get latest code
      uses: actions/checkout@v4
    
    - name: 📂 Sync files
      uses: SamKirkland/FTP-Deploy-Action@v4.3.5
      with:
        server: ${{ secrets.ftp_server }}
        username: ${{ secrets.ftp_user }}
        password: ${{ secrets.ftp_password }}
        server-dir: htdocs/
```

- **Example:** GitHub Actions is used to run automated tests on each push to the repository. If all tests pass, the code is automatically deployed to a staging server for further testing.

### 4. Branching Models

A clear and structured branching model is followed to manage the development workflow. This ensures that the codebase remains stable and that features are developed in isolation before being merged.

- **Main Branches:**
  - **`main` branch:** Contains the production-ready code.
  - **`develop` branch:** Contains the latest features and changes that are ready for testing.

- **Feature Branches:**
  - Each new feature or bug fix is developed in its own branch, named `feature/feature-name` or `bugfix/bug-description`. Once complete, the branch is merged into `develop` and tested before being merged into `main`.

## Conclusion

This blog project showcases the power and flexibility of pure PHP. By focusing on fundamental programming concepts like classes, variable types, OOP, type hinting, and best practices like CI/CD and branching models, this project not only serves as a functional application but also as a learning tool for mastering PHP.
