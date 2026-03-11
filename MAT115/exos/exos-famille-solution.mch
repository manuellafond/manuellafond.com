MACHINE exosfamille

/* Voici un commentaire */

SETS

  Personne={p0, p1, p2, p3, p4, p5, p6, p7}

CONSTANTS

/* Constantes initiales */

    Homme         /* Ensemble des personnes qui sont des hommes */
  , Femme         /* Ensemble des personnes qui sont des femmes */
  , Parent        /* (x,y) ∈ Parent ssi x est un parent de y */

/* Constantes à définir dans le devoir */

  , Mere              /* Ensemble des personnes qui sont des meres */
  , Mere_alt          /* Définition alternative de Mere */
  , SansEnfant        /* Ensemble des personnes qui n'ont pas d'enfants */
  , SansEnfant_alt    /* Définition alternative de SansEnfant */
  , Fraterie          /* (x,y) ∈ Fraterie ssi x et y ont les mêmes parents */
  , FratLarge         /* (x,y) ∈ FratLarge ssi x et y ont un parent en commun */
  , FratLarge_alt     /* Définition alternative de FratLarge */
  , Frere             /* (x,y) ∈ Frere ssi (x,y) ∈ FratLarge et x est un homme */
  , Frere_alt         /* Définition alternative de Frere */
  , Cousin            /* (x,y) ∈ Cousin ssi x est un cousin ou une cousine de y */
  , Cousin_alt        /* Définition alternative de Cousin */
  , Parent_2          /* comme Parent, mais avec permutation des enfants de p1 et p2 */
  , Ancetre           /* (x,y) ∈ Ancetre ssi x est un ancêtre de y */
  

PROPERTIES

/* Définition des constantes initiales */

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

/* Définitions des constantes à compléter */

& Mere = { x | x : Femme & #(y).((x,y) ∈ Parent)}

& Mere_alt = dom(Parent) /\ Femme

& SansEnfant =
    { x |
          x : Personne
        & not
            (
            #(y).
              (
              (x,y) ∈ Parent
              )
            )
    }

& SansEnfant_alt = Personne - dom(Parent)

& Fraterie =  { x,y |
                      x /= y
                    & #(z1,z2).
                        (
                          z1 /= z2
                        & (z1,x) : Parent
                        & (z1,y) : Parent
                        & (z2,x) : Parent
                        & (z2,y) : Parent
                        )
             }
& FratLarge = { x,y |
                      x /= y
                    & #(z).
                        (
                          (z,x) : Parent
                        & (z,y) : Parent
                        )
             }
& FratLarge_alt = (Parent~ ; Parent) - id(Personne)

& Frere = { x,y |
                   (x,y) ∈ FratLarge
                &  x : Homme
          }

& Frere_alt = Homme <| FratLarge_alt

& Cousin =  { x,y |
                  #(z2,z3).
                    (
                      (z2,z3) : FratLarge
                    & (z2,x) : Parent
                    & (z3,y) : Parent
                    )
    }

& Cousin_alt = (Parent~ ; FratLarge_alt ; Parent)



& Parent_2 = {x, y | (y, x) : Parent}

& Ancetre = closure1(Parent)


END
	