
# Test Task

Circle and Triangle Information Calculation




## Environment Variables

To run this project, you will need to change the following environment variables to your .env file

`DATABASE_URL` Change Database connection URI string


## Run Project

Clone the project

```bash
  git clone https://github.com/JCaspTechnologies/symfony-code-test.git
```

Go to the project directory

```bash
  cd symfony-code-test
```

Install dependencies

```bash
  composer install
```

Create database

```bash
  php bin/console doctrine:database:create
```

Migrate database tables

```bash
  php bin/console doctrine:migrations:migrate
```

Start the server

```bash
  symfony server:start
```


## API Reference

#### Get circle information

```http
  GET /circle/{radius}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `radius` | `float` | **Required**. radius if the circle|

#### Get triangle information

```http
  GET /triangle/{a}/{b}/{c}
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `a`      | `float` | **Required**. side a|
| `b`      | `float` | **Required**. side b|
| `c`      | `float` | **Required**. side c|



## Micro Services

We have not use micro services because we do not need specific services for the Circle and Triangle.

