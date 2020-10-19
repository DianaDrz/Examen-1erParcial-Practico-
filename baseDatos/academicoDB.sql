--**************************THALIA DAYANA RUIZ SAMO***********************************
--TABLA IDENTIFICADOR
--------------------------------------------------------------------------------------
create table identificador(
ci varchar(30) primary key,
nombreCompleto varchar(40),
fechaNaci date,
depto varchar(2)
)

insert into identificador values('74347','Gabriela Martinez Sanchez','1999-05-18','01');
insert into identificador values('84348','Andrea Ortiz Perez','1995-07-30','02');
insert into identificador values('94449','Juan Jose Rojas Pinto','1997-10-23','03');
insert into identificador values('84645','Carlos Fernandez Huanca','1993-01-16','01');

--*************************************************************************************
--TABLA USUARIO
---------------------------------------------------------------------------------------
create table usuario(
ci varchar(30) primary key,
clave varchar(30),
login varchar(30),
foreign key (login) references identificador(ci)
)

insert into usuario values('74347','1234','74347');
insert into usuario values('84348','4321','84348');
insert into usuario values('94449','2233','94449');
insert into usuario values('84645','1122','84645');

--*************************************************************************************
--TABLA NOTAS RESPUESTA A LA PREGUNTA 2
--------------------------------------------------------------------------------------
create table notas(
ci varchar(30),
materia varchar(30),
nota float,
primary key(ci,materia)
)

insert into notas values('74347','INF-121',90);
insert into notas values('74347','LAB-121',97);
insert into notas values('74347','INF-123',34);
insert into notas values('84348','INF-131',45);
insert into notas values('84348','LAB-131',51);
insert into notas values('94449','INF-145',65);
insert into notas values('94449','INF-156',32);
insert into notas values('94449','INF-143',87);
insert into notas values('84645','INF-161',76);
insert into notas values('84645','INF-166',49);
insert into notas values('84645','INF-164',35);


--***********************************************************************************
--RESPUESTA A LA PREGUNTA 2 - FORMA 1
-------------------------------------------------------------------------------------
SELECT 
count(case when iden.depto ='01' then n.nota end) CHQ,
count(case when iden.depto ='02' then n.nota end) LPZ,
count(case when iden.depto ='03' then n.nota end) CBBA,
count(case when iden.depto ='04' then n.nota end) SCZ,
count(case when iden.depto ='05' then n.nota end) BNI,
count(case when iden.depto ='06' then n.nota end) PND,
count(case when iden.depto ='07' then n.nota end) TJA,
count(case when iden.depto ='08' then n.nota end) PSI,
count(case when iden.depto ='09' then n.nota end) ORU
FROM identificador iden, notas n
where iden.ci like n.ci and n.nota > 50;
--**********************************************************************************
--RESPUESTA A LA PREGUNTA 2 - FORMA 2 funcion pivot en sql server
------------------------------------------------------------------------------------
select [01] AS CHQ, [02] AS LPZ, [03] AS CBBA, [04] AS SCZ, [05] AS BNI,[06] AS PND,[07] AS TJA,[08] AS PSI,[09] AS ORU
from (
	select iden.depto 
	from identificador iden, notas n 
	where iden.ci like n.ci and n.nota > 50
)s
pivot(
	count(depto)
	for [depto] in ([01],[02],[03],[04],[05],[06],[07],[08],[09])
)p
----------------------------------------------------------------------------------

