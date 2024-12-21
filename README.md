# MVCore Framework

MVCore is a lightweight PHP MVC framework designed for beginners to learn and understand MVC (Model-View-Controller) architecture. It provides a simple yet powerful structure for building web applications while maintaining clean code organization.

## Features

- Simple MVC Architecture
- Lightweight and Fast
- Easy to Learn
- Database Migration System
- Built-in CLI Tool

## Requirements

- PHP 8.0 or higher
- MySQL 5.7 or higher
- Composer

## Installation

```bash
composer create-project marrrkkk/mvcore myapp
cd myapp
```

## Usage

```bash
php mvcore serve
```

Create a new controller
```bash
php mvcore make:controller ControllerName
```

Create a new model
```bash
php mvcore make:model ModelName
```

Create a new migration
```bash
php mvcore make:migration create_table_name
```

Run migrations
```bash
php mvcore migrate up [migration_name]
```

Rollback migration
```bash
php mvcore migrate down [migration_name]
```

## Configuration

```env
DB_HOST=localhost
DB_PORT=3306
DB_NAME=your_database
DB_USER=root
DB_PASSWORD=
DB_CHARSET=utf8mb4
```
## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

MVCore is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support, please create an issue in the GitHub repository or contact the maintainers.

## Credits

MVCore is created and maintained by [Your Name/Organization].

---

This framework is designed for educational purposes and basic web applications. While it's production-capable, consider using more established frameworks like Laravel for large-scale applications.
