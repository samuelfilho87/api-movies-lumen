# API: Rotas
- **`GET /movies`**: Rota que lista todos os filmes;
- **`GET /movies/:id`**: Rota que lista o filme com o `id` passado no parâmetro da rota;
- **`GET /movies/search/:word`**: Rota que busca filmes que contenham as palavras passadas no parâmetro `word` da rota;
- **`POST /movies`**: Rota para cadastrar um novo filme, deve receber `title_br`, `original_title`, `category`, `year`, `resume`, `directors`, `writers` e `stars` dentro do corpo da requisição;
- **`PUT /movies/:id`**: Rota para editar um filme já cadastrado que possua o `id` igual ao `id` presente nos parâmetros da rota;
- **`DELETE /movies/:id`**: Rota deleta filme com o `id` presente nos parâmetros da rota;

# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
