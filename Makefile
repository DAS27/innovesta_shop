##
## Проект
## ------

var: ## Убедиться, что существует папка var
	mkdir -p var

##
## Контроль качества кода
## ----------------------

composer-validate: ## Провалидировать composer.json и composer.lock при помощи composer validate (https://getcomposer.org/doc/03-cli.md#validate)
	$(EXEC_PHP) composer validate --strict --no-check-publish
.PHONY: composer-validate

composer-unused: vendor ## Обнаружить неиспользуемые зависимости Composer при помощи composer-unused (https://github.com/icanhazstring/composer-unused)
	$(EXEC_PHP) composer unused
.PHONY: composer-unused

composer-audit: ## Обнаружить уязвимости в зависимостях Composer при помощи composer audit (https://getcomposer.org/doc/03-cli.md#audit)
	$(EXEC_PHP) composer audit
.PHONY: composer-audit

test:
	$(EXEC_PHP) composer test
.PHONY: test

composer-normalize: vendor # Упорядочить composer.json
	$(EXEC_PHP) composer normalize
.PHONY: composer-normalize

# -----------------------

##################
# Docker compose
##################

dc_build:
	docker-compose -f docker-compose.yml build

dc_start:
	docker-compose -f docker-compose.yml start

dc_stop:
	docker-compose -f docker-compose.yml stop

dc_up:
	docker-compose -f docker-compose.yml up -d --remove-orphans

dc_ps:
	docker-compose -f docker-compose.yml ps

dc_logs:
	docker-compose -f docker-compose.yml logs -f

dc_down:
	docker-compose -f docker-compose.yml down -v --rmi=all --remove-orphans


##################
# App
##################

app_bash:
	docker-compose -f docker-compose.yml exec -u www-data app sh
