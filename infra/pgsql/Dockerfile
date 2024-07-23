FROM postgres:16.3

# Configurar variables de entorno
ENV POSTGRES_DB=inter_rapidisimo
ENV POSTGRES_USER=jhossweb
ENV POSTGRES_PASSWORD=secret

# Copiar scripts de inicialización
COPY ./init.sql /docker-entrypoint-initdb.d/
