MACHINE devoir3

/* Voici un commentaire */

SETS

  Lieu = {i1,i2,i3,r1,r2,r3,r4,c1,c2,c3,c4}



CONSTANTS

/* Constantes initiales */

    Residence
  , Commerce
  , Intersection
  , Rue
	

/* Constantes à définir dans l'exercice
	Voir le devoir pour définitions 
 */

  , Edifice             /* commerces et résidences */
  , Puit         		/* lieux d'où on ne sort pas */
  , Source         		/* lieux où on n'entre pas */
  , Interne      		/* autres lieux */
  , Adjacence  			/* ensemble des adjacences (paires non-ordonnées) */
  , Isole          		/* lieux sans adjacence */
  , SemiIsole        	/* lieux adjacents à des intersections */
  , Chemin     			/* relation des paires de lieux entre lesquels il y a un chemin */
  , SansClient          /* commerces sans client */
  , Monopole			/* commerces desquels certains clients dépendent */
  , Temp				/* ensemble temporaire pour des contraintes techniques de ProB */
PROPERTIES

/* Définition des constantes initiales */
/* Ceci n'est qu'un exemple, vos définitions devraient fonctionner pour tout ensemble */
/* Vous devriez dessiner le graphe des rues */

  Residence={r1,r2,r3,r4}
& Commerce={c1,c2,c3,c4}
& Intersection={i1,i2,i3}
& Rue={
           (i1,c1),(r1,i1),(r1,r2),(r2,r1),(c2,i2),(i2,c3),(r4,i2),(r4,i3),(i3,c4)
       }

& Temp = Lieu	/* évite des erreurs de ProB */

/* Définitions des constantes à compléter */
/* Remplacez Temp par vos définitions */

& Edifice = Commerce \/ Residence

& Puit =  {x | x : Lieu & not (#(y).( y : Lieu & y /= x & (x, y) : Rue  ) ) }

& Source = {x | x : Lieu & not (#(y).( y : Lieu & y /= x & (y, x) : Rue  ) ) }

& Interne =  Lieu - Puit - Source

& Adjacence =  { T | T <: Lieu & card(T) = 2 & (!(x). ( x : T => ( !(y).(y : T & x /= y => (x, y) : Rue or (y, x) : Rue)  ) ))  }

& Isole = Edifice /\ Puit /\ Source

& SemiIsole = {x | x : Residence & !(y).( {x, y} : Adjacence => y : Intersection ) }

& Chemin = closure1(Rue)  /* autres formes de closure acceptables */

& SansClient = { x | x : Commerce & not (  #(y).( y : Residence & (y, x) : Chemin )  )  }

& Monopole = { x | x : Commerce & !(y).( y : Residence => (  !(z).( z : Commerce & (y, x) : Chemin & (y, z) : Chemin => x = z  ) )   ) }


END
	
