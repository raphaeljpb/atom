FROM nginx:latest

WORKDIR ../../../
COPY --from=registry.tre-pe.gov.br/sesel/atom /atom/src /atom/src
COPY docker/etc/nginx/nginx.conf /etc/nginx/nginx.conf
