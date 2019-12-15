# Заготовка для работы над проектом

## Структура файлов и папок

```text
├── README.md
├── composer.json
├── containers
├── databases
├── docker-compose.yaml
├── logs
└── src
```

| что | зачем |
| --- | --- |
| `containers` | Описания контэйнеров |
| `databases` | Хранилище баз данных |
| `docker-compose.yaml` | Файл описывающий работу docker-compose |
| `logs` | Системные логи |
| `src` | Код приложения |

# Окружение
### PHP 7.4
- xdebug
  - version: 2.8.1
  - port: 9005
  - host: host.docker.internal
  
### MariaDb 10.4

