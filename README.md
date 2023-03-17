## IKMI CRUD Generator

A Laravel package to generate a complete CRUD operation

## Installation

IKMI Crud Generator Requires
- PHP ^7.4
- Laravel Framework ^8.0
- Composer 2
- MySql Database

Type in console:

```shell
composer require ikmi/crudgenerator
```
* The package will automatically register its service provider.

* Make sure your project is connected to your database before publishing.
  * [Reason] After publishing, a migration file will create and create a table automatically in database

* Publish the package's configuration file to the application's own config directory
```shell
php artisan vendor:publish --provider="Ikmi\CrudGenerator\CrudGeneratorServiceProvider"
```

## Folder Structure

```
- src
    - app
        - Controllers
            - CategoryController.php
        - Migrations
            - create_categories_table.php
        - Models
            - Category.php
        - Requests
            - CategoryRequest.php
        - Routes
            - web.php
        - views
            - category
                - create.blade.php
                - edit.blade.php
                - index.blade.php
                
    - CrudGeneratorServiceProvider.php
    
- composer.json
- README.md
- .gitignore

```
## Usage

* After installing, It will create a resource route which name categories

* Browse below URL after serve your project
```
{{base_url}}/categories
```

* Then you can complete the CRUD operation by following Routes
```
/categories
/categories/create
/categories/store
/categories/{category}/edit
/categories/{category}/update
/categories/{category}/destroy
```