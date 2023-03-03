#
# Estructura de tabla para la tabla `noticias`
#

CREATE TABLE noticias (
  id smallint(5) unsigned NOT NULL auto_increment,
  titulo varchar(100) NOT NULL default '',
  texto text NOT NULL,
  url varchar(100) NOT NULL default '#',
  categoria enum('nacional','internacional','cultura','deportes') NOT NULL default 'nacional',
  fecha date NOT NULL default '0000-00-00',
  imagen varchar(100) default NULL,
  PRIMARY KEY  (id)
) ;

#
# Volcar la base de datos para la tabla `noticias`
#

INSERT INTO noticias VALUES (1, 'Zelenski rinde homenaje a los "héroes" de Ucrania con un simbólico acto en Kiev', 'El presidente de Ucrania, Volodimir Zelenski, ha encabezado este viernes un acto en Kiev para con el que su Gobierno ha querido homenajear a parte de los "héroes" de un año de guerra y proclamar su "orgullo" por la labor llevada a cabo estos últimos doce meses por las Fuerzas Armadas ucranianas. "Honramos a las generaciones de quienes han luchado para que la bandera azul y amarilla de nuestro pueblo ondee en un Kiev libre y en todos los lugares de una Ucrania libre", ha dicho Zelenski ...','https://www.europapress.es/internacional/noticia-zelenski-rinde-homenaje-heroes-ucrania-simbolico-acto-kiev-20230224120940.html', 'internacional', 'zelenski.jpg');
INSERT INTO noticias VALUES (2, 'Unidas Podemos ha vuelto a demandar al PSOE la derogación de la Ley 15/1997 que impulsó el PP y que habilita la externalización de servicios sanitarios para apoyar la Ley de equidad y cohesión sanitaria, conocida como "Ley Darias"','De esta forma, ha expresado su negativa a las opciones de cambio del texto trasladadas por el ala socialista. Así lo traslada la formación en un comunicado para indicar la posición trasladada de nuevo al Ministerio de Sanidad, en el marco de la ronda de con ...','https://www.europapress.es/nacional/noticia-up-exige-psoe-derogar-norma-pp-permite-privatizacion-sanitaria-apoyar-ley-darias-20230224114156.html', 'nacional', 'arias.jpg');
INSERT INTO noticias VALUES (3, 'United-Betis, Roma-Real Sociedad y Sevilla-Fenerbhace, en octavos de Liga Europa', 'El Manchester United inglés, la AS Roma italiana y el Fenerbahce turco serán los respectivos rivales del Real Betis, la Real Sociedad y el Sevilla en los octavos de final de la Liga Europa 2022-2023, según ha deparado este viernes el sorteo celebrado en Nyon (Suiza). El conjunto bético y el realista, por su condición de cabezas de serie, jugarán primero en Old Trafford y el Olímpico, mientras que el sevillista lo hará en el Ramón Sánchez-Pizjuán. Los partidos de ida de esta ronda de...','https://www.europapress.es/deportes/futbol-00162/noticia-united-betis-roma-real-sociedad-sevilla-fenerbhace-octavos-liga-europa-20230224122632.html', 'deportes', 'manchesterUnited.jpg');
INSERT INTO noticias VALUES (4, 'Las galeristas míticas de ARCO, protagonistas de una visita de los Reyes a la feria con cierre eurovisivo', 'Los Reyes han vuelto a la feria de ARCOMadrid para inaugurar una 42 edición en la que han retomado el contacto con algunas de las galeristas más representativas de este evento como son Helga de Alvear y Juana de Aizpuru, además de vivir un cierre eurovisivo con la actuación de la representante española que acudirá este año a Eurovisión, Blanca Paloma.    Flanqueados por autoridades como el ministro de Interior, Fernando Grande-Marlaska, o el alcalde de Madrid, José Luis Martínez-Almei ...','https://www.europapress.es/cultura/exposiciones-00131/noticia-galeristas-miticas-arco-protagonistas-visita-reyes-feria-cierre-eurovisivo-20230223143855.html', 'cultura', 'arco.jpg');
INSERT INTO noticias VALUES (5, 'Imputan homicidio imprudente al conductor implicado en el accidente en el que murió un motorista de 66 años en Sevilla', 'La Policía Local de Sevilla ha imputado un delito de homicidio por imprudencia al conductor del turismo implicado en el accidente del pasado 31 de enero en la calle Nivel que costó la vida a un motorista, de 66 años de edad. Según ha informado Emergencias Sevilla en sus redes sociales consultadas por Europa Press, un equipo especializado de la Policía Local, tras la investigación del siniestro, ha determinado que el conductor, de 44 años de edad, implicado en el accidente podría haber ...','https://www.europapress.es/andalucia/sevilla-00357/noticia-imputan-homicidio-imprudente-conductor-implicado-accidente-murio-motorista-66-anos-sevilla-20230224085804.html', 'nacional', 'sevilla.jpg');