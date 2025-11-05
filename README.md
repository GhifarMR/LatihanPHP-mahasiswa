MariaDB [(none)]> CREATE DATABASE LatihanPHP;

Query OK, 1 row affected (0.004 sec)

MariaDB [(none)]> USE LatihanPHP;

Database changed

MariaDB [LatihanPHP]> CREATE TABLE mahasiswa (

    -> NIM CHAR(11) PRIMARY KEY,
    -> Nama VARCHAR(40),
    -> Alamat VARCHAR(100),
    -> Kota VARCHAR(40),
    -> JK CHAR(1)
    -> );
    
Query OK, 0 rows affected (0.068 sec)
