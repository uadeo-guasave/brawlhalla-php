-- mysql -uroot -h 127.0.0.1

use uadeo;

-- actualizar la contraseña del usuario 1 ya registrado
update users
set password=sha(password)
where id=1;

select * from users;

-- validar inicio de sesion
select id,uuid,name,email from users
where name='' and password=sha('');