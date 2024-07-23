SELECT 'CREATE DATABASE inter_rapidisimo'
WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'inter_rapidisimo')\gexec