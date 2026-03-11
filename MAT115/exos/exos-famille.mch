MACHINE devoir3

/* Voici un commentaire */

SETS

  Personne={p0, p1, p2, p3, p4, p5, p6, p7}


CONSTANTS

/* Constantes initiales */

	/*
	Nous modélisons ici la notion de genre qui était en vigueur avant les années 2000.
	*/
    Homme         /* Ensemble des personnes qui sont des hommes */
  , Femme         /* Ensemble des personnes qui sont des femmes */
  , Parent        /* (x,y) dans Parent ssi x est un parent de y */

/* Constantes à définir dans l'exercice */

  , Mere              /* Ensemble des personnes qui sont des meres: les femmes qui ont au moins un enfant */
  , Mere_alt          /* Définition alternative de Mere: définissez cet ensemble sans utiliser une définition par extension ou compréhension */
  , SansEnfant        /* Ensemble des personnes qui n'ont pas d'enfants */
  , SansEnfant_alt    /* Définition alternative de SansEnfant: définissez cet ensemble sans utiliser une définition par extension ou compréhension */
  , Fraterie          /* (x,y) dans Fraterie ssi x et y ont les mêmes deux parents */
  , FratLarge         /* (x,y) dans FratLarge ssi x et y ont au moins un parent en commun.  Cette relation est symétrique. */
  , FratLarge_alt     /* Définition alternative de FratLarge: définissez cet ensemble sans utiliser une définition par extension ou compréhension */
  , Frere             /* (x,y) dans Frere ssi (x,y) dans x est un homme et est le frère d'une personne y. */
  , Frere_alt         /* Définition alternative de Frere: définissez cet ensemble sans utiliser une définition par extension ou compréhension */
  , Cousin            /* (x,y) dans Cousin ssi x est un cousin ou une cousine de y (x est l'enfant d'un frère ou soeur d'un parent de y) */
  , Cousin_alt        /* Définition alternative de Cousin: définissez cet ensemble sans utiliser une définition par extension ou compréhension */
  , Parent_2          /* (x, y) dans Parent_2 ssi y est un parent de x (donc comme Parent, mais avec l'ordre inversé) */
  , Ancetre           /* (x,y) dans Ancetre ssi x est un ancêtre de y */
  , Temp
PROPERTIES

/* Définition des constantes initiales */
/* Ceci n'est qu'un exemple, vos définitions devraient fonctionner pour tout ensemble */

  Homme={p0, p1}
& Femme=Personne-Homme
& Parent={
           (p0,p1)
          ,(p0,p2)
          ,(p1,p3)
          ,(p1,p4)
          ,(p2,p5)
          ,(p2,p6)
          ,(p7,p3)
          ,(p7,p4)
         }

& Temp = Personne

/* Définitions des constantes à compléter */
/* Remplacez Temp par vos définitions */

& Mere = Temp

& Mere_alt = Temp

& SansEnfant = Temp

& SansEnfant_alt = Temp

& Fraterie =  Temp

& FratLarge = Temp

& FratLarge_alt = Temp

& Frere = Temp

& Frere_alt = Temp

& Cousin =  Temp

& Cousin_alt = Temp

& Parent_2 = Temp

& Ancetre = Temp



END
	
