#!/bin/bash

/usr/bin/mysql -u root -e "CREATE USER 'devraytec_cmsful'@'localhost' IDENTIFIED BY 'kMby2F~I^T.,'"
/usr/bin/mysql -u root -e "CREATE DATABASE devrayte_cmsful"
/usr/bin/mysql -u root -e "GRANT ALL PRIVILEGES ON devrayte_csmful.* to 'devrayte_cmsful'@'localhost'"
/usr/bin/mysql -u root -e "FLUSH PRIVILEGES"