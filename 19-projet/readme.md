
# Creez une base de donnée que vous appelerez ecommerce_php, puis creer une premiere table membre

id_membre - int(4) - Clé primaire (s'auto indente)
pseudo - varchar(20) - unique
nom - varchar(30)
prenom - varchar(30)
email - varchar(50)
mdp - varchar(150)
photo - varchar(150)
ville - varchar(50)
code_postal - int(5) - unsigned zerofill
adresse - varchar(50)
genre - enum("m","f","nb","nspp")
role - int(1) - defaut 0