start:
	docker run --rm --name sf-postgres -e POSTGRES_DB=db_name -e POSTGRES_USER=db_user -e POSTGRES_PASSWORD=db_password -p 5432:5432 -d postgres
	symfony server:start -d
	symfony console doctrine:schema:create
	symfony console doctrine:fixtures:load --yes

stop:
	symfony server:stop
	docker stop sf-postgres
