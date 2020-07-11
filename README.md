# docker-compose-symfony
A simple php environment for Symfony.

## Usage

Install Docker on your system.

Build the container:

```
docker-compose up -d --build
```

cd in to src file and install Symfony:

```
composer create-project symfony/skeleton .
```

Go to `http://localhost:8080`

## Container ports

- **nginx** - `:8080`
- **mysql** - `:4306`
- **php** - `:9000`
