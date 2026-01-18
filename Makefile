all:
	@docker compose -f ./srcs/docker-compose.yml up  --build

down:
	@docker compose -f ./srcs/docker-compose.yml down

re: down
	@docker compose -f srcs/docker-compose.yml up --build


clean:
	docker compose -f srcs/docker-compose.yml down
	docker system prune -f


.PHONY: all re down clean




