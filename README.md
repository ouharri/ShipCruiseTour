# ShipCruiseTour

ontexte du projet
Construire un site web full stack pour la société ShipCruiseTour qui va augmenter leurs notoriétés en marché, à cet effet, vous devez suivre les instructions suivantes. :

​

Critères :

​

L'authentification de l'application par deux rôles (Admin, Client).

Un Client / admin est caractérisé par (Nom , prénom , email , password , rôle )

Une croisiére est caractérisée par (le navire , prix [ le min ] , image , nombre de nuits , port de départ , iténairaire de la croisiére [ port1 , port 2 , port 3] , date de départ)

Un port est caractérisé par son nom et pays.

Un navire est caractérisé par ( nom , nombre de chambre , nombre de place ).

Une chambre est caractérisée par ( navire , numero de chambre , type de chambre [chambre solo , chambre 2 personnes , chambre familiale plus de 2 personnes et moins de 6], prix (selon le type de chambre ) , capacité selon le type de la chambre )

Une réservation est caractérisée par ( client , croisiére , ++date de réseravation++ , ++prix de réservation++ , chambre ).

Une réservation concerne une seule croisiére et un seul client.

Un client peut réserver plusieurs croisiéres.

Un client peut annuler une reservation à condition que la date soit supérieur à 2 jours avant la date de départ de la croisiére.

Un client peut visualier l'ensemble de ces réservations.

Un admin peut créer ou supprimer une croisiére.

Un admin peut créer ou supprimer un navire.

Un admin peut créer ou supprimer un port.

Une croisiére complète ne s'affiche pas dans la recherche.

La recherche par default affiche la totalités des croisiéres disponibles avec une date de départ valide ( supérieure à la date actuelle ).

Par default la selection de croisiere est pointé vers le prix min et le type de chambre adéquat au prix.

Le filtrage de la recherche d'une croisiére se fait par : Port , Navire , Mois

Le filtrage de aprés la selection d'une croisiére se fait par : type de chambre
